<?php

class DefaultController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	/**
	 * contact page
	 */
	public function actionContact()
	{
		$this->render('contact');
	}
	
	/**
	 * join page
	 */
	public function actionJoin()
	{
	    $this->bodyId = 'page-join';
	    
	    //get name as flag
	    $request = Yii::app()->request;
	    $name = $request->getPost('name', false);
	    
	    if ($name !== false) {
	        
	        $fileCheckPassed = true;
	        $errorMessage = array();
	        $maxFileSize = Yii::app()->params['uploadMaxSize']+1;//2M
	        $fileCheckId = array('id_photo'=>0, 'user_photo'=>0, 'edu_photo'=>0);

	        //check file exist + size
	        foreach ($fileCheckId as $oneFileId => $v) {
	            if (isset($_FILES[$oneFileId])) {
	                if ($_FILES[$oneFileId]['size'] > $maxFileSize){
	                    $fileCheckPassed = false;
	                    $errorMessage[$oneFileId] = '最大2M';
	                }
	            }else{
	                $fileCheckPassed = false;
	            }
	        }
	        
	        //save db, move file
	        if ($fileCheckPassed) {
	            
	            $volunteer = new VolunteerW();
	            $volunteer->attributes = $_POST; //massive attribute
	            //move
	            foreach ($fileCheckId as $oneFileId => $v) {
	                $volunteer->{$oneFileId} = EEH::moveUploadFile($_FILES[$oneFileId], Yii::app()->params['uploadPathImage']);
// 	                $fileCheckId[$oneFileId] = EEH::moveUploadFile($_FILES[$oneFileId], Yii::app()->params['uploadPathImage']);
	            }
	            
	            if (!$volunteer->save()){
                    //display errors when save fail.
//     	            var_dump($volunteer->errors);
    	            
	                $obj = array();
	                $obj['extra']['code'] = '400';
	                foreach ($volunteer->errors as $key =>$value) {
    	                $obj['extra']['errors'][$key] = $value;
	                }
    	            
	                echo json_encode($obj);
    	            
	            }else{
	                $obj = array();
	                $obj['extra']['desc'] = '报名成功。';
	                $obj['extra']['code'] = '200';
	                
	                echo json_encode($obj);

	            }
	            
	        }else{
	            
	            //file validate fail, every fail b4 db connection.
	            $obj = array();
	            $obj['extra']['code'] = '400';
	            $obj['extra']['errors'] = $errorMessage;
	             
	            echo json_encode($obj);
	           
            }
            
            exit;
	    }
	    
		$this->render('join');
	}
	
	/**
	 * progress page
	 */
	public function actionProgress()
	{
	    $volunteers = VolunteerW::model()->findAll();
	    
	    //format volunteer before use.
	    foreach ($volunteers as $oneV) {
	        if ($oneV->verify_status == 1) {
	            $oneV->verifyStatusText = '未审核';
	            $oneV->verifyStatusMessage = '请耐心等待管理员进行审核';
	        }
	        if ($oneV->verify_status == 2) {
	            $oneV->verifyStatusText = '已通过';
	            $oneV->verifyStatusMessage = '您已经通过审核，请耐心等待，会有专人联系您';
	        }
	        if ($oneV->verify_status == 3) {
	            $oneV->verifyStatusText = '未通过';
	            $oneV->verifyStatusMessage = '抱歉，您的申请没有通过我们的审核';
	        }
	    }
	    
		$this->render('progress', array('volunteers'=>$volunteers));
	}
}
<?php

class DefaultController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
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
					if (in_array($oneFileId, array('user_photo', 'id_photo', 'edu_photo'))) {
						$volunteer->{$oneFileId} = EEH::moveUploadFile($_FILES[$oneFileId], Yii::app()->params['uploadPathImage'] . $oneFileId . '/');

						// 压缩图片
						$info = pathinfo($volunteer->{$oneFileId});
						$smallFile = Yii::app()->params['uploadPathImage'] . $oneFileId . '/' . $volunteer->{$oneFileId};
						$bigFile   = Yii::app()->params['uploadPathImage'] . $oneFileId . '/' . $info['filename'] . '_origin.' . $info['extension'];
						$image = Yii::app()->image->load($smallFile);
						$image->save($bigFile); // 保存原文件
						$image->resize(Yii::app()->params['uploadMaxWidth'], Yii::app()->params['uploadMaxHeight'])->quality(Yii::app()->params['uploadQuality']);
						$image->save($smallFile); // 保存压缩后文件
					}
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
	    
		$this->render('index');
	}
}
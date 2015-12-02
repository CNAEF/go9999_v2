<?php
class ImageController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			/*
			array( // 操作日志过滤器
                'application.components.ActionLog'
            ),
			 */
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('index','upload'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpload(){
	    $fileCheckPassed = true;
	    $maxFileSize = Yii::app()->params['uploadMaxSize']+1;//2M
	    $fileCheckId = array('upfile'=>0);
	    
	    $fileInfo = array();
	    $fileInfo['original'] = '';
	    $fileInfo['name'] = '';
	    $fileInfo['url'] = '';
	    $fileInfo['size'] = '';
	    $fileInfo['type'] = '';
	    $fileInfo['state'] = '';
	    
	    
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
        
        //move file
        if ($fileCheckPassed) {
            //move
            foreach ($fileCheckId as $oneFileId => $v) {
	            
	            $fileInfo['original'] = 'aa';
	            $fileInfo['type'] = EEH::uploadFileExt($_FILES[$oneFileId]['type']);
                $fileInfo['name'] = EEH::moveUploadFile($_FILES[$oneFileId], Yii::app()->params['uploadPathImage'].'news');
                $fileInfo['url'] = Yii::app()->baseUrl.'/uploads/'.$fileInfo['name'];
                $fileInfo['size'] = $_FILES[$oneFileId]['size'];
                $fileInfo['state'] = 'SUCCESS';
            }
             
        }
        
        echo CJSON::encode($fileInfo);

	}


	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        echo 'hello world.';
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}

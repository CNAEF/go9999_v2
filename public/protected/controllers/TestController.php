<?php

class TestController extends Controller
{
    public function actions()
    {
        return array(
        );
    }

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules()
    {
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionUpload()
    {
	    $filedata=$_FILES['Filedata'];
	    @move_uploaded_file($filedata['tmp_name'], Yii::app()->params['uploadPathImage']); // Not relative. Full path
    }
}

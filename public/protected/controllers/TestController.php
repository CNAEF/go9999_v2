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

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionUpload()
    {
        $filedata=$_FILES['Filedata'];
        move_uploaded_file($filedata['tmp_name'], Yii::app()->params['uploadPathImage'].$filedata['name']); // Not relative. Full path
        // todo: 压缩
        // todo: 插入相册图片数据

        /*
        $image = Yii::app()->image->load('images/test.jpg');
        $image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
        $image->save(); // or $image->save('images/small.jpg');

        Yii::import('application.extensions.image.Image');
        $image = new Image('images/test.jpg');
        $image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
        $image->render();
        */
    }
}

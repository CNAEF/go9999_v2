<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            //'page'=>array(
            //    'class'=>'CViewAction',
            //),
        );
    }

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            /*
            array(
                'application.components.ActionLog'
            ),

            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            */
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        /*
        return array(
            array('allow',
                'actions'=>array('index'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
        */
    }
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $this->render('index');
        //Yii::app()->request->redirect('/w/');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->renderPartial('error', $error);
        }
    }
}
<?php
class OptionController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*
		$model=new Option('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Option']))
			$model->attributes=$_GET['Option'];
		*/
		$model = new OptionForm;

		if(isset($_POST['OptionForm']))
		{
			//$model->attributes=$_POST['OptionForm'];
			if($model->save($_POST['OptionForm'])) {
				Yii::app()->user->setFlash('success','更新成功');
				$this->redirect(array('index'));
			}
		}
		//var_dump($model->options);
		$this->render('index',array(
			'model'=>$model,
		));
	}
}

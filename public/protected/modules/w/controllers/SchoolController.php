<?php

class SchoolController extends WBasedController
{
	public function actionIndex()
	{
		$this->bodyId = 'page-school';
		if(Yii::app()->request->isPostRequest) {
			$obj = array();

			//图片不存在
			if (!isset($_FILES['photo'])) {
				$obj['extra']['code'] = '400';
				exit(json_encode($obj));
			}
			//图片超过 2M
			$maxFileSize = Yii::app()->params['uploadMaxSize'] + 1;
			if ($_FILES['photo']['size'] > $maxFileSize) {
				$obj['extra']['code'] = '400';
				$obj['extra']['errors'] = ['photo' => '最大2M'];
				exit(json_encode($obj));
			}
            $_POST['project'] = json_encode($_POST['project']);

			$school = new School();
			$school->attributes = $_POST;

			if (!$school->save()) {
				$obj['extra']['code'] = '400';
				foreach ($school->errors as $key => $value) {
					$obj['extra']['errors'][$key] = $value;
				}
			} else {
				$obj['extra']['desc'] = '报名成功。';
				$obj['extra']['code'] = '200';
			}
			exit(json_encode($obj));
		}
		$this->render('index');
	}
}

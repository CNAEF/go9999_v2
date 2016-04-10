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

			if (isset($_POST['project']))
            	$_POST['project'] = json_encode($_POST['project']);

			$school = new School();
			$school->attributes = $_POST;

			$school->photo = EEH::moveUploadFile($_FILES['photo'], Yii::app()->params['uploadPathImage'] . 'school_photo/');

			// 压缩图片
			$info = pathinfo($school->photo);
			$smallFile = Yii::app()->params['uploadPathImage'] . 'school_photo/' . $school->photo;
			$bigFile   = Yii::app()->params['uploadPathImage'] . 'school_photo/' . $info['filename'] . '_origin.' . $info['extension'];
			$image = Yii::app()->image->load($smallFile);
			$image->save($bigFile); // 保存原文件
			$image->resize(Yii::app()->params['uploadMaxWidth'], Yii::app()->params['uploadMaxHeight'])->quality(Yii::app()->params['uploadQuality']);
			$image->save($smallFile); // 保存压缩后文件

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

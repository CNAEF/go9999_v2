<?php

class SchoolController extends WBasedController
{
	public function actionIndex()
	{
		if(Yii::app()->request->isPostRequest) {
			$school = new School();
			$school->attributes = $_POST;
			$school->photo=CUploadedFile::getInstance($school, 'photo');
			if (!$school->save()) {

				// 压缩图片
				//$info = pathinfo($volunteer->{$oneFileId});
				//$smallFile = Yii::app()->params['uploadPathImage'] . $oneFileId . '/' . $volunteer->{$oneFileId};
				//$bigFile   = Yii::app()->params['uploadPathImage'] . $oneFileId . '/' . $info['filename'] . '_origin.' . $info['extension'];

				$school->photo->saveAs(Yii::app()->params['uploadPathImage'] . 'school/' . $school->photo);

				$obj = array();
				$obj['extra']['code'] = '400';
				foreach ($school->errors as $key => $value) {
					$obj['extra']['errors'][$key] = $value;
				}
				echo json_encode($obj);
			} else {
				$obj = array();
				$obj['extra']['desc'] = '报名成功。';
				$obj['extra']['code'] = '200';
				echo json_encode($obj);}
		}
		$this->render('index');
	}
}
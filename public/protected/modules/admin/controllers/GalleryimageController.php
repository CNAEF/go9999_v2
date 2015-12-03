<?php
class GalleryimageController extends Controller
{
	public $layout='/layouts/main';

	public function filters()
	{
		return array(
			'accessControl',
			//'postOnly + delete',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('index','create','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
        //session_id($_GET['PHPSESSID']);
        $id = intval($_GET['id']);
        if (!$id) {
            exit('error 1');
        }
        $dir = Yii::app()->params['uploadPathImage'] . 'gallery/' . $id;
        $upload = CUploadedFile::getInstanceByName('Filedata'); 
        if ($upload->getSize()) {
            $model = new GalleryImage;
            $model->gallery_id = $id;
            $model->save();
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $upload->saveAs($dir . '/' . $model->id . '.' . $upload->getExtensionName());
            // todo: 压缩文件
            $model->file = $id . '/' . $model->id . '.' . $upload->getExtensionName();
            $model->save();
            echo json_encode([
                    'id'   => $model->id,
                    'file' => $model->file
            ]);
        } else {
            exit('error 2');
        }
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

	public function actionDelete($id)
	{
		$mode = $this->loadModel($id)->delete();
        echo json_encode([
            'id' => $id
        ]);
	}

	public function actionIndex()
	{
        $gallery_id = $_POST['gallery_id'];
        $models = GalleryImage::model()->findAll(array(
            'condition' => 'gallery_id=:gallery_id',
            'params'    => array(':gallery_id' => $gallery_id),
            'order'     => 'id asc'
        ));
        $data = [];
        if ($models) {
            foreach($models as $k => $v) {
                $data[] = [
                    'id'   => $v->id,
                    'file' => $v->file,
                ];
            }
        }
        echo json_encode($data);
	}

	public function loadModel($id)
	{
		$model=GalleryImage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}

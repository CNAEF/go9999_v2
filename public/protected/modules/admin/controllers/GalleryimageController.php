<?php
class GalleryimageController extends Controller
{
	public $layout='/layouts/main';

	public function filters()
	{
		return array(
			'accessControl'
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('index','create','delete','title'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    public function actionTitle()
    {
        $id = intval($_GET['id']);
        $title = $_GET['title'];
        if (!$id) {
            exit('error 1');
        }
        $image = $this->loadModel($id);
        $image->title = $title;
        if($image->save()) {
            // success
        } else {
            // failed
        }
    }

    // upload and create
	public function actionCreate()
	{
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

            $bigFile   = $dir . '/' . $model->id . '_origin.' . $upload->getExtensionName();
            $smallFile = $dir . '/' . $model->id . '.' . $upload->getExtensionName();

            $upload->saveAs($bigFile);

            // 压缩文件
            $image = Yii::app()->image->load($bigFile);
            $image->resize(Yii::app()->params['uploadMaxWidth'], Yii::app()->params['uploadMaxHeight'])->quality(Yii::app()->params['uploadQuality']);
            $image->save($smallFile);

            $model->file = $id . '/' . $model->id . '.' . $upload->getExtensionName();
            $model->save();
            echo json_encode([
                    'id'   => $model->id,
                    'file' => $model->file
            ]);
        } else {
            exit('error 2');
        }
	}

    // ajax delete
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
        echo json_encode([
            'id' => $id
        ]);
	}

    // ajax get image list
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
                    'title' => $v->title ? $v->title : '',
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

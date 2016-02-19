<?php

class GalleryController extends WBasedController
{
	public function actionIndex()
	{
	    //load last 20 gallery
	    $criteria = new CDbCriteria();
	    $criteria->limit = 20;
	    $criteria->order = 't.id DESC';
	    $criteria->with = 'admin';
	    $gallery  = Gallery::model()->findAll($criteria);
		$this->render('index', array('gallery'=>$gallery));
	}
    /**
     * Index Page, for now just render all static content.
     */
	public function actionView($id)
	{
	    $gallery = Gallery::model()->with('galleryImages')->findByPk($id);
	    if (empty($gallery)) {
	        $gallery = new Gallery();
	    }
	    
		$this->render('view', array('gallery'=>$gallery));
	}
}
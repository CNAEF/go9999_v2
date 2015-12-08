<?php

class DefaultController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
	{
	    //TODO add cache logic later.
	    
	    //load last 5 news
	    $criteria = new CDbCriteria();
	    $criteria->limit = 5;
	    $criteria->order = 'n_id DESC';
	    $news = News::model()->findAll($criteria);
	    
	    //load last 20 suggestion images
	    $criteria = new CDbCriteria();
	    $criteria->limit = 20;
	    $criteria->order = 'id DESC';
	    $criteria->condition = 'is_recommend = 1';
	    $images = GalleryImage::model()->findAll($criteria);
	    
	    
		$this->render('index', array('news'=>$news, 'images'=>$images));
	}
}
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
	    
	    //load last 9 suggestion images
	    $criteria = new CDbCriteria();
	    $criteria->limit = 9;
	    $criteria->order = 'id DESC';
	    $criteria->condition = 'is_recommend = 1';
	    $images = GalleryImage::model()->findAll($criteria);
	    
	    
		$this->render('index', array(
			'news'    => $news, // 新版新闻
			'posts'   => BlogPosts::post(),   // 抓取日记
			'notices' => BlogPosts::notice(), // 抓取公告
			'images'  => $images
		));
	}
}
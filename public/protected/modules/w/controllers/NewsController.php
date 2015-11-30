<?php

class NewsController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionView($id)
	{
	    $news = News::model()->findByPk($id);
	    $news->readOnce();
	    
		$this->render('view', array('news'=>$news));
	}
}
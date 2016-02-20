<?php

class AboutController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
	{
		$this->render('index');
	}
}
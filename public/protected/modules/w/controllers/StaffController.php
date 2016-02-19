<?php

class StaffController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
	{
		$departs  = Department::model()->with('staff')->findAllByAttributes(array('d_isShown'=>1));
		$this->render('staff', array('departs'=>$departs));
	}
}
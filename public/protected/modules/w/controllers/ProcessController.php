<?php

class ProcessController extends WBasedController
{
    /**
     * Index Page, for now just render all static content.
     */
	public function actionIndex()
	{
		$volunteers = VolunteerW::model()->findAll(array(
			'condition' => 'time>:time',
			'params' => array(':time' => date('Y-m-d H:i:s', time()-(86400*180))),
			'order' => 'id desc'
		));
	    
	    //format volunteer before use.
	    foreach ($volunteers as $oneV) {
	        if ($oneV->verify_status == 1) {
	            $oneV->verifyStatusText = '未审核';
	            $oneV->verifyStatusMessage = '请耐心等待管理员进行审核';
	        }
	        if ($oneV->verify_status == 2) {
	            $oneV->verifyStatusText = '已通过';
	            $oneV->verifyStatusMessage = '您已经通过审核，请耐心等待，会有专人联系您';
	        }
	        if ($oneV->verify_status == 3) {
	            $oneV->verifyStatusText = '未通过';
	            $oneV->verifyStatusMessage = '抱歉，您的申请没有通过我们的审核';
				if ($oneV->reason) {
					$oneV->verifyStatusMessage .= '，原因：' . $oneV->reason;
				}
	        }
	    }
	    
		$this->render('index', array('volunteers'=>$volunteers));
	}
}
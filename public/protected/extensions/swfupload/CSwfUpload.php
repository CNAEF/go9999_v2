<?php
class CSwfUpload extends CWidget
{
	public $jsHandlerUrl;
	public $postParams=array();
	public $config=array();
	
    public function run()
    {
		$assets = dirname(__FILE__).'/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
		Yii::app()->clientScript->registerScriptFile($baseUrl . '/swfupload.js', CClientScript::POS_HEAD);
		if(isset($this->jsHandlerUrl))
		{
			Yii::app()->clientScript->registerScriptFile($this->jsHandlerUrl);	
			unset($this->jsHandlerUrl);
		}
		$postParams = array('PHPSESSID'=>session_id());
		if(isset($this->postParams))
		{
				$postParams = array_merge($postParams, $this->postParams);
		}
		$config = array('post_params'=> $postParams, 'flash_url'=>$baseUrl. '/swfupload.swf');
		$config = array_merge($config, $this->config);
		$config = CJavaScript::encode($config);
		Yii::app()->getClientScript()->registerScript(__CLASS__, "
		var swfu;
			swfu = new SWFUpload($config);
		");
    } 
       
}
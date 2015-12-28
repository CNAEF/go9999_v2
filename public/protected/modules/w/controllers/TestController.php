<?php

class TestController extends WBasedController
{
	public function actionIndex()
	{
		/*
		$content = file_get_contents('http://blog.go9999.com/feed/');
		// <title></title> <link></link>
		preg_match_all('/<title>([^<]*)<\/title>[^<]*<link>([^<]*)<\/link>/i', $content, $out);
		//print_r($out);
		
		$blogPosts = array();
		foreach($out[1] as $key => $value) {
			$blogPost[] = array(
				'title' => $value,
				'link'  => $out[1][$key]
			);
		}
		echo "<pre>";
		print_r($blogPost);
		*/
		echo "<pre>";
		print_r(BlogPosts::get());
	}
}

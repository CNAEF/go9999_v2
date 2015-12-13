<?php
class BlogPosts {
    public static function get(){
        $cacheKey = 'blog_posts';
        $blogPost=Yii::app()->cache->get($cacheKey);
        if($blogPost===false)
        {
            $content = file_get_contents('http://blog.go9999.com/feed/');
            preg_match_all('/<title>([^<]*)<\/title>[^<]*<link>([^<]*)<\/link>/i', $content, $out);
            $blogPosts = array();
            foreach($out[1] as $key => $value) {
                $blogPost[] = array(
                    'title' => $value,
                    'link'  => $out[1][$key]
                );
            }
            Yii::app()->cache->set($cacheKey, $blogPost, 3600 * 4);
        }

        return $blogPost;
    }
}
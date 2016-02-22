<?php
class BlogPosts {
    public static function get($url) {
        // 创建一个cURL资源
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // 抓取URL并把它传递给浏览器
        $result = curl_exec($ch);

        //var_dump(curl_getinfo($ch));
        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);

        return $result;
    }

    public static function friendly_date($str) {
        $time = strtotime($str);
        if (time() - $time > 86400) {
            return intval((time() - $time)/86400) . '天前';
        } else {
            if (time() - $time > 3600) {
                return intval((time() - $time)/3600) . '小时前';
            } else {
                if (time() - $time > 600) {
                    return intval((time() - $time)/60) . '分钟前';
                } else {
                    return '刚刚';
                }
            }
        }
    }

    public static function post(){
        $cacheKey       = 'blog_posts';
        $cacheUpdatekey = 'blog_posts_updated';

        $cacheUpdate = Yii::app()->cache->get($cacheUpdatekey);
        if ($cacheUpdate === false) {
            $content = self::get('http://blog.go9999.com/feed');
            $content = str_replace(array("<![CDATA[", "]]>"), "", $content);
            preg_match_all('/<title>([^<]*)<\/title>[^<]*<link>([^<]*)<\/link>[^<]*<comments>([^<]*)<\/comments>[^<]*<pubDate>([^<]*)<\/pubDate>[^<]*<dc[^<]*>([^<]*)<\/dc[^<]*>[^<]*<category>([^<]*)<\/category>/i', $content, $out);
            preg_match_all('/<guid[^>]*>([^<]*)<\/guid>[^<]*<description>([^<]*)<\/description>/i', $content, $out2);

            if ($out[1]) {
                foreach($out[1] as $key => $value) {
                    //echo trim($out[6][$key]);
                    if (trim($out[6][$key]) != '联盟公告')
                        $blogPost[] = array(
                            'title' => trim($value),
                            'link'  => trim($out[2][$key]),
                            'comments'  => trim($out[3][$key]),
                            'pubDate'  => trim($out[4][$key]),
                            //'friendlyDate'  => self::friendly_date(trim($out[4][$key])),
                            'creator'  => trim($out[5][$key]),
                            'category'  => trim($out[6][$key]),
                            'guid'         => trim($out2[1][$key]),
                            'description'  => trim(str_replace(array("[&#8230;]", "\n", " "), "", $out2[2][$key]))
                        );
                }
                Yii::app()->cache->set($cacheKey, $blogPost, 0);
                Yii::app()->cache->set($cacheUpdatekey, time(), 3600 * 6);
            }
        } else {
            $blogPost=Yii::app()->cache->get($cacheKey);
        }
        foreach ($blogPost as $key => $value) {
            $blogPost[$key]['friendlyDate'] = self::friendly_date($value['pubDate']);
        }
        return $blogPost;
    }

    public static function notice(){
        $cacheKey       = 'blog_notices';
        $cacheUpdatekey = 'blog_notices_updated';

        $cacheUpdate = Yii::app()->cache->get($cacheUpdatekey);
        if ($cacheUpdate === false) {
            $content = self::get('http://blog.go9999.com/topics/%E8%81%94%E7%9B%9F%E5%85%AC%E5%91%8A/feed');
            $content = str_replace(array("<![CDATA[", "]]>"), "", $content);
            preg_match_all('/<title>([^<]*)<\/title>[^<]*<link>([^<]*)<\/link>[^<]*<comments>([^<]*)<\/comments>[^<]*<pubDate>([^<]*)<\/pubDate>[^<]*<dc[^<]*>([^<]*)<\/dc[^<]*>[^<]*<category>([^<]*)<\/category>/i', $content, $out);
            preg_match_all('/<guid[^>]*>([^<]*)<\/guid>[^<]*<description>([^<]*)<\/description>/i', $content, $out2);

            if ($out[1]) {
                foreach($out[1] as $key => $value) {
                    $blogPost[] = array(
                        'title' => trim($value),
                        'link'  => trim($out[2][$key]),
                        'comments'  => trim($out[3][$key]),
                        'pubDate'  => trim($out[4][$key]),
                        //'friendlyDate'  => self::friendly_date(trim($out[4][$key])),
                        'creator'  => trim($out[5][$key]),
                        'category'  => trim($out[6][$key]),
                        'guid'         => trim($out2[1][$key]),
                        'description'  => trim(str_replace(array("[&#8230;]", "\n", " "), "", $out2[2][$key]))
                    );
                }
                Yii::app()->cache->set($cacheKey, $blogPost, 0);
                Yii::app()->cache->set($cacheUpdatekey, time(), 3600 * 4);
            }
        } else {
            $blogPost=Yii::app()->cache->get($cacheKey);
        }
        foreach ($blogPost as $key => $value) {
            $blogPost[$key]['friendlyDate'] = self::friendly_date($value['pubDate']);
        }
        return $blogPost;
    }
}
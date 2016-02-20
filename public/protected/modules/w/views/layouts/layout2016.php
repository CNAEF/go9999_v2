<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中国·支教联盟</title>
    <!--
    至看到这段文字的你：
    Hi~
    中国支教联盟网站急缺建设志愿者&维护志愿者，如果你对维护联盟网站感兴趣，即使因为现实的原因你不能投身偏远地区，
    但是你的行为一样可以帮助到所有的有志于支教的人们，如果你心动了，不妨用页面中的联系方式联系我们。
    当然，如果你发现了网站的缺陷或者漏洞，也不妨告知我们。
                                                                    @soulteary
                                                                    2013/07/20
    -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/go9999v0/css/core.min.css">
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/css/style.css" rel="stylesheet">
    <!--[if gt IE 6]>
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/css/style_ie.css" rel="stylesheet">
    <![endif]-->
  </head>
  <body>
    <div class="f_header">
      <div class="container">
        <div class="row m_nav">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <h1 class="logo"><a href="/"><img src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/img/logo.png" alt="logo" title="logo" class="img-responsive"></a></h1>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <ul class="nav nav-pills">
              <li><a href="/">首页</a></li>
              <!--
              <li><a href="/gallery">相册</a></li>
              -->
              <li><a href="/about">关于</a></li>
              <li><a href="/staff">人员</a></li>
              <li><a href="/contact">留言</a></li>
              <li><a target="_blank" href="http://bbs.go9999.com/">论坛</a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
            <div class="nav_btn">
                <a href="/join" class="btn sign_volunteers">志愿者报名</a>
                <!--
                <a href="progress" class="btn sign_volunteers">报名结果查询</a>
                -->
                <a href="/school" class="btn sign_school">学校报名</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php echo $content;?>
    
    <div class="f_footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>友情链接<small class="hidden-sm hidden-xs">Friendly link</small></h3>
            <ul>
              <li><a target="_blank" href="http://bbs.hfly.net/">庐阳教育论坛</a></li>
              <li><a target="_blank" href="http://bbs.cnbayue.com/">滴水公益论坛</a></li>
              <li><a target="_blank" href="http://www.bmf-sc.com/">四川仁爱医疗基金会</a></li>
              <li><a target="_blank" href="http://www.ew125.com/">成都抗癌协会</a></li>
              <li><a target="_blank" href="http://xzszhc.2008red.com/">进藏教师家园</a></li>
              <li><a target="_blank" href="http://www.ricedonate.com/">米公益</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>相关链接<small class="hidden-sm hidden-xs">Relevant</small></h3>
            <ul>
              <li><a target="_blank" href="http://bbs.go9999.com/">论坛</a></li>
              <li><a target="_blank" href="http://blog.go9999.com/">博客</a></li>
              <li><a target="_blank" href="http://e.weibo.com/go9999">微博</a></li>
              <li><a target="_blank" href="http://site.douban.com/118628/">豆瓣小站</a></li>
              <li><a target="_blank" href="http://www.douban.com/group/go9999/">豆瓣小组</a></li>
              <li><a target="_blank" href="http://zhan.renren.com/go9999">人人小站</a></li>
              <li><a target="_blank" href="http://page.renren.com/601714744">人人主页</a></li>
              <li><a target="_blank" href="http://tieba.baidu.com/f?kw=%D6%D0%B9%FA%D6%A7%BD%CC%C1%AA%C3%CB">百度贴吧</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>联系方式<small class="hidden-sm hidden-xs">Contact information</small></h3>
            <ul>
              <li><a href="mailto:admin@go9999.com">邮箱：admin@go9999.com</a></li>
              <li>QQ群：104151030、166393586</li>
              <li><a href="#">新浪微博：@中国支教联盟网站</a></li>
              <li><a href="#">新浪微博：@年小恩</a></li>
              <li>微信：CNAEF</li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="qr"><img src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/img/qr.jpg" alt="二维码" title="二维码" class="img-responsive"></div>
          </div>
        </div>
        <div class="version">
          <div class="copyright">
            <p>Copyright ©2005-<?php echo date('Y');?> go9999.com All Rights Reserved.</p>
          </div>
          <div class="icp">
            <p><a href="http://www.miibeian.gov.cn/">浙ICP备12032988号-1</a></p>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/respond.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/core.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/app.min.js"></script>
  </body>
</html>
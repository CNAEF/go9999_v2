
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>school</title>

    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/go9999v0/css/core.min.css?v=20150806">    
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/css/style.css" rel="stylesheet"><!--[if gt IE 6]>
    <link href="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/css/style_ie.css" rel="stylesheet"><![endif]-->
    <script src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/js/respond.js" type="text/javascript"></script>    
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
              <li><a href="<?php echo $this->createAbsoluteUrl('default/index');?>">首页</a></li>
              <li><a href="<?php echo $this->createAbsoluteUrl('gallery/index');?>">相册</a></li>
              <li><a href="<?php echo $this->createAbsoluteUrl('default/about');?>">关于</a></li>
              <li><a href="<?php echo $this->createAbsoluteUrl('default/staff');?>">人员</a></li>
              <li><a href="<?php echo $this->createAbsoluteUrl('default/contact');?>">留言</a></li>
              <li><a target="_blank" href="http://bbs.go9999.com/">论坛</a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
            <div class="nav_btn">
                <a href="<?php echo $this->createAbsoluteUrl('default/join');?>" class="btn sign_volunteers">志愿者报名</a>
                <a href="<?php echo $this->createAbsoluteUrl('default/progress');?>" class="btn sign_volunteers">报名结果查询</a>
                <a href="#" class="btn sign_school">学校报名</a>
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
            <h3>友情链接<small class="hidden-sm hidden-xs">friendly link</small></h3>
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
              <li>QQ群：1234567890</li>
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
            <p>Copyright ©2005-2015 Go9999.com All Rights Reserved.</p>
          </div>
          <div class="icp">
            <p><a href="#">浙ICP备12032988号-1</a></p>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/core.min.js?20150806"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/app.min.js?20150806"></script>
  </body>
</html>
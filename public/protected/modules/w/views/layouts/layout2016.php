<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中国·支教联盟</title>
    <!--

      贡献者名单:

        @huai707 https://github.com/huai707
        @airycanon https://github.com/airycanon
        @duandi https://github.com/duandi
        @boylee
        @m4ker https://github.com/m4ker
        @leoandshaw
        @soulteary https://github.com/soulteary

      我们期待你的加入, QQ群: 249822315

      感谢美团云提供服务器支持.

    -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/v2/css/core.min.css?v=20160626">
    <!-- 动态地图用到的资源 -->
    <!--
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css" />
    -->
  </head>
  <body>
    <div class="f_header">
      <div class="f_nav_box">
        <div class="container">
          <div class="row m_nav">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <h1 class="logo"><a href="/"><img src="<?php echo Yii::app()->baseUrl?>/assets/v2/img/logo.png" alt="logo" title="logo" class="img-responsive"></a></h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <ul class="nav nav-pills">
                <li><a href="/">首页</a></li>
                <!--
                <li><a href="/gallery">相册</a></li>
                <li><a href="/about">关于</a></li>
                <li><a href="/staff">人员</a></li>
                -->
                <li><a href="/about">简介</a></li>
                <li><a href="http://blog.go9999.com">博客</a></li>
                <li><a href="/contact/">留言</a></li>
                <li><a target="_blank" href="http://bbs.go9999.com/">论坛</a></li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
              <div class="nav_btn">
                <a class="btn btn-primary" href="/school">
                  学校登记
                </a>
                <div class="dropdown">
                  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    志愿者报名
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/join">志愿者报名</a></li>
                    <li><a href="/process">查看报名进度</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <?php echo $content;?>
    
    <div class="f_footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <h3>友情链接<small class="hidden-sm hidden-xs">Friendly link</small></h3>
            <ul>
              <li><a target="_blank" href="http://bbs.hfly.net/">庐阳教育论坛</a></li>
              <li><a target="_blank" href="http://bbs.cnbayue.com/">滴水公益论坛</a></li>
              <li><a target="_blank" href="http://www.bmf-sc.com/">四川仁爱医疗基金会</a></li>
              <li><a target="_blank" href="http://xzszhc.2008red.com/">进藏教师家园</a></li>
              <li><a target="_blank" href="http://www.ricedonate.com/">米公益</a></li>
              <li><a target="_blank" href="http://www.shininghouse.cn/">钻石世家慈善基金会</a></li>
              <li><a target="_blank" href="http://www.hhd-sz.com/">深圳华汇设计有限公司</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <h3>相关链接<small class="hidden-sm hidden-xs">Relevant</small></h3>
            <ul>
              <li><a target="_blank" href="http://bbs.go9999.com/">官方论坛</a></li>
              <li><a target="_blank" href="http://blog.go9999.com/">官方博客</a></li>
              <li><a target="_blank" href="http://e.weibo.com/go9999">官方微博</a></li>
              <li><a target="_blank" href="http://site.douban.com/118628/">豆瓣小站</a></li>
              <li><a target="_blank" href="http://www.douban.com/group/go9999/">豆瓣小组</a></li>
              <li><a target="_blank" href="http://tieba.baidu.com/f?kw=%D6%D0%B9%FA%D6%A7%BD%CC%C1%AA%C3%CB">百度贴吧</a></li>
              <li><a target="_blank" href="http://blog.go9999.com/join">加入我们</a></li>
              <li><a target="_blank" href="/admin">管理后台</a></li>
            </ul>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <h3>联系方式<small class="hidden-sm hidden-xs">Contact information</small></h3>
            <ul>
              <li><a href="mailto:admin@go9999.com">邮箱：admin@go9999.com</a></li>
              <li>QQ群：104151030、166393586、69515948</li>
              <li>深圳QQ群：340710619</li>
              <li><a href="http://weibo.com/go9999">新浪微博：@中国支教联盟网站</a></li>
              <li>微信：CNAEF2006、louise412（年小恩）</li>
              <li>电话：0755-26911012(周一至周五09:00—17:00)</li>
              <li>地址：广东省深圳市南山区侨香路4060号香年广场C座1102室</li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="qr"><img src="<?php echo Yii::app()->baseUrl?>/assets/v2/img/qr.jpg" alt="二维码" title="二维码" class="img-responsive"></div>
          </div>
        </div>
        <div class="version">
          <div class="copyright">
            <p>Copyright ©2005-<?php echo date('Y');?> go9999.com All Rights Reserved.</p>
            <p>
              <img src="https://img.alicdn.com/tps/TB15vyaLpXXXXXXXFXXXXXXXXXX-198-46.png" style="width: 100px;">
              <span style="vertical-align: middle;margin-left: 10px;">感谢阿里云赞助主机资源 </span>
            </p>
          </div>
          <div class="icp">
            <p><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030502000025"><img src="<?php echo Yii::app()->baseUrl?>/assets/img/icp.png" />粤公网安备 44030502000025号</a> <a href="http://www.miibeian.gov.cn/">浙ICP备12032988号-1</a></p>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/v2/js/core.min.js?v=20160626"></script>
    <!-- 动态地图用到的资源 -->
    <!--
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=3a7e67d2ba1f15395c2e6c400d857a70"></script>
    -->
    <!-- 动态地图用到的资源 -->
    <!--
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
    -->
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/v2/js/app.min.js?v=20160626"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/v2/js/html5.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/v2/js/respond.js"></script>
  </body>
</html>

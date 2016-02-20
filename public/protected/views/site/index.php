<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Index';
$this->breadcrumbs=array(
	'Index',
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo $this->pageTitle;?></title>
</head>
<body>
<h2>感谢你对我们的关注</h2>
<div class="Index">
    <p>你看到这个页面是因为我们将前端和后端的代码分别整理到了w和admin两个模块中, 如果你想在开发环境中访问前台和后台请访问下面的链接:</p>
    <p>前台 <a href="w/">/w/</a>, 代码在 protected/modules/w 目录下</p>
    <p>后台 <a href="admin/">/admin/</a>, 代码在 protected/modules/admin 目录下</p>
    <p>因为没有对路由进行过多的研究, 所以前台中的链接在开发环境下可能会是错误的, 在点击链接的时候请记得加入模块名.</p>
</div>
</body>
</html>
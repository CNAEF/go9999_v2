<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 用户登录';
$this->breadcrumbs=array(
	'Login',
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>用户登录 - <?php echo Yii::app()->name;?></title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="/assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/assets/css/ace.onpage-help.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red"><?php echo Yii::app()->name;?></span>
                            <!--
                            <span class="white" id="id-text2">Application</span>
                            -->
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; <?php echo Yii::app()->params['company'];?></h4>
                    </div>
                    <div class="space-6"></div>
                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        请输入您的身份信息
                                    </h4>
                                    <div class="space-6"></div>
                                        <?php $form=$this->beginWidget('CActiveForm', array(
                                            'id'=>'login-form',
                                            'enableClientValidation'=>true,
                                            'clientOptions'=>array(
                                                'validateOnSubmit'=>true,
                                            ),
                                        )); ?>
                                        <fieldset>
                                            <!--
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>
                                                Change a few things up and try submitting again.
                                                <br>
                                            </div>
                                            -->
                                            <?php echo $form->error($model,'username', array('class' => 'alert alert-danger')); ?>
                                            <?php echo $form->error($model,'password', array('class' => 'alert alert-danger')); ?>
                                            <?php echo $form->error($model,'rememberMe', array('class' => 'alert alert-danger')); ?>
                                            <label class="block clearfix">
												<span class="block input-icon input-icon-right">
                                                    <?php echo $form->textField($model,'username', array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '登陆邮箱'
                                                    )); ?>
													<i class="ace-icon fa fa-user"></i>
												</span>
                                            </label>
                                            <label class="block clearfix">
											    <span class="block input-icon input-icon-right">
                                                    <?php echo $form->passwordField($model,'password', array(
                                                        'class' => 'form-control',
                                                        'placeholder' => '登陆密码'
                                                    )); ?>
											    	<i class="ace-icon fa fa-lock"></i>
											    </span>
                                            </label>
                                            <div class="space"></div>
                                            <div class="clearfix">
                                                <label class="inline">
                                                    <?php echo $form->checkBox($model,'rememberMe', array('class'=>'ace')); ?>
                                                    <span class="lbl"> 保持登录</span>
                                                </label>
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">登录</span>
                                                </button>
                                            </div>
                                            <div class="space-4"></div>
                                        </fieldset>
                                        <?php $this->endWidget(); ?>
                                </div><!-- /.widget-main -->
                                <div class="toolbar clearfix">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                    <div class="align-center">
                        <br />
                        &nbsp;
                        <a id="btn-login-dark" href="#">Dark</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-blur" href="#">Blur</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-light" href="#">Light</a>
                        &nbsp; &nbsp; &nbsp;
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    /*
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });
    */

    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>
</body>
</html>

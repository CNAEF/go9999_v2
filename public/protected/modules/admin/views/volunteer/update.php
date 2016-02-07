<?php
$this->breadcrumbs=array(
    '志愿者'=>array('index'),
    '查看',
);
?>
<div class="page-header">
    <h1>查看志愿者<small><i class="ace-icon fa fa-angle-double-right"></i>#<?php echo $model->id; ?></small></h1>
</div>

<h2>基本资料</h2>
<table class="table table-bordered">
    <tr>
        <th>姓名</th>
        <td><?php echo $model->name;?></td>
        <th>性别</th>
        <td><?php echo $model->getSex();?></td>
    </tr>
    <tr>
        <th>生日</th>
        <td><?php echo $model->birthday;?></td>
        <th>年龄</th>
        <td><?php echo $model->_age;?></td>
    </tr>
    <tr>
        <th>婚姻</th>
        <td><?php echo $model->getMarried();?></td>
        <th>教育程度</th>
        <td><?php echo $model->getEduLevel();?></td>
    </tr>
    <tr>
        <th>现居住地</th>
        <td><?php echo $model->cur_province . ' ' . $model->cur_city;?></td>
        <th>职业</th>
        <td><?php echo $model->getProfession();?></td>
    </tr>
    <tr>
        <th>籍贯</th>
        <td><?php echo $model->hometown_province . ' ' . $model->hometown_city;?></td>
        <th>身份证号</th>
        <td><?php echo $model->id_num;?></td>
    </tr>
</table>

<h2>受教育经历</h2>
<table class="table table-bordered">
    <?php if ($model->_edu_high_level) { ?>
        <tr>
            <th>中学</th>
            <td><?php echo $model->_edu_high_level;?></td>
        </tr>
    <?php } ?>
    <tr>
        <th>大学</th>
        <td><?php echo $model->edu_university;?></td>
    </tr>
</table>

<h2>照片</h2>
<table class="table table-bordered">
    <tr>
        <th>身份证</th>
        <td>
            <?php if ($model->id_photo) { ?>
                <img src="/uploads/id_photo/<?php echo $model->id_photo;?>" />
            <?php } ?>
        </td>
    </tr>
    <tr>
        <th>学历</th>
        <td>
            <?php if ($model->edu_photo) { ?>
                <img src="/uploads/edu_photo/<?php echo $model->edu_photo;?>" />
            <?php } ?>
        </td>
    </tr>
    <tr>
        <th>生活</th>
        <td>
            <?php if ($model->user_photo) { ?>
                <img src="/uploads/user_photo/<?php echo $model->user_photo;?>" />
            <?php } ?>
        </td>
    </tr>
</table>

<h2>工作经历</h2>
<table class="table table-bordered">
    <tr>
        <th>工作经历</th>
        <td><?php echo $model->work_experience;?></td>
    </tr>
</table>

<h2>联系方式</h2>
<table class="table table-bordered">
    <?php if ($model->_user_post_addr) { ?>
        <tr>
            <th>邮政地址</th>
            <td><?php echo $model->_user_post_addr;?></td>
        </tr>
    <?php } ?>
    <tr>
        <th>邮政编码</th>
        <td><?php echo $model->post_code;?></td>
    </tr>
    <tr>
        <th>联系电话</th>
        <td><?php echo $model->phone;?></td>
    </tr>
    <tr>
        <th>电子邮箱</th>
        <td><?php echo $model->email;?></td>
    </tr>
    <tr>
        <th>QQ／微信</th>
        <td><?php echo $model->qq;?></td>
    </tr>
</table>

<?php if ($model->family_title) {?>
    <h2>家庭成员</h2>
    <table class="table table-bordered">
        <tr>
            <th>称谓</th>
            <td><?php echo $model->family_title;?></td>
            <th>姓名</th>
            <td><?php echo $model->family_name;?></td>
        </tr>
        <tr>
            <th>联系方式</th>
            <td colspan="3"><?php echo $model->family_contact;?></td>
        </tr>
        <tr>
            <th>工作单位</th>
            <td colspan="3"><?php echo $model->family_workplace;?></td>
        </tr>
    </table>
<?php } ?>

<?php if ($model->urgent_title) {?>
    <h2>紧急联络人</h2>
    <table class="table table-bordered">
        <tr>
            <th>称谓</th>
            <td><?php echo $model->urgent_title;?></td>
            <th>姓名</th>
            <td><?php echo $model->urgent_name;?></td>
        </tr>
        <tr>
            <th>联系方式</th>
            <td colspan="3"><?php echo $model->urgent_contact;?></td>
        </tr>
        <tr>
            <th>工作单位</th>
            <td colspan="3"><?php echo $model->urgent_workplace;?></td>
        </tr>
    </table>
<?php } ?>

<h2>个人特别技能及资历</h2>
<table class="table table-bordered">
    <tr>
        <td><?php echo $model->special;?></td>
    </tr>
</table>

<h2>其他资料</h2>
<table class="table table-bordered">
    <tr>
        <th>有否伤残病历</th>
        <td><?php echo $model->is_disability;?></td>
    </tr>
    <tr>
        <th>有否支教经验</th>
        <td><?php echo $model->is_experience;?></td>
    </tr>
    <tr>
        <th>预计支教期限</th>
        <td><?php echo $model->getPredictDeadline();?></td>
    </tr>
    <tr>
        <th>愿意开始支教的时间</th>
        <td><?php echo $model->getBeginDate();?></td>
    </tr>
    <tr>
        <th>何处得知本活动</th>
        <td><?php echo $model->info_from;?></td>
    </tr>
</table>

<h2>考察问题</h2>
<table class="table table-bordered">
    <?php if ($model->Q1) { ?>
        <tr>
            <th>1、请简述您为什么要支教？您对支教有哪些了解？希望通过支教收获什么？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->Q1);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->Q2) { ?>
        <tr>
            <th>2、请简述对您影响最大的一位老师是如何教学的？您认为作为一个老师应该具备哪些品质？又该如何去做一名合格的老师？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->Q2);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->Q3) { ?>
        <tr>
            <th>3、请简述您的家庭教育中有哪些值得学习的经验和不足，孩童时期对你影响最大的一件事是什么？为什么？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->Q3);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->Q4) { ?>
        <tr>
            <th>4、请简述未来五年内的人生规划？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->Q4);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q1) { ?>
        <tr>
            <th>1、您目前的工作或学习是否属在职？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q1);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q2) { ?>
        <tr>
            <th>2、简述您的经济来源与状况，并权衡是否可支付支教过程中的基本生活费、路费的同时还能保留适当的备用金。</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q2);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q3) { ?>
        <tr>
            <th>3、您何时有计划支教的想法？该想法是否与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q3);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q4) { ?>
        <tr>
            <th>4、请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q4);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q5) { ?>
        <tr>
            <th>5、简述您为什么要做支教？请列出您参与支教的价值及意义。</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q5);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q6) { ?>
        <tr>
            <th>6、您是否曾经（或者最近）加入过其他公益组织，做过什么志愿服务，请略述之。（包括公益组织名称、服务内容、自己的观点等。）您在志愿服务中获得了哪些难忘的经验？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q6);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q7) { ?>
        <tr>
            <th>7、您是否清楚支教所存在的风险，认为支教前应做哪些准备工作？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q7);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q8) { ?>
        <tr>
            <th>8、您是否愿意提供近三个月内的体检报告以便我们对您的健康状况进行简单的评估。</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q8);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q9) { ?>
        <tr>
            <th>9、对于参与该项志愿服务，您对自己有何期望或希望贡献什么？</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q9);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q10) { ?>
        <tr>
            <th>10、您对支教的期望</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q10);?></td>
        </tr>
    <?php } ?>
    <?php if ($model->_Q11) { ?>
        <tr>
            <th>11、其他意见</th>
        </tr>
        <tr>
            <td><?php echo nl2br($model->_Q11);?></td>
        </tr>
    <?php } ?>
</table>



<h2>审核信息</h2>
<table class="table table-bordered">
    <tr>
        <th>审核状态</th>
        <td><?php echo $model->getVerifyStatus();?></td>
    </tr>
    <tr>
        <th>审核人</th>
        <td><?php echo $model->admin->username;?></td>
    </tr>
    <tr>
        <th>审核时间</th>
        <td><?php echo $model->verify_time;?></td>
    </tr>
</table>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'volunteer-form',
    'enableAjaxValidation'=>false,
    'htmlOptions' => array('class' => 'form-horizontal')
)); ?>
<?php echo $form->hiddenField($model,'verify_admin_id',array('class' => 'col-xs-10', 'value' => Yii::app()->user->getId())); ?>
<?php echo $form->hiddenField($model,'verify_time',array('class' => 'col-xs-10', 'value' => date('Y-m-d H:i:s'))); ?>
<?php echo $form->hiddenField($model,'verify_status',array('class' => 'col-xs-10')); ?>
<!--
<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <?php echo $form->labelEx($model,'remark', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textArea($model,'remark',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <?php echo $form->labelEx($model,'reason', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textArea($model,'reason',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
    </div>
</div>
-->
<h2><?php echo $form->labelEx($model,'remark', array('class'=>'')); ?> <span style="font-size:10px;" class="red">仅管理员可见</span></h2>
<div class="row">
    <div class="col-xs-12">
        <?php echo $form->textArea($model,'remark',array('class' => 'col-xs-12')); ?>
    </div>
</div>


<h2><?php echo $form->labelEx($model,'reason', array('class'=>'')); ?> <span style="font-size:10px;" class="red">志愿者可见</span></h2>
<div class="row">
    <div class="col-xs-12">
        <?php echo $form->textArea($model,'reason',array('class' => 'col-xs-12')); ?>
    </div>
</div>



<div class="clearfix form-actions row">
    <div class="col-md-6">
        <button class="btn btn-success" type="button">
            <i class="ace-icon fa fa-check bigger-110"></i>
            审核通过
        </button>
    </div>
    <div class="col-md-6 text-right">
        <button class="btn btn-danger" type="button">
            <i class="ace-icon glyphicon glyphicon-remove bigger-110"></i>
            审核拒绝
        </button>
    </div>
</div>
<?php $this->endWidget(); ?>






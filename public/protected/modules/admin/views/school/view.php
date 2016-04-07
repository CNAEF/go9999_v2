<?php
$this->breadcrumbs=array(
	'学校'=>array('index'),
	'查看',
);
?>
<div class="page-header">
    <h1>
        查看学校        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->id; ?>        </small>
    </h1>
</div>
<h3>基本资料</h3>
<table class="table">
    <tr>
        <th width="20%">学校名称</th>
        <td width="30%"><?php echo $model->name;?></td>
        <th width="20%">所在地区</th>
        <td width="30%"><?php echo $model->getLocation();?></td>
    </tr>
    <tr>
        <th>学校类型</th>
        <td><?php echo $model->getType();?></td>
        <th>小学类型</th>
        <td><?php echo $model->getPrimarySchoolType();?></td>
    </tr>
    <tr>
        <th>学生人数</th>
        <td><?php echo $model->student_count;?></td>
        <th>教师人数</th>
        <td><?php echo $model->teacher_count;?></td>
    </tr>
    <tr>
        <th>年纪数量</th>
        <td><?php echo $model->grade_count;?></td>
        <th>班级数量</th>
        <td><?php echo $model->class_count;?></td>
    </tr>
    <tr>
        <th>学校简介</th>
        <td colspan="3"><?php echo $model->description;?></td>
    </tr>
    <tr>
        <th>学校照片</th>
        <td colspan="3">
            <?php if ($model->photo) { ?>
                <img src="/uploads/school_photo/<?php echo $model->photo;?>" />
            <?php } ?>
        </td>
    </tr>
    <tr>
        <th>是否有图书室</th>
        <td><?php echo $model->has_library ? '有' : '无';?></td>
        <th>是否有电脑</th>
        <td><?php echo $model->has_computer;?></td>
    </tr>
    <tr>
        <th>是否能上网</th>
        <td colspan="3"><?php echo $model->has_internet ? '有' : '无';?></td>
    </tr>
</table>


<h3>公益团队</h3>
<table class="table">
    <tr>
        <th width="20%">公益团队支持</th>
        <td width="30%"><?php echo $model->is_supported ? '有' : '无';?></td>
        <th width="20%">公益团队名称</th>
        <td width="30%"><?php echo $model->public_name;?></td>
    </tr>
    <tr>
        <th>已开展项目</th>
        <td colspan="3"><?php echo $model->getProject();?></td>
    </tr>
</table>

<h3>学校需求</h3>
<table class="table">
    <tr>
        <th width="20%">需要支教老师</th>
        <td width="30%"><?php echo $model->need_volunteer ? '是' : '否';?></td>
        <th width="20%">需要人数</th>
        <td width="30%"><?php echo $model->need_volunteer_count;?></td>
    </tr>
    <tr>
        <th>支教老师的工作范围</th>
        <td colspan="3"><?php echo $model->volunteer_work;?></td>
    </tr>
    <tr>
        <th>需要其他支持</th>
        <td colspan="3"><?php echo $model->need_other ? '是' : '否';?></td>
    </tr>
    <tr>
        <th>学校需求</th>
        <td colspan="3"><?php echo $model->need_other_content;?></td>
    </tr>
</table>

<h3>其他资料</h3>
<table class="table">
    <tr>
        <th width="20%">当地民俗习惯</th>
        <td width="80%" colspan="3"><?php echo $model->custom ? '是' : '否';?></td>
    </tr>
    <tr>
        <th>注意事项</th>
        <td colspan="3"><?php echo $model->attention;?></td>
    </tr>
    <tr>
        <th>交通指南</th>
        <td colspan="3"><?php echo $model->traffic;?></td>
    </tr>
    <tr>
        <th>学校可以提供哪些支持</th>
        <td colspan="3"><?php echo $model->offer_support;?></td>
    </tr>
    <tr>
        <th>志愿者需要带的物资明细</th>
        <td colspan="3"><?php echo $model->bring_supplies;?></td>
    </tr>
</table>

<h3>联系方式</h3>
<table class="table">
    <tr>
        <th width="20%">校长</th>
        <td width="30%"><?php echo $model->headmaster_name;?></td>
        <th width="20%">电话</th>
        <td width="30%"><?php echo $model->headmaster_telephone;?></td>
    </tr>
    <tr>
        <th>学校地址</th>
        <td><?php echo $model->school_address;?></td>
        <th>学校邮编</th>
        <td><?php echo $model->school_postcode;?></td>
    </tr>
</table>
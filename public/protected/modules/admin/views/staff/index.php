<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理Staff</h1>
    <a class="btn btn-success" href="<?php echo $this->createUrl('staff/create');?>">添加人员</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'staff-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 's_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_user_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_department_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_name',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_avatar',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_duty',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		/*
		array(
			'name' => 's_location',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_tel',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_desc',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_creationDate',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 's_creationUser_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		*/
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
		),
	),
)); ?>
    </div>
</div>

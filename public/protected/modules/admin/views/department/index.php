<?php
$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理Departments</h1>
    <a class="btn btn-success" href="<?php echo $this->createUrl('department/create');?>">创建部门</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'department-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'd_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'd_title',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'd_desc',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'd_isShown',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'd_creationDate',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'd_creationUser_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
		),
	),
)); ?>
    </div>
</div>

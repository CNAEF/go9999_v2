<?php
$this->breadcrumbs=array(
	'相册'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理相册</h1>
    <a class="btn btn-success" href="/admin/gallery/create">创建相册</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'title',
			'htmlOptions' => array(
				//'width' => 80,
			),
		),
		array(
			'name' => 'author',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'user_id',
			'htmlOptions' => array(
				'width' => 120,
			),
            'value' => '$data->admin->username'
		),
		array(
			'name' => 'viewed',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
            'template'=>'{update} {delete}',
		),
	),
)); ?>
    </div>
</div>

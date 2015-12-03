<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理新闻</h1>
    <a class="btn btn-success" href="<?php echo $this->createUrl('news/create');?>">创建新闻</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'n_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_title',
			'htmlOptions' => array(
				//'width' => 80,
			),
		),
		array(
			'name' => 'n_readCount',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_creationUser_id',
			'htmlOptions' => array(
				'width' => 80,
			),
            'value' => '$data->nCreationUser->username'
		),
		array(
			'name' => 'n_creationDate',
			'htmlOptions' => array(
				'width' => 150,
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

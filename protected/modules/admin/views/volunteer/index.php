<?php
$this->breadcrumbs=array(
	'志愿者'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理志愿者</h1>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'volunteer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'name',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'birthday',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'sex',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getSex()'
		),
		array(
			'name' => 'married',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getMarried()'
		),
		array(
			'name' => 'edu_level',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getEduLevel()'
		),
		array(
			'name' => 'profession',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getProfession()'
		),
		array(
			'name' => 'cur_province',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->cur_province . $data->cur_city'
		),
		array(
			'name' => 'email',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'qq',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'verify_status',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getVerifyStatus()'
		),
		array(
			'name' => 'time',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
			'template'=>'{verify} {delete}',
			'buttons'=>array
			(
				'verify' => array
				(
					'label'=>'审核',
					'url'=>'Yii::app()->createUrl("admin/volunteer/update", array("id"=>$data->id))',
				),
			),
		),
	),
)); ?>
    </div>
</div>

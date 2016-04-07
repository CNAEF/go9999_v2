<?php
$this->breadcrumbs=array(
	'学校'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理学校</h1>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'school-grid',
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
			'name' => 'name',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'location_province',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => '$data->getLocation()'
		),
		/*
array(
    'name' => 'location_city',
    'htmlOptions' => array(
        'width' => 80,
    ),
),

array(
'name' => 'type',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'primary_school_type',
'htmlOptions' => array(
    'width' => 80,
),
),

array(
'name' => 'student_count',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'teacher_count',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'grade_count',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'class_count',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'description',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'photo',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'has_library',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'has_computer',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'has_internet',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'is_supported',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'public_name',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'project',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'need_volunteer',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'need_volunteer_count',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'volunteer_work',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'need_other',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'need_other_content',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'custom',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'attention',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'traffic',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'offer_support',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'bring_supplies',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'headmaster_name',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'headmaster_telephone',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'school_address',
'htmlOptions' => array(
    'width' => 80,
),
),
array(
'name' => 'school_postcode',
'htmlOptions' => array(
    'width' => 80,
),
),
    */
		array(
			'name' => 'created_at',
			'htmlOptions' => array(
				'width' => 80,
			),
			'value' => 'date("Y-m-d", $data->created_at)'
		),

		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
			'template'=>'{view} {delete}',
            'headerHtmlOptions' => array('width'=>'80'),
		),
	),
)); ?>
    </div>
</div>

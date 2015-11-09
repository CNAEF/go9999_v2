<?php
$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理Volunteers</h1>
    <a class="btn btn-success" href="/admin/Volunteer/create">创建Volunteers</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'volunteer-grid',
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
			'name' => 'sex',
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
			'name' => '_age',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'married',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		/*
		array(
			'name' => 'hometown_province',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'hometown_city',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'id_num',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'id_photo',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'user_photo',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'edu_level',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'edu_photo',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_edu_high_level',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'edu_university',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'profession',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'special',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'work',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'work_experience',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'phone',
			'htmlOptions' => array(
				'width' => 80,
			),
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
			'name' => 'cur_province',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'cur_city',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'cur_addr',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_user_post_addr',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'post_code',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'family_title',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'family_name',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'family_contact',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'family_workplace',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'family_addr',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'urgent_title',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'urgent_name',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'urgent_contact',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'urgent_workplace',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'is_disability',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'is_experience',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'predict_deadline',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'begin_date',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'cur_status',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'cur_income',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'info_from',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'Q1',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'Q2',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'Q3',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'Q4',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q1',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q2',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q3',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q4',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q5',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q6',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q7',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q8',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q9',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q10',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => '_Q11',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'user_status',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'verify_admin_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'verify_time',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'verify_status',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'time',
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

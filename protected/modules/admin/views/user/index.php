<?php
$this->breadcrumbs=array(
	'用户'
);
?>
<div class="page-header">
    <h1>管理用户</h1>
    <a class="btn btn-success" href="/admin/user/create">创建用户</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('application.components.WxGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name' => 'id',
            'htmlOptions' => array(
                'width' => 80
            ),
        ),
        array(
            'name' => 'email',
            'htmlOptions' => array(
                //'width' => 80
            ),
        ),
        array(
            'name' => 'username',
            'htmlOptions' => array(
                //'width' => 80
            ),
        ),
        array(
            'name' => 'nickname',
            'htmlOptions' => array(
                //'width' => 80
            ),
        ),
        array(
            'name' => 'last_ip',
            'htmlOptions' => array(
                'width' => 150
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
<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'操作日志'=>array('index'),
	$model->id,
);
?>
<div class="page-header">
    <h1>
        查看日志
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->iLogID; ?>
        </small>
    </h1>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'uri',
		//'sData',
        array(
            'name'=>'data',
            'type' => 'raw',
            'value'=>"<pre>".var_export(json_decode($model->data, TRUE), TRUE)."</pre>",
        ),
		'ip',
        array(
            'name'=>'created_at',
            'value'=>date("Y-m-d H:i:s", $model->created_at),
        ),
	),
)); ?>

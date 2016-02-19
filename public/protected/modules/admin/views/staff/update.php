<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	//$model->s_id=>array('update','id'=>$model->s_id),
	'编辑',
);
?>
<div class="page-header">
    <h1>
        编辑Staff        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->s_id; ?>        </small>
    </h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
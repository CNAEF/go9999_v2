<?php
$this->breadcrumbs=array(
	'Departments'=>array('index'),
	//$model->d_id=>array('update','id'=>$model->d_id),
	'编辑',
);
?>
<div class="page-header">
    <h1>
        编辑Department        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->d_id; ?>        </small>
    </h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
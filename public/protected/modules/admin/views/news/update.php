<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	//$model->n_id=>array('update','id'=>$model->n_id),
	'编辑',
);
?>
<div class="page-header">
    <h1>
        编辑News        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->n_id; ?>        </small>
    </h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
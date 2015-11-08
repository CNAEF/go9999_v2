<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	'新增',
);
?>

<div class="page-header">
    <h1>新增用户</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
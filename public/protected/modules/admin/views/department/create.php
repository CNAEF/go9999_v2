<?php
$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增Department</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
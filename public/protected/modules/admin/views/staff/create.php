<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增Staff</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
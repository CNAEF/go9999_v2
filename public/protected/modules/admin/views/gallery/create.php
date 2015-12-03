<?php
$this->breadcrumbs=array(
	'相册'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增相册</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
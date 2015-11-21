<?php
$this->breadcrumbs=array(
	'志愿者'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增志愿者</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
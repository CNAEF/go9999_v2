<?php
$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增School</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
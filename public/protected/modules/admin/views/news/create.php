<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增News</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
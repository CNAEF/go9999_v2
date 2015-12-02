<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>创建新闻</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
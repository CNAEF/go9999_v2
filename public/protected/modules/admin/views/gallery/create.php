<?php
$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增Gallery</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
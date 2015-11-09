<?php
$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	'新建',
);
?>
<div class="page-header">
    <h1>新增Volunteer</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
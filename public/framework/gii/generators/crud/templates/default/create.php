<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'新建',
);\n";
?>
?>
<div class="page-header">
    <h1>新增<?php echo $this->modelClass; ?></h1>
</div>
<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>

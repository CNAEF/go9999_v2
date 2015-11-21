<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	//\$model->{$nameColumn}=>array('update','id'=>\$model->{$this->tableSchema->primaryKey}),
	'编辑',
);\n";
?>
?>
<div class="page-header">
    <h1>
        编辑<?php echo $this->modelClass;?>
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo "<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?>
        </small>
    </h1>
</div>
<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
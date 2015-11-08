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
	'管理',
);\n";
?>
?>
<div class="page-header">
    <h1>管理<?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>
    <a class="btn btn-success" href="/<?php echo $this->modelClass; ?>/create">创建<?php echo $this->pluralize($this->class2name($this->modelClass)); ?></a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php echo "<?php"; ?> $this->widget('application.components.WxGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	echo "\t\tarray(\n";
	echo "\t\t\t'name' => '".$column->name."',\n";
    echo "\t\t\t'htmlOptions' => array(\n";
    echo "\t\t\t\t'width' => 80,\n";
    echo "\t\t\t),\n";
	echo "\t\t),\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
		),
	),
)); ?>
    </div>
</div>

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class' => 'form-horizontal')
)); ?>\n"; ?>
<div class="row">
    <div class="col-xs-12">
	<?php echo "<?php echo \$form->errorSummary(\$model,'<div class=\"alert alert-danger\">','</div>'); ?>\n"; ?>
<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
        <div class="form-group">
            <?php echo "<?php echo \$form->labelEx(\$model, '{$column->name}', array('class'=>'col-sm-3 control-label no-padding-right')); ?>\n";?>
            <div class="col-sm-9">
                <?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
            </div>
        </div>
<?php
}
?>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
					<?php echo "<?php echo \$model->isNewRecord ? '创建' : '保存'; ?>\n"; ?>
                </button>
                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    重置
                </button>
            </div>
        </div>
    </div>
</div>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
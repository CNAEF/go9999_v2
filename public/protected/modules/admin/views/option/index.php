<?php
$this->breadcrumbs=array(
	'系统设置'
);
?>
<div class="page-header">
	<h1>系统设置</h1>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'option-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class' => 'form-horizontal')
)); ?>
<style>
	.form-horizontal .form-group input[type=radio]{
		width:2em;
	}
	.form-horizontal .form-group select{
		width:10em;
	}
</style>
<div class="row">
	<div class="col-xs-12">
		<?php echo $form->errorSummary($model,'<div class="alert alert-danger">','</div>'); ?>
		<?php foreach ($model->options as $k => $v) { ?>
		<div class="form-group">
			<?php echo $form->labelEx($model, $v->key, array('class'=>'col-sm-3 control-label no-padding-right')); ?>
			<div class="col-sm-9">
				<?php if ($v->type == 'radio') { ?>
					<?php echo $form->radioButtonList(
						$model,
						$v->key,
						array_combine(explode(',',$v->data),explode(',',$v->data)),
						array('class' => 'col-xs-10')
					); ?>
				<?php } else if ($v->type == 'select') { ?>
					<?php echo $form->dropDownList(
						$model,
						$v->key,
						array_combine(explode(',',$v->data),explode(',',$v->data)),
						array('class' => 'col-xs-10')
					); ?>
				<?php } else if ($v->type == 'textarea') { ?>
					<?php echo $form->textArea($model,$v->key,array('class' => 'col-xs-10', 'rows' => 5)); ?>
				<?php } else { ?>
				<?php echo $form->textField($model,$v->key,array('size'=>60,'maxlength'=>100,'class' => 'col-xs-10')); ?>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					保存
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
<?php $this->endWidget(); ?>

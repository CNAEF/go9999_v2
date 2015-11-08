<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions' => array('class' => 'form-horizontal')
)); ?>
<div class="row">
    <div class="col-xs-12">

        <div class="form-group">
            <?php echo $form->labelEx($model,'id', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'id',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'email', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100, 'class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'username', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100, 'class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'nickname', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>100, 'class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'last_ip', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'last_ip',array('size'=>60,'maxlength'=>100, 'class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'is_deleted', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'is_deleted',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'created_at', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'created_at',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'updated_at', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'updated_at',array('class' => 'col-xs-10 col-sm-10')); ?>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    搜索
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

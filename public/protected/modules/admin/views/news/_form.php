<?php 

$uploadImagePath = $this->createUrl('//image/upload');
//var_dump($uploadImagePath);

//register js and css
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->baseUrl.'/assets/ueMini/third-party/jquery.min.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl.'/assets/ueMini/umeditor.config.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl.'/assets/ueMini/umeditor.min.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl.'/assets/ueMini/lang/zh-cn/zh-cn.js', CClientScript::POS_HEAD);
$cs->registerScript('ueMiniInit',"var um = UM.getEditor('News_n_content',{imageUrl:'".$uploadImagePath."'});", CClientScript::POS_READY);


//editor init

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class' => 'form-horizontal')
)); ?>
<div class="row">
    <div class="col-xs-12">
	<?php echo $form->errorSummary($model,'<div class="alert alert-danger">','</div>'); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'n_title', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'n_title',array('size'=>60,'maxlength'=>200,'class' => 'col-xs-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'n_readCount', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'n_readCount',array('size'=>10,'maxlength'=>10,'class' => 'col-xs-10')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'n_content', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php //echo $form->textField($model,'n_content',array('size'=>60,'maxlength'=>21000,'class' => '', 'id'=>'newsUEMini1')); ?>
                <script id="News_n_content" name="News[n_content]" type="text/plain" style="width:85%;height:300px;"><?php echo $model->n_content;?></script>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
					<?php echo $model->isNewRecord ? '创建' : '保存'; ?>
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

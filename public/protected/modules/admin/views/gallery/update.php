<?php
$this->breadcrumbs=array(
	'相册'=>array('index'),
	//$model->title=>array('update','id'=>$model->id),
	'编辑',
);
?>
<div class="page-header">
    <h1>
        编辑相册        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            #<?php echo $model->id; ?>        </small>
    </h1>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class' => 'form-horizontal')
)); ?>
<div class="row">
    <div class="col-xs-8">
        <div id="gallery"> </div>
        <?php echo CHtml::beginForm(); ?>
        <div class="form">
            <div class="swfupload btn btn-success"><span id="swfupload"></span></div>
            <div id="divFileProgressContainer"></div>
        </div>
        <?php echo CHtml::endForm(); ?>
    </div>
    <div class="col-xs-4">
	<?php echo $form->errorSummary($model,'<div class="alert alert-danger">','</div>'); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'title', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200,'class' => 'col-xs-12')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'content', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'class' => 'col-xs-12')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'author', array('class'=>'col-sm-3 control-label no-padding-right')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100,'class' => 'col-xs-12')); ?>
            </div>
        </div>
        <div class="clearfix align-right">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                更新
            </button>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

<link type="text/css" rel="stylesheet" href="/assets/swfupload/default.css"/>
<?php
$this->widget('application.extensions.swfupload.CSwfUpload', array(
    'jsHandlerUrl'=>'/assets/swfupload/handlers.js', 
    'postParams'=>array(
        ),
    'config'=>array(
        'use_query_string'=>true,
        'upload_url'=>'/admin/galleryimage/create?id='.$model->id,
        'file_size_limit'=>'2 MB',
        'file_types'=>'*.jpg;*.png;*.gif',
        'file_types_description'=>'Image Files',
        'file_upload_limit'=>0,
        'file_queue_error_handler'=>'js:fileQueueError',
        'file_dialog_complete_handler'=>'js:fileDialogComplete',
        'upload_progress_handler'=>'js:uploadProgress',
        'upload_error_handler'=>'js:uploadError',
        'upload_success_handler'=>'js:uploadSuccess',
        'upload_complete_handler'=>'js:uploadComplete',
        'custom_settings'=>array('upload_target'=>'divFileProgressContainer'),
        'button_placeholder_id'=>'swfupload',
        'button_width'=>170,
        'button_height'=>20,
        'button_text'=>'<span class="button">上传图片(2 MB)</span>',
        'button_text_style'=>'.button {}',
        'button_text_top_padding'=>0,
        'button_text_left_padding'=>0,
        'button_window_mode'=>'js:SWFUpload.WINDOW_MODE.TRANSPARENT',
        'button_cursor'=>'js:SWFUpload.CURSOR.HAND',
        ),
    )
);
?>
<style>
.swfupload{
    margin-left:0px;
}
#gallery{
    background:#fff;
    overflow:hidden;
}
.gallery-image{
    float:left;
    background:#eee;
    margin:20px 20px 20px 0;
    width:200px;
    height:250px;
    position:relative;
}
.image-delete{
    display:inline-block;
    padding:5px;
    background:#eee;
    color:#000;
    font-size:16px;
    text-align:right;
    position:absolute;
    top:0;
    right:0;
}
.image-content{
    width:180px;
    height:180px;
    margin:10px;
}
.image-content img{
    width:180px;
    height:180px;
}
.image-caption{
}
</style>
<script>
var gallery_id = <?php echo $model->id;?>;
function add_image(id, file) {
    html = '<div class="gallery-image" id="image-'+id+'" data="'+id+'">';
    html += '<a class="image-delete fa fa-times"></a>';
    html += '<div class="image-content">';
    html += '<img src="/uploads/gallery/'+file+'">';
    html += '</div>';
    html += '<div class="image-caption">';
    html += '</div>';
    html += '</div>';
    $('#gallery').append(html);
}
function delete_image(id) {
    $.ajax({
        method:'POST',
        url:'/admin/galleryimage/delete',
        data: {
            id:id
        },
        dataType: 'json',
        success:function(data){
            $('#image-'+id).remove();
        }
    });
}
function load_images() {
    $.ajax({
        method:'POST',
        url:'/admin/galleryimage/index',
        data: {
            gallery_id:gallery_id
        },
        dataType: 'json',
        success:function(data){
            $('#gallery').empty();
            for(i in data) {
                add_image(data[i].id, data[i].file);
            }
        }
    });
}
$(function(){
    load_images(); 
    $(document).on("click",".image-delete",function(){
        $.ajax({
            method:'POST',
            url:'/admin/galleryimage/delete/id/'+$(this).closest('.gallery-image').attr('data'),
            dataType: 'json',
            success:function(data){
                $('#image-'+data.id).fadeOut('slow', function() {
                    $(this).remove();
                });
            }
        });
    });
});
</script>

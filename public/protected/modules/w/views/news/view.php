<section id="page-box-contact">
    <div class="page-header">
        <h1><?php echo CHtml::encode($news->n_title);?></h1>
        <div>作者: <?php echo @$news->nCreationUser->username;?> | 发布日期: <?php echo $news->n_creationDate;?> | 阅读次数: <?php echo $news->n_readCount;?></div>
    </div>
    <div class="row">
        <div class="span12">
            <?php echo $news->n_content;?>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
            <section id="page-box-contact">
                <div class="page-header">
                    <h2>浏览相册<small>Gallery View</small></h2>
                </div>
                        
                <div class="row">
                    <?php foreach ($gallery->galleryImages as $oneGI):?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3><?php echo CHtml::image(Yii::app()->baseUrl.'/uploads/gallery/'.$oneGI->file);?></h3>
                        </div>
    
                    <?php endforeach;?>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
            <section id="page-box-contact">
                <div class="page-header">
                    <h2>支教相册<small>Volunteer Gallery</small></h2>
                </div>
                        
                <div class="row">
                    <?php foreach ($gallery as $oneG):?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3><?php echo $oneG->title;?></h3>
                            <h5><?php echo $oneG->getAttributeLabel('content');?>: <?php echo $oneG->content;?></h5>
                            <h5><?php echo $oneG->getAttributeLabel('user_id');?>: <?php echo $oneG->admin->username;?></h5>
                            <h5><?php echo $oneG->getAttributeLabel('created_at');?>: <?php echo date('Y-m-d H:i:s', $oneG->created_at);?></h5>
                            <h5><?php echo CHtml::link('查看相册', array('gallery/view', 'id'=>$oneG->id), array('target'=>'_blank'))?></h5>

                        </div>
    
                    <?php endforeach;?>
                </div>
            </section>
</div>
</div>
</div>
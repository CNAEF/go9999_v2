<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
            <section id="page-box-contact">
                <div class="page-header">
                    <h2>成员列表<small>Staff List</small></h2>
                </div>
                
                <?php foreach ($departs as $oneDepart):?>
                    <div>
                        <h3><?php echo $oneDepart->d_title;?></h3>
                        
                        <div class="row">
                            <?php foreach ($oneDepart->staff as $oneStaff):?>
                                <div class="span2">
                                    <img alt="user photo" src="<?php echo Yii::app()->baseUrl.'/uploads/staff_photo/'.$oneStaff->s_avatar;?>">
                                    <h5>姓名: <?php echo $oneStaff->s_name;?></h5>
                                    <h5>职务: <?php echo $oneStaff->s_duty;?></h5>
                                    <h5>居住地: <?php echo $oneStaff->s_location;?></h5>
                                    <h5>Tel: <?php echo $oneStaff->s_tel;?></h5>
                                    <h5>描述: <?php echo $oneStaff->s_desc;?></h5>
                                </div>
            
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endforeach;?>
            
            </section>
</div>
</div>
</div>
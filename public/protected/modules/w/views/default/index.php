    <div class="f_main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div class="m_about">
              <h2>关于我们<small>About us</small></h2>
              <p><strong>中国•支教联盟(CNAEF)</strong>创立于2006年4月。支教联盟是一个致力于贫困地区教育事业发展的非营利性民间公益组织，由社会各界自愿支持农村中、小学教育的爱心人士组成，经费来自于社会赞助。自成立以来，联盟始终恪守 “知识改变命运，教育提高素质”的宗旨，积极倡导支教意识，广泛动员社会力量，努力开拓支教工作的相关助学领域。支教联盟成立，是中国最早的民间支教组织之一。中国青少年教育平等运动的倡导者和实践者之一。</p>
            </div>
            <div class="m_news">
              <h2>支教快讯<small>Volunteer news</small></h2>
              <div class="row news_title">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 notice"><img src="<?php echo Yii::app()->baseUrl?>/assets/v2/img/notice.jpg" alt="notice" title="notice" class="img-responsive"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 log"><img src="<?php echo Yii::app()->baseUrl?>/assets/v2/img/log.jpg" alt="log" title="log" class="img-responsive"></div>
              </div>
              <div class="news_main">
                <ul class="notice_main">
                    <?php if (false && $news) { ?>
                    <?php foreach ($news as $oneNew):?>
                      <li>
                        <h5><a href="<?php echo Yii::app()->createUrl('w/news/view', array('id'=> $oneNew->n_id));?>"><?php echo CHtml::encode($oneNew->n_title);?><small>- <?php $oneNew->n_creationDate;?></small></a></h5>
                        <p><a href="<?php echo Yii::app()->createUrl('w/news/view', array('id'=> $oneNew->n_id));?>"><?php echo CHtml::encode(substr($oneNew->n_shortDesc,0,  45));?>...</a></p>
                      </li>                      
                    <?php endforeach;?>
                    <?php } else { ?>
                        <li>
                            <h5><a target="_blank" href="<?php echo $notices[0]['link'];?>"><?php echo $notices[0]['title'];?><small>- <?php echo $notices[0]['friendlyDate'];?></small></a></h5>
                            <p><a target="_blank" href="<?php echo $notices[0]['link'];?>"><?php echo mb_substr($notices[0]['description'],0,50);?>...</a></p>
                        </li>
                        <li>
                            <h5><a target="_blank" href="<?php echo $notices[1]['link'];?>"><?php echo $notices[1]['title'];?><small>- <?php echo $notices[1]['friendlyDate'];?></small></a></h5>
                            <p><a target="_blank" href="<?php echo $notices[1]['link'];?>"><?php echo mb_substr($notices[1]['description'],0,50);?>...</a></p>
                        </li>
                        <li>
                            <h5><a target="_blank" href="<?php echo $notices[2]['link'];?>"><?php echo $notices[2]['title'];?><small>- <?php echo $notices[2]['friendlyDate'];?></small></a></h5>
                            <p><a target="_blank" href="<?php echo $notices[2]['link'];?>"><?php echo mb_substr($notices[2]['description'],0,50);?>...</a></p>
                        </li>
                    <?php } ?>
                </ul>
                <ul class="log_main">
                  <li>
                      <h5><a target="_blank" href="<?php echo $posts[0]['link'];?>"><?php echo $posts[0]['title'];?><small>- <?php echo $posts[0]['friendlyDate'];?></small></a></h5>
                      <p><a target="_blank" href="<?php echo $posts[0]['link'];?>"><?php echo mb_substr($posts[0]['description'],0,50);?>...</a></p>
                  </li>
                  <li>
                      <h5><a target="_blank" href="<?php echo $posts[1]['link'];?>"><?php echo $posts[1]['title'];?><small>- <?php echo $posts[1]['friendlyDate'];?></small></a></h5>
                      <p><a target="_blank" href="<?php echo $posts[1]['link'];?>"><?php echo mb_substr($posts[1]['description'],0,50);?>...</a></p>
                  </li>
                  <li>
                      <h5><a target="_blank" href="<?php echo $posts[2]['link'];?>"><?php echo $posts[2]['title'];?><small>- <?php echo $posts[2]['friendlyDate'];?></small></a></h5>
                      <p><a target="_blank" href="<?php echo $posts[2]['link'];?>"><?php echo mb_substr($posts[2]['description'],0,50);?>...</a></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="m_weibo">
              <h2>新浪微博<small>Sina Weibo</small></h2>
              <iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=1&ptype=1&speed=0&skin=5&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=2637693154&verifier=051f86b7&dpc=1"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="f_map">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>支教足迹<small>Volunteer footprint</small></h2>
          </div>
        </div>
      </div>
       <!-- 动态版本 -->
       <!--
       <div id="map_show" class="m_map_show"></div>
       -->
       <!-- 静态版本 -->
       <div class="m_map"></div>
    </div>
    <div class="f_picture">
      <div class="container">
        <h2>支教掠影<small>Volunteer photos</small></h2>
        <div class="row">
            <?php if ($images) { ?>
        <?php
            $imgRound = 1;
            foreach ($images as $key=>$oneImage):?>
                <?php if ($key == 0):?>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-xs-12"><img style="width: 100%;" src="<?php echo Yii::app()->baseUrl;?>/uploads/gallery/<?php echo CHtml::encode($oneImage->file);?>" alt="picture" title="picture" class="img-responsive"></div>
            </div>
          </div>  
                <?php else :?>
                    <?php if ($key == 1):?>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <?php endif;?>
                    <?php if ($key % 4 == 1):?>
                        <div class="row">                    
                    <?php endif;?>
                    
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><img src="<?php echo Yii::app()->baseUrl;?>/uploads/gallery/<?php echo CHtml::encode($oneImage->file);?>" alt="picture" title="picture" class="img-responsive"></div>
                    
                    <?php if ($key % 4 == 0):?>
                        </div>
                    <?php endif;?>
                        
                <?php endif;?>
        <?php endforeach;?>
                </div>
            <?php } else { ?>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="gallery-box-1 col-lg-12 col-md-12 col-xs-12">
                            <div class="gallery-box-1-inner">
                                <img style="" src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-1.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-2.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-3.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-4.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-5.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-6.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-7.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-8.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                        <div class="gallery-box-2 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="gallery-box-2-inner">
                                <img src="<?php echo Yii::app()->baseUrl;?>/assets/img/pic-9.jpg" alt="picture" title="picture" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
      </div>
    </div>


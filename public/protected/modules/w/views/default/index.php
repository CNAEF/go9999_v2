    <div class="f_banner">
      <div class="m_banner">
        <div class="banner_main">
          <p>2016年度支教志愿者招募</p>
        </div>
      </div>
    </div>
    <div class="f_main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
            <div class="m_about">
              <h2>关于我们<small>About us</small></h2><strong>中国•支教联盟(CNAEF)</strong>
              <p>
                创办于2006年4月。由自愿支持农村中小学教育的社会各界爱心人士自发组织的全国性民间公益机构。
                以联系和提供支教为主题，主要发布支教信息，传播贫困地区教育现状，共同关注孩子成长。
                自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。
              </p>
            </div>
            <div class="m_news">
              <h2>支教快讯<small>Volunteer news</small></h2>
              <div class="row news_title">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 notice"><img src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/img/notice.jpg" alt="notice" title="notice" class="img-responsive"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 log"><img src="<?php echo Yii::app()->baseUrl?>/assets/go9999v2016/img/log.jpg" alt="log" title="log" class="img-responsive"></div>
              </div>
              <div class="news_main">
                <ul class="notice_main">
                    <?php foreach ($news as $oneNew):?>                      
                      <li>
                        <h5><a href="<?php echo Yii::app()->createUrl('w/news/view', array('id'=> $oneNew->n_id));?>"><?php echo CHtml::encode($oneNew->n_title);?><small>- <?php $oneNew->n_creationDate;?></small></a></h5>
                        <p><a href="<?php echo Yii::app()->createUrl('w/news/view', array('id'=> $oneNew->n_id));?>"><?php echo CHtml::encode(substr($oneNew->n_shortDesc,0,  45));?>...</a></p>
                      </li>                      
                    <?php endforeach;?>                
                </ul>
                <ul class="log_main">
                  <li>
                    <h5><a href="#">不再失学<small>- 3天前</small></a></h5>
                    <p><a href="#">由自愿支持农村中小学教育的社会各界爱心人士自发组织的全国性民间公益机构...</a></p>
                  </li>
                  <li>
                    <h5><a href="#">不再有人绝望<small>- 3个月前</small></a></h5>
                    <p><a href="#">由自愿支持农村中小学教育的社会各界爱心人士自发组织的全国性民间公益机构...</a></p>
                  </li>
                  <li>
                    <h5><a href="#">不再有人失学<small>- 3天前</small></a></h5>
                    <p><a href="#">由自愿支持农村中小学教育的社会各界爱心人士自发组织的全国性民间公益机构......</a></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="m_weibo">
              <h2>新浪微博<small>Sina Weibo</small></h2>
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
      <div class="m_map">
      </div>
    </div>
    <div class="f_picture">
      <div class="container">
        <h2>支教掠影<small>Volunteer picture</small></h2>
        <div class="row">
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
        </div>
      </div>
    </div>


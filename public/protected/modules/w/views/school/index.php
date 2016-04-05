<div class="container" id="page-school">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <section id="page-box-school">
                <div class="page-header">
                    <h1>学校申请表</h1>
                </div>
                <div class="row">
                    <div class="span12">
                        <blockquote>
                            <p>请认真如实填写以下表单，以便我们能够更好的了解您的意愿。</p>
                            <small>支教联盟管理 <cite title="衷心希望">年小恩</cite></small>
                        </blockquote>
                    </div>
                </div>
                <form class="form-horizontal " id="action-form2"
                      action="<?php echo $this->createAbsoluteUrl('school/index'); ?>" method="post"
                      enctype="multipart/form-data">
                    <legend>基本资料</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_name">学校名称</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="name" id="form_name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_location_province">所在地区</label>
                        <div class="col-sm-4">
                            <select id="form_location_province" name="location_province" class="form-control required">
                                <option value="">载入中</option>
                            </select>
                            <select id="form_location_city" name="location_city" class="form-control required">
                                <option value="">载入中</option>
                            </select>
                            <label class="error" for="location_city" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_type">学校类型</label>
                        <div class="col-sm-4">
                            <select name="type" id="form_type"  class="form-control required">
                                <option value=""> -</option>
                                <option value="1">幼儿园</option>
                                <option value="2">小学</option>
                                <option value="3">初中</option>
                                <option value="4">民工子弟学校</option>
                                <option value="5">孤儿院</option>
                                <option value="6">特殊教育中心</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_primary_school_type">小学类型</label>
                        <div class="col-sm-4">
                            <select name="primary_school_type" id="form_primary_school_type" class="form-control required">
                                <option value=""> -</option>
                                <option value="1">村小／教学点</option>
                                <option value="2">完小</option>
                                <option value="3">中心校</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_student_count">学生人数</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="student_count"
                                   id="form_student_count" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_teacher_count">教师人数</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="teacher_count"
                                   id="form_teacher_count" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_grade_count">年级数量</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="grade_count" id="form_grade_count"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_class_count">班级数量</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="class_count" id="form_class_count"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_description">学校简介</label>
                        <div class="col-sm-4">
                            <textarea name="description" class="form-control required" id="form_description" type="text"
                                      rows="5" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_photo">请上传学校照片</label>
                        <div class="col-sm-4">
                            <input name="photo" class="form-control required" id="form_photo" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_has_library">是否有图书室</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="has_library" id="form_has_library_1" value="1" checked>
                                有
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="has_library" id="form_has_library_0" value="0">
                                无
                            </label>
                            <label class="error" for="has_library" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_has_computer">是否有电脑</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="has_computer" id="form_has_computer_1" value="1" checked>
                                有
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="has_computer" id="form_has_computer_0" value="0">
                                无
                            </label>
                            <label class="error" for="has_computer" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_has_internet">是否能上网</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="has_internet" id="form_has_internet_1" value="1" checked>
                                有
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="has_internet" id="form_has_internet_0" value="0">
                                无
                            </label>
                            <label class="error" for="has_internet" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_is_supported">是否有公益团队支持</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="is_supported" id="form_is_supported_1" value="1" checked>
                                有
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="is_supported" id="form_is_supported_0" value="0">
                                无
                            </label>
                            <label class="error" for="is_supported" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_public_name">公益团队名称</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="public_name" id="form_public_name"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_project">已开展项目</label>
                        <div class="col-sm-5">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_1" value="1">
                                支教
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_2" value="2">
                                助学
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_3" value="3">
                                捐物
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_4" value="4">
                                支农
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_5" value="5">
                                支医
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_6" value="6">
                                扶贫
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="project[]" id="form_project_7" value="7">
                                环保
                            </label>
                        </div>
                    </div>

                    <legend>学校需求</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_need_volunteer">是否需要支教老师</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="need_volunteer" id="form_need_volunteer_1" value="1" checked>
                                是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="need_volunteer" id="form_need_volunteer_0" value="0">
                                否
                            </label>
                            <label class="error" for="need_volunteer" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_need_volunteer_count">需要人数</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="need_volunteer_count"
                                   id="form_need_volunteer_count" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_volunteer_work">支教老师的工作范围</label>
                        <div class="col-sm-4">
                            <textarea name="volunteer_work" class="form-control required" id="form_volunteer_work"
                                      type="text" rows="5" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_need_other">是否需要其他支持</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="need_other" id="form_need_other_1" value="1" checked>
                                是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="need_other" id="form_need_other_0" value="0">
                                否
                            </label>
                            <label class="error" for="need_other" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_need_other_content">请列举学校的需要</label>
                        <div class="col-sm-4">
                            <textarea name="need_other_content" class="form-control required"
                                      id="form_need_other_content" type="text" rows="5" placeholder=""></textarea>
                        </div>
                    </div>

                    <legend>其他资料</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_custom">当地民俗习惯</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="custom" id="form_custom_1" value="1" checked>
                                是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="custom" id="form_custom_0" value="0">
                                否
                            </label>
                            <label class="error" for="custom" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_attention">注意事项</label>
                        <div class="col-sm-4">
                            <textarea name="attention" class="form-control required" id="form_attention" type="text"
                                      rows="5" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_traffic">交通指南</label>
                        <div class="col-sm-4">
                            <textarea name="traffic" class="form-control required" id="form_traffic" type="text"
                                      rows="5" placeholder="从该市/县到达学校的路线、交通工具、乘车地点、里程、价格、时间"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_offer_support">学校可以提供哪些支持</label>
                        <div class="col-sm-4">
                            <textarea name="offer_support" class="form-control required" id="form_offer_support"
                                      type="text" rows="5" placeholder="吃/住/生活补贴等"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_bring_supplies">志愿者需要带的物资明细</label>
                        <div class="col-sm-4">
                            <textarea name="bring_supplies" class="form-control required" id="form_bring_supplies"
                                      type="text" rows="5" placeholder="志愿者本人在当地支援期间使用的私人物品"></textarea>
                        </div>
                    </div>

                    <legend>联系方式</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_headmaster_name">校长</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="headmaster_name"
                                   id="form_headmaster_name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_headmaster_telephone">电话</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="headmaster_telephone"
                                   id="form_headmaster_telephone" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_school_address">学校地址</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="school_address"
                                   id="form_school_address" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_school_postcode">学校邮编</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="school_postcode"
                                   id="form_school_postcode" placeholder="">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-large btn-primary" type="submit" id="submit_form">提交申请表</button>
                    </div>
                </form>
            </section>

            <section class="row" id="success" style="display:none;">
                <div class="page-header">
                    <h1>申请成功！</h1>
                </div>
                <div class="span12">
                    <blockquote>
                        <p class="alert alert-success">我们会第一时间联系您，请耐心等待，感谢您对支教联盟的支持！</p>
                        <small>支教联盟管理 <cite title="衷心感谢">年小恩</cite></small>
                    </blockquote>
                </div>
            </section>
            <script src=""></script>
        </div>
    </div>
</div>

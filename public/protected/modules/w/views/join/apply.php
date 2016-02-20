<div class="container" id="page-join">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section id="page-box-apply">
                <div class="page-header">
                    <h2>志愿者申请表<small>Volunteer Join</small></h2>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <blockquote>
                            <p>请认真如实填写以下表单，以便我们能够更好的了解您去支教的意愿。</p>
                            <small>支教联盟管理 <cite title="衷心希望">年小恩</cite></small>
                        </blockquote>
                    </div>
                </div>
                <form class="form-horizontal " id="action-form2" action="<?php echo $this->createAbsoluteUrl('join/apply');?>" method="post" enctype="multipart/form-data">
                    <legend>基本资料</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_name">姓　　名</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="name" id="form_name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_sex">性　　别</label>
                        <div class="col-sm-4">
                            <select name="sex" id="form_sex" class="form-control required">
                                <option value=""> - </option>
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_birthday">出生日期</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="birthday" id="form_birthday" placeholder="20140101">
                            <span class="help-block">格式20140101，志愿者的年龄要求是22~60周岁</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_married">婚姻状况</label>
                        <div class="col-sm-4">
                            <select name="married" id="form_married" class="form-control required">
                                <option value=""> - </option>
                                <option value="1">未婚</option>
                                <option value="2">已婚</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_hometown_province">籍　　贯</label>
                        <div class="col-sm-4">
                            <select id="form_hometown_province" name="hometown_province" class="form-control">
                                <option value="">载入中</option>
                            </select>
                            <select id="form_hometown_city" name="hometown_city" class="form-control required">
                                <option value="">载入中</option>
                            </select>
                            <label class="error" for="hometown_city" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_id_num">身份证号</label>
                        <div class="col-sm-4">
                            <input name="id_num" class="form-control required" id="form_id_num" type="text" placeholder="">
                            <span class="help-block">非大陆证件请联系我们的行政人员进行报名</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_id_photo">身份证照</label>
                        <div class="col-sm-4">
                            <input name="id_photo" class="form-control required" id="form_id_photo" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_user_photo">近期照片</label>
                        <div class="col-sm-4">
                            <input name="user_photo" class="form-control required" id="form_user_photo" type="file">
                        </div>
                    </div>

                    <legend>受教育经历</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_edu_level">学　　历</label>
                        <div class="col-sm-4">
                            <select id="form_edu_level" name="edu_level" class="form-control required">
                                <option value=""> - </option>
                                <option value="4">大专</option>
                                <option value="5">本科</option>
                                <option value="6">硕士</option>
                                <option value="7">博士及以上</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_edu_photo">学历照片</label>
                        <div class="col-sm-4">
                            <input name="edu_photo" class="form-control required" id="form_edu_photo" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_edu_university">毕业院校</label>
                        <div class="col-sm-4">
                            <input name="edu_university" class="form-control required" id="form_edu_university" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_profession">专　　业</label>
                        <div class="col-sm-4">
                            <input name="profession" class="form-control required" id="form_profession" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_special">个人特别技能及资历</label>
                        <div class="col-sm-4">
                            <textarea name="special" class="form-control" id="form_special" type="text" rows="5" placeholder="如果没有请留空。"></textarea>
                        </div>
                    </div>

                    <legend>工作经历</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_work">职　　业</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control required" name="work" id="form_work">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_work_experience">工作经历</label>
                        <div class="col-sm-4">
                            <textarea name="work_experience" class="form-control" id="form_work_experience" rows="5" placeholder="如果没有请留空。"></textarea>
                        </div>
                    </div>

                    <legend>联系方式</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_phone">电　　话</label>
                        <div class="col-sm-4">
                            <input name="phone" class="form-control required id="form_phone" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_email">E-mail</label>
                        <div class="col-sm-4">
                            <input name="email" class="form-control required" id="form_email" type="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_qq">QQ/微信</label>
                        <div class="col-sm-4">
                            <input name="qq" class="form-control required" id="form_qq" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_cur_province">现居住地</label>
                        <div class="col-sm-4">
                            <select id="form_cur_province" name="cur_province" class="form-control two_select">
                                <option value="">载入中</option>
                            </select>
                            <select id="form_cur_city" name="cur_city" class="form-control two_select required">
                                <option value="">载入中</option>
                            </select>
                            <label class="error" for="cur_city" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_cur_addr">详细地址</label>
                        <div class="col-sm-4">
                            <input name="cur_addr" class="form-control required" id="form_cur_addr" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_post_code">邮　　编</label>
                        <div class="col-sm-4">
                            <input name="post_code" class="form-control required" id="form_post_code" type="text">
                        </div>
                    </div>

                    <legend>紧急联系人（直系亲属/家人）会做亲属调查</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_family_title">称　　谓</label>
                        <div class="col-sm-4">
                            <input name="family_title" class="form-control required" id="form_family_title" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_family_name">姓　　名</label>
                        <div class="col-sm-4">
                            <input name="family_name" class="form-control required" id="form_family_name" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_family_contact">电　　话</label>
                        <div class="col-sm-4">
                            <input name="family_contact" class="form-control required" id="form_family_contact" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_family_workplace">工作单位</label>
                        <div class="col-sm-4">
                            <input name="family_workplace" class="form-control required" id="form_family_workplace" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_family_addr">地　　址</label>
                        <div class="col-sm-4">
                            <input name="family_addr" class="form-control required" id="form_family_addr" type="text">
                        </div>
                    </div>

                    <legend>支教概况</legend>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_is_disability">有否伤残病历</label>
                        <div class="col-sm-4">
                            <textarea name="is_disability" class="form-control" id="form_is_disability" rows="5" placeholder="如果没有请留空。"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_is_experience">有否支教经验</label>
                        <div class="col-sm-4">
                            <textarea name="is_experience" class="form-control" id="form_is_experience" rows="5" placeholder="如果没有请留空。"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="form_term1">申请支教期限</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                              <input type="radio" name="predict_deadline" id="form_term1" value="1" checked>
                              一学期
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="predict_deadline" id="form_term2" value="2">
                              一学年
                            </label>
                            <label class="error" for="predict_deadline" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_term_autum">开始支教的时间</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                              <input type="radio" name="begin_date" id="form_term_autum" value="1">
                              秋季学期
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="begin_date" id="form_term_spring" value="2">
                              春季学期
                            </label>
                            <label class="error" for="begin_date" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_status_work">现在的状态</label>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                              <input type="radio" name="cur_status" id="form_status_work" value="1">
                              工作
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="cur_status" id="form_status_learn" value="2">
                              学习
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="cur_status" id="form_status_free" value="3">
                              无业
                            </label>
                            <label class="error" for="cur_status" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_cur_income">目前的经济来源</label>
                        <div class="col-sm-4">
                            <textarea name="cur_income" class="form-control required" id="form_cur_income" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form_info_from">何处得知本活动</label>
                        <div class="col-sm-4">
                            <textarea name="info_from" class="form-control required" id="form_info_from" rows="5"></textarea>
                        </div>
                    </div>

                    <legend>支教问答题（100—500字）</legend>

                    <div class="form-group">
                        <label for="form_Q1" class="col-sm-12 question_label">1、请简述您为什么要支教？您对支教有哪些了解？希望通过支教收获什么？</label>
                        <div class="col-sm-6">
                            <textarea name="Q1" class="question_text form-control required" id="form_Q1" rows="5" placeholder="100-500字"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="form_Q2" class="col-sm-12 question_label">2、请简述对您影响最大的一位老师是如何教学的？您认为作为一个老师应该具备哪些品质？又该如何去做一名合格的老师？</label>
                        <div class="col-sm-6">
                            <textarea name="Q2" class="question_text form-control required" id="form_Q2" rows="5" placeholder="100-500字"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="form_Q3" class="col-sm-12 question_label">3、请简述您的家庭教育中有哪些值得学习的经验和不足，孩童时期对你影响最大的一件事是什么？为什么？</label>
                        <div class="col-sm-6">
                            <textarea name="Q3" class="question_text form-control required" id="form_Q3" rows="5" placeholder="100-500字"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="form_Q4" class="col-sm-12 question_label">4、请简述未来五年内的人生规划？</label>
                        <div class="col-sm-6">
                            <textarea name="Q4" class="question_text form-control required" id="form_Q4" rows="5" placeholder="100-500字"></textarea>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input id="form_confirm" type="checkbox" name="confirm" value="1">
                            我已经准备好了！
                            <label class="error" for="confirm" style="display:none;"></label>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-danger btn-lg" id="submit_form">提交报名表单</button>
                </form>
            </section>
	
            <section class="row" id="success" style="display:none;">
                <div class="page-header">
                    <h1>报名成功！</h1>
                </div>
                <div class="span12">
                    <blockquote>
                        <p class="alert alert-success">如果您的资料通过审核，我们会第一时间联系您，请耐心等待，感谢您对支教联盟的支持！</p>
                        <small>支教联盟管理 <cite title="衷心感谢">年小恩</cite></small>
                    </blockquote>
                </div>
            </section>
	
        </div>
    </div>
</div>
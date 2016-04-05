/**
 * school.js
 *
 * @desc    学校申请脚本
 * @author  王默
 */
var $validator;
(function (w, d, $) {

    $(document).ready(function () {
        var appleyPage = '#page-box-school';
        // 如非报名页面不执行之后的脚本
        appleyPage = $(appleyPage);
        if (!appleyPage.length) {
            return false;
        }

		var citydata = {
            data     : [
                {
                    id : 64, name : '宁夏', cities : [
                    {id : 6401, name : '银川'},
                    {id : 6402, name : '石嘴山'},
                    {id : 6403, name : '吴忠'},
                    {id : 6404, name : '固原'}
                ]
                },
                {
                    id : 45, name : '广西', cities : [
                    {id : 4501, name : '南宁'},
                    {id : 4502, name : '柳州'},
                    {id : 4503, name : '桂林'},
                    {id : 4504, name : '梧州'},
                    {id : 4505, name : '北海'},
                    {id : 4506, name : '防城港'},
                    {id : 4507, name : '钦州'},
                    {id : 4508, name : '贵港'},
                    {id : 4509, name : '玉林'},
                    {id : 4510, name : '百色'},
                    {id : 4511, name : '贺州'},
                    {id : 4512, name : '河池'},
                    {id : 4521, name : '南宁'},
                    {id : 4522, name : '柳州'}
                ]
                },
                {
                    id : 52, name : '贵州', cities : [
                    {id : 5201, name : '贵阳'},
                    {id : 5202, name : '六盘水'},
                    {id : 5203, name : '遵义'},
                    {id : 5204, name : '安顺'},
                    {id : 5222, name : '铜仁'},
                    {id : 5223, name : '黔西南'},
                    {id : 5224, name : '毕节'},
                    {id : 5226, name : '黔东南'},
                    {id : 5227, name : '黔南'}
                ]
                },
                {
                    id : 53, name : '云南', cities : [
                    {id : 5301, name : '昆明'},
                    {id : 5303, name : '曲靖'},
                    {id : 5304, name : '玉溪'},
                    {id : 5305, name : '保山'},
                    {id : 5306, name : '昭通'},
                    {id : 5323, name : '楚雄'},
                    {id : 5325, name : '红河'},
                    {id : 5326, name : '文山'},
                    {id : 5327, name : '思茅'},
                    {id : 5328, name : '西双版纳'},
                    {id : 5329, name : '大理'},
                    {id : 5331, name : '德宏'},
                    {id : 5332, name : '丽江'},
                    {id : 5333, name : '怒江'},
                    {id : 5334, name : '迪庆'},
                    {id : 5335, name : '临沧'}
                ]
                },
            ],
            id       : 'id',
            children : 'cities',
            name     : 'name',
            metaTag  : 'name'
        };
        // jquery city select
        $('#form_location_province, #form_location_city').citylist(citydata);

		jQuery.extend(jQuery.validator.messages, {
			required: "请完善该信息！"
		});
        $("form").
		$validator = $("#action-form2").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					dataType: 'json',
					success: function (data) {
						if (data.extra.code == 200) {
							$('#page-box-school').hide();
							$('#success').show();
						} else {
							var errors = {};
							$.each(data.extra.errors, function( index, value ) {
								errors[index] = value;
							});
							$validator.showErrors(errors);  
							$('html, body').animate({
								scrollTop: $($validator.errorList[0].element).offset().top - 50
							}, 1000);
						}
                        $('#submit_form').attr('disabled', false);
					},
					error: function (data) {
						alert('抱歉，系统出了一点儿小问题，请稍后重试！');
                        $('#submit_form').attr('disabled', false);
					},
                    beforeSend: function () {
                        //$('#submit_form').attr('disabled', true);
                    },
                    complete: function () {
                        $('#submit_form').attr('disabled', false);
                    }
				});
                return false;
			},
            errorPlacement:function(error,element){
                error.appendTo(element.closest('div'));
            },
            unhightlight: function(label,element) {
                $(element).find("input").removeClass('error');
            },
		    rules: {
                'project[]':'required',
                public_name:{
                    required:depends('is_supported')
                },
                need_volunteer_count:{
                    required:depends('need_volunteer')
                },
                school_postcode: {
                    digits: true
                },
                need_other_content:{
                    required:depends('need_volunteer')
                },
                attention:{
                    required:depends('custom')
                }
		   },
		   messages: {
               name: {
                   required: '请输入学校名称！',
               },
               location_province: {
                   required: '请选择学校所在地区！',
               },
               type: {
                   required: '请选择学校类型！',
               },
               /*
               primary_school_type: {
                   required: '请选择学校类型！',
               },
                */
               student_count: {
                   required: '请填写学生人数！',
               },
               teacher_count: {
                   required: '请填写教师人数！',
               },
               grade_count: {
                   required: '请填写年级数量！',
               },
               class_count: {
                   required: '请填写班级数量！',
               },
               description: {
                   required: '请填写学校简介！',
               },
               photo: {
                   required: '请上传学校照片！',
               },
               /*
                'has_library' => '是否有图书室',
                'has_computer' => '是否有电脑',
                'has_internet' => '是否能上网',
                'is_supported' => '是否有公益团队支持',
                'public_name' => '公益团队名称',
                'project' => '已开展项目',
                'need_volunteer' => '是否需要支教老师',
                */
               need_volunteer_count: {
                   required: '请填写需要支教老师人数！',
               },
               volunteer_work: {
                   required: '请填写支教老师工作范围！',
               },
               /*
                'need_other' => '是否需要其他支持',
                'need_other_content' => '请列举学校的需求',
                'custom' => '是否有民俗习惯',
                */
               attention: {
                   required: '请填写注意事项！',
               },
               traffic: {
                   required: '请填写交通指南！',
               },
               offer_support: {
                   required: '请填写学校可提供哪些支持！',
               },
               bring_supplies: {
                   required: '请填写志愿者需要带的物资明细！',
               },
               headmaster_name: {
                   required: '请填写校长姓名！',
               },
               headmaster_telephone: {
                   required: '请填写校长的联系电话！',
               },
               school_address: {
                   required: '请填写学校的详细地址！',
               },
               school_postcode: {
                   required: '请填写学校的邮政编码！'
               }
			}
        });
    });

    function depends(name){
        return {
            depends:function(){
                var value = $("input[name='" + name + "']:checked").val();
                return parseInt(value);
            }
        }
    }
})(window, document, window.jQuery);


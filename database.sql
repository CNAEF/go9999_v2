SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `t_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT '管理员ID',
  `uri` varchar(1000) NOT NULL COMMENT '请求URL',
  `data` text COMMENT '提交数据',
  `ip` varchar(20) NOT NULL COMMENT '请求IP',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员操作日志';

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL COMMENT '邮箱',
  `username` varchar(80) DEFAULT NULL COMMENT '用户名，用于登陆',
  `nickname` varchar(80) DEFAULT NULL COMMENT '昵称，用于前台显示',
  `password` varchar(80) DEFAULT NULL COMMENT '密码',
  `last_ip` varchar(20) DEFAULT NULL COMMENT '最有一次登陆的ip',
  `is_deleted` tinyint(1) DEFAULT NULL COMMENT '是否可用，目前未生效',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '修改时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员';

CREATE TABLE `t_volunteer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '姓名',
  `sex` tinyint(3) NOT NULL COMMENT '性别 1 男 2 女',
  `birthday` int(11) NOT NULL COMMENT '生日',
  `_age` tinyint(3) DEFAULT NULL COMMENT '旧版年龄字段，已废弃',
  `married` tinyint(3) NOT NULL COMMENT '婚姻状况 1 未婚 2 已婚',
  `hometown_province` varchar(40) NOT NULL COMMENT '籍贯 省份',
  `hometown_city` varchar(40) NOT NULL COMMENT '籍贯 城市',
  `id_num` varchar(20) NOT NULL COMMENT '身份证号',
  `id_photo` varchar(100) NOT NULL COMMENT '身份证照片上传路径',
  `user_photo` varchar(100) NOT NULL COMMENT '生活照上传路径',
  `edu_level` tinyint(3) NOT NULL COMMENT '教育程度',
  `edu_photo` varchar(100) NOT NULL COMMENT '学历照片存放路径',
  `_edu_high_level` varchar(100) DEFAULT NULL COMMENT '高中',
  `edu_university` varchar(100) NOT NULL COMMENT '大学',
  `profession` varchar(100) NOT NULL COMMENT '旧版教育程度',
  `special` text NOT NULL COMMENT '特殊技能',
  `work` varchar(100) NOT NULL COMMENT '工作',
  `work_experience` text NOT NULL COMMENT '工作经验',
  `phone` varchar(20) NOT NULL COMMENT '手机号码',
  `email` varchar(100) NOT NULL COMMENT '电子邮箱',
  `qq` varchar(100) NOT NULL COMMENT 'QQ/微信',
  `cur_province` varchar(100) NOT NULL COMMENT '现居地 身份',
  `cur_city` varchar(100) NOT NULL COMMENT '现居地 城市',
  `cur_addr` varchar(100) NOT NULL COMMENT '现居地 详细地址',
  `_user_post_addr` varchar(200) DEFAULT NULL COMMENT '旧版邮寄地址 已废弃',
  `post_code` int(6) NOT NULL COMMENT '邮政编码',
  `family_title` varchar(20) NOT NULL COMMENT '家庭联系人称谓',
  `family_name` varchar(20) NOT NULL COMMENT '家庭联系人姓名',
  `family_contact` varchar(100) NOT NULL COMMENT '家庭联系人联系方式',
  `family_workplace` varchar(100) NOT NULL COMMENT '家庭联系人工作单位',
  `family_addr` varchar(200) NOT NULL COMMENT '家庭联系人地址',
  `urgent_title` varchar(20) NOT NULL COMMENT '紧急联系人称谓',
  `urgent_name` varchar(20) NOT NULL COMMENT '紧急联系人姓名',
  `urgent_contact` varchar(100) NOT NULL COMMENT '紧急联系人联系方式',
  `urgent_workplace` varchar(200) NOT NULL COMMENT '紧急联系人工作单位',
  `urgent_addr` varchar(500) NOT NULL,
  `is_disability` text COMMENT '伤残病历',
  `is_experience` text COMMENT '支教经验',
  `predict_deadline` varchar(50) NOT NULL COMMENT '支教期限',
  `begin_date` tinyint(4) NOT NULL COMMENT '开始支教时间',
  `cur_status` tinyint(3) NOT NULL COMMENT '现在的状态',
  `cur_income` text NOT NULL COMMENT '收入来源',
  `info_from` varchar(100) NOT NULL COMMENT '信息来源',
  `Q1` text NOT NULL,
  `Q2` text NOT NULL,
  `Q3` text NOT NULL,
  `Q4` text NOT NULL,
  `_Q1` text,
  `_Q2` text,
  `_Q3` text,
  `_Q4` text,
  `_Q5` text,
  `_Q6` text,
  `_Q7` text,
  `_Q8` text,
  `_Q9` text,
  `_Q10` text,
  `_Q11` text,
  `user_status` tinyint(3) DEFAULT NULL COMMENT '旧版用户状态 已废弃',
  `verify_admin_id` int(11) DEFAULT NULL COMMENT '审核管理员的ID',
  `verify_time` datetime DEFAULT NULL COMMENT '审核时间',
  `verify_status` tinyint(3) DEFAULT NULL COMMENT '审核状态 1 未审核 2 通过 3 未通过',
  `time` datetime NOT NULL COMMENT '申请时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='志愿者报名数据';


ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `t_volunteer`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `t_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `t_volunteer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

CREATE TABLE `t_option` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL COMMENT '设置名',
  `key` varchar(100) DEFAULT NULL COMMENT '变量名',
  `type` varchar(20) DEFAULT NULL COMMENT '类型text,textarea,radio,select',
  `data` text COMMENT '单选 以逗号分割',
  `value` text COMMENT '选项值',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `t_option` (`id`, `name`, `key`, `type`, `data`, `value`, `created_at`, `updated_at`) VALUES
(1, 'test1_name', 'test1', 'text', NULL, 'test1_value a', NULL, NULL),
(2, 'test2_name', 'test2', 'radio', 'o1,o2,o3', 'o1', NULL, NULL),
(3, 'test3_name', 'test3', 'textarea', NULL, 'test3_value b', NULL, NULL),
(4, 'test4_name', 'test4', 'select', 'o1,o2,o3,o4', 'o2', NULL, NULL);


ALTER TABLE `t_option`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);


ALTER TABLE `t_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
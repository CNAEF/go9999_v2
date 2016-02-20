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
    
  
#Nov 25 Lee added news table  #
CREATE TABLE IF NOT EXISTS `t_news` (
  `n_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `n_title` VARCHAR(200) NOT NULL,
  `n_content` VARCHAR(21600) NULL DEFAULT NULL,
  `n_readCount` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT 'how many time the news already be read',
  `n_creationUser_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  `n_creationDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`n_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;
ALTER TABLE `t_news`
MODIFY `n_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  
-- ALTER TABLE `t_volunteer` MODIFY
-- `special` text NULL COMMENT '特殊技能',
-- `work_experience` text  NULL COMMENT '工作经验',
-- `urgent_title` varchar(20)  NULL COMMENT '紧急联系人称谓',
-- `urgent_name` varchar(20)  NULL COMMENT '紧急联系人姓名',
-- `urgent_contact` varchar(100)  NULL COMMENT '紧急联系人联系方式',
-- `urgent_workplace` varchar(200)  NULL COMMENT '紧急联系人工作单位',
-- `urgent_addr` varchar(500) NULL;


ALTER TABLE `t_volunteer`
CHANGE `special` `special` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '特殊技能',
CHANGE `work_experience` `work_experience` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '工作经验',
CHANGE `urgent_title` `urgent_title` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '紧急联系人称谓',
CHANGE `urgent_name` `urgent_name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '紧急联系人姓名',
CHANGE `urgent_contact` `urgent_contact` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '紧急联系人联系方式',
CHANGE `urgent_workplace` `urgent_workplace` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '紧急联系人工作单位',
CHANGE `urgent_addr` `urgent_addr` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT ' ';

CREATE TABLE `t_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT '相册标题',
  `content` text COMMENT '简要说明',
  `author` varchar(100) DEFAULT NULL COMMENT '照片来源',
  `user_id` int(11) DEFAULT NULL COMMENT '后台 审核／创建人',
  `viewed` int(11) DEFAULT '0' COMMENT '查看人数',
  `verify_status` tinyint(3) DEFAULT '1' COMMENT '审核状态 1 待审核 2 通过 3 未通过',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `t_gallery_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(11) NOT NULL COMMENT '所属相册ID',
  `file` varchar(200) DEFAULT NULL COMMENT '上传文件路径',
  `sort_order` int(11) DEFAULT '0' COMMENT '显示顺序 大数优先',
  `is_recommend` tinyint(1) DEFAULT '0' COMMENT '首页推荐',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `t_gallery_image`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `t_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `t_gallery_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `t_gallery_image` ADD `title` VARCHAR(200) NULL AFTER `gallery_id`;


ALTER TABLE `t_volunteer` ADD `remark` TEXT NULL COMMENT '备注，仅管理员可见' AFTER `verify_status`, ADD `reason` TEXT NULL COMMENT '拒绝原因，用户可见' AFTER `remark`;


-- #new table for staff page#
CREATE TABLE IF NOT EXISTS `t_department` (
  `d_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `d_title` VARCHAR(45) NOT NULL COMMENT 'Department Name.',
  `d_desc` VARCHAR(500) NULL DEFAULT NULL,
  `d_creationDate` DATETIME NULL DEFAULT NULL,
  `d_creationUser_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`d_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `t_staff` (
  `s_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `s_user_id` INT(11) NULL DEFAULT NULL COMMENT 'the link between user and staff',
  `s_department_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  `s_name` VARCHAR(45) NULL DEFAULT NULL,
  `s_avatar` VARCHAR(2500) NULL DEFAULT NULL,
  `s_duty` VARCHAR(45) NULL DEFAULT NULL,
  `s_location` VARCHAR(500) NULL DEFAULT NULL,
  `s_tel` VARCHAR(45) NULL DEFAULT NULL,
  `s_desc` VARCHAR(5000) NULL DEFAULT NULL,
  `s_creationDate` DATETIME NULL DEFAULT NULL,
  `s_creationUser_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  INDEX `sUser_idx` (`s_user_id` ASC),
  INDEX `sDepartment_idx` (`s_department_id` ASC),
  CONSTRAINT `sUser`
    FOREIGN KEY (`s_user_id`)
    REFERENCES `t_user` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `sDepartment`
    FOREIGN KEY (`s_department_id`)
    REFERENCES `t_department` (`d_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;  


ALTER TABLE `t_department` 
ADD UNIQUE INDEX `d_title_UNIQUE` (`d_title` ASC),
ADD COLUMN `d_isShown` TINYINT(3) NULL DEFAULT 0 COMMENT 'display control, if 0 do not display this department on page.' AFTER `d_creationUser_id`;

ALTER TABLE `t_news` 
CHANGE COLUMN `n_content` `n_content` VARCHAR(21510) NULL DEFAULT NULL ;

ALTER TABLE `t_news` 
ADD COLUMN `n_shortDesc` VARCHAR(45) NULL DEFAULT NULL AFTER `n_title`;


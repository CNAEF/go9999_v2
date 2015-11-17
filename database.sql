CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `username` varchar(80) DEFAULT NULL,
  `nickname` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `last_ip` varchar(20) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `t_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `uri` varchar(1000) NOT NULL,
  `data` text,
  `ip` varchar(20) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `t_user` (`id`, `email`, `username`, `nickname`, `password`, `last_ip`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'cdbc311d6121f5545c5ed5a128a58f14', '127.0.0.1', NULL, NULL, 1446993800);

CREATE TABLE IF NOT EXISTS `t_volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` tinyint(3) NOT NULL,
  `birthday` int(11) NOT NULL,
  `_age` tinyint(3) NOT NULL,
  `married` tinyint(3) NOT NULL,
  `hometown_province` varchar(40) NOT NULL,
  `hometown_city` varchar(40) NOT NULL,
  `id_num` varchar(20) NOT NULL,
  `id_photo` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `edu_level` tinyint(3) NOT NULL,
  `edu_photo` varchar(100) NOT NULL,
  `_edu_high_level` varchar(100) NOT NULL,
  `edu_university` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `special` text NOT NULL,
  `work` varchar(100) NOT NULL,
  `work_experience` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qq` varchar(100) NOT NULL,
  `cur_province` varchar(100) NOT NULL,
  `cur_city` varchar(100) NOT NULL,
  `cur_addr` varchar(100) NOT NULL,
  `_user_post_addr` varchar(200) NOT NULL,
  `post_code` int(6) NOT NULL,
  `family_title` varchar(20) NOT NULL,
  `family_name` varchar(20) NOT NULL,
  `family_contact` varchar(100) NOT NULL,
  `family_workplace` varchar(100) NOT NULL,
  `family_addr` varchar(200) NOT NULL,
  `urgent_title` varchar(20) NOT NULL,
  `urgent_name` varchar(20) NOT NULL,
  `urgent_contact` varchar(100) NOT NULL,
  `urgent_workplace` varchar(200) NOT NULL,
  `is_disability` text NOT NULL,
  `is_experience` text NOT NULL,
  `predict_deadline` varchar(50) NOT NULL,
  `begin_date` tinyint(4) NOT NULL,
  `cur_status` tinyint(3) NOT NULL,
  `cur_income` text NOT NULL,
  `info_from` varchar(100) NOT NULL,
  `Q1` text NOT NULL,
  `Q2` text NOT NULL,
  `Q3` text NOT NULL,
  `Q4` text NOT NULL,
  `_Q1` text NOT NULL,
  `_Q2` text NOT NULL,
  `_Q3` text NOT NULL,
  `_Q4` text NOT NULL,
  `_Q5` text NOT NULL,
  `_Q6` text NOT NULL,
  `_Q7` text NOT NULL,
  `_Q8` text NOT NULL,
  `_Q9` text NOT NULL,
  `_Q10` text NOT NULL,
  `_Q11` text NOT NULL,
  `user_status` tinyint(3) NOT NULL,
  `verify_admin_id` int(11) NOT NULL,
  `verify_time` datetime NOT NULL,
  `verify_status` tinyint(3) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `t_volunteer`
  ADD PRIMARY KEY (`id`);
  
#Lee Fixed db bug, add increment to volunteer.pk#
ALTER TABLE `t_volunteer` 
CHANGE COLUMN `id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ;

#Lee Fixed db bug, remove no need not null#
ALTER TABLE `t_volunteer` 
CHANGE COLUMN `_age` `_age` TINYINT(3) NULL ,
CHANGE COLUMN `_edu_high_level` `_edu_high_level` VARCHAR(100) NULL ,
CHANGE COLUMN `_user_post_addr` `_user_post_addr` VARCHAR(200) NULL ,
CHANGE COLUMN `is_disability` `is_disability` TEXT NULL ,
CHANGE COLUMN `is_experience` `is_experience` TEXT NULL ,
CHANGE COLUMN `_Q1` `_Q1` TEXT NULL ,
CHANGE COLUMN `_Q2` `_Q2` TEXT NULL ,
CHANGE COLUMN `_Q3` `_Q3` TEXT NULL ,
CHANGE COLUMN `_Q4` `_Q4` TEXT NULL ,
CHANGE COLUMN `_Q5` `_Q5` TEXT NULL ,
CHANGE COLUMN `_Q6` `_Q6` TEXT NULL ,
CHANGE COLUMN `_Q7` `_Q7` TEXT NULL ,
CHANGE COLUMN `_Q8` `_Q8` TEXT NULL ,
CHANGE COLUMN `_Q9` `_Q9` TEXT NULL ,
CHANGE COLUMN `_Q10` `_Q10` TEXT NULL ,
CHANGE COLUMN `_Q11` `_Q11` TEXT NULL ,
CHANGE COLUMN `user_status` `user_status` TINYINT(3) NULL ,
CHANGE COLUMN `verify_admin_id` `verify_admin_id` INT(11) NULL ,
CHANGE COLUMN `verify_time` `verify_time` DATETIME NULL ,
CHANGE COLUMN `verify_status` `verify_status` TINYINT(3) NULL ;

#Lee Fixed db bug, add missing field#
ALTER TABLE `t_volunteer` 
ADD COLUMN `urgent_addr` VARCHAR(500) NOT NULL AFTER `urgent_workplace`;

#Lee Fixed db bug, remove require from urgent fields, because we may donot need it.#
ALTER TABLE `t_volunteer` 
CHANGE COLUMN `urgent_title` `urgent_title` VARCHAR(20) NULL ,
CHANGE COLUMN `urgent_name` `urgent_name` VARCHAR(20) NULL ,
CHANGE COLUMN `urgent_contact` `urgent_contact` VARCHAR(100) NULL ,
CHANGE COLUMN `urgent_workplace` `urgent_workplace` VARCHAR(200) NULL ,
CHANGE COLUMN `urgent_addr` `urgent_addr` VARCHAR(500) NULL ;

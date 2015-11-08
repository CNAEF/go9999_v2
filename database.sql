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
(1, 'admin@admin.com', 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', NULL, NULL, 1446993800);
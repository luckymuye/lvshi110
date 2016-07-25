DROP TABLE IF EXISTS `v9_liuyan`;
CREATE TABLE `v9_liuyan` (
  `lyid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `biaoti` char(50) NOT NULL DEFAULT '' COMMENT '标题',
  `lycontent` varchar(300) NOT NULL DEFAULT '' COMMENT '留言内容',
  `lydate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '留言时间',
  `userid` mediumint(8) unsigned DEFAULT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `contact` char(50) NOT NULL COMMENT '联系方式',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '留言IP',
  `ispass` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '审核状态',
  PRIMARY KEY (`lyid`),
  KEY `lydate` (`lydate`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8
DROP TABLE IF EXISTS `v9_liuyan`;
CREATE TABLE `v9_liuyan` (
  `lyid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '����ID',
  `biaoti` char(50) NOT NULL DEFAULT '' COMMENT '����',
  `lycontent` varchar(300) NOT NULL DEFAULT '' COMMENT '��������',
  `lydate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '����ʱ��',
  `userid` mediumint(8) unsigned DEFAULT NULL COMMENT '�û�ID',
  `username` char(20) NOT NULL COMMENT '�û���',
  `contact` char(50) NOT NULL COMMENT '��ϵ��ʽ',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '����IP',
  `ispass` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '���״̬',
  PRIMARY KEY (`lyid`),
  KEY `lydate` (`lydate`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8
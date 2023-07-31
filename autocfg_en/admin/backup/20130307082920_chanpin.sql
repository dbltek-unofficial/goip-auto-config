autocfg_en v1.1
DROP TABLE IF EXISTS chanpin
CREATE TABLE `chanpin` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `SN` varchar(80) NOT NULL DEFAULT '',  `type` varchar(80) NOT NULL DEFAULT '',  `classname` varchar(255) NOT NULL DEFAULT '',  `classid` int(11) NOT NULL DEFAULT '0',  `chanpin` varchar(255) NOT NULL DEFAULT '',  `chanpin2` varchar(255) NOT NULL DEFAULT '',  `chanpinid` int(11) NOT NULL DEFAULT '0',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=354 DEFAULT CHARSET=latin1
INSERT INTO chanpin VALUES('1','test1111','fxs','HT812','2','HT812_chanpin','HT812_chanpin2','1')
INSERT INTO chanpin VALUES('2','test2222','vp102','VP102','6','VP102_chanpin','VP102_chanpin2','1')
INSERT INTO chanpin VALUES('3','3333','4goip','4goip','8','4goip_chanpin','4goip_chanpin2','1')
INSERT INTO chanpin VALUES('4','111','goip','goip','7','goip_chanpin','goip_chanpin2','1')

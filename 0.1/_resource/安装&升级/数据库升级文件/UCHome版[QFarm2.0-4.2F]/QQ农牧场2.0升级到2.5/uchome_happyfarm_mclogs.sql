CREATE TABLE `uchome_happyfarm_mclogs` (              
 `id` int(11) NOT NULL AUTO_INCREMENT,          
 `type` tinyint(4) NOT NULL,                         
 `uid` int(11) NOT NULL,                             
 `fromid` int(11) NOT NULL,                          
 `count` text CHARACTER SET utf8 NOT NULL,           
 `iid` text CHARACTER SET utf8 NOT NULL,             
 `money` text CHARACTER SET utf8 NOT NULL,           
 `isread` int(11) NOT NULL,                          
 `time` int(11) NOT NULL,                            
  PRIMARY KEY (`id`)                                  
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
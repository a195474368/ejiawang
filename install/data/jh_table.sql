DROP TABLE IF EXISTS `jh_activity`;
CREATE TABLE `jh_activity` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `cate_id` mediumint(8) DEFAULT NULL,
  `city_id` mediumint(8) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `reg_time` date DEFAULT NULL,
  `bg_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `intro` varchar(510) DEFAULT NULL,
  `face_pic` varchar(128) DEFAULT NULL,
  `banner` varchar(128) DEFAULT NULL,
  `sign_num` int(11) DEFAULT '0',
  `tel` varchar(20) DEFAULT NULL,
  `addr` varchar(128) DEFAULT NULL,
  `template` varchar(64) DEFAULT NULL,
  `lng` varchar(15) DEFAULT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `traffic` varchar(255) DEFAULT NULL,
  `process` text,
  `sj` varchar(32) DEFAULT NULL,
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`,`area_id`,`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_cate`;
CREATE TABLE `jh_activity_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_ex`;
CREATE TABLE `jh_activity_ex` (
  `ex_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `contents` text,
  PRIMARY KEY (`ex_id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_sign`;
CREATE TABLE `jh_activity_sign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT NULL,
  `uid` mediumint(8) DEFAULT '0',
  `name` varchar(64) DEFAULT NULL,
  `addr` varchar(64) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `num` tinyint(4) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_admin`;
CREATE TABLE `jh_admin` (
  `admin_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(15) DEFAULT '',
  `passwd` char(32) DEFAULT '',
  `role_id` smallint(6) DEFAULT '0',
  `last_login` int(10) DEFAULT '0',
  `last_ip` varchar(15) DEFAULT '0.0.0.0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_admin_role`;
CREATE TABLE `jh_admin_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) DEFAULT '',
  `role` enum('editor','admin','system','developer') DEFAULT NULL,
  `priv` mediumtext,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_adv`;
CREATE TABLE `jh_adv` (
  `adv_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(20) DEFAULT 'default',
  `page` varchar(50) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `from` enum('text','photo','product','script','lunzhuan') DEFAULT 'photo',
  `config` mediumtext,
  `desc` varchar(255) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`adv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_adv_item`;
CREATE TABLE `jh_adv_item` (
  `item_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adv_id` smallint(6) unsigned DEFAULT '0',
  `city_ids` varchar(255) DEFAULT '',
  `title` varchar(100) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `script` mediumtext,
  `clicks` mediumint(8) unsigned DEFAULT '0',
  `stime` int(10) NOT NULL DEFAULT '0',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `closed` tinyint(1) unsigned DEFAULT '0',
  `ltime` int(10) NOT NULL DEFAULT '0',
  `desc` varchar(255) DEFAULT '',
  `target` enum('_self','_blank','_parent','_top') DEFAULT '_blank',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article`;
CREATE TABLE `jh_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` mediumint(8) unsigned DEFAULT '0',
  `from` enum('article','about','help','page') DEFAULT 'article',
  `page` varchar(15) DEFAULT '',
  `title` varchar(200) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `desc` varchar(255) DEFAULT '',
  `views` mediumint(8) DEFAULT '0',
  `favorites` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `photos` smallint(6) DEFAULT '0',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `hidden` tinyint(1) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`,`from`,`audit`,`closed`,`hidden`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_cate`;
CREATE TABLE `jh_article_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `level` tinyint(1) unsigned DEFAULT '1',
  `from` enum('about','help','page','article') DEFAULT 'article',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `hidden` tinyint(1) DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_comment`;
CREATE TABLE `jh_article_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `content` varchar(512) DEFAULT '',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_content`;
CREATE TABLE `jh_article_content` (
  `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) NOT NULL,
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `content` mediumtext,
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  PRIMARY KEY (`content_id`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_link`;
CREATE TABLE `jh_article_link` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask`;
CREATE TABLE `jh_ask` (
  `ask_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `seo_title` varchar(256) DEFAULT NULL,
  `seo_keyword` varchar(256) DEFAULT NULL,
  `seo_description` varchar(256) DEFAULT NULL,
  `cat_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT NULL,
  `intro` mediumtext,
  `dateline` int(11) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  `views` int(11) DEFAULT '0',
  `answer_num` int(11) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `answer_id` int(11) DEFAULT '0',
  `orderby` int(11) DEFAULT '0',
  PRIMARY KEY (`ask_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask_answer`;
CREATE TABLE `jh_ask_answer` (
  `answer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) DEFAULT NULL,
  `uid` mediumint(11) DEFAULT '0',
  `contents` varchar(1024) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`answer_id`),
  KEY `ask_id` (`ask_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask_cate`;
CREATE TABLE `jh_ask_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask_supply`;
CREATE TABLE `jh_ask_supply` (
  `supply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) DEFAULT '0',
  `contents` mediumtext,
  `dateline` int(11) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`supply_id`),
  KEY `ask_id` (`ask_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block`;
CREATE TABLE `jh_block` (
  `block_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(30) DEFAULT NULL,
  `page_id` smallint(6) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `from` varchar(50) DEFAULT '',
  `type` enum('hot','new') DEFAULT 'hot',
  `desc` varchar(200) DEFAULT '',
  `config` mediumtext,
  `limit` tinyint(3) DEFAULT '10',
  `ttl` mediumint(8) DEFAULT '900',
  `orderby` smallint(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block_item`;
CREATE TABLE `jh_block_item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_id` mediumint(8) unsigned DEFAULT '0',
  `itemId` int(10) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `city_ids` varchar(1024) DEFAULT '',
  `data` mediumtext,
  `expire_time` int(10) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `block_id` (`block_id`,`itemId`),
  KEY `orderby` (`orderby`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block_page`;
CREATE TABLE `jh_block_page` (
  `page_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case`;
CREATE TABLE `jh_case` (
  `case_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `home_id` mediumint(8) DEFAULT '0',
  `huxing_id` int(10) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `designer_id` mediumint(8) DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `size` mediumint(8) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `likes` mediumint(8) DEFAULT '0',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `intro` varchar(1024) DEFAULT NULL,
  `photos` mediumint(8) DEFAULT '0',
  `lastphotos` varchar(150) DEFAULT '',
  `lasttime` int(10) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(1) DEFAULT '0',
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_attr`;
CREATE TABLE `jh_case_attr` (
  `case_id` int(10) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) NOT NULL DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`case_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_comment`;
CREATE TABLE `jh_case_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `case_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `content` varchar(1024) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  `dateline` int(11) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_like`;
CREATE TABLE `jh_case_like` (
  `like_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_id` mediumint(9) DEFAULT '0',
  `uid` mediumint(9) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0',
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`like_id`),
  UNIQUE KEY `case_id` (`case_id`,`create_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_photo`;
CREATE TABLE `jh_case_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_id` mediumint(8) DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `size` smallint(6) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`),
  KEY `case_id` (`case_id`,`closed`,`orderby`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company`;
CREATE TABLE `jh_company` (
  `company_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `sort_name` varchar(20) DEFAULT NULL,
  `slogan` varchar(64) DEFAULT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `square_logo` varchar(128) DEFAULT NULL,
  `contact` varchar(32) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `qq` varchar(10) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `addr` varchar(128) DEFAULT NULL,
  `security` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `orderby` mediumint(8) DEFAULT '0',
  `lng` varchar(20) DEFAULT '0',
  `lat` varchar(20) DEFAULT '0',
  `scores` tinyint(3) DEFAULT '50',
  `score1` tinyint(3) DEFAULT '50',
  `score2` tinyint(3) DEFAULT '50',
  `score3` tinyint(3) DEFAULT '50',
  `score4` tinyint(3) DEFAULT '50',
  `score5` tinyint(3) DEFAULT '50',
  `score_num` mediumint(9) DEFAULT '0',
  `case_num` mediumint(8) DEFAULT '0',
  `tenders_num` mediumint(8) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `verify_name` tinyint(1) DEFAULT '0',
  `is_vip` tinyint(1) DEFAULT '0',
  `site_num` mediumint(8) DEFAULT '0',
  `case_time` int(11) DEFAULT '0',
  `site_time` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `answer_num` int(11) DEFAULT '0',
  PRIMARY KEY (`company_id`),
  KEY `city_id` (`city_id`,`uid`,`orderby`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_attr`;
CREATE TABLE `jh_company_attr` (
  `company_id` int(11) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `attr_value_id` int(11) DEFAULT NULL,
  UNIQUE KEY `home_id` (`company_id`,`attr_value_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_banner`;
CREATE TABLE `jh_company_banner` (
  `banner_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `pic` varchar(128) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `orderby` tinyint(1) DEFAULT '5',
  PRIMARY KEY (`banner_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_dianping`;
CREATE TABLE `jh_company_dianping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) NOT NULL,
  `uid` mediumint(8) DEFAULT '0',
  `score1` tinyint(1) DEFAULT NULL,
  `score2` tinyint(1) DEFAULT NULL,
  `score3` tinyint(1) DEFAULT NULL,
  `score4` tinyint(1) DEFAULT NULL,
  `score5` tinyint(1) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `home_name` varchar(64) DEFAULT NULL,
  `is_rec` tinyint(1) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `reply` varchar(255) DEFAULT NULL,
  `reply_time` int(11) DEFAULT NULL,
  `reply_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_ex`;
CREATE TABLE `jh_company_ex` (
  `company_id` int(11) NOT NULL DEFAULT '0',
  `intro` text,
  `template_id` varchar(32) DEFAULT 'default',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_news`;
CREATE TABLE `jh_company_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(9) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_pic`;
CREATE TABLE `jh_company_pic` (
  `pic_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `title` varchar(128) DEFAULT NULL,
  `pic` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`pic_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_youhui`;
CREATE TABLE `jh_company_youhui` (
  `youhui_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(5) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL,
  `bg_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `face_pic` varchar(128) DEFAULT NULL,
  `content` text,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `audit` tinyint(1) DEFAULT '0',
  `sign_num` int(11) DEFAULT '0',
  PRIMARY KEY (`youhui_id`),
  KEY `company_id` (`city_id`,`area_id`,`company_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_youhui_sign`;
CREATE TABLE `jh_company_youhui_sign` (
  `sign_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `youhui_id` int(11) DEFAULT NULL,
  `uid` mediumint(9) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `cantact` varchar(32) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sign_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_yuyue`;
CREATE TABLE `jh_company_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(9) DEFAULT '0',
  `company_id` mediumint(9) DEFAULT '0',
  `mobile` varchar(20) DEFAULT NULL,
  `cantact` varchar(32) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_connect`;
CREATE TABLE `jh_connect` (
  `connect_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT '1',
  `open_id` varchar(32) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `dateline` int(11) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  PRIMARY KEY (`connect_id`),
  UNIQUE KEY `type` (`type`,`open_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_area`;
CREATE TABLE `jh_data_area` (
  `area_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_name` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr`;
CREATE TABLE `jh_data_attr` (
  `attr_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `from_id` smallint(6) DEFAULT '0',
  `multi` enum('Y','N') DEFAULT 'Y',
  `filter` enum('Y','N') DEFAULT 'Y',
  `orderby` smallint(6) DEFAULT '0',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr_from`;
CREATE TABLE `jh_data_attr_from` (
  `from_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(30) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  PRIMARY KEY (`from_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr_value`;
CREATE TABLE `jh_data_attr_value` (
  `attr_value_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attr_id` smallint(6) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_censor`;
CREATE TABLE `jh_data_censor` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('shield','censor','filter') DEFAULT NULL,
  `find` varchar(255) DEFAULT '',
  `replace` varchar(255) DEFAULT '',
  `admin` varchar(20) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_city`;
CREATE TABLE `jh_data_city` (
  `city_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) DEFAULT '',
  `pinyin` varchar(50) DEFAULT '',
  `theme_id` smallint(6) DEFAULT '0',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_region`;
CREATE TABLE `jh_data_region` (
  `region_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `region_name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `path_ids` varchar(255) DEFAULT NULL,
  `level` tinyint(3) unsigned DEFAULT '1',
  `map_x` varchar(50) DEFAULT '',
  `map_y` varchar(50) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer`;
CREATE TABLE `jh_designer` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `school` varchar(100) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `case_num` smallint(6) DEFAULT '0',
  `about` mediumtext,
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `company_id` (`uid`,`company_id`,`orderby`,`audit`,`closed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_attr`;
CREATE TABLE `jh_designer_attr` (
  `uid` mediumint(8) unsigned NOT NULL,
  `attr_id` smallint(6) unsigned DEFAULT NULL,
  `attr_value_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_yuyue`;
CREATE TABLE `jh_designer_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(9) DEFAULT '0',
  `designer_id` mediumint(9) DEFAULT '0',
  `company_id` mediumint(9) DEFAULT '0',
  `mobile` varchar(20) DEFAULT NULL,
  `cantact` varchar(32) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`),
  KEY `designer_id` (`designer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary`;
CREATE TABLE `jh_diary` (
  `diary_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(5) DEFAULT '0',
  `uid` mediumint(9) DEFAULT '0',
  `title` varchar(128) DEFAULT NULL,
  `home_id` mediumint(9) DEFAULT '0',
  `face_pic` varchar(128) DEFAULT NULL,
  `company_id` mediumint(9) DEFAULT '0',
  `type_id` mediumint(9) DEFAULT '0',
  `way_id` mediumint(9) DEFAULT '0',
  `total_price` int(11) DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT '0000-00-00',
  `content_num` smallint(6) DEFAULT '0',
  `pv_num` mediumint(9) DEFAULT '0',
  `ping_num` mediumint(9) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`diary_id`),
  KEY `city_id` (`city_id`,`type_id`,`way_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary_comment`;
CREATE TABLE `jh_diary_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `diary_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `content` varchar(1024) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  `dateline` int(11) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary_detail`;
CREATE TABLE `jh_diary_detail` (
  `detail_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `diary_id` mediumint(9) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `contents` text,
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home`;
CREATE TABLE `jh_home` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `qq_qun` varchar(20) DEFAULT NULL,
  `face_pic` varchar(256) DEFAULT NULL,
  `jf` date DEFAULT NULL,
  `kp` date DEFAULT NULL,
  `kf` varchar(64) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `details` text,
  `pv_num` mediumint(8) DEFAULT '0',
  `photos` mediumint(8) DEFAULT '0',
  `case_num` smallint(6) DEFAULT '0',
  `site_num` mediumint(8) DEFAULT '0',
  `last_case_company_id` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_attr`;
CREATE TABLE `jh_home_attr` (
  `home_id` int(11) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `attr_value_id` int(11) DEFAULT NULL,
  UNIQUE KEY `home_id` (`home_id`,`attr_value_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_package`;
CREATE TABLE `jh_home_package` (
  `package_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `tuan_id` mediumint(8) DEFAULT '0',
  `huxing_id` mediumint(8) DEFAULT '0',
  `price` mediumint(8) DEFAULT '0',
  `total_price` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_pics`;
CREATE TABLE `jh_home_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `home_id` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `pic` varchar(256) NOT NULL,
  `title` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_site`;
CREATE TABLE `jh_home_site` (
  `site_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(5) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `home_id` mediumint(8) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL,
  `company_id` mediumint(8) DEFAULT NULL,
  `face_pic` varchar(128) DEFAULT NULL,
  `addr` varchar(128) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `intro` varchar(1024) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`site_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_site_notes`;
CREATE TABLE `jh_home_site_notes` (
  `notes_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` mediumint(8) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `content` text,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`notes_id`),
  KEY `site_id` (`site_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_survey`;
CREATE TABLE `jh_home_survey` (
  `survey_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(9) DEFAULT '0',
  `uid` mediumint(9) DEFAULT '0',
  `home_name` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_tuan`;
CREATE TABLE `jh_home_tuan` (
  `tuan_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `city_id` smallint(5) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `home_id` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `jieyue` mediumint(8) DEFAULT '0',
  `sign_num` mediumint(8) DEFAULT '0',
  `qy_num` mediumint(8) DEFAULT '0',
  `sg_num` mediumint(8) DEFAULT '0',
  `end_time` date DEFAULT '0000-00-00',
  `audit` tinyint(1) DEFAULT '0',
  `dateline` int(11) DEFAULT '0',
  `details` text,
  PRIMARY KEY (`tuan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_tuan_sign`;
CREATE TABLE `jh_home_tuan_sign` (
  `sign_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tuan_id` mediumint(8) DEFAULT NULL,
  `package_id` mediumint(8) DEFAULT NULL,
  `uid` mediumint(8) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `cantact` varchar(32) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sign_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_links`;
CREATE TABLE `jh_links` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `desc` varchar(512) DEFAULT '',
  `city_ids` varchar(512) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `jh_member`;
CREATE TABLE `jh_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) DEFAULT '',
  `passwd` char(32) DEFAULT '',
  `from` enum('member','shop','company','designer','mechanic') DEFAULT 'member',
  `mail` varchar(100) DEFAULT '@',
  `mobile` varchar(15) DEFAULT '',
  `credits` mediumint(8) DEFAULT '0',
  `gold` mediumint(8) DEFAULT '0',
  `gender` enum('man','woman') DEFAULT NULL,
  `city_id` smallint(6) DEFAULT '0',
  `realname` varchar(50) DEFAULT '',
  `face` varchar(150) DEFAULT '',
  `face_80` varchar(150) DEFAULT '',
  `face_32` varchar(150) DEFAULT '',
  `Y` smallint(4) DEFAULT '0',
  `M` tinyint(2) DEFAULT '0',
  `D` tinyint(2) DEFAULT '0',
  `verify` tinyint(1) unsigned DEFAULT '0',
  `uc_uid` mediumint(8) DEFAULT '0',
  `cart` varchar(1024) DEFAULT '',
  `lastlogin` int(10) unsigned DEFAULT '0',
  `loginip` char(15) DEFAULT '0.0.0.0',
  `closed` tinyint(1) unsigned DEFAULT '0',
  `regip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `uname` (`uname`),
  KEY `mail` (`mail`),
  KEY `mobile` (`mobile`),
  KEY `uc_uid` (`uc_uid`),
  KEY `__INDEX` (`verify`,`closed`,`dateline`,`from`,`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_favorite`;
CREATE TABLE `jh_member_favorite` (
  `fav_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `from` enum('hotel','article','photo','product','shop','car') DEFAULT NULL,
  `itemId` int(10) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`fav_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_fields`;
CREATE TABLE `jh_member_fields` (
  `uid` int(10) NOT NULL DEFAULT '0',
  `address` varchar(255) DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_log`;
CREATE TABLE `jh_member_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `from` enum('credits','gold','money') DEFAULT NULL,
  `number` smallint(6) DEFAULT '0',
  `log` varchar(255) DEFAULT '',
  `admin` varchar(255) DEFAULT '',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_verify`;
CREATE TABLE `jh_member_verify` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT '',
  `id_number` varchar(50) DEFAULT '',
  `id_photo` varchar(150) DEFAULT '',
  `mobile` varchar(50) DEFAULT NULL,
  `verify` tinyint(1) DEFAULT '0',
  `refuse` varchar(255) DEFAULT '',
  `verify_time` int(10) DEFAULT '0',
  `request_ip` varchar(15) DEFAULT '0.0.0.0',
  `request_time` int(10) DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_order`;
CREATE TABLE `jh_order` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `product_count` mediumint(8) DEFAULT '0',
  `product_number` smallint(6) DEFAULT '0',
  `product_price` decimal(10,2) DEFAULT '0.00',
  `freight` decimal(6,2) DEFAULT '0.00',
  `amount` decimal(10,2) DEFAULT '0.00',
  `contact` varchar(50) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `address` varchar(200) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `pay_status` tinyint(1) DEFAULT '0',
  `order_status` tinyint(1) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_order_product`;
CREATE TABLE `jh_order_product` (
  `order_pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) DEFAULT '0',
  `product_id` mediumint(8) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `number` smallint(6) DEFAULT '0',
  `price` decimal(10,2) DEFAULT '0.00',
  `freight` decimal(6,2) DEFAULT '0.00',
  `amount` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`order_pid`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_payment`;
CREATE TABLE `jh_payment` (
  `payment_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `payment` varchar(20) DEFAULT '',
  `title` varchar(100) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `config` mediumtext,
  `status` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_payment_log`;
CREATE TABLE `jh_payment_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `from` enum('order','gold') DEFAULT NULL,
  `payment` varchar(20) DEFAULT '',
  `trade_no` int(10) DEFAULT '0',
  `amount` decimal(10,2) DEFAULT '0.00',
  `payed` tinyint(1) DEFAULT '0',
  `payedip` varchar(15) DEFAULT '',
  `payedtime` int(10) DEFAULT '0',
  `pay_trade_no` varchar(50) DEFAULT '',
  `extra_pay` varchar(200) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `trade_no` (`trade_no`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product`;
CREATE TABLE `jh_product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT '',
  `shop_id` mediumint(8) DEFAULT '0',
  `cat_id` smallint(6) DEFAULT '0',
  `vcat_id` mediumint(8) DEFAULT '0',
  `brand_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `market_price` decimal(10,2) DEFAULT '0.00',
  `price` decimal(10,2) DEFAULT '0.00',
  `danwei` varchar(20) DEFAULT '',
  `freight` decimal(8,0) DEFAULT '0',
  `photo` varchar(150) DEFAULT '',
  `photos` smallint(6) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `score` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `books` mediumint(8) DEFAULT '0',
  `buys` mediumint(8) DEFAULT '0',
  `onsale` enum('Y','N') DEFAULT 'Y',
  `onpayment` tinyint(1) DEFAULT '0',
  `sale_type` tinyint(1) DEFAULT '0',
  `sale_time` date DEFAULT NULL,
  `sale_sku` mediumint(8) DEFAULT '0',
  `sale_count` mediumint(8) DEFAULT '0',
  `sale_remai` tinyint(1) DEFAULT '0',
  `sale_youhui` tinyint(1) DEFAULT '0',
  `sale_tuijian` tinyint(1) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `lastupdate` int(10) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `shop_id` (`shop_id`,`orderby`,`audit`,`closed`,`onsale`,`sale_type`,`sale_remai`,`sale_youhui`,`sale_tuijian`),
  KEY `price` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`price`,`orderby`,`audit`,`closed`,`onsale`),
  KEY `views` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`freight`,`views`,`orderby`,`audit`,`closed`),
  KEY `buys` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`score`,`buys`,`orderby`,`audit`,`closed`,`onsale`,`books`),
  KEY `sale` (`onsale`,`sale_type`,`sale_remai`,`sale_youhui`,`sale_tuijian`,`onpayment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_attr`;
CREATE TABLE `jh_product_attr` (
  `product_id` int(10) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) NOT NULL DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_comment`;
CREATE TABLE `jh_product_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) unsigned DEFAULT '0',
  `product_id` int(10) unsigned DEFAULT '0',
  `uid` mediumint(8) unsigned DEFAULT '0',
  `score` tinyint(3) unsigned DEFAULT '0',
  `content` varchar(255) DEFAULT '',
  `reply` varchar(255) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `shop_id` (`audit`,`shop_id`),
  KEY `product_id` (`audit`,`product_id`),
  KEY `uid` (`uid`,`audit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_fields`;
CREATE TABLE `jh_product_fields` (
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `info` mediumtext,
  `clientip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_photo`;
CREATE TABLE `jh_product_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `photo` varchar(510) DEFAULT '',
  `title` varchar(100) DEFAULT '',
  `size` smallint(6) unsigned DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `product_id` (`product_id`,`orderby`),
  KEY `shop_id` (`shop_id`,`orderby`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_session`;
CREATE TABLE `jh_session` (
  `SSID` char(35) NOT NULL,
  `uid` mediumint(8) DEFAULT '0',
  `city_id` mediumint(8) DEFAULT '0',
  `ip` char(15) DEFAULT '0.0.0.0',
  `data` varchar(1024) DEFAULT NULL,
  `lastupdate` int(10) DEFAULT '0',
  PRIMARY KEY (`SSID`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop`;
CREATE TABLE `jh_shop` (
  `shop_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `money` decimal(10,2) DEFAULT '0.00',
  `cat_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(6) DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `name` varchar(50) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `contact` varchar(50) DEFAULT '',
  `phone` varchar(20) DEFAULT '',
  `xiaobao` mediumint(8) DEFAULT '0',
  `views` int(10) DEFAULT '0',
  `credit` int(10) DEFAULT '0',
  `score` int(10) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `products` mediumint(6) DEFAULT '0',
  `verify_name` tinyint(1) DEFAULT '0',
  `is_vip` tinyint(1) DEFAULT '0',
  `lng` varchar(15) DEFAULT '',
  `lat` varchar(15) DEFAULT '',
  `orderby` smallint(6) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_attr`;
CREATE TABLE `jh_shop_attr` (
  `attr_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `cat_id` mediumint(8) DEFAULT '0',
  `multi` enum('Y','N') DEFAULT 'Y',
  `filter` enum('Y','N') DEFAULT 'Y',
  `orderby` smallint(6) DEFAULT '0',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_attr_value`;
CREATE TABLE `jh_shop_attr_value` (
  `attr_value_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attr_id` smallint(6) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_banner`;
CREATE TABLE `jh_shop_banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `photo` varchar(150) DEFAULT '',
  `title` varchar(150) DEFAULT '',
  `link` varchar(200) DEFAULT '',
  `orderby` smallint(50) DEFAULT '50',
  `dateline` int(11) DEFAULT '10',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_brand`;
CREATE TABLE `jh_shop_brand` (
  `brand_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `url` varchar(150) DEFAULT '',
  `desc` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`brand_id`),
  KEY `audit` (`audit`,`closed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_cate`;
CREATE TABLE `jh_shop_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `brand_ids` varchar(200) DEFAULT '',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_comment`;
CREATE TABLE `jh_shop_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) unsigned DEFAULT '0',
  `uid` mediumint(8) unsigned DEFAULT '0',
  `score` tinyint(1) unsigned DEFAULT '1',
  `content` varchar(255) DEFAULT '',
  `reply` varchar(255) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_coupon`;
CREATE TABLE `jh_shop_coupon` (
  `coupon_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `money` smallint(6) DEFAULT '0',
  `min_amount` mediumint(8) DEFAULT '0',
  `content` mediumtext,
  `stime` int(10) DEFAULT '0',
  `ltime` int(10) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `downloads` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`coupon_id`),
  KEY `shop_id` (`shop_id`,`audit`,`closed`,`ltime`,`orderby`),
  KEY `city_id` (`city_id`,`audit`,`closed`,`ltime`,`orderby`,`downloads`,`area_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_coupon_download`;
CREATE TABLE `jh_shop_coupon_download` (
  `download_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` int(10) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `contact` varchar(20) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `number` varchar(20) DEFAULT '',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`download_id`),
  KEY `coupon_id` (`coupon_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_fields`;
CREATE TABLE `jh_shop_fields` (
  `shop_id` mediumint(8) NOT NULL DEFAULT '0',
  `banner` varchar(150) DEFAULT '',
  `fox` varchar(20) DEFAULT '',
  `mail` varchar(50) DEFAULT '',
  `qq` varchar(50) DEFAULT '',
  `hours` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT '',
  `jiaotong` varchar(255) DEFAULT '',
  `bulletin` varchar(255) DEFAULT '',
  `info` mediumtext,
  `psaz` mediumtext,
  `dgxz` mediumtext,
  `skin` varchar(50) DEFAULT '',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(200) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_money`;
CREATE TABLE `jh_shop_money` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `money` decimal(10,2) DEFAULT '0.00',
  `log` varchar(200) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_news`;
CREATE TABLE `jh_shop_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `from` enum('news','active') DEFAULT 'news',
  `title` varchar(150) DEFAULT '',
  `content` mediumtext,
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `shop_id` (`shop_id`,`audit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_service`;
CREATE TABLE `jh_shop_service` (
  `shop_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `zhizhao` enum('Y','N') DEFAULT 'N',
  `A` enum('Y','N') DEFAULT 'N',
  `B` enum('Y','N') DEFAULT 'N',
  `C` enum('Y','N') DEFAULT 'N',
  `D` enum('Y','N') DEFAULT 'N',
  `E` enum('Y','N') DEFAULT 'N',
  `F` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_vcate`;
CREATE TABLE `jh_shop_vcate` (
  `vcat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`vcat_id`),
  KEY `shop_id` (`shop_id`,`orderby`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_yuyue`;
CREATE TABLE `jh_shop_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `product_id` int(10) DEFAULT '0',
  `contact` varchar(20) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `address` varchar(150) DEFAULT '',
  `note` varchar(255) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_config`;
CREATE TABLE `jh_system_config` (
  `k` varchar(30) NOT NULL,
  `v` mediumtext,
  `title` varchar(30) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_logs`;
CREATE TABLE `jh_system_logs` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) DEFAULT '',
  `action` varchar(50) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `content` mediumtext,
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_module`;
CREATE TABLE `jh_system_module` (
  `mod_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `module` enum('top','menu','module') DEFAULT 'module',
  `level` tinyint(1) DEFAULT '3',
  `ctl` varchar(20) DEFAULT '',
  `act` varchar(20) DEFAULT '',
  `title` varchar(20) DEFAULT '',
  `visible` tinyint(1) DEFAULT '1',
  `parent_id` smallint(6) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`mod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_systmpl`;
CREATE TABLE `jh_systmpl` (
  `systmpl_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `from` enum('seo','sms','mail') DEFAULT NULL,
  `key` varchar(50) DEFAULT '',
  `intro` varchar(1024) DEFAULT NULL,
  `tmpl` mediumtext,
  `tmpl1` mediumtext,
  `tmpl2` mediumtext,
  `dateline` int(10) DEFAULT '0',
  `is_open` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`systmpl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders`;
CREATE TABLE `jh_tenders` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `city_id` smallint(5) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `uid` mediumint(8) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `home_id` mediumint(8) DEFAULT '0',
  `home_name` varchar(64) DEFAULT NULL,
  `type_id` smallint(5) DEFAULT '0',
  `style_id` smallint(5) DEFAULT '0',
  `budget_id` smallint(5) DEFAULT '0',
  `service_id` smallint(5) DEFAULT '0',
  `house_type_id` smallint(5) DEFAULT '0',
  `way_id` smallint(6) DEFAULT '0',
  `addr` varchar(128) DEFAULT NULL,
  `demand` varchar(1024) DEFAULT NULL,
  `feedback` varchar(1024) DEFAULT NULL,
  `start_time` varchar(32) DEFAULT NULL,
  `area` mediumint(8) DEFAULT NULL,
  `gold` mediumint(8) DEFAULT '0',
  `num` tinyint(3) DEFAULT '3',
  `num2` tinyint(3) DEFAULT '0',
  `pv_num` int(11) DEFAULT '0',
  `sign_company_id` mediumint(8) DEFAULT '0',
  `sign_time` int(10) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`,`audit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_look`;
CREATE TABLE `jh_tenders_look` (
  `look_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tenders_id` mediumint(9) DEFAULT NULL,
  `company_id` mediumint(9) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `is_signed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`look_id`),
  UNIQUE KEY `tenders_id` (`tenders_id`,`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_setting`;
CREATE TABLE `jh_tenders_setting` (
  `setting_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_tracking`;
CREATE TABLE `jh_tenders_tracking` (
  `tracking_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `look_id` mediumint(8) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `create_ip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `reply` varchar(1024) DEFAULT NULL,
  `reply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`tracking_id`),
  KEY `look_id` (`look_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_themes`;
CREATE TABLE `jh_themes` (
  `theme_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `config` mediumtext,
  `default` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`theme_id`),
  KEY `theme` (`theme`,`default`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_upload_photo`;
CREATE TABLE `jh_upload_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(30) DEFAULT '',
  `hash` char(32) DEFAULT '',
  `name` varchar(255) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `size` smallint(6) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`),
  KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `jh_mechanic`;
CREATE TABLE IF NOT EXISTS `jh_mechanic` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `tel` varchar(20) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `about` mediumtext ,
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `jh_mechanic_attr`;
CREATE TABLE IF NOT EXISTS `jh_mechanic_attr` (
  `uid` mediumint(8) unsigned NOT NULL,
  `attr_id` smallint(6) unsigned DEFAULT NULL,
  `attr_value_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


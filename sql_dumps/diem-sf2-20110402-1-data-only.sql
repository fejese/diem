-- MySQL dump 10.13  Distrib 5.1.55, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: diem-sf2
-- ------------------------------------------------------
-- Server version	5.1.55

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `dm_auto_seo`
--

LOCK TABLES `dm_auto_seo` WRITE;
/*!40000 ALTER TABLE `dm_auto_seo` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_auto_seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_auto_seo_translation`
--

LOCK TABLES `dm_auto_seo_translation` WRITE;
/*!40000 ALTER TABLE `dm_auto_seo_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_auto_seo_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_catalogue`
--

LOCK TABLES `dm_catalogue` WRITE;
/*!40000 ALTER TABLE `dm_catalogue` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_catalogue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_error`
--

LOCK TABLES `dm_error` WRITE;
/*!40000 ALTER TABLE `dm_error` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_error` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_group`
--

LOCK TABLES `dm_group` WRITE;
/*!40000 ALTER TABLE `dm_group` DISABLE KEYS */;
INSERT INTO `dm_group` VALUES (1,'developer','Able to read and update source code','2011-03-29 16:24:45','2011-03-29 16:24:45'),(2,'seo','Seo knowledge','2011-03-29 16:24:45','2011-03-29 16:24:45'),(3,'integrator','Integrator','2011-03-29 16:24:45','2011-03-29 16:24:45'),(4,'webmaster 1','Webmaster level 1','2011-03-29 16:24:45','2011-03-29 16:24:45'),(5,'writer','Writer','2011-03-29 16:24:45','2011-03-29 16:24:45'),(6,'front_editor','Can fast edit front widgets','2011-03-29 16:24:45','2011-03-29 16:24:45');
/*!40000 ALTER TABLE `dm_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_group_permission`
--

LOCK TABLES `dm_group_permission` WRITE;
/*!40000 ALTER TABLE `dm_group_permission` DISABLE KEYS */;
INSERT INTO `dm_group_permission` VALUES (1,1),(2,2),(2,26),(2,30),(2,31),(2,33),(2,34),(2,37),(2,38),(2,39),(2,41),(2,42),(2,43),(2,44),(2,45),(2,48),(2,49),(2,52),(3,2),(3,5),(3,9),(3,10),(3,11),(3,12),(3,13),(3,14),(3,15),(3,23),(3,24),(3,25),(3,26),(3,27),(3,28),(3,30),(3,31),(3,32),(3,33),(3,34),(3,35),(3,36),(3,48),(3,49),(3,52),(3,53),(3,54),(3,58),(4,2),(4,9),(4,26),(4,27),(4,30),(4,31),(4,32),(4,33),(4,34),(4,47),(4,48),(4,49),(4,52),(4,53),(5,2),(5,9),(5,26),(5,27),(5,30),(5,34),(5,48),(5,49),(6,16),(6,17),(6,18),(6,19),(6,20),(6,21),(6,22);
/*!40000 ALTER TABLE `dm_group_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_lock`
--

LOCK TABLES `dm_lock` WRITE;
/*!40000 ALTER TABLE `dm_lock` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_mail_template`
--

LOCK TABLES `dm_mail_template` WRITE;
/*!40000 ALTER TABLE `dm_mail_template` DISABLE KEYS */;
INSERT INTO `dm_mail_template` VALUES (1,'dm_user_forgot_password','username, email, step2_url','2011-03-29 16:24:46','2011-03-29 16:24:46');
/*!40000 ALTER TABLE `dm_mail_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_mail_template_translation`
--

LOCK TABLES `dm_mail_template_translation` WRITE;
/*!40000 ALTER TABLE `dm_mail_template_translation` DISABLE KEYS */;
INSERT INTO `dm_mail_template_translation` VALUES (1,'en','Sent to a user that requests a new password','Diem-ipsum: change your password','Hello %username%\nYou can choose a new password at %step2_url%','webmaster@domain.com','%email%',NULL,NULL,NULL,NULL,NULL,0,1);
/*!40000 ALTER TABLE `dm_mail_template_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_media`
--

LOCK TABLES `dm_media` WRITE;
/*!40000 ALTER TABLE `dm_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_media_folder`
--

LOCK TABLES `dm_media_folder` WRITE;
/*!40000 ALTER TABLE `dm_media_folder` DISABLE KEYS */;
INSERT INTO `dm_media_folder` VALUES (1,'',1,4,0),(2,'assets',2,3,1);
/*!40000 ALTER TABLE `dm_media_folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_page`
--

LOCK TABLES `dm_page` WRITE;
/*!40000 ALTER TABLE `dm_page` DISABLE KEYS */;
INSERT INTO `dm_page` VALUES (1,'main','root',0,NULL,1,6,0),(2,'main','error404',0,NULL,4,5,1),(3,'main','signin',0,NULL,2,3,1);
/*!40000 ALTER TABLE `dm_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_page_translation`
--

LOCK TABLES `dm_page_translation` WRITE;
/*!40000 ALTER TABLE `dm_page_translation` DISABLE KEYS */;
INSERT INTO `dm_page_translation` VALUES (1,'en','','Home','Home',NULL,NULL,NULL,'snthdk',1,0,1),(2,'en','error404','Page not found','Page not found',NULL,NULL,NULL,'snthdk',1,0,1),(3,'en','security/signin','Signin','Signin',NULL,NULL,NULL,'snthdk',1,0,1);
/*!40000 ALTER TABLE `dm_page_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_permission`
--

LOCK TABLES `dm_permission` WRITE;
/*!40000 ALTER TABLE `dm_permission` DISABLE KEYS */;
INSERT INTO `dm_permission` VALUES (1,'system','System administrator','2011-03-29 16:24:44','2011-03-29 16:24:44'),(2,'admin','Log into administration','2011-03-29 16:24:44','2011-03-29 16:24:44'),(3,'clear_cache','Clear the cache','2011-03-29 16:24:44','2011-03-29 16:24:44'),(4,'log','Manage logs','2011-03-29 16:24:44','2011-03-29 16:24:44'),(5,'code_editor','Use admin and front code editors','2011-03-29 16:24:44','2011-03-29 16:24:44'),(6,'security_user','Manage security users','2011-03-29 16:24:44','2011-03-29 16:24:44'),(7,'security_permission','Manage security permissions','2011-03-29 16:24:44','2011-03-29 16:24:44'),(8,'security_group','Manage security groups','2011-03-29 16:24:44','2011-03-29 16:24:44'),(9,'content','CRUD dynamic content in admin','2011-03-29 16:24:44','2011-03-29 16:24:44'),(10,'zone_add','Add zones','2011-03-29 16:24:44','2011-03-29 16:24:44'),(11,'zone_edit','Edit zones','2011-03-29 16:24:44','2011-03-29 16:24:44'),(12,'zone_delete','Delete zones','2011-03-29 16:24:44','2011-03-29 16:24:44'),(13,'widget_add','Add widgets','2011-03-29 16:24:44','2011-03-29 16:24:44'),(14,'widget_edit','Edit widgets','2011-03-29 16:24:44','2011-03-29 16:24:44'),(15,'widget_delete','Delete widgets','2011-03-29 16:24:44','2011-03-29 16:24:44'),(16,'widget_edit_fast','Can fast edit widgets','2011-03-29 16:24:44','2011-03-29 16:24:44'),(17,'widget_edit_fast_record','Fast edit widget record','2011-03-29 16:24:44','2011-03-29 16:24:44'),(18,'widget_edit_fast_content_title','Fast edit widget content title','2011-03-29 16:24:44','2011-03-29 16:24:44'),(19,'widget_edit_fast_content_link','Fast edit widget content link','2011-03-29 16:24:44','2011-03-29 16:24:44'),(20,'widget_edit_fast_content_image','Fast edit widget content image','2011-03-29 16:24:44','2011-03-29 16:24:44'),(21,'widget_edit_fast_content_text','Fast edit widget content text','2011-03-29 16:24:44','2011-03-29 16:24:44'),(22,'widget_edit_fast_navigation_menu','Fast edit widget navigation menu','2011-03-29 16:24:44','2011-03-29 16:24:44'),(23,'page_add','Add pages','2011-03-29 16:24:44','2011-03-29 16:24:44'),(24,'page_edit','Edit pages','2011-03-29 16:24:44','2011-03-29 16:24:44'),(25,'page_delete','Delete pages','2011-03-29 16:24:44','2011-03-29 16:24:44'),(26,'page_bar_admin','See page bar in admin','2011-03-29 16:24:44','2011-03-29 16:24:44'),(27,'media_bar_admin','See media bar in admin','2011-03-29 16:24:44','2011-03-29 16:24:44'),(28,'media_library','Use media library in admin','2011-03-29 16:24:44','2011-03-29 16:24:44'),(29,'media_ignore_whitelist','Upload media with any filetype','2011-03-29 16:24:44','2011-03-29 16:24:44'),(30,'tool_bar_admin','See toolbar in admin','2011-03-29 16:24:44','2011-03-29 16:24:44'),(31,'page_bar_front','See page bar in front','2011-03-29 16:24:44','2011-03-29 16:24:44'),(32,'media_bar_front','See media bar in front','2011-03-29 16:24:44','2011-03-29 16:24:44'),(33,'tool_bar_front','See toolbar in front','2011-03-29 16:24:44','2011-03-29 16:24:44'),(34,'site_view','See non-public website and inactive pages','2011-03-29 16:24:44','2011-03-29 16:24:44'),(35,'loremize','Create automatic random content','2011-03-29 16:24:44','2011-03-29 16:24:44'),(36,'export_table','Export table contents','2011-03-29 16:24:44','2011-03-29 16:24:44'),(37,'sitemap','Regenerate sitemap','2011-03-29 16:24:44','2011-03-29 16:24:44'),(38,'automatic_metas','Configure automatic pages metas','2011-03-29 16:24:44','2011-03-29 16:24:44'),(39,'manual_metas','Configure manually pages metas','2011-03-29 16:24:44','2011-03-29 16:24:44'),(40,'manage_pages','Move and sort pages','2011-03-29 16:24:44','2011-03-29 16:24:44'),(41,'url_redirection','Configure url redirections','2011-03-29 16:24:44','2011-03-29 16:24:44'),(42,'use_google_analytics','Use google analytics','2011-03-29 16:24:44','2011-03-29 16:24:44'),(43,'google_analytics','Configure google analytics','2011-03-29 16:24:45','2011-03-29 16:24:45'),(44,'use_google_webmaster_tools','Use google webmaster tools','2011-03-29 16:24:45','2011-03-29 16:24:45'),(45,'google_webmaster_tools','Configure google webmaster tools','2011-03-29 16:24:45','2011-03-29 16:24:45'),(46,'xiti','Configure Xiti','2011-03-29 16:24:45','2011-03-29 16:24:45'),(47,'search_engine','Manage internal search engine','2011-03-29 16:24:45','2011-03-29 16:24:45'),(48,'see_log','See the logs','2011-03-29 16:24:45','2011-03-29 16:24:45'),(49,'see_chart','See the charts','2011-03-29 16:24:45','2011-03-29 16:24:45'),(50,'see_diagrams','See the developer diagrams','2011-03-29 16:24:45','2011-03-29 16:24:45'),(51,'see_server','See the server infos','2011-03-29 16:24:45','2011-03-29 16:24:45'),(52,'config_panel','Use the configuration panel','2011-03-29 16:24:45','2011-03-29 16:24:45'),(53,'translation','Use the translation interface','2011-03-29 16:24:45','2011-03-29 16:24:45'),(54,'layout','Use the layout interface','2011-03-29 16:24:45','2011-03-29 16:24:45'),(55,'sent_mail','See mails sent by server','2011-03-29 16:24:45','2011-03-29 16:24:45'),(56,'mail_template','Configure mail templates','2011-03-29 16:24:45','2011-03-29 16:24:45'),(57,'error_log','See error log','2011-03-29 16:24:45','2011-03-29 16:24:45'),(58,'interface_settings','Manage interface settings like default image resize method','2011-03-29 16:24:45','2011-03-29 16:24:45');
/*!40000 ALTER TABLE `dm_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_redirect`
--

LOCK TABLES `dm_redirect` WRITE;
/*!40000 ALTER TABLE `dm_redirect` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_redirect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_remember_key`
--

LOCK TABLES `dm_remember_key` WRITE;
/*!40000 ALTER TABLE `dm_remember_key` DISABLE KEYS */;
INSERT INTO `dm_remember_key` VALUES ('127.0.0.1',1,'f81e74c3d739effa469018664128e10b','2011-03-29 16:27:47');
/*!40000 ALTER TABLE `dm_remember_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_sent_mail`
--

LOCK TABLES `dm_sent_mail` WRITE;
/*!40000 ALTER TABLE `dm_sent_mail` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_sent_mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_setting`
--

LOCK TABLES `dm_setting` WRITE;
/*!40000 ALTER TABLE `dm_setting` DISABLE KEYS */;
INSERT INTO `dm_setting` VALUES (1,'site_name','text',NULL,'site',NULL),(2,'site_active','boolean',NULL,'site',NULL),(3,'site_indexable','boolean',NULL,'site',NULL),(4,'site_working_copy','boolean',NULL,'site',NULL),(5,'ga_key','text',NULL,'tracking','google_analytics'),(6,'ga_token','text',NULL,'internal','google_analytics'),(7,'gwt_key','text',NULL,'tracking','google_webmaster_tools'),(8,'xiti_code','textarea',NULL,'tracking','xiti'),(9,'search_stop_words','textarea',NULL,'search engine','search_engine'),(10,'base_urls','textarea',NULL,'internal','system'),(11,'image_resize_method','select','fit=Fit scale=Scale inflate=Inflate top=Top right=Right left=Left bottom=Bottom center=Center','interface','interface_settings'),(12,'image_resize_quality','number',NULL,'interface','interface_settings'),(13,'link_external_blank','boolean',NULL,'interface','interface_settings'),(14,'link_current_span','boolean',NULL,'interface','interface_settings'),(15,'link_use_page_title','boolean',NULL,'interface','interface_settings'),(16,'title_prefix','text',NULL,'seo','manual_metas'),(17,'title_suffix','text',NULL,'seo','manual_metas'),(18,'smart_404','boolean',NULL,'seo','url_redirection');
/*!40000 ALTER TABLE `dm_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_setting_translation`
--

LOCK TABLES `dm_setting_translation` WRITE;
/*!40000 ALTER TABLE `dm_setting_translation` DISABLE KEYS */;
INSERT INTO `dm_setting_translation` VALUES (1,'en','The site name','Diem-ipsum','Diem-ipsum'),(2,'en','Is the site ready for visitors ?','1','1'),(3,'en','Is the site ready for search engine crawlers ?','1','1'),(4,'en','Is this site the current working copy ?','1','1'),(5,'en','The google analytics key without javascript stuff ( e.g. UA-9876614-1 )',NULL,''),(6,'en','Auth token gor Google Analytics, computed from password',NULL,''),(7,'en','The google webmaster tools filename without google and .html ( e.g. a913b555ba9b4f13 )',NULL,''),(8,'en','The xiti html code',NULL,''),(9,'en','Words to exclude from searches (e.g. the, a, to )',NULL,''),(10,'en','Diem base urls for different applications/environments/cultures','{\"admin-dev\":\"http:\\/\\/localhost\\/diem-ipsum\\/web\\/admin_dev.php\",\"front-dev\":\"http:\\/\\/localhost\\/diem-ipsum\\/web\\/dev.php\"}',''),(11,'en','Default method when an image needs to be resized','center','center'),(12,'en','Jpeg default quality when generating thumbnails','95','95'),(13,'en','Links to other domain get automatically a _blank target',NULL,'0'),(14,'en','Links to current page are changed from <a> to <span>','1','1'),(15,'en','Add an automatic title on link based on the target page title','1','1'),(16,'en','Append something at the beginning of all pages title',NULL,''),(17,'en','Append something at the end of all pages title',' | Diem-ipsum',' | Diem-ipsum'),(18,'en','When a page is not found, user is redirect to a similar page. The internal search index is used to find the best page for requested url.','1','1');
/*!40000 ALTER TABLE `dm_setting_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_trans_unit`
--

LOCK TABLES `dm_trans_unit` WRITE;
/*!40000 ALTER TABLE `dm_trans_unit` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_trans_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_user`
--

LOCK TABLES `dm_user` WRITE;
/*!40000 ALTER TABLE `dm_user` DISABLE KEYS */;
INSERT INTO `dm_user` VALUES (1,'admin','admin@diem-ipsum.com','sha1','c8f9fe9f39e87535a617ef0a8a775220','e22f3d13431791ee0d348ca54820012910a81b48',1,1,'2011-03-29 16:27:47',NULL,'2011-03-29 16:24:45','2011-03-29 16:24:45');
/*!40000 ALTER TABLE `dm_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_user_group`
--

LOCK TABLES `dm_user_group` WRITE;
/*!40000 ALTER TABLE `dm_user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_user_permission`
--

LOCK TABLES `dm_user_permission` WRITE;
/*!40000 ALTER TABLE `dm_user_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_user_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_widget`
--

LOCK TABLES `dm_widget` WRITE;
/*!40000 ALTER TABLE `dm_widget` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_widget_translation`
--

LOCK TABLES `dm_widget_translation` WRITE;
/*!40000 ALTER TABLE `dm_widget_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_widget_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dm_zone`
--

LOCK TABLES `dm_zone` WRITE;
/*!40000 ALTER TABLE `dm_zone` DISABLE KEYS */;
INSERT INTO `dm_zone` VALUES (1,NULL,'80%',1,1,10),(2,'elso_gyermek','50%',1,2,7),(3,'masodik_gyermek','50%',2,8,9),(4,'elso_elso',NULL,NULL,3,4),(5,'elso_masodik',NULL,NULL,5,6);
/*!40000 ALTER TABLE `dm_zone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','kepten@gmail.com','kepten@gmail.com',1,'sha512','15ghhtx3hs74000owc04wko4kkc8o8k','07d36e23c210b29a720769e23a1b593e04e4d52e3c6801b23aa81ce825d4aef586e895c4c9e141ffafc484c60aa5fd6c664556bd50dc26873175cadd235f252d','2011-04-01 12:29:22','2011-04-01 12:31:21','2011-04-01 12:31:21',0,0,NULL,'3w89za7a1wmccokks40c0848c0woc84o40c8ws8sg4ksokocok',NULL,'a:1:{i:0;s:15:\"ROLE_SUPERADMIN\";}',0,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-04-02 19:56:21

<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *           				  		  Webspell-RM      /                        /   /               								  *
 * 							          -----------__---/__---__------__----__---/---/-----__---- _  _ -       						  *
 *							           | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /           					  *
 *							          _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_    							  *
 *      						                   Free Content / Management System                 								  *
 *                               						       /                                    								  *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version			webspell-rm 																									  *
 * @subpackage		Webspell-RM Templates 																							  *
 *																																	  *
 * @copyright		2018-2022 by webspell-rm.de <https://www.webspell-rm.de>														  *
 * @support			For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI			webspell-rm.de <https://www.webspell-rm.de/wiki.html>															  *
 *																																	  *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license			Script runs under the GNU GENERAL PUBLIC LICENCE																  *
 *					It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>					  *
 *																																	  *
 * @author			Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)												  *
 * @copyright		2005-2018 by webspell.org / webspell.info 																		  *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * 																																	  *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

##### Install für Templates ###########################################################################################################
global $userID,$_database,$add_database_install,$str,$str2,$modulname,$add_plugin_manager,$add_navigation,$navi_link,$add_dashboard_navigation,$dashnavi_link,$add_module_install,$add_button_install,$add_theme_install,$add_widget_install;
##### @info: Template #################################################################################################################

$str                      =   "Template InRage";   	// name of the plugin
$name					  =	  "Inrage";				// name of the plugin
$modulname                =   "inrage";            	// name to uninstall
$pfad                     =   "inrage";             // name of pfad
$active                   =   "1";                  // plugin activate 1 yes | 0 no
$version                  =   "0.2";                // current version, visit authors website for updates, fixes, ..
$themes_modulname         =   "inrage";            	// name of module


#######################################################################################################################################
if(!ispageadmin($userID)) { echo ("Access denied!"); return false; }
$translate = new multiLanguage(detectCurrentLanguage());
$translate->detectLanguages($str);
$str = $translate->getTextByLanguage($str);
echo "<div class='card'><div class='card-header'>$str Database Updation</div><div class='card-body'>";
#######################################################################################################################################

############ Plugin und Modul Einstellung ############################################################################################
safe_query("UPDATE `".PREFIX."settings_themes` SET active = 0 WHERE `active` = '1'");
safe_query("UPDATE `".PREFIX."settings_themes` SET version = '$version' WHERE `modulname` = '$modulname'");
safe_query("UPDATE `".PREFIX."settings_themes` SET active = '$active' WHERE `modulname` = '$modulname'");

#@info: Widgets werden an der richtigen Position in der Index positioniert / anpassen ab ID 10
/*add_widget_install($add_widget_install = "INSERT INTO `" . PREFIX . "settings_widgets` (`id`, `position`, `description`, `modulname`, `themes_modulname`, `widgetname`, `widget`, `widgetdatei`, `sort`, `activate`) VALUES
('', 'page_navigation_widget', 'page_navigation_widget', 'navigation_default', '$themes_modulname', 'Navigation Default', 'widget1', 'widget_navigation_default', 0, 0),
('', 'right_side_widget', 'right_side_widget', 'about_us', '$themes_modulname', 'About Us Sidebar', 'widget1', 'widget_about_us_sidebar', 1, 0),
('', 'right_side_widget', 'right_side_widget', 'counter', '$themes_modulname', 'Counter Sidebar', 'widget1', 'widget_counter_sidebar', 2, 0),
('', 'foot_section_widget', 'foot_section_widget', 'ts3viewer', '$themes_modulname', 'TS3-Viewer Content', 'widget1', 'widget_ts3viewer_content', 0, 0),
('', 'page_footer_widget', 'page_footer_widget', 'footer', '$themes_modulname', 'Easy Footer Content', 'widget2', 'widget_easyfooter_content', 0, 0),
('', 'page_head_widget', 'page_head_widget', 'carousel', '$themes_modulname', 'Carousel Only', 'widget1', 'widget_carousel_only', 0, 0);");

#@info: Base Modul Einstellung // # Die Startseite / Bereiche müssen angepasst werden
add_module_install($add_module_install = "INSERT INTO `".PREFIX."settings_module` (`pluginID`, `name`, `modulname`, `themes_modulname`, `activate`, `sidebar`, `head_activated`, `content_head_activated`, `content_foot_activated`, `head_section_activated`, `foot_section_activated`, `modul_display`, `full_activated`, `plugin_settings`, `plugin_module`, `plugin_widget`, `widget1`, `widget2`, `widget3`) VALUES
('', 'Startpage', '', '$themes_modulname', 1, 're_activated', 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0),
('', '', 'startpage', '$themes_modulname', 1, 're_activated', 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0),
('', 'Profile', 'profile', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Login', 'login', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('', 'Lost Password', 'lostpassword', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('', 'Register', 'register', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('', 'Loginoverview', 'loginoverview', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Contact', 'contact', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Privacy Policy', 'privacy_policy', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Imprint', 'imprint', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Static', 'static', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Error_404', 'error_404', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'My Profile', 'myprofile', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'report', 'report', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'News Manager', 'news_manager', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0),
('', 'Carousel', 'carousel', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0),
('', 'Counter', 'counter', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0),
('', 'TS3-Viewer', 'ts3viewer', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0),
('', 'About Us', 'about_us', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1),
('', 'Footer', 'footer', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1),
('', 'Navigation Default', 'navigation_default', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0),
('', 'Messenger', 'messenger', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0);");

add_button_install($add_button_install = "INSERT INTO `".PREFIX."settings_buttons` (`buttonID`, `name`, `modulname`, `active`, `version`, `button1`, `button2`, `button3`, `button4`, `button5`, `button6`, `button7`, `button8`, `button9`, `button10`, `button11`, `button12`, `button13`, `button14`, `button15`, `button16`, `button17`, `button18`, `button19`, `button20`, `button21`, `button22`, `button23`, `button24`, `button25`, `button26`, `button27`, `button28`, `button29`, `button30`, `button31`, `button32`, `button33`, `button34`, `button35`, `button36`, `button37`, `button38`, `button39`, `button40`, `button41`, `button42`, `btn_border_radius`) VALUES
('', '$name', '$modulname', '$active', '$version', 'rgb(8,166,240)', 'rgb(6,143,207)', 'rgb(255,255,255)', 'rgb(148,114,100)', 'rgb(148,114,100)', 'rgb(255,255,255)', 'rgb(182,180,180)', 'rgb(87,71,71)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(70,148,8)', 'rgb(44,92,5)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(155,71,159)', 'rgb(109,50,112)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(217,131,31)', 'rgb(223,154,73)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(2,154,207)', 'rgb(1,103,138)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(245,245,245)', 'rgb(212,211,211)', 'rgb(87,71,71)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(55,58,60)', 'rgb(104,108,112)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(8,166,240)', 'rgb(6,147,213)', '0px');");

add_theme_install($add_theme_install = "INSERT INTO `".PREFIX."settings_themes` (`themeID`, `name`, `modulname`, `pfad`, `version`, `active`, `express_active`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`, `nav7`, `nav8`, `nav9`, `nav10`, `nav11`, `nav12`, `nav_text_alignment`, `body1`, `body2`, `body3`, `body4`, `body5`, `background_pic`, `border_radius`, `typo1`, `typo2`, `typo3`, `typo4`, `typo5`, `typo6`, `typo7`, `typo8`, `card1`, `card2`, `foot1`, `foot2`, `foot3`, `foot4`, `foot5`, `foot6`, `calendar1`, `calendar2`, `carousel1`, `carousel2`, `carousel3`, `carousel4`, `logo_pic`, `logotext1`, `logotext2`, `reg_pic`, `reg1`, `reg2`, `headlines`, `sort`) VALUES
('', '$name', '$modulname', '$pfad', '$version', $active, 0, 'rgb(42,41,43)', '18px', 'rgb(8,166,240)', 'rgb(245,245,245)', 'rgb(8,166,240)', '5px', 'rgb(119,119,119)', 'rgb(245,245,245)', 'rgb(8,166,240)', 'rgb(42,41,43)', 'rgb(8,166,240)', '', 'ms-auto', 'Rajdhani', '14px', 'rgb(255,255,255)', 'rgb(80,80,80)', 'rgb(234,247,254)', '', '0px', '', '', '', 'rgb(8,166,240)', '', '', '', 'rgb(6,147,213)', 'rgb(255,255,255)', 'rgb(119,119,119)', 'rgb(42,41,43)', '', '', '', '', '', '', '', 'rgb(255,255,255)', 'rgb(8,166,240)', 'rgb(255,255,255)', 'rgb(8,166,240)', 'logo.png', '', '', 'login_bg.jpg', 'rgb(8,166,240)', 'rgb(255,255,255)', 'headlines_08.css', 1);");

add_navigation($add_navigation = "INSERT INTO `".PREFIX."navigation_website_sub` (`snavID`, `mnavID`, `name`, `modulname`, `url`, `sort`, `indropdown`, `themes_modulname`) VALUES 
('', 5, '{[de]}Kontakt{[en]}Contact{[it]}Contatti', 'contact', 'index.php?site=contact', 1, 1, '$themes_modulname'),
('', 5, '{[de]}Datenschutz-Bestimmungen{[en]}Privacy Policy{[it]}Informativa sulla privacy', 'privacy_policy', 'index.php?site=privacy_policy', 2, 1, '$themes_modulname'),
('', 5, '{[de]}Impressum{[en]}Imprint{[it]}Impronta Editoriale', 'imprint', 'index.php?site=imprint', 3, 1, '$themes_modulname'),
('', 5, '{[de]}Seitenstatistik{[en]}Counter{[it]}Contatori', 'counter', 'index.php?site=counter', 1, 1, '$themes_modulname'),
('', 1, '{[de]}News Archive{[en]}News Archive', 'news_manager', 'index.php?site=news_manager&action=news_archive', 1, 1, '$themes_modulname'),
('', 1, '{[de]}News{[en]}News{[it]}Notizia', 'news_manager', 'index.php?site=news_manager', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Über uns{[en]}About us{[it]}Chi Siamo', 'about_us', 'index.php?site=about_us', 1, 1, '$themes_modulname');");*/

#######################################################################################################################################

echo "</div></div>";
    
 ?>
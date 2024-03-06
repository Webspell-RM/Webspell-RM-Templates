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
global $userID,$_database,$add_database_install,$str,$str2,$modulname,$add_plugin_manager,$add_navigation,$navi_link,$add_dashboard_navigation,$dashnavi_link,$add_module_install,$add_button_install,$add_theme_install,$add_widget_install,$themes_modulname;
##### @info: Template #################################################################################################################

$str                      =   "Template Verdux";    // name of the plugin
$name                     =   "Verdux";             // name of the plugin
$modulname                =   "verdux";             // name to uninstall
$pfad                     =   "verdux";             // name of pfad
$active                   =   "1";                  // plugin activate 1 yes | 0 no
$version                  =   "0.2";                // current version, visit authors website for updates, fixes, ..
$themes_modulname         =   "verdux";             // name of module


#######################################################################################################################################
if(!ispageadmin($userID)) { echo ("Access denied!"); return false; }
$translate = new multiLanguage(detectCurrentLanguage());
$translate->detectLanguages($str);
$str = $translate->getTextByLanguage($str);   
echo "<div class='card'><div class='card-header'>$str Database Installation</div><div class='card-body'>";
#######################################################################################################################################

############ Plugin und Modul Einstellung ############################################################################################
safe_query("UPDATE `".PREFIX."settings_themes` SET active = 0 WHERE `active` = '1'");

#@info: Widgets werden an der richtigen Position in der Index positioniert / anpassen ab ID 10
add_widget_install($add_widget_install = "INSERT INTO `" . PREFIX . "settings_widgets` (`id`, `position`, `description`, `modulname`, `themes_modulname`, `widget`, `widgetname`, `widgetdatei`, `activate`, `number`, `sort`) VALUES
('', 'right_side_widget', 'right_side_widget', 'clanwars', '$themes_modulname', 'widget1', 'Clanwars Sidebar', 'widget_clanwars_sidebar', 0, 0, 1),
('', 'right_side_widget', 'right_side_widget', 'about_us', '$themes_modulname', 'widget1', 'About Us Sidebar', 'widget_about_us_sidebar', 0, 0, 2),
('', 'right_side_widget', 'right_side_widget', 'counter', '$themes_modulname', 'widget1', 'Counter Sidebar', 'widget_counter_sidebar', 0, 0, 3),
('', 'page_head_widget', 'page_head_widget', 'carousel', '$themes_modulname', 'widget2', 'Carousel Crossfade', 'widget_carousel_crossfade', 0, 0, 0),
('', 'page_head_widget', 'page_head_widget', 'carousel', '$themes_modulname', 'widget1', 'Carousel Only', 'widget_carousel_only', 0, 1, 0),
('', 'page_navigation_widget', 'page_navigation_widget', 'navigation_default', '$themes_modulname', 'widget1', 'Navigation Default', 'widget_navigation_default', 0, 1, 0);");

#@info: Base Modul Einstellung // # Die Startseite / Bereiche müssen angepasst werden
add_module_install($add_module_install = "INSERT INTO `".PREFIX."settings_module` (`pluginID`, `name`, `modulname`, `themes_modulname`, `full_activated`, `custom_activated`, `via_navigation`, `head_activated`, `content_head_activated`, `content_foot_activated`, `head_section_activated`, `foot_section_activated`, `modul_display`, `activate`, `sidebar`, `plugin_settings`, `plugin_module`, `plugin_widget`, `widget1`, `widget2`, `widget3`) VALUES
('', '', 'startpage', '$themes_modulname', 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 're_activated', 0, 1, 0, 0, 0, 0),
('', 'Startpage', '', '$themes_modulname', 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 're_activated', 0, 1, 0, 0, 0, 0),
('', 'Profile', 'profile', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Login', 'login', '$themes_modulname', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Lost Password', 'lostpassword', '$themes_modulname', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Register', 'register', '$themes_modulname', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Contact', 'contact', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Privacy Policy', 'privacy_policy', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Imprint', 'imprint', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Static', 'static', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Error_404', 'error_404', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'My Profile', 'myprofile', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'report', 'report', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 0, 0, 0, 0, 0, 0),
('', 'Navigationsstandard', 'navigation_default', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 0, 1, 1, 0, 0),
('', 'Clanwars', 'clanwars', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 0),
('', 'Clan Rules', 'clan_rules', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 0, 0, 0, 0),
('', 'Squads', 'squads', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 1),
('', 'Join Us', 'joinus', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 0, 0),
('', 'Facebook', 'facebook', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 0, 1),
('', 'Usergallery', 'usergallery', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 0, 0, 0, 0),
('', 'Gallery', 'gallery', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 0, 0),
('', 'Forum Topic', 'forum_topic', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'activated', 1, 0, 1, 1, 1, 1),
('', 'Slideshow', 'carousel', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 0, 1, 1, 1, 1),
('', 'Counter', 'counter', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 0, 0),
('', 'About Us', 'about_us', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 1),
('', 'News Manager', 'news_manager', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 0),
('', 'Sponsors', 'sponsors', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 0),
('', 'Videos', 'videos', '$themes_modulname', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'activated', 1, 1, 1, 1, 1, 1);");

add_button_install($add_button_install = "INSERT INTO `".PREFIX."settings_buttons` (`buttonID`, `name`, `modulname`, `active`, `version`, `button1`, `button2`, `button3`, `button4`, `button5`, `button6`, `button7`, `button8`, `button9`, `button10`, `button11`, `button12`, `button13`, `button14`, `button15`, `button16`, `button17`, `button18`, `button19`, `button20`, `button21`, `button22`, `button23`, `button24`, `button25`, `button26`, `button27`, `button28`, `button29`, `button30`, `button31`, `button32`, `button33`, `button34`, `button35`, `button36`, `button37`, `button38`, `button39`, `button40`, `button41`, `button42`, `btn_border_radius`) VALUES
('', '$name', '$modulname', '$active', '$version', 'rgb(254,130,29)', 'rgb(196,89,1)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(108,117,125)', 'rgb(90,98,104)', 'rgb(255,255,255)', 'rgb(108,117,125)', 'rgb(84,91,98)', 'rgb(40,167,69)', 'rgb(33,136,56)', 'rgb(255,255,255)', 'rgb(40,167,69)', 'rgb(30,126,52)', 'rgb(220,53,69)', 'rgb(200,35,51)', 'rgb(255,255,255)', 'rgb(220,53,69)', 'rgb(189,33,48)', 'rgb(255,193,7)', 'rgb(224,168,0)', 'rgb(33,37,41)', 'rgb(255,193,7)', 'rgb(211,158,0)', 'rgb(23,162,184)', 'rgb(19,132,150)', 'rgb(255,255,255)', 'rgb(23,162,184)', 'rgb(17,122,139)', 'rgb(248,249,250)', 'rgb(226,230,234)', 'rgb(33,37,41)', 'rgb(248,249,250)', 'rgb(218,224,229)', 'rgb(52,58,64)', 'rgb(35,39,43)', 'rgb(255,255,255)', 'rgb(52,58,64)', 'rgb(29,33,36)', 'rgb(254,130,29)', 'rgb(196,89,1)', '0px');");

add_theme_install($add_theme_install = "INSERT INTO `".PREFIX."settings_themes` (`themeID`, `name`, `modulname`, `pfad`, `version`, `active`, `express_active`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`, `nav7`, `nav8`, `nav9`, `nav10`, `nav11`, `nav12`, `nav_text_alignment`, `body1`, `body2`, `body3`, `body4`, `body5`, `background_pic`, `border_radius`, `typo1`, `typo2`, `typo3`, `typo4`, `typo5`, `typo6`, `typo7`, `typo8`, `card1`, `card2`, `foot1`, `foot2`, `foot3`, `foot4`, `foot5`, `foot6`, `calendar1`, `calendar2`, `carousel1`, `carousel2`, `carousel3`, `carousel4`, `logo_pic`, `logotext1`, `logotext2`, `reg_pic`, `reg1`, `reg2`, `headlines`, `sort`) VALUES
('', '$name', '$modulname', '$pfad', '$version', $active, 0, 'rgb(245,245,245)', '14px', '', 'rgb(254,130,29)', 'rgb(254,130,29)', '5px', 'rgb(51,51,51)', 'rgb(121,121,121)', 'rgb(254,130,29)', 'rgb(254,130,29)', 'rgb(245,245,245)', 'rgb(245,245,245)', 'ms-auto', 'Roboto', '13px', 'rgb(245,245,245)', '', '', '', '0px', '', '', '', 'rgb(254,130,29)', '', '', '', 'rgb(196,89,1)', 'rgb(245,245,245)', '', '', '', '', '', '', '', '', '', 'rgb(255,255,255)', 'rgb(254,130,29)', 'rgb(255,255,255)', 'rgb(254,130,29)', 'logo.png', '', '', '', 'rgb(254,130,29)', '', 'headlines_08.css', 1);");


add_navigation($add_navigation = "INSERT INTO `".PREFIX."navigation_website_sub` (`snavID`, `mnavID`, `name`, `modulname`, `url`, `sort`, `indropdown`, `themes_modulname`) VALUES
('', 6, '{[de]}Kontakt{[en]}Contact{[it]}Contatti', 'contact', 'index.php?site=contact', 1, 1, '$themes_modulname'),
('', 6, '{[de]}Datenschutz-Bestimmungen{[en]}Privacy Policy{[it]}Informativa sulla privacy', 'privacy_policy', 'index.php?site=privacy_policy', 2, 1, '$themes_modulname'),
('', 6, '{[de]}Impressum{[en]}Imprint{[it]}Impronta Editoriale', 'imprint', 'index.php?site=imprint', 3, 1, '$themes_modulname'),
('', 6, '{[de]}Seitenstatistik{[en]}Counter{[it]}Contatori', 'counter', 'index.php?site=counter', 1, 1, '$themes_modulname'),
('', 4, '{[de]}Sponsoren{[en]}Sponsors{[it]}Sponsor', 'sponsors', 'index.php?site=sponsors', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Über uns{[en]}About us{[it]}Chi Siamo', 'about_us', 'index.php?site=about_us', 1, 1, '$themes_modulname'),
('', 1, '{[de]}News{[en]}News{[it]}Notizia', 'news_manager', 'index.php?site=news_manager', 1, 1, '$themes_modulname'),
('', 1, '{[de]}News Archive{[en]}News Archive', 'news_manager', 'index.php?site=news_manager&action=news_archive', 1, 1, '$themes_modulname'),
('', 4, '{[de]}Galerie{[en]}Gallery', 'gallery', 'index.php?site=gallery', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Clanwars Statistiken{[en]}Clanwars Statistics{[pl]}Clanwars{[it]}Guerre del Clan Statistica', 'clanwars', 'index.php?site=clanwars&action=clanwar_result', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Clanwars{[en]}Clanwars{[pl]}Clanwars{[it]}Guerre del Clan', 'clanwars', 'index.php?site=clanwars', 1, 1, '$themes_modulname'),
('', 4, '{[de]}Videos{[en]}Videos', 'videos', 'index.php?site=videos', 1, 1, '$themes_modulname'),
('', 6, '{[de]}Mitglied werden{[en]}Join Us', 'joinus', 'index.php?site=joinus', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Teams{[en]}Teams{[it]}Squadre', 'squads', 'index.php?site=squads', 1, 1, '$themes_modulname'),
('', 2, '{[de]}Clan Regeln{[en]}Clan Rules{[it]}Regole del Clan', 'clan_rules', 'index.php?site=clan_rules', 1, 1, '$themes_modulname'),
('', 5, '{[de]}Facebook{[en]}Facebook{[it]}Facebook', 'facebook', 'index.php?site=facebook', 1, 1, '$themes_modulname');");


#######################################################################################################################################

echo "</div></div>";
 ?>
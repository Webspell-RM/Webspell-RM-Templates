<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *                                    Webspell-RM      /                        /   /                                                 *
 *                                    -----------__---/__---__------__----__---/---/-----__---- _  _ -                                *
 *                                     | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /                                 *
 *                                    _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_                                 *
 *                                                 Free Content / Management System                                                   *
 *                                                             /                                                                      *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version         Webspell-RM                                                                                                       *
 *                                                                                                                                    *
 * @copyright       2018-2022 by webspell-rm.de <https://www.webspell-rm.de>                                                          *
 * @support         For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI            webspell-rm.de <https://www.webspell-rm.de/wiki.html>                                                             *
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license         Script runs under the GNU GENERAL PUBLIC LICENCE                                                                  *
 *                  It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>                    *
 *                                                                                                                                    *
 * @author          Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)                                                 *
 * @copyright       2005-2018 by webspell.org / webspell.info                                                                         *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

 ##### Install für Templates ###########################################################################################################
global $userID,$_database,$add_database_install,$str,$str2,$modulname,$add_plugin_manager,$add_navigation,$navi_link,$add_dashboard_navigation,$dashnavi_link,$add_module_install,$add_button_install,$add_theme_install,$add_widget_install,$themes_modulname;
##### @info: Template #################################################################################################################

$str                      	=   "Template Cyborg";   	// name of the plugin
$name					    =	"Cyborg";			  	// name of the plugin
$modulname                	=   "cyborg";            	// name to uninstall
$pfad                       =   "cyborg";                // name of pfad
$active                     =   "1";                      // plugin activate 1 yes | 0 no
$version                  	=   "0.2";              	// current version, visit authors website for updates, fixes, ..
$themes_modulname         	=   "cyborg";            	// name of module


#######################################################################################################################################
if(!ispageadmin($userID)) { echo ("Access denied!"); return false; }		
			
		echo "<div class='card'>
			<div class='card-header'>
				$str Database Installation
			</div>
			<div class='card-body'>";
#######################################################################################################################################

############ Plugin und Modul Einstellung ############################################################################################
safe_query("UPDATE `".PREFIX."settings_themes` SET active = 0 WHERE `active` = '1'");

#@info: Widgets werden an der richtigen Position in der Index positioniert / anpassen ab ID 10
add_widget_install($add_widget_install = "INSERT INTO `" . PREFIX . "settings_widgets` (`id`, `position`, `description`, `modulname`, `themes_modulname`, `widgetname`, `widget`, `widgetdatei`, `sort`, `activate`) VALUES
('', 'page_navigation_widget', 'page_navigation_widget', 'navigation_default', '$themes_modulname', 'Navigation Default', 'widget1', 'widget_navigation_default', 1, 0),
('', 'page_footer_widget', 'page_footer_widget', 'footer', '$themes_modulname', 'Easy Footer Content', 'widget2', 'widget_easyfooter_content', 2, 0);");

#@info: Base Modul Einstellung // # Die Startseite / Bereiche müssen angepasst werden
add_module_install($add_module_install = "INSERT INTO `".PREFIX."settings_module` (`pluginID`, `name`, `modulname`, `themes_modulname`, `activate`, `sidebar`, `head_activated`, `content_head_activated`, `content_foot_activated`, `head_section_activated`, `foot_section_activated`, `modul_display`, `full_activated`, `plugin_settings`, `plugin_module`, `plugin_widget`, `widget1`, `widget2`, `widget3`) VALUES
('', '', 'startpage', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0),
('', 'Startpage', '', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
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
('', 'Footer', 'footer', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1),
('', 'Navigation Default', 'navigation_default', '$themes_modulname', 1, 'activated', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0);");

add_button_install($add_button_install = "INSERT INTO `".PREFIX."settings_buttons` (`buttonID`, `name`, `modulname`, `active`, `version`, `button1`, `button2`, `button3`, `button4`, `button5`, `button6`, `button7`, `button8`, `button9`, `button10`, `button11`, `button12`, `button13`, `button14`, `button15`, `button16`, `button17`, `button18`, `button19`, `button20`, `button21`, `button22`, `button23`, `button24`, `button25`, `button26`, `button27`, `button28`, `button29`, `button30`, `button31`, `button32`, `button33`, `button34`, `button35`, `button36`, `button37`, `button38`, `button39`, `button40`, `button41`, `button42`, `btn_border_radius`) 
    VALUES 
    ('', '$name', '$modulname', '$active', '$version', 'rgb(255,193,7)', 'rgb(225,171,6)', 'rgb(0,0,0)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(85,85,85)', 'rgb(149,148,148)', 'rgb(255,255,255)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(119,179,0)', 'rgb(94,140,1)', 'rgb(255,255,255)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(204,0,0)', 'rgb(173,2,2)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(255,136,0)', 'rgb(203,109,2)', 'rgb(0,0,0)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(42,159,214)', 'rgb(19,132,150)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(173,175,174)', 'rgb(237,237,237)', 'rgb(0,0,0)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(34,34,34)', 'rgb(152,151,151)', 'rgb(245,245,245)', 'rgb(87,71,71)', 'rgb(57,47,47)', 'rgb(255,193,7)', 'rgb(225,171,6)', '0px');");

add_theme_install($add_theme_install = "INSERT INTO `".PREFIX."settings_themes` (`themeID`, `name`, `modulname`, `pfad`, `version`, `active`, `express_active`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`, `nav7`, `nav8`, `nav9`, `nav10`, `nav11`, `nav12`, `nav_text_alignment`, `body1`, `body2`, `body3`, `body4`, `body5`, `background_pic`, `border_radius`, `typo1`, `typo2`, `typo3`, `typo4`, `typo5`, `typo6`, `typo7`, `typo8`, `card1`, `card2`, `foot1`, `foot2`, `foot3`, `foot4`, `foot5`, `foot6`, `calendar1`, `calendar2`, `carousel1`, `carousel2`, `carousel3`, `carousel4`, `logo_pic`, `logotext1`, `logotext2`, `reg_pic`, `reg1`, `reg2`, `headlines`, `sort`) VALUES 
	('', '$name', '$modulname', '$pfad', '$version', $active, 0, 'rgb(6,6,6)', '16px', 'rgb(255,193,7)', 'rgb(6,6,6)', 'rgb(115,87,2)', '3px', 'rgb(173,175,174)', 'rgb(6,6,6)', 'rgb(255,193,7)', 'rgb(6,6,6)', 'rgb(255,193,7)', '', 'ms-auto', 'Roboto', '13px', 'rgb(6,6,6)', 'rgb(173,175,174)', 'rgb(14,14,14)', '', '0px', '', '', '', 'rgb(255,193,7)', '', '', '', 'rgb(225,171,6)', 'rgb(6,6,6)', 'rgb(115,87,2)', 'rgb(14,14,14)', '', '', '', '', '', '', '', 'rgb(255,255,255)', 'rgb(255,193,7)', 'rgb(255,255,255)', 'rgb(255,193,7)', 'logo.png', '', '', 'login_bg.jpg', 'rgb(255,193,7)', 'rgb(255,255,255)', 'headlines_01.css', 1);");

add_navigation($add_navigation = "INSERT INTO `".PREFIX."navigation_website_sub` (`snavID`, `mnavID`, `name`, `modulname`, `url`, `sort`, `indropdown`, `themes_modulname`) VALUES
('', 5, '{[de]}Kontakt{[en]}Contact{[it]}Contatti', 'contact', 'index.php?site=contact', 1, 1, '$themes_modulname'),
('', 5, '{[de]}Datenschutz-Bestimmungen{[en]}Privacy Policy{[it]}Informativa sulla privacy', 'privacy_policy', 'index.php?site=privacy_policy', 2, 1, '$themes_modulname'),
('', 5, '{[de]}Impressum{[en]}Imprint{[it]}Impronta Editoriale', 'imprint', 'index.php?site=imprint', 3, 1, '$themes_modulname');");
 
#######################################################################################################################################

echo "</div></div>";
	
 ?>
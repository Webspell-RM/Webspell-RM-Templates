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

##### @info: Template #################################################################################################################
global $str,$modulname,$version;
$modulname='green';
$version='0.3';
$str='Template Green';
echo "<div class='card'><div class='card-header'>$str Database Installation</div><div class='card-body'>";
#######################################################################################################################################
safe_query("UPDATE `".PREFIX."settings_expansion` SET active = 0 WHERE `active` = '1'");

$transaction = '';
$transaction .= add_insert_table("INSERT IGNORE INTO `" . PREFIX . "settings_buttons` (`buttonID`, `name`, `modulname`, `active`, `version`, `button1`, `button2`, `button3`, `button4`, `button5`, `button6`, `button7`, `button8`, `button9`, `button10`, `button11`, `button12`, `button13`, `button14`, `button15`, `button16`, `button17`, `button18`, `button19`, `button20`, `button21`, `button22`, `button23`, `button24`, `button25`, `button26`, `button27`, `button28`, `button29`, `button30`, `button31`, `button32`, `button33`, `button34`, `button35`, `button36`, `button37`, `button38`, `button39`, `button40`, `button41`, `button42`, `btn_border_radius`) VALUES
('', 'Green', 'green', '1', '0.3', 'rgb(105,187,126)', 'rgb(84,148,101)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(108,117,125)', 'rgb(90,98,104)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(3,120,29)', 'rgb(45,181,75)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(220,53,69)', 'rgb(200,35,51)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(255,193,7)', 'rgb(224,168,0)', 'rgb(0,0,0)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(23,162,184)', 'rgb(19,132,150)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(248,249,250)', 'rgb(226,230,234)', 'rgb(0,0,0)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(52,58,64)', 'rgb(35,39,43)', 'rgb(245,245,245)', 'rgb(170,170,170)', 'rgb(57,47,47)', 'rgb(105,187,126)', 'rgb(84,148,101)', '5px')");

$transaction .= add_insert_table("INSERT IGNORE INTO `" . PREFIX . "settings_expansion` (`themeID`, `name`, `modulname`, `pfad`, `version`, `active`, `express_active`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`, `nav7`, `nav8`, `nav9`, `nav10`, `nav11`, `nav12`, `nav_text_alignment`, `body1`, `body2`, `body3`, `body4`, `body5`, `background_pic`, `border_radius`, `typo1`, `typo2`, `typo3`, `typo4`, `typo5`, `typo6`, `typo7`, `typo8`, `card1`, `card2`, `foot1`, `foot2`, `foot3`, `foot4`, `foot5`, `foot6`, `calendar1`, `calendar2`, `carousel1`, `carousel2`, `carousel3`, `carousel4`, `logo_pic`, `logotext1`, `logotext2`, `reg_pic`, `reg1`, `reg2`, `headlines`, `sort`) VALUES
('', 'Green', 'green', 'green', '0.3', 1, 0, 'rgb(255,255,255)', '18px', 'rgb(33,41,52)', 'rgb(105,187,126)', 'rgb(105,187,126)', '5px', 'rgb(33,41,52)', 'rgb(105,187,126)', '', 'rgb(245,245,245)', 'rgb(245,245,245)', 'rgb(255,255,255)', 'ms-auto', 'Roboto', '13px', 'rgb(255,255,255)', 'rgb(33,41,52)', 'rgb(229,251,235)', '', '5px', '', '', '', 'rgb(105,187,126)', '', '', '', 'rgb(84,148,101)', 'rgb(255,255,255)', 'rgb(105,187,126)', 'rgb(33,41,52)', 'rgb(255,255,255)', 'rgb(255,255,255)', 'rgb(105,187,126)', 'rgb(105,187,126)', 'rgb(255,255,255)', '', '', 'rgb(255,255,255)', 'rgb(105,187,126)', 'rgb(255,255,255)', 'rgb(105,187,126)', 'green_logo.png', '', '', 'green_login_bg.jpg', 'rgb(105,187,126)', 'rgb(255,255,255)', 'headlines_01.css', 1)");

#######################################################################################################################################

echo "</div></div>";
 ?>
<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Панель Управления";
$text = "Эта страница предоставляет сведения об активности сайта.<br /><br />";

if(e107::getPref('admincss')=='admin_dark.css' && deftrue('BOOTSTRAP') !== 3)
{
	$text .= "<small>Слишком тёмная тема? <a class='btn btn-default btn-xs btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Измените её</a></small>";
	
}

e107::getRender()->tablerender($caption, $text);
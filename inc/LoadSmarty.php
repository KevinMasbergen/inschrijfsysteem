<?php 

date_default_timezone_set('Europe/Amsterdam');

require_once('smarty/Smarty.class.php');

$smarty = new Smarty();
$smarty->setTemplateDir('tpl/');
$smarty->setCompileDir('inc/smarty/templates_c');
$smarty->setConfigDir('inc/smarty/configs/');
$smarty->setCacheDir('inc/smarty/cache');

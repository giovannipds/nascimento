<?php
	require_once('../models/imoveis.php');

	$imoveis = Imoveis::getInstance();
	$smarty =& Website::getInstance()->smarty;
	$smarty->assign('imoveis', $imoveis->getList());
?>
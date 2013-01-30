<?php
	require_once('../models/imoveis.php');

	$imoveis = new Imoveis();
	$smarty->assign('corretores', $imoveis->pegarImoveis());
?>
<?php
	require_once('../models/usuarios.php');

	$usuarios = Usuarios::getInstance();
	$smarty =& Website::getInstance()->smarty;
	$smarty->assign('usuarios', $usuarios->getList());
?>
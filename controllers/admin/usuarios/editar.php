<?php
	require_once('../models/usuario.php');

	$usuario = Usuario::getById($url[2]);
	$smarty->assign('usuario', $usuario);

	if ($_POST) {
		$usuario = new Usuario($_POST['nome'], $_POST['nome_completo'], $_POST['email'], $_POST['confirmar_email']);
		header('location:usuarios');
	}
?>
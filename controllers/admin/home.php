<?php
	require_once('../models/usuario.php');

	if ($_POST) {
		// $usuario = new Usuario($_POST['usuario'], $_POST['senha']);
		// if ($usuario->autenticar()) {
		 	header('location:imoveis');
		// } else {
		// 	$smarty->assign('mensagem', 'Usuário ou senha inválidos.');
		// }
	}
?>
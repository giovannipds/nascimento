<?php
	require_once('../models/usuario.php');

	if ($_POST) {
		$usuario = new Usuario($_POST['nome'], $_POST['nome_completo'], $_POST['email'], $_POST['confirmar_email']);
		header('location:usuarios');
	}
?>
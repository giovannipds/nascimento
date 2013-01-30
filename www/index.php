<?php
	// smarty para KingHost
	ini_set('zend.ze1_compatibility_mode', 0);
	
	// volta pra raiz
	$dir = '../';
	// diretório do smarty
	$smartyDir = $dir.'smarty/';
	// diretório dos controllers
	$controllersDir = $dir.'controllers/';
	// diretório das views
	$viewsDir = $dir.'views/';

	// solicita a classe principal
	require_once($smartyDir.'Smarty.class.php');
	// inicia o smarty
	$smarty = new Smarty();
	// seta cache etc.
	$smarty->setConfigDir($smartyDir.'configs')
			->setCompileDir($smartyDir.'templates_c')
			->setCacheDir($smartyDir.'cache');
	$smarty->compile_check = false;
	$smarty->caching = 1;
	$smarty->cache_lifetime = 86400;

	// define a base principal do site
	$base = 'http://www.nascimento.imb.br/';

	// pega a url em array
	$url = explode('/', $_SERVER['REQUEST_URI']);

	// verifica se é localhost, se sim, altera a base e o array das urls
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		$base = 'http://localhost/nascimento/';
		$url = array_slice($url, 2);
		$smarty->caching = 0;
		$smarty->force_compile = true;
	} else if ($_SERVER['SERVER_NAME'] == 'giovannipds.com.br') {
		$base = 'http://giovannipds.com.br/nascimento/www/';
		$url = array_slice($url, 3);
		$smarty->caching = 0;
		$smarty->force_compile = true;
	}

	// verifica se é o admin, se sim, altera o array das urls e a diretório dos views
	if ($url[0] == 'admin') {
		$base .= 'admin/';
		if (!isset($url[1])) {
			header('HTTP/1.1 404 Not Found');
			header('Location: '.$base);
			exit();
		}
		$url = array_slice($url, 1);
		$controllersDir .= 'admin/';
		$viewsDir .= 'admin/';
	} else {
		$controllersDir .= 'site/';
		$viewsDir .= 'site/';
	}

	// seta o diretório das views
	$smarty->setTemplateDir($viewsDir);

	$urlTemp = $url;
	while (count($urlTemp) != 1 && !file_exists($controllersDir.implode('/', $urlTemp).'.php') && !file_exists($viewsDir.implode('/', $urlTemp).'.tpl')) {
		array_pop($urlTemp);
	}

	$pagina = implode('/', $urlTemp);
	/*
	$pagina = array_pop($urlTemp);
	if (count($urlTemp)) {
		$urlTemp = implode('/', $urlTemp);
		$controllersDir .= $urlTemp.'/';
		$viewsDir .= $urlTemp.'/';
	}
	*/

	// verifica se é a home ou não
	if ($url[0] == '') {
		$pagina = 'home';
	}

	// define o controller
	$controller = $pagina.'.php';
	// define a view
	$view = $pagina.'.tpl';

	// seta a url para os views
	$smarty->assign('url', $url);

	// seta a base para os views
	$smarty->assign('base', $base);

	$hasController = file_exists($controllersDir.$controller);
	$hasView = file_exists($viewsDir.$view);

	require_once($controllersDir.'layout.php');

	require_once('../models/website.php');
	require_once('../models/database.php');

	$website = Website::getInstance();
	$website->name = 'Nascimento Imóveis';
	$website->smarty =& $smarty;
	$website->database = new Database();

	$database =& $website->database;

	if ($_SERVER['SERVER_NAME'] == 'localhost') {
		$database->name = 'nascimento';
		$database->server = 'localhost';
		$database->user = 'root';
		$database->password = '';
	} else if ($_SERVER['SERVER_NAME'] == 'giovannipds.com.br') {
		$database->name = 'giovannipds';
		$database->server = 'mysql.giovannipds.com.br';
		$database->user = 'giovannipds';
		$database->password = 'asd';
	} else {
		$database->name = 'nascimento';
		$database->server = 'mysql.nascimento.imb.br';
		$database->user = 'nascimento';
		$database->password = 'mAj3pDuCn4oF';
	}

	$smarty->assign('website', array('nome' => $website->name));

	if (!$hasController && !$hasView) {
		header('HTTP/1.1 301 Moved Permanently');
		$smarty->display('../erros/404.tpl');
	}
	if ($hasController) {
		require_once($controllersDir.$controller);
	}
	if ($hasView) {
		$smarty->display($view);
	}
?>
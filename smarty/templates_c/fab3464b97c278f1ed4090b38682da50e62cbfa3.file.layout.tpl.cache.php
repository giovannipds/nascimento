<?php /* Smarty version Smarty-3.1.12, created on 2012-12-04 16:32:55
         compiled from "..\views\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2989950be2373a8c5c8-59448191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab3464b97c278f1ed4090b38682da50e62cbfa3' => 
    array (
      0 => '..\\views\\layout.tpl',
      1 => 1354638763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2989950be2373a8c5c8-59448191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50be2373aca894_09273329',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50be2373aca894_09273329')) {function content_50be2373aca894_09273329($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Nascimento Imóveis</title>
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="js/layout.js"></script>
		
	</head>
	<body>
		<header>
			<a href=""><img alt="Área Restrita" height="" src="" width="" /></a>
			<img alt="&lsquo;Lembra-te do dia de sábado&rsquo; - Êxodo 20:8" height="" src="" width=""  />
			<h1><img alt="NASCIMENTO IMÓVEIS - CRECI 34.697" height="" src="" width="" /></h1>
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">A Imobiliária</a></li>
					<li><a href="">Imóveis à Venda</a>
						<ul>
							<li><a href="">Apartamentos</a></li>
							<li><a href="">Casas</a></li>
							<li><a href="">Salas Comerciais</a></li>
							<li><a href="">Terrenos</a></li>
							<li><a href="">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="">Imóveis para Alugar</a>
						<ul>
							<li><a href="">Apartamentos</a></li>
							<li><a href="">Casas</a></li>
							<li><a href="">Salas Comerciais</a></li>
							<li><a href="">Terrenos</a></li>
							<li><a href="">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="">Fale Conosco</a></li>
				</ul>
			</nav>
			<h2>Encontre seu Imóvel</h2>
			<form>
				<input placeholder="Código ou palavras-chaves" type="search" /><br />
				<label for="comprar"><input id="comprar" name="intencao" type="radio" value="Comprar" /> Comprar</label> <label for="alugar"><input id="alugar" name="intencao" type="radio" value="Alugar" /> Alugar</label><br />
				<strong>Bairros:</strong>
				<div>
					<label for="centro"><input id="centro" type="checkbox" /> Centro</label><br />
					<label for="humaita"><input id="humaita" type="checkbox" /> Humaitá</label><br />
					<label for="sao-roque"><input id="sao-roque" type="checkbox" /> São Roque</label>
				</div>
				<strong>Tipos:</strong>
				<div>
					<label for="apartamentos"><input id="apartamentos" type="checkbox" /> Apartamentos</label><br />
					<label for="casas"><input id="casas" type="checkbox" /> Casas</label><br />
					<label for="terrenos"><input id="terrenos" type="checkbox" /> Terrenos</label>
				</div>
				<strong>Dormitórios:</strong><br />
				<input type="text" value="0" /> <input type="text" value="∞" /><br />
				<strong>Área (m²):</strong><br />
				<input type="text" value="0" /> <input type="text" value="∞" /><br />
				<strong>Preço (R$ mil):</strong><br />
				<input type="text" value="0" /> <input type="text" value="∞" /><br />
				<input type="submit" value="Buscar" />
			</form>
		</header>
		<article>
			
		</article>
		<footer>

		</footer>
	</body>
</html><?php }} ?>
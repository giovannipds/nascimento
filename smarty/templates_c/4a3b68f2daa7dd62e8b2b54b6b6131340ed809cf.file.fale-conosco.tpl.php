<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 21:03:00
         compiled from "..\views\site\fale-conosco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12939510839042f47b1-10119794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3b68f2daa7dd62e8b2b54b6b6131340ed809cf' => 
    array (
      0 => '..\\views\\site\\fale-conosco.tpl',
      1 => 1358958399,
      2 => 'file',
    ),
    '0c993d8a742590ebfedc5f80206c4e9fd21d0f15' => 
    array (
      0 => '..\\views\\site\\layout.tpl',
      1 => 1358961457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12939510839042f47b1-10119794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base' => 0,
    'website' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5108390458bec6_71023728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108390458bec6_71023728')) {function content_5108390458bec6_71023728($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Fale Conosco &lt; <?php echo $_smarty_tpl->tpl_vars['website']->value['nome'];?>
</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/f29b6c5b-0ecf-4e8e-9526-5fcb2d7dfd4a.js"></script>
		<script type="text/javascript" src="js/layout.js"></script>
		
	</head>
	<body>
		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277424755621985";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<header>
			<a href="admin" id="admin" target="_blank"><img alt="Área Restrita" height="14" src="imgs/layout/cadeado.png" width="12"></a>
			<img alt="&lsquo;Lembra-te do dia de sábado&rsquo; - Êxodo 20:8" height="28" id="citacao" src="imgs/layout/citacao.png" width="182">
			<<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?> id="logo"><img alt="NASCIMENTO IMÓVEIS - CRECI 34.697" height="109" src="imgs/layout/logo.png" width="443"></<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?>>
			<nav id="menu">
				<ul>
					<li><a href="./">Home</a></li>
					<li><a href="a-imobiliaria">A Imobiliária</a></li>
					<li><a href="imoveis-a-venda/">Imóveis à Venda</a>
						<ul>
							<li><a href="imoveis-a-venda/apartamentos">Apartamentos</a></li>
							<li><a href="imoveis-a-venda/casas">Casas</a></li>
							<li><a href="imoveis-a-venda/salas-comerciais">Salas Comerciais</a></li>
							<li><a href="imoveis-a-venda/terrenos">Terrenos</a></li>
							<li><a href="imoveis-a-venda/propriedades-rurais">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="imoveis-para-alugar/">Imóveis para Alugar</a>
						<ul>
							<li><a href="imoveis-para-alugar/apartamentos">Apartamentos</a></li>
							<li><a href="imoveis-para-alugar/casas">Casas</a></li>
							<li><a href="imoveis-para-alugar/salas-comerciais">Salas Comerciais</a></li>
							<li><a href="imoveis-para-alugar/terrenos">Terrenos</a></li>
							<li><a href="imoveis-para-alugar/propriedades-rurais">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="fale-conosco">Fale Conosco</a></li>
				</ul>
			</nav>
			<form id="encontre-seu-imovel">
				<h2>Encontre seu Imóvel</h2>
				<input placeholder="Código ou palavras-chaves" type="search"><br>
				<label for="comprar"><input id="comprar" name="intencao" type="radio" value="Comprar"> Comprar</label> <label for="alugar"><input id="alugar" name="intencao" type="radio" value="Alugar"> Alugar</label><br>
				<strong>Bairros:</strong>
				<div>
					<label for="centro"><input id="centro" type="checkbox"> Centro</label><br>
					<label for="humaita"><input id="humaita" type="checkbox"> Humaitá</label><br>
					<label for="sao-roque"><input id="sao-roque" type="checkbox"> São Roque</label>
				</div>
				<strong>Tipos:</strong>
				<div>
					<label for="apartamentos"><input id="apartamentos" type="checkbox"> Apartamentos</label><br>
					<label for="casas"><input id="casas" type="checkbox"> Casas</label><br>
					<label for="terrenos"><input id="terrenos" type="checkbox"> Terrenos</label>
				</div>
				<strong>Dormitórios:</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<strong>Área (m²):</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<strong>Preço (R$ mil):</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<input type="submit" value="Buscar">
			</form>
		</header>
		<article>
			
	<h1>Fale Conosco</h1>
	<form method="post">
		<input name="nome" placeholder="Nome" type="text" /> <input name="email" placeholder="E-mail" type="text" /><br>
		<input name="assunto" placeholder="Assunto" type="text" /><br>
		<textarea name="mensagem" placeholder="Mensagem"></textarea><br>
		<input type="submit">
	</form>

		</article>
		<footer>
			<address><span id="atendimento">Atendimento das 8h às 18h</span><br>
				<span id="telefone-e-e-mail">(54) <strong>3055-7678</strong><br>
				<a href="mailto:imoveis@nascimento.imb.br">imoveis@nascimento.imb.br</a></span><br>
				<a id="endereco">Treze de Maio, 116, sala 1<br>
				Bento Gonçalves, RS 95700-000</a><br>
				<img alt="NASCIMENTO IMÓVEIS" height="51" id="logo-do-rodape" src="imgs/layout/logo-do-rodape.png" width="234">
				
				<div class="fb-like" data-href="https://www.facebook.com/narcejao" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false"></div>
				
			</address>
		</footer>
	</body>
</html><?php }} ?>
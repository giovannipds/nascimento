<!DOCTYPE html>
<html>
	<head>
		<base href="{$base}">
		<title>{block 'title'}{$website.nome}{/block}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/f29b6c5b-0ecf-4e8e-9526-5fcb2d7dfd4a.js"></script>
		<script type="text/javascript" src="js/layout.js"></script>
		{block 'head'}{/block}
	</head>
	<body>
		{* Facebook Início *}
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277424755621985";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		{* Facebook Fim *}
		<header>
			<a href="admin" id="admin" target="_blank"><img alt="Área Restrita" height="14" src="imgs/layout/cadeado.png" width="12"></a>
			<img alt="&lsquo;Lembra-te do dia de sábado&rsquo; - Êxodo 20:8" height="28" id="citacao" src="imgs/layout/citacao.png" width="182">
			<{if $url.0 == ''}h1{else}div{/if} id="logo"><img alt="NASCIMENTO IMÓVEIS - CRECI 34.697" height="109" src="imgs/layout/logo.png" width="443"></{if $url.0 == ''}h1{else}div{/if}>
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
			{block 'body'}{/block}
		</article>
		<footer>
			<address><span id="atendimento">Atendimento das 8h às 18h</span><br>
				<span id="telefone-e-e-mail">(54) <strong>3055-7678</strong><br>
				<a href="mailto:imoveis@nascimento.imb.br">imoveis@nascimento.imb.br</a></span><br>
				<a id="endereco">Treze de Maio, 116, sala 1<br>
				Bento Gonçalves, RS 95700-000</a><br>
				<img alt="NASCIMENTO IMÓVEIS" height="51" id="logo-do-rodape" src="imgs/layout/logo-do-rodape.png" width="234">
				{* Facebook Início *}
				<div class="fb-like" data-href="https://www.facebook.com/narcejao" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false"></div>
				{* Facebook Fim *}
			</address>
		</footer>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<base href="{$base}">
		<title>{block 'title'}Admin &lt; Nascimento Imóveis{/block}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		{block 'head'}{/block}
	</head>
	<body>
		<{if $url.0 == ''}h1{else}div{/if}>Admin Nascimento Imóveis</{if $url.0 == ''}h1{else}div{/if}>
		{*if isset($logged)*}
			<p><a href="./sair">Sair</a></p>
			<nav>
				<ul>
					<li><a href="imoveis">Imóveis</a></li>
					{*if isset($admin)*}
						<li><a href="usuarios">Usuários</a></li>
					{*/if*}
				</ul>
			</nav>
		{*/if*}
		{block 'body'}{/block}
	</body>
</html>
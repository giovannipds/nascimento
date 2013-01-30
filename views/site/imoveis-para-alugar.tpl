{extends 'layout.tpl'}

{block 'title' prepend}Imóveis para Alugar &lt; {/block}

{block 'head'}
	<link rel="stylesheet" type="text/css" href="css/imoveis.css">
	<link rel="stylesheet" type="text/css" href="css/imoveis-para-alugar.css">
{/block}

{block 'body'}
	<div id="imoveis-para-alugar">
		<h1>Imóveis para Alugar</h1>
		<ul class="imoveis">
			{foreach from=$imoveis item=imovel}
				<li><a href="imoveis-para-alugar/{$imovel.id}"><figure><img alt="" height="182" src="http://lorempixel.com/243/182" width="243"></figure>
					<strong>{$imovel.tipo}</strong><br>
					<em>X dormitórios — 50 e 80 m²</em><br>
					<br>
					{$imovel.bairro}, <span>{$imovel.cidade}</span><br>
					<br>
					<small>Cód. {$imovel.id}</small><br>
					<strong class="preco"><span>R$</span> {$imovel.preco}</strong></a></li>
			{/foreach}
		</ul>
	</div>
{/block}

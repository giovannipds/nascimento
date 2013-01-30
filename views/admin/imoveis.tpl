{extends 'layout.tpl'}

{block 'title' prepend}Imóveis &lt; {/block}

{block 'body'}
	<h1>Imóveis</h1>
	<a href="imoveis/inserir">Inserir Imóvel</a>
	<table>
		<tr>
			<th>Cód.</th>
			<th>Tipo</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Preço</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		{if isset($imoveis)}
			{foreach from=$imoveis item=imovel}
				<tr>
					<td>{$imovel.id}</td>
					<td>{$imovel.tipo}</td>
					<td>{$imovel.bairro}</td>
					<td>{$imovel.cidade}</td>
					<th>R$ {$imovel.preco}</td>
					<td><a href="imoveis/editar/{$imovel.id}">Editar</a></td>
					<td><a href="imoveis/excluir/{$imovel.id}">Excluir</a></td>
				</tr>
			{/foreach}
		{else}
			<tr>
				<td colspan="7">Nenhum imóvel encontrado.</td>
			</tr>
		{/if}
	</table>
{/block}
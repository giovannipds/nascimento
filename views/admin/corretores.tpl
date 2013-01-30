{extends 'layout.tpl'}

{block 'title' prepend}Corretores &lt; {/block}

{block 'body'}
	<h1>Corretores</h1>
	<a href="corretores/inserir">Inserir Corretor</a>
	<table>
		<tr>
			<th>Cód.</th>
			<th>Tipo</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Preço</th>
		</tr>
		{foreach from=$corretores item=corretor}
			<tr>
				<td>{$corretor.id}</td>
				<td>{$corretor.tipo}</td>
				<td>{$corretor.bairro}</td>
				<td>{$corretor.cidade}</td>
				<th>R$ {$corretor.preco}</td>
			</tr>
		{/foreach}
	</table>
{/block}
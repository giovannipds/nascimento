{extends 'layout.tpl'}

{block 'title' prepend}Usuários &lt; {/block}

{block 'body'}
	<h1>Usuários</h1>
	<p><a href="usuarios/inserir">Inserir Usuário</a></p>
	<table>
		<tr>
			<th>ID</th>
			<th>Nome de Usuário</th>
			<th>Nome Completo</th>
			<th>E-mail</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		{if isset($usuarios)}
			{foreach from=$usuarios item=usuario}
				<tr>
					<td>{$usuario.id}</td>
					<td>{$usuario.nome}</td>
					<td>{$usuario.nome_completo}</td>
					<td>{$usuario.email}</td>
					<td><a href="usuarios/editar/{$usuario.id}">Editar</a></td>
					<td><a href="usuarios/excluir/{$usuario.id}">Excluir</a></td>
				</tr>
			{/foreach}
		{else}
			<tr>
				<td colspan="6">Nenhum usuário encontrado.</td>
			</tr>
		{/if}
	</table>
{/block}
{extends 'layout.tpl'}

{block 'body'}
	{if isset($mensagem)}
		<p>{$mensagem}</p>
	{/if}
	<form action="./" method="post">
		<label for="usuario">Usuário:</label> <input id="usuario" name="usuario" type="text"><br>
		<label for="senha">Senha:</label> <input id="senha" name="senha" type="password"><br>
		<input type="submit">
	</form>
{/block}
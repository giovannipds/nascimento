{extends '../usuarios.tpl'}

{block 'title' prepend}Inserir &lt; {/block}

{block 'body'}
	<h1>Usuários</h1>
	<p><a href="usuarios">Voltar</a></p>
	<form action="usuarios/inserir" method="post">
		<label for="nome">Nome de Usuário:</label> <input id="nome" name="nome" type="text"><br>
		<label for="nome_completo">Nome Completo:</label> <input id="nome_completo" name="nome_completo" type="text"><br>
		<label for="email">E-mail:</label> <input id="email" name="email" type="text"><br>
		<label for="confirmar_email">Confirmar E-mail:</label> <input id="confirmar_email" name="confirmar_email" type="text"><br>
		<input type="submit">
	</form>
{/block}
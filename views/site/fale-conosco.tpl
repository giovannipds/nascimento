{extends 'layout.tpl'}

{block 'title' prepend}Fale Conosco &lt; {/block}

{block 'body'}
	<h1>Fale Conosco</h1>
	<form method="post">
		<input name="nome" placeholder="Nome" type="text" /> <input name="email" placeholder="E-mail" type="text" /><br>
		<input name="assunto" placeholder="Assunto" type="text" /><br>
		<textarea name="mensagem" placeholder="Mensagem"></textarea><br>
		<input type="submit">
	</form>
{/block}
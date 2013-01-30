<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 16:40:27
         compiled from "..\views\admin\usuarios\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298135107fb7b176962-49390297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cee375e62febaff24bf2cf2177b0b75ea287f1' => 
    array (
      0 => '..\\views\\admin\\usuarios\\editar.tpl',
      1 => 1359464161,
      2 => 'file',
    ),
    '18b81b28f8fd6e827fd9f3ab0ecd20c570e05a93' => 
    array (
      0 => 'D:\\GitHub\\nascimento.imb.br\\views\\admin\\usuarios.tpl',
      1 => 1358904769,
      2 => 'file',
    ),
    '99d24288898b1805c4e2a332db81d8743784f0ad' => 
    array (
      0 => '..\\views\\admin\\layout.tpl',
      1 => 1359463394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298135107fb7b176962-49390297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5107fb7b44af28_32927547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107fb7b44af28_32927547')) {function content_5107fb7b44af28_32927547($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Inserir &lt; Usuários &lt; Admin &lt; Nascimento Imóveis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?>>Admin Nascimento Imóveis</<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?>>
		
			<p><a href="./sair">Sair</a></p>
			<nav>
				<ul>
					<li><a href="imoveis">Imóveis</a></li>
					
						<li><a href="usuarios">Usuários</a></li>
					
				</ul>
			</nav>
		
		
	<h1>Usuários</h1>
	<p><a href="usuarios">Voltar</a></p>
	<form action="usuarios/editar" method="post">
		<label for="nome">Nome de Usuário:</label> <input id="nome" name="nome" type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome'];?>
"><br>
		<label for="nome_completo">Nome Completo:</label> <input id="nome_completo" name="nome_completo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome_completo'];?>
"><br>
		<label for="email">E-mail:</label> <input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"><br>
		<label for="confirmar_email">Confirmar E-mail:</label> <input id="confirmar_email" name="confirmar_email" type="text"><br>
		<input type="submit">
	</form>

	</body>
</html><?php }} ?>
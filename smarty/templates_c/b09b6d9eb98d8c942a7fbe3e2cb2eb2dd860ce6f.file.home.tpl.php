<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 21:11:41
         compiled from "..\views\admin\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889551083b0d3f7051-78365815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09b6d9eb98d8c942a7fbe3e2cb2eb2dd860ce6f' => 
    array (
      0 => '..\\views\\admin\\home.tpl',
      1 => 1358889882,
      2 => 'file',
    ),
    '99d24288898b1805c4e2a332db81d8743784f0ad' => 
    array (
      0 => '..\\views\\admin\\layout.tpl',
      1 => 1359463394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889551083b0d3f7051-78365815',
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
  'unifunc' => 'content_51083b0d6abaf2_91559181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51083b0d6abaf2_91559181')) {function content_51083b0d6abaf2_91559181($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Admin &lt; Nascimento Imóveis</title>
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
		
		
	<?php if (isset($_smarty_tpl->tpl_vars['mensagem']->value)){?>
		<p><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</p>
	<?php }?>
	<form action="./" method="post">
		<label for="usuario">Usuário:</label> <input id="usuario" name="usuario" type="text"><br>
		<label for="senha">Senha:</label> <input id="senha" name="senha" type="password"><br>
		<input type="submit">
	</form>

	</body>
</html><?php }} ?>
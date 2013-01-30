<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 21:18:26
         compiled from "..\views\admin\usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2486651083ca2dcc6d5-80336339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236dbd588e3fb5b645017eeb41a0f7dd0e05e611' => 
    array (
      0 => '..\\views\\admin\\usuarios.tpl',
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
  'nocache_hash' => '2486651083ca2dcc6d5-80336339',
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
  'unifunc' => 'content_51083ca33e3783_12189919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51083ca33e3783_12189919')) {function content_51083ca33e3783_12189919($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Usuários &lt; Admin &lt; Nascimento Imóveis</title>
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
		<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nome_completo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
					<td><a href="usuarios/editar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">Editar</a></td>
					<td><a href="usuarios/excluir/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">Excluir</a></td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="6">Nenhum usuário encontrado.</td>
			</tr>
		<?php }?>
	</table>

	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 01:34:56
         compiled from "..\views\admin\corretores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318150ff3e409b5062-32556658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971742a0e47b63ed5ff1a3733531213e2ae1ef0d' => 
    array (
      0 => '..\\views\\admin\\corretores.tpl',
      1 => 1358902067,
      2 => 'file',
    ),
    '99d24288898b1805c4e2a332db81d8743784f0ad' => 
    array (
      0 => '..\\views\\admin\\layout.tpl',
      1 => 1358903265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318150ff3e409b5062-32556658',
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
  'unifunc' => 'content_50ff3e40ae76d2_25032982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ff3e40ae76d2_25032982')) {function content_50ff3e40ae76d2_25032982($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Corretores &lt; Admin &lt; Nascimento Imóveis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?>>Admin Nascimento Imóveis</<?php if ($_smarty_tpl->tpl_vars['url']->value[0]==''){?>h1<?php }else{ ?>div<?php }?>>
		
			<p><a href="sair">Sair</a></p>
			<nav>
				<ul>
					<li><a href="imoveis">Imóveis</a></li>
					
						<li><a href="corretores">Corretores</a></li>
						<li><a href="usuarios">Usuários</a></li>
					
				</ul>
			</nav>
		
		
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
		<?php  $_smarty_tpl->tpl_vars['corretor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['corretor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corretores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['corretor']->key => $_smarty_tpl->tpl_vars['corretor']->value){
$_smarty_tpl->tpl_vars['corretor']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['corretor']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['corretor']->value['tipo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['corretor']->value['bairro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['corretor']->value['cidade'];?>
</td>
				<th>R$ <?php echo $_smarty_tpl->tpl_vars['corretor']->value['preco'];?>
</td>
			</tr>
		<?php } ?>
	</table>

	</body>
</html><?php }} ?>
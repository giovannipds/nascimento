<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 21:18:24
         compiled from "..\views\admin\imoveis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3075851083ca019faa7-21280051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '009a03160e455536e6e4b67e02d2bb61424b08fd' => 
    array (
      0 => '..\\views\\admin\\imoveis.tpl',
      1 => 1358904785,
      2 => 'file',
    ),
    '99d24288898b1805c4e2a332db81d8743784f0ad' => 
    array (
      0 => '..\\views\\admin\\layout.tpl',
      1 => 1359463394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3075851083ca019faa7-21280051',
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
  'unifunc' => 'content_51083ca06c35a3_15559789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51083ca06c35a3_15559789')) {function content_51083ca06c35a3_15559789($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		<title>Imóveis &lt; Admin &lt; Nascimento Imóveis</title>
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
		<?php if (isset($_smarty_tpl->tpl_vars['imoveis']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['imovel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imovel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imoveis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imovel']->key => $_smarty_tpl->tpl_vars['imovel']->value){
$_smarty_tpl->tpl_vars['imovel']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['imovel']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['imovel']->value['tipo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['imovel']->value['bairro'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['imovel']->value['cidade'];?>
</td>
					<th>R$ <?php echo $_smarty_tpl->tpl_vars['imovel']->value['preco'];?>
</td>
					<td><a href="imoveis/editar/<?php echo $_smarty_tpl->tpl_vars['imovel']->value['id'];?>
">Editar</a></td>
					<td><a href="imoveis/excluir/<?php echo $_smarty_tpl->tpl_vars['imovel']->value['id'];?>
">Excluir</a></td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="7">Nenhum imóvel encontrado.</td>
			</tr>
		<?php }?>
	</table>

	</body>
</html><?php }} ?>
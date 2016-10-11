<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 12:58:50
         compiled from "C:\xampp\htdocs\PrestaShop\prestashop\modules\myfirstmodule\myfirstmodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2242457d295ead74ad4-35045034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506b9fb1208ab6d4de564ef2ee93e1d0bc9174f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\prestashop\\modules\\myfirstmodule\\myfirstmodule.tpl',
      1 => 1473418674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2242457d295ead74ad4-35045034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_title' => 0,
    'adv_link' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d295ead85d89_36306452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d295ead85d89_36306452')) {function content_57d295ead85d89_36306452($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<h3 class="adv_title"><?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
</h3>
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>

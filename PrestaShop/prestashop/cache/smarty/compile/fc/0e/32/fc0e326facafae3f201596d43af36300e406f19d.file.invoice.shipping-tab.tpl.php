<?php /* Smarty version Smarty-3.1.19, created on 2016-09-08 11:14:21
         compiled from "C:\xampp\htdocs\PrestaShop\prestashop\pdf\\invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114957d12bed676951-03299698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0e326facafae3f201596d43af36300e406f19d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\prestashop\\pdf\\\\invoice.shipping-tab.tpl',
      1 => 1473167114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114957d12bed676951-03299698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d12bed682844_57972838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d12bed682844_57972838')) {function content_57d12bed682844_57972838($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>

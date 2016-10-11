<?php /* Smarty version Smarty-3.1.19, created on 2016-09-08 11:14:21
         compiled from "C:\xampp\htdocs\PrestaShop\prestashop\pdf\\invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027957d12bed39cea4-16134765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68165a11e48bbe949b6613c886c2899cecadb80d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\prestashop\\pdf\\\\invoice.note-tab.tpl',
      1 => 1473167114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027957d12bed39cea4-16134765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d12bed3b4d99_11652658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d12bed3b4d99_11652658')) {function content_57d12bed3b4d99_11652658($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>

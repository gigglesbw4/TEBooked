<?php /* Smarty version Smarty-3.1.16, created on 2016-08-29 15:28:20
         compiled from "/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/delete_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131287932757c48cd491d699-48830176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32409ebb1eb98bd25c135af213d6b4e849876481' => 
    array (
      0 => '/opt/bitnami/apache2/htdocs/booked/tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1471352950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131287932757c48cd491d699-48830176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57c48cd4958402_93199558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c48cd4958402_93199558')) {function content_57c48cd4958402_93199558($_smarty_tpl) {?>
<div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>

<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:47:51
  from 'file:_ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28da7c85c41_61747660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70184248d63edcc1f93b56f2699e046711dc8b5a' => 
    array (
      0 => '_ads.tpl',
      1 => 1730187859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28da7c85c41_61747660 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('_master')) {?>

	<?php if ($_smarty_tpl->getValue('_ads') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("static","settings","admin"))) {?>
		<!-- ads -->
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_ads'), 'ads_unit');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach4DoElse = false;
?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

				</h6>
				<div class="px-3 pt-1 side_item_list">
					<?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>

				</div>
			</div>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<!-- ads -->
	<?php }?>

<?php } else { ?>

	<?php if ($_smarty_tpl->getValue('ads')) {?>
		<!-- ads -->
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads'), 'ads_unit');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach5DoElse = false;
?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

				</h6>
				<div class="px-3 pt-1 side_item_list">
					<?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>

				</div>
			</div>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<!-- ads -->
	<?php }?>

<?php }
}
}

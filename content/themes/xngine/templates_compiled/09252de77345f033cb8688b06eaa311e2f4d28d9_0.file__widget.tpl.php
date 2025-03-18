<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:16
  from 'file:_widget.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e74e81b30_82854011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09252de77345f033cb8688b06eaa311e2f4d28d9' => 
    array (
      0 => '_widget.tpl',
      1 => 1730187855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e74e81b30_82854011 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('widgets')) {?>
	<!-- Widgets -->
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widgets'), 'widget');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget')->value) {
$foreach28DoElse = false;
?>
		<?php if ($_smarty_tpl->getValue('widget')['target_audience'] == 'all' || ($_smarty_tpl->getValue('widget')['target_audience'] == 'visitors' && !$_smarty_tpl->getValue('user')->_logged_in) || ($_smarty_tpl->getValue('widget')['target_audience'] == 'members' && $_smarty_tpl->getValue('user')->_logged_in)) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php ob_start();
echo $_smarty_tpl->getValue('widget')['title'];
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable2);?>

				</h6>
				<div class="px-3 pt-1 side_item_list">
					<?php echo $_smarty_tpl->getValue('widget')['code'];?>

				</div>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	<!-- Widgets -->
<?php }
}
}

<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:17
  from 'file:_footer_mini.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e758e1c01_41871536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b23c74d735c30b16b6e549b31b91c192239d082' => 
    array (
      0 => '_footer_mini.tpl',
      1 => 1730544290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e758e1c01_41871536 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><footer class="mini-footer mb-3 px-3">
	<div class="copyrights d-flex align-items-center justify-content-between">
		<span class="flex-0 text-muted">&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</span>
		<!-- language -->
		<div class="dropdown">
			<a href="javascript:void(0);" class="language-dropdown text-muted" data-bs-toggle="dropdown">
				<span><?php echo $_smarty_tpl->getValue('system')['language']['title'];?>
</span>
			</a>
			<div class="dropdown-menu dropdown-menu-end">
				<div class="js_scroller">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach29DoElse = false;
?>
						<a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->getValue('language')['code'];?>
">
							<img width="16" height="16" class="flex-0" src="<?php echo $_smarty_tpl->getValue('language')['flag'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>

						</a>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
		<!-- language -->
	</div>
	<div class="d-flex align-items-center flex-wrap mt-1 links">
		<?php if ($_smarty_tpl->getValue('static_pages')) {?>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$foreach30DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach30DoElse = false;
?>
				<?php if ($_smarty_tpl->getValue('static_page')['page_in_footer']) {?>
					<a href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
" class="text-muted">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

					</a>
				<?php }?>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if ($_smarty_tpl->getValue('system')['contact_enabled']) {?>
			<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/contacts" class="text-muted">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Us");?>

			</a>
		<?php }?>
		<?php if ($_smarty_tpl->getValue('system')['directory_enabled']) {?>
			<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory" class="text-muted">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>

			</a>
		<?php }?>
		<?php if ($_smarty_tpl->getValue('system')['developers_apps_enabled'] || $_smarty_tpl->getValue('system')['developers_share_enabled']) {?>
			<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/developers<?php if (!$_smarty_tpl->getValue('system')['developers_apps_enabled']) {?>/share<?php }?>" class="text-muted">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers");?>

			</a>
		<?php }?>
	</div>
</footer><?php }
}

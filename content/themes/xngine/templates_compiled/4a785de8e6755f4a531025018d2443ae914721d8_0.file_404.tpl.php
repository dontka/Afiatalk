<?php
/* Smarty version 5.4.1, created on 2025-03-14 15:31:41
  from 'file:404.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d44bdda3b216_59304999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a785de8e6755f4a531025018d2443ae914721d8' => 
    array (
      0 => '404.tpl',
      1 => 1733978194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67d44bdda3b216_59304999 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<style>
.search-wrapper-prnt {
display: none !important
}
</style>

<!-- page content -->
<div class="row x_content_row">
    <!-- content panel -->
    <div class="col-lg-12 w-100">
		<div class="notfound-wrapper h-100 d-flex align-items-center justify-content-center p-3">
			<div class="notfound text-center mx-auto">
				<div class="text-md">
					<h5 class="headline-font m-0">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Oops! Page Not Be Found");?>

					</h5>
				</div>
				
				<div class="mt-2 text-muted">
					<?php echo $_smarty_tpl->getValue('message');?>

				</div>
			
				<div class="mt-5">
					<a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Back to homepage");?>
</a>
				</div>
			</div>
		</div>
    </div>
    <!-- content panel -->
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}

<?php
/* Smarty version 5.4.1, created on 2025-03-13 09:44:54
  from 'file:post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2a91640be14_42244063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ead3e7665c34497bf0d3a9984abf8f819b5b01' => 
    array (
      0 => 'post.tpl',
      1 => 1730905880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
    'file:_ads.tpl' => 2,
    'file:_ads_campaigns.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer_mini.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67d2a91640be14_42244063 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="row x_content_row">
	<!-- left panel -->
	<div class="col-lg-8">
		<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true), (int) 0, $_smarty_current_dir);
?>
		<?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ads'=>$_smarty_tpl->getValue('ads_footer')), (int) 0, $_smarty_current_dir);
?>
	</div>
	<!-- left panel -->

	<!-- right panel -->
	<div class="col-lg-4">
		<!-- upgrade to pro -->	
		<?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>

				</h6>
				<div class="px-3 py-0 side_item_list">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>

				</div>
				<div class="px-3 side_item_list">
					<a class="btn btn-main" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>

					</a>
				</div>
			</div>
		<?php }?>
		<!-- upgrade to pro -->
		
		<?php $_smarty_tpl->renderSubTemplate('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		
		<!-- mini footer -->
		<?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<!-- mini footer -->
	</div>
	<!-- right panel -->
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}

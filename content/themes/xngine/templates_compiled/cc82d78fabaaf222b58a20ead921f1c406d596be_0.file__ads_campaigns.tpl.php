<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:15
  from 'file:_ads_campaigns.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e73d04b51_06092836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc82d78fabaaf222b58a20ead921f1c406d596be' => 
    array (
      0 => '_ads_campaigns.tpl',
      1 => 1730187904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e73d04b51_06092836 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('ads_campaigns')) {?>
	<!-- ads campaigns -->
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads_campaigns'), 'campaign');
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('campaign')->value) {
$foreach27DoElse = false;
?>
		<div class="mb-3 overflow-hidden content">
			<h6 class="headline-font fw-semibold m-0 side_widget_title">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

			</h6>
			<div class="px-3 side_item_list pt-1 <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
				<a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank">
					<img class="img-fluid rounded-3" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
">
				</a>
				<?php if ($_smarty_tpl->getValue('campaign')['ads_title'] || $_smarty_tpl->getValue('campaign')['ads_description']) {?>
					<div class="mt-2 pt-1">
						<p class="fw-semibold mb-1">
							<a href="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
" target="_blank" class="body-color"><?php echo $_smarty_tpl->getValue('campaign')['ads_title'];?>
</a>
						</p>
						<p class="text-muted m-0 small">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('campaign')['ads_description'],200);?>

						</p>
					</div>
				<?php }?>
			</div>
		</div>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	<!-- ads campaigns -->
<?php }
}
}

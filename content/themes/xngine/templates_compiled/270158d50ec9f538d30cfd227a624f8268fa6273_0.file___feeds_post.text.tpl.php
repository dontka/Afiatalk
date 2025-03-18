<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:05
  from 'file:__feeds_post.text.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e697a7183_99061311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270158d50ec9f538d30cfd227a624f8268fa6273' => 
    array (
      0 => '__feeds_post.text.tpl',
      1 => 1730013506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e697a7183_99061311 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="post-replace">
	<?php if (is_array($_smarty_tpl->getValue('post')['colored_pattern'])) {?>
		<div class="post-colored" <?php if ($_smarty_tpl->getValue('post')['colored_pattern']['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['colored_pattern']['background_image'];?>
)" <?php }?>>
			<div class="post-colored-text-wrapper js_scroller" data-slimScroll-height="240">
				<div class="post-text" dir="auto" style="color: <?php echo $_smarty_tpl->getValue('post')['colored_pattern']['text_color'];?>
;">
					<?php echo $_smarty_tpl->getValue('post')['text'];?>

				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="post-text js_readmore" dir="auto"><?php echo $_smarty_tpl->getValue('post')['text'];?>
</div>
	<?php }?>
	<div class="post-text-translation x-hidden" dir="auto"></div>
	<div class="post-text-plain x-hidden"><?php echo $_smarty_tpl->getValue('post')['text_plain'];?>
</div>
</div><?php }
}

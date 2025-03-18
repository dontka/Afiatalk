<?php
/* Smarty version 5.4.1, created on 2025-03-13 08:35:05
  from 'file:_trending_widget.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d298b95aaba9_47909048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b616c7462d363f0c98f0a838758365805c9f4857' => 
    array (
      0 => '_trending_widget.tpl',
      1 => 1729585250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d298b95aaba9_47909048 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="mb-3 overflow-hidden content">
	<h6 class="headline-font fw-semibold m-0 side_widget_title">
		<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Trending");?>

    </h6>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('trending_hashtags'), 'hashtag');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('hashtag')->value) {
$foreach0DoElse = false;
?>
		<a class="body-color px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->getValue('hashtag')['hashtag'];?>
">
			<div class="hash fw-semibold">
				#<?php echo $_smarty_tpl->getValue('hashtag')['hashtag'];?>

			</div>
			<div class="frequency text-muted small">
				<?php echo $_smarty_tpl->getValue('hashtag')['frequency'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

			</div>
		</a>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div><?php }
}

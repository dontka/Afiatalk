<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:12
  from 'file:__feeds_post.comments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e70159034_18249587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4730e0170bf56a243bc2b6724740c6c48cd99cb' => 
    array (
      0 => '__feeds_post.comments.tpl',
      1 => 1730214562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.form.tpl' => 2,
    'file:__feeds_comment.tpl' => 2,
  ),
))) {
function content_67d28e70159034_18249587 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="post-comments">
	<?php if ($_smarty_tpl->getValue('_is_photo')) {?>

		<!-- sort comments -->
		<?php if ($_smarty_tpl->getValue('photo')['comments'] > 0) {?>
			<div class="comments-filter mb-2 pb-1">
				<div class="btn-group btn-group-sm js_comments-filter" data-value="photo_comments">
					<button type="button" class="btn btn-sm btn-gray dropdown-toggle px-2" data-bs-toggle="dropdown" data-display="static">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6H21M6 12H18M10 18H14" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
						<span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</span>
					</button>
					<div class="dropdown-menu dropdown-menu-left">
						<div class="dropdown-item pointer" data-value="photo_comments" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</div>
						<div class="dropdown-item pointer" data-value="photo_comments_top" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Top Comments");?>
</div>
						<div class="dropdown-item pointer" data-value="photo_comments_all" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Comments");?>
</div>
					</div>
				</div>
			</div>
		<?php }?>
		<!-- sort comments -->

		<!-- post comment -->
		<?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->getValue('photo')['photo_id']), (int) 0, $_smarty_current_dir);
?>
		<!-- post comment -->

		<!-- comments loader -->
		<div class="text-center py-5 x-hidden js_comments-filter-loader">
			<div class="loader loader_large"></div>
		</div>
		<!-- comments loader -->

		<!-- comments -->
		<ul class="js_comments x_comms_list"><?php if ($_smarty_tpl->getValue('photo')['comments'] > 0) {?>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('photo')['photo_comments'], 'comment');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comment')->value) {
$foreach25DoElse = false;
?>
					<?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->getValue('comment')), (int) 0, $_smarty_current_dir);
?>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			<?php }?></ul>
		<!-- comments -->

		<!-- previous comments -->
		<?php if ($_smarty_tpl->getValue('photo')['comments'] >= $_smarty_tpl->getValue('system')['min_results']) {?>
			<div class="main pointer px-3 text-center rounded-3 d-block side_item_hover side_item_list small fw-semibold js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-remove="true" data-target-stream=".js_comments">
				<span class="">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View previous comments");?>

				</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
		<?php }?>
		<!-- previous comments -->

	<?php } else { ?>

		<!-- sort comments -->
		<?php if ($_smarty_tpl->getValue('post')['comments'] > 0) {?>
			<div class="comments-filter mb-2 pb-1">
				<div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments">
					<button type="button" class="btn btn-sm btn-gray dropdown-toggle px-2" data-bs-toggle="dropdown" data-display="static">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6H21M6 12H18M10 18H14" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
						<span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</span>
					</button>
					<div class="dropdown-menu dropdown-menu-left">
						<div class="dropdown-item pointer" data-value="post_comments" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</div>
						<div class="dropdown-item pointer" data-value="post_comments_top" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Top Comments");?>
</div>
						<div class="dropdown-item pointer" data-value="post_comments_all" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Comments");?>
</div>
					</div>
				</div>
			</div>
		<?php }?>
		<!-- sort comments -->

		<!-- post comment -->
		<?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->getValue('post')['post_id']), (int) 0, $_smarty_current_dir);
?>
		<!-- post comment -->

		<!-- comments loader -->
		<div class="text-center py-5 x-hidden js_comments-filter-loader">
			<div class="loader loader_large"></div>
		</div>
		<!-- comments loader -->

		<!-- comments -->
		<ul class="js_comments x_comms_list <?php if ($_smarty_tpl->getValue('_live_comments')) {?>js_live-comments<?php }?>"><?php if ($_smarty_tpl->getValue('post')['comments'] > 0) {?>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['post_comments'], 'comment');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comment')->value) {
$foreach26DoElse = false;
?>
					<?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->getValue('comment')), (int) 0, $_smarty_current_dir);
?>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			<?php }?></ul>
		<!-- comments -->

		<!-- previous comments -->
		<?php if ($_smarty_tpl->getValue('post')['comments'] >= $_smarty_tpl->getValue('system')['min_results']) {?>
			<div class="main pointer px-3 text-center rounded-3 d-block side_item_hover side_item_list small fw-semibold js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" data-remove="true" data-target-stream=".js_comments">
				<span class="">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View previous comments");?>

				</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
		<?php }?>
		<!-- previous comments -->

	<?php }?>
</div><?php }
}

<?php
/* Smarty version 5.4.1, created on 2025-03-13 10:46:10
  from 'file:search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2b77251f815_38737405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c63250c3b224593517eb05c5f9a4a7545554e6' => 
    array (
      0 => 'search.tpl',
      1 => 1732257418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_post.tpl' => 2,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_trending_widget.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer_mini.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67d2b77251f815_38737405 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="row x_content_row">
	<!-- left panel -->
	<div class="col-lg-8">
		<div class="position-sticky x_top_posts">
			<div class="headline-font fw-semibold side_widget_title p-3">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

			</div>
			
			<?php if ($_smarty_tpl->getValue('query')) {?>
				<div class="d-flex align-items-center justify-content-center">
					<div <?php if ($_smarty_tpl->getValue('tab') == '' || $_smarty_tpl->getValue('tab') == "posts") {?>class="active fw-semibold"<?php }?>>
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('hashtag')) {?>hashtag/<?php }
if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/posts<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</span>
						</a>
					</div>
					<?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
						<div <?php if ($_smarty_tpl->getValue('tab') == "blogs") {?>class="active fw-semibold" <?php }?>>
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('hashtag')) {?>hashtag/<?php }
if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/blogs<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
								<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
</span>
							</a>
						</div>
					<?php }?>
					<div <?php if ($_smarty_tpl->getValue('tab') == "users") {?>class="active fw-semibold"<?php }?>>
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/users<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</span>
						</a>
					</div>
					<?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
						<div <?php if ($_smarty_tpl->getValue('tab') == "pages") {?>class="active fw-semibold" <?php }?>>
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/pages<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
								<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</span>
							</a>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
						<div <?php if ($_smarty_tpl->getValue('tab') == "groups") {?>class="active fw-semibold" <?php }?>>
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/groups<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
								<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</span>
							</a>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
						<div <?php if ($_smarty_tpl->getValue('tab') == "events") {?>class="active fw-semibold" <?php }?>>
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/events<?php }?>" class="body-color side_item_hover w-100 text-center d-block">
								<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</span>
							</a>
						</div>
					<?php }?>
				</div>
			<?php }?>
		</div>
		
		<div class="pt-3 pb-2 px-2 mx-1">
			<form class="js_search-form" <?php if ($_smarty_tpl->getValue('tab')) {?> data-filter="<?php echo $_smarty_tpl->getValue('tab');?>
" <?php }?>>
				<div class="position-relative">
					<input type="search" class="form-control shadow-none rounded-pill x_search_filter" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
' <?php if ($_smarty_tpl->getValue('query')) {?> value="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" color="currentColor" fill="none" class="position-absolute pe-none search-input-icon"><path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path></svg>
				</div>
			</form>
		</div>

		<?php if ($_smarty_tpl->getValue('results')) {?>
			<ul>
				<?php if ($_smarty_tpl->getValue('tab') == '' || $_smarty_tpl->getValue('tab') == "posts") {?>
					<!-- posts -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- posts -->
				<?php } elseif ($_smarty_tpl->getValue('tab') == "blogs") {?>
					<!-- blogs -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- blogs -->
				<?php } elseif ($_smarty_tpl->getValue('tab') == "users") {?>
					<!-- users -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_user');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach2DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')['connection']), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- users -->
				<?php } elseif ($_smarty_tpl->getValue('tab') == "pages") {?>
					<!-- pages -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_page');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach3DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- pages -->
				<?php } elseif ($_smarty_tpl->getValue('tab') == "groups") {?>
					<!-- groups -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_group');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach4DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- groups -->
				<?php } elseif ($_smarty_tpl->getValue('tab') == "events") {?>
					<!-- events -->
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_event');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach5DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					<!-- events -->
				<?php }?>
			</ul>

			<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('results')) >= $_smarty_tpl->getValue('system')['search_results']) {?>
				<!-- see-more -->
				<div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="search_<?php echo $_smarty_tpl->getValue('tab');?>
" data-filter="<?php echo $_smarty_tpl->getValue('query');?>
">
					<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Results");?>
</span>
					<div class="loader loader_small x-hidden"></div>
				</div>
				<!-- see-more -->
			<?php }?>
		<?php } else { ?>
			<?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php }?>
	</div>
	<!-- left panel -->

	<!-- right panel -->
	<div class="col-lg-4 js_sticky-sidebar">
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
		
		<!-- trending -->
		<?php if ($_smarty_tpl->getValue('trending_hashtags')) {?>
            <?php $_smarty_tpl->renderSubTemplate('file:_trending_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php }?>
		<!-- trending -->

		<?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php $_smarty_tpl->renderSubTemplate('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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

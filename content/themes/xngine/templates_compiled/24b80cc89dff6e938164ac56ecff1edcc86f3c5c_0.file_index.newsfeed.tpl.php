<?php
/* Smarty version 5.4.1, created on 2025-03-13 10:01:04
  from 'file:index.newsfeed.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2ace093a610_42577531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b80cc89dff6e938164ac56ecff1edcc86f3c5c' => 
    array (
      0 => 'index.newsfeed.tpl',
      1 => 1741860057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:__feeds_page.tpl' => 4,
    'file:_boosted_post.tpl' => 1,
    'file:__feeds_group.tpl' => 2,
    'file:_posts.tpl' => 10,
    'file:_no_data.tpl' => 1,
    'file:_trending_widget.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer_mini.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67d2ace093a610_42577531 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- content panel -->
<div class="row x_content_row">
	<!-- center panel -->
	<div class="col-lg-8">
		<?php if ($_smarty_tpl->getValue('system')['discover_posts_enabled'] || $_smarty_tpl->getValue('system')['popular_posts_enabled']) {?>
			<?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>
			<div class="d-flex align-items-center justify-content-start position-sticky x_top_posts home">
				<?php if ($_smarty_tpl->getValue('system')['discover_posts_enabled']) {?>
					<div <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "discover") {?>class="active fw-semibold" <?php }?>>
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/discover" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover Posts");?>
</span>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->getValue('system')['popular_posts_enabled']) {?>
					<div <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "popular") {?>class="active fw-semibold" <?php }?>>
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/popular" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular Posts");?>
</span>
						</a>
					</div>
				<?php }?>
				<div <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == '') {?>class="active fw-semibold" <?php }?>>
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="body-color side_item_hover w-100 text-center d-block">
						<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recent Updates");?>
</span>
					</a>
				</div>
            </div>
			<?php }?>
		<?php }?>
		
		<!-- announcments -->
			<?php $_smarty_tpl->renderSubTemplate('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<!-- announcments -->
		
		<?php if ($_smarty_tpl->getValue('view') == '') {?>

            <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
				<!-- stories -->
				<?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories'] || ($_smarty_tpl->getValue('system')['stories_enabled'] && !empty($_smarty_tpl->getValue('stories')['array']))) {?>
					<div class="bg-white x_announcement">
						<div class="stories-wrapper">
							<div id="stories" data-json='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlspecialchars')($_smarty_tpl->getValue('stories')["json"],ENT_QUOTES,'UTF-8');?>
'>
								<?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories']) {?>
									<div class="add-story pointer" data-toggle="modal" data-url="posts/story.php?do=create" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Story");?>
'>
										<a class="position-relative">
											<img src="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
">
											<span class="position-absolute rounded-circle d-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" color="currentColor" fill="none"><path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg></span>
										</a>
										<p class="text-truncate mb-0 text-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create");?>
</p>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->getValue('has_story')) {?>
									<div class="add-story pointer js_story-deleter" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Your Story");?>
'>
										<a class="position-relative">
											<img src="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
">
											<span class="position-absolute rounded-circle d-flex bg-danger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" color="currentColor" fill="none"><path d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" /><path d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" /><path d="M9.5 16.5L9.5 10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" /><path d="M14.5 16.5L14.5 10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" /></svg></span>
										</a>
										<p class="text-truncate mb-0 text-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
</p>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				<?php }?>
				<!-- stories -->
				
				<!-- publisher -->
				<?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->getValue('user')->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->getValue('user')->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->getValue('user')->_data['user_monetization_plans'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
				<!-- publisher -->
			  
				<!-- pro users -->
				<?php if ($_smarty_tpl->getValue('pro_members')) {?>
					<div class="d-block d-lg-none">
						<div class="overflow-hidden content rounded-0 border-top-0 border-start-0 border-end-0">
							<h6 class="headline-font fw-semibold m-0 side_widget_title">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Users");?>

							</h6>
							<ul>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pro_members'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
									<?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add",'_prusrs'=>"pro"), (int) 0, $_smarty_current_dir);
?>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</ul>
							<?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
								<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
									<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>

								</a>
							<?php }?>
						</div>
					</div>
				<?php }?>
				<!-- pro users -->

				<!-- pro pages -->
				<?php if ($_smarty_tpl->getValue('promoted_pages')) {?>
					<div class="d-block d-lg-none">
						<div class="overflow-hidden content rounded-0 border-top-0 border-start-0 border-end-0">
							<h6 class="headline-font fw-semibold m-0 side_widget_title">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Pages");?>

							</h6>
							<ul>
								<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_pages'), '_page');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach1DoElse = false;
?>
									<?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
								<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</ul>
							<?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
								<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
									<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>

								</a>
							<?php }?>
						</div>
					</div>
				<?php }?>
				<!-- pro pages -->
            <?php }?>

            <!-- boosted post -->
            <?php if ($_smarty_tpl->getValue('boosted_post')) {?>
				<?php $_smarty_tpl->renderSubTemplate('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('boosted_post')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <!-- boosted post -->

            <!-- posts -->
			 <!-- suggested groups -->
		<?php if ($_smarty_tpl->getValue('new_groups')) {?>
		<div class="mb-3 overflow-hidden content">
			<h6 class="headline-font fw-semibold m-0 side_widget_title">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Groups");?>

			</h6>
			<ul>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_groups'), '_group');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach2DoElse = false;
?>
					<?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ul>
			<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>

			</a>
		</div>
	<?php }?>
	<!-- suggested groups -->
			 
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), (int) 0, $_smarty_current_dir);
?>
            <!-- posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "popular") {?>
            <!-- popular posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"popular",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- popular posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "discover") {?>
            <!-- discover posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- discover posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "saved") {?>
            <!-- saved posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- saved posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "memories") {?>
            <!-- memories posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"memories",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Memories"),'_filter'=>"all"), (int) 0, $_smarty_current_dir);
?>
            <!-- memories posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "blogs") {?>
            <!-- blogs posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"article",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Blogs")), (int) 0, $_smarty_current_dir);
?>
            <!-- blogs posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "products") {?>
            <!-- products posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"product",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Products")), (int) 0, $_smarty_current_dir);
?>
            <!-- products posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "funding_requests") {?>
            <!-- funding posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"funding",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Funding")), (int) 0, $_smarty_current_dir);
?>
            <!-- funding posts -->

		<?php } elseif ($_smarty_tpl->getValue('view') == "boosted_posts") {?>
			<div class="position-sticky x_top_posts">
				<div class="headline-font fw-semibold side_widget_title p-3">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted");?>

				</div>
			
				<div class="d-flex align-items-center justify-content-center">
					<div class="active fw-semibold">
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/posts" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Posts");?>
</span>
						</a>
					</div>
					<?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
						<div>
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/pages" class="body-color side_item_hover w-100 text-center d-block">
								<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Pages");?>
</span>
							</a>
						</div>
					<?php }?>
				</div>
            </div>
            <?php if ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
				<!-- boosted posts -->
				<?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"boosted",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Boosted Posts")), (int) 0, $_smarty_current_dir);
?>
				<!-- boosted posts -->
            <?php } else { ?>
				<!-- upgrade -->
				<div class="p-3">
					<div class="text-muted text-center py-5">
						<svg width="56" height="56" class="text-warning" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6076 1.14723C14.3143 1.44842 14.7969 2.16259 14.7969 3.01681L14.7976 9.78474C14.7976 9.89519 14.8871 9.98472 14.9976 9.98472H18.0993C18.9851 9.98472 19.5954 10.5826 19.8466 11.2101C20.0974 11.8369 20.0636 12.642 19.5628 13.2849L12.5645 22.2678C12.0032 22.9883 11.1205 23.1629 10.3917 22.8523C9.68508 22.5511 9.20248 21.8369 9.20248 20.9827L9.20181 14.2148C9.2018 14.1043 9.11226 14.0148 9.00181 14.0148H5.90003C5.01422 14.0148 4.40394 13.4169 4.1528 12.7894C3.90193 12.1626 3.93574 11.3575 4.43658 10.7146L11.4348 1.73169C11.9962 1.01115 12.8788 0.83658 13.6076 1.14723Z" fill="currentColor"/></svg>
						<div class="text-md mt-4">
							<h5 class="headline-font m-0">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>

							</h5>
						</div>
						<div class="post-paid-description mt-2">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
						</div>
						
						<div class="mt-3">
							<a class="btn btn-main text-no-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>

							</a>
						</div>
					</div>
				</div>
				<!-- upgrade -->
            <?php }?>

		<?php } elseif ($_smarty_tpl->getValue('view') == "boosted_pages") {?>
			<div class="position-sticky x_top_posts">
				<div class="headline-font fw-semibold side_widget_title p-3">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted");?>

				</div>
				<div class="d-flex align-items-center justify-content-center">
					<div>
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/posts" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Posts");?>
</span>
						</a>
					</div>
					<div class="active fw-semibold">
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/pages" class="body-color side_item_hover w-100 text-center d-block">
							<span class="position-relative d-inline-block py-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Pages");?>
</span>
						</a>
					</div>
				</div>
            </div>
            <?php if ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
				<?php if ($_smarty_tpl->getValue('boosted_pages')) {?>
                    <ul>
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('boosted_pages'), '_page');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach3DoElse = false;
?>
							<?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('boosted_pages')) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
						<!-- see-more -->
						<div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
							<span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
							<div class="loader loader_small x-hidden"></div>
						</div>
						<!-- see-more -->
                    <?php }?>
				<?php } else { ?>
					<?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
				<?php }?>
            <?php } else { ?>
				<!-- upgrade -->
				<div class="p-3">
					<div class="text-muted text-center py-5">
						<svg width="56" height="56" class="text-warning" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6076 1.14723C14.3143 1.44842 14.7969 2.16259 14.7969 3.01681L14.7976 9.78474C14.7976 9.89519 14.8871 9.98472 14.9976 9.98472H18.0993C18.9851 9.98472 19.5954 10.5826 19.8466 11.2101C20.0974 11.8369 20.0636 12.642 19.5628 13.2849L12.5645 22.2678C12.0032 22.9883 11.1205 23.1629 10.3917 22.8523C9.68508 22.5511 9.20248 21.8369 9.20248 20.9827L9.20181 14.2148C9.2018 14.1043 9.11226 14.0148 9.00181 14.0148H5.90003C5.01422 14.0148 4.40394 13.4169 4.1528 12.7894C3.90193 12.1626 3.93574 11.3575 4.43658 10.7146L11.4348 1.73169C11.9962 1.01115 12.8788 0.83658 13.6076 1.14723Z" fill="currentColor"/></svg>
						<div class="text-md mt-4">
							<h5 class="headline-font m-0">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>

							</h5>
						</div>
						<div class="post-paid-description mt-2">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
						</div>
						
						<div class="mt-3">
							<a class="btn btn-main text-no-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>

							</a>
						</div>
					</div>
				</div>
				<!-- upgrade -->
            <?php }?>

		<?php } elseif ($_smarty_tpl->getValue('view') == "watch") {?>
            <!-- videos posts -->
				<?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_filter'=>"video",'_load_more'=>"watch",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch")), (int) 0, $_smarty_current_dir);
?>
            <!-- videos posts -->
		<?php }?>
	</div>
	<!-- center panel -->
	
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
		
		<!-- pro users -->
		<?php if ($_smarty_tpl->getValue('pro_members')) {?>
			<div class="d-none d-lg-block">
				<div class="mb-3 overflow-hidden content">
					<h6 class="headline-font fw-semibold m-0 side_widget_title">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Users");?>

					</h6>
					<ul>
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pro_members'), '_user');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach4DoElse = false;
?>
							<?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add",'_prusrs'=>"pro"), (int) 0, $_smarty_current_dir);
?>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
					<?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
						<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>

						</a>
					<?php }?>
				</div>
            </div>
		<?php }?>
		<!-- pro users -->

		<!-- pro pages -->
		<?php if ($_smarty_tpl->getValue('promoted_pages')) {?>
            <div class="d-none d-lg-block">
				<div class="mb-3 overflow-hidden content">
					<h6 class="headline-font fw-semibold m-0 side_widget_title">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Pages");?>

					</h6>
					<ul>
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_pages'), '_page');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach5DoElse = false;
?>
							<?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
					<?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
						<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>

						</a>
					<?php }?>
				</div>
            </div>
		<?php }?>
		<!-- pro pages -->

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

		<!-- friends suggestions -->
		<?php if ($_smarty_tpl->getValue('new_people')) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Friends");?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested People");?>

					<?php }?>
				</h6>
				<ul>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_people'), '_user');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach6DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
				<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>

				</a>
			</div>
		<?php }?>
		<!-- friends suggestions -->

		<!-- suggested pages -->
		<?php if ($_smarty_tpl->getValue('new_pages')) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Pages");?>

				</h6>
				<ul>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_pages'), '_page');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach7DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
				<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>

				</a>
			</div>
		<?php }?>
		<!-- suggested pages -->

		<!-- suggested groups -->
		<?php if ($_smarty_tpl->getValue('new_groups')) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Groups");?>

				</h6>
				<ul>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_groups'), '_group');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach8DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
				<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>

				</a>
			</div>
		<?php }?>
		<!-- suggested groups -->

		<!-- suggested events -->
		<?php if ($_smarty_tpl->getValue('new_events')) {?>
			<div class="mb-3 overflow-hidden content">
				<h6 class="headline-font fw-semibold m-0 side_widget_title">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Events");?>

				</h6>
				<ul>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_events'), '_event');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach9DoElse = false;
?>
						<?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_small'=>true), (int) 0, $_smarty_current_dir);
?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
				<a class="main px-3 d-block side_item_hover side_item_list" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>

				</a>
			</div>
		<?php }?>
		<!-- suggested events -->

		<!-- mini footer -->
		<?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<!-- mini footer -->
	</div>
	<!-- right panel -->
</div>
<!-- content panel -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}

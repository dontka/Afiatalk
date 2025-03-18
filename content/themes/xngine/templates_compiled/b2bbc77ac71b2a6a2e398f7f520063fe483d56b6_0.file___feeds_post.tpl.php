<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:50:20
  from 'file:__feeds_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e3ca4b731_95377050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2bbc77ac71b2a6a2e398f7f520063fe483d56b6' => 
    array (
      0 => '__feeds_post.tpl',
      1 => 1739090211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.body.tpl' => 1,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
  ),
))) {
function content_67d28e3ca4b731_95377050 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if (!$_smarty_tpl->getValue('standalone')) {?><li><?php }?>
	<!-- post -->
	<?php if ($_smarty_tpl->getValue('post')['source'] == "popular") {?>
		<div class="mb-2 pb-1 small text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular");?>
</div>
	<?php } elseif ($_smarty_tpl->getValue('post')['source'] == "discover") {?>
		<div class="mb-2 pb-1 small text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested for you");?>
</div>
	<?php }?>
  
	<div class="bg-white position-relative p-3 post 
                <?php if ($_smarty_tpl->getValue('_get') == "posts_profile" && $_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('post')['author_id'] && ($_smarty_tpl->getValue('post')['is_hidden'] || $_smarty_tpl->getValue('post')['is_anonymous'])) {?>is_hidden<?php }?> 
                <?php if ($_smarty_tpl->getValue('boosted')) {?>boosted<?php }?> 
                <?php if (($_smarty_tpl->getValue('post')['is_pending']) || ($_smarty_tpl->getValue('post')['in_group'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>pending<?php }?>
            " data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">

		<?php if (($_smarty_tpl->getValue('post')['is_pending']) || ($_smarty_tpl->getValue('post')['in_group'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>
			<div class="text-secondary fw-bold small mb-2 d-flex align-items-center gap-1">
				<svg xmlns="http://www.w3.org/2000/svg" height="15" viewBox="0 -960 960 960" width="15" fill="currentColor"><path d="M520-496v-144q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640v159q0 8 3 15.5t9 13.5l132 132q11 11 28 11t28-11q11-11 11-28t-11-28L520-496ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"></path></svg>
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Post");?>

			</div>
		<?php }?>

		<?php if ($_smarty_tpl->getValue('standalone') && $_smarty_tpl->getValue('pinned')) {?>
			<div class="text-warning fw-bold small mb-2 d-flex align-items-center gap-1">
				<svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 14.75C12.5523 14.75 13 15.1977 13 15.75V20.75C13 21.3023 12.5523 21.75 12 21.75C11.4477 21.75 11 21.3023 11 20.75V15.75C11 15.1977 11.4477 14.75 12 14.75Z" fill="currentColor"/><path d="M10.2491 2.25001H13.751C13.9801 2.24994 14.1567 2.24989 14.3145 2.26805C15.5842 2.41419 16.5859 3.41586 16.732 4.68559C16.7502 4.84338 16.7501 5.01993 16.7501 5.24906C16.7501 5.31819 16.7501 5.45153 16.7443 5.52317C16.699 6.08346 16.3873 6.58786 15.9064 6.87899C15.8449 6.91621 15.7795 6.94887 15.7176 6.97975L15.7176 6.97976C15.5062 7.08549 15.1071 7.28554 15.0189 7.33808C14.9649 7.3702 14.9374 7.39363 14.9374 7.39363C14.9112 7.42485 14.8946 7.46052 14.886 7.50037C14.8854 7.50758 14.8846 7.53437 14.8924 7.59668C14.9051 7.69858 14.9315 7.83308 14.9779 8.0649L15.6149 11.25C16.0514 11.2509 16.402 11.2607 16.7118 11.3437C17.6608 11.598 18.4021 12.3393 18.6563 13.2883C18.7507 13.6404 18.7504 14.0451 18.7501 14.5689V14.569C18.7506 14.8115 18.7511 15.2264 18.6904 15.4529C18.5286 16.0569 18.0569 16.5286 17.453 16.6904C17.2264 16.7511 16.9734 16.7506 16.7308 16.7501H7.26927C7.0267 16.7506 6.77366 16.7511 6.54712 16.6904C5.9432 16.5286 5.4715 16.0569 5.30968 15.4529C5.24898 15.2264 5.24952 14.8115 5.25001 14.569C5.24966 14.0452 5.24939 13.6404 5.34375 13.2883C5.59804 12.3393 6.33929 11.598 7.2883 11.3437C7.59813 11.2607 7.94867 11.2509 8.3852 11.25L9.02222 8.0649C9.06858 7.83308 9.09501 7.69857 9.1077 7.59668C9.11547 7.53436 9.11467 7.50757 9.1141 7.50037C9.10555 7.46052 9.08887 7.42485 9.06267 7.39363C9.06267 7.39363 9.03518 7.37021 8.98123 7.33808C8.893 7.28554 8.49392 7.08549 8.28247 6.97976C8.22062 6.94888 8.15518 6.91621 8.0937 6.87899C7.61284 6.58786 7.3011 6.08346 7.25575 5.52317C7.24996 5.45153 7.25 5.31819 7.25004 5.24906C7.24997 5.01993 7.24992 4.84338 7.26808 4.68559C7.41422 3.41586 8.41589 2.41419 9.68562 2.26805C9.84341 2.24989 10.02 2.24994 10.2491 2.25001Z" fill="currentColor"/></svg>
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pinned Post");?>

			</div>
		<?php }?>

		<?php if ($_smarty_tpl->getValue('standalone') && $_smarty_tpl->getValue('boosted')) {?>
			<div class="text-orange fw-bold small mb-2 d-flex align-items-center gap-1">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6076 1.14723C14.3143 1.44842 14.7969 2.16259 14.7969 3.01681L14.7976 9.78474C14.7976 9.89519 14.8871 9.98472 14.9976 9.98472H18.0993C18.9851 9.98472 19.5954 10.5826 19.8466 11.2101C20.0974 11.8369 20.0636 12.642 19.5628 13.2849L12.5645 22.2678C12.0032 22.9883 11.1205 23.1629 10.3917 22.8523C9.68508 22.5511 9.20248 21.8369 9.20248 20.9827L9.20181 14.2148C9.2018 14.1043 9.11226 14.0148 9.00181 14.0148H5.90003C5.01422 14.0148 4.40394 13.4169 4.1528 12.7894C3.90193 12.1626 3.93574 11.3575 4.43658 10.7146L11.4348 1.73169C11.9962 1.01115 12.8788 0.83658 13.6076 1.14723Z" fill="currentColor"/></svg>
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Posts");?>

			</div>
		<?php }?>
	
		<!-- post top alert -->
		<?php if ($_smarty_tpl->getValue('_get') == "posts_profile" && $_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('post')['author_id'] && ($_smarty_tpl->getValue('post')['is_hidden'] || $_smarty_tpl->getValue('post')['is_anonymous'])) {?>
			<div class="post-top-alert small text-white text-center fw-semibold p-2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only you can see this post");?>
</div>
		<?php }?>
		<!-- post top alert -->

		<!-- memory post -->
		<?php if ($_smarty_tpl->getValue('_get') == "memories") {?>
			<div class="post-memory-header main fw-semibold mb-3">
				<span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('post')['time'];?>
"><?php echo $_smarty_tpl->getValue('post')['time'];?>
</span>
			</div>
		<?php }?>
		<!-- memory post -->

		<!-- post body -->
		<div class="post-body">
			<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->getValue('post'),'_shared'=>false), (int) 0, $_smarty_current_dir);
?>

			<?php if (!$_smarty_tpl->getValue('post')['needs_payment'] && !$_smarty_tpl->getValue('post')['needs_subscription'] && !$_smarty_tpl->getValue('post')['needs_pro_package'] && !$_smarty_tpl->getValue('post')['needs_age_verification']) {?>
				<div class="d-flex mt-2 pt-1">
					<div class="post_empty_space flex-0"></div>
					<div class="flex-1">
						<!-- post stats -->
						<div class="post-stats d-flex align-items-center">
							<!-- reactions stats -->
							<?php if ($_smarty_tpl->getValue('post')['reactions_total_count'] > 0) {?>
								<div class="pointer" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
									<div class="reactions-stats d-flex align-items-center">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['reactions'], 'reaction_count', false, 'reaction_type');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction_type')->value => $_smarty_tpl->getVariable('reaction_count')->value) {
$foreach17DoElse = false;
?>
											<?php if ($_smarty_tpl->getValue('reaction_count') > 0) {?>
												<div class="reactions-stats-item bg-white rounded-circle position-relative d-inline-flex align-middle align-items-center justify-content-center">
													<div class="inline-emoji no_animation">
														<?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction_type')), (int) 0, $_smarty_current_dir);
?>
													</div>
												</div>
											<?php }?>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										<!-- reactions count -->
										<span>
											<?php echo $_smarty_tpl->getValue('post')['reactions_total_count_formatted'];?>

										</span>
										<!-- reactions count -->
									</div>
								</div>
								<span class="fw-bold mx-1">·</span>
							<?php }?>
							<!-- reactions stats -->

							<!-- comments & shares & views & plays & donations -->
							<!-- comments -->
							<span class="pointer js_comments-toggle">
								<?php echo $_smarty_tpl->getValue('post')['comments_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comments");?>

							</span>
							<!-- comments -->

							<!-- shares -->
							<span class="pointer <?php if ($_smarty_tpl->getValue('post')['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['shares_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shares");?>

							</span>
							<!-- shares -->

							<!-- views -->
							<?php if ($_smarty_tpl->getValue('system')['posts_views_enabled']) {?>
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['views_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

							<?php }?>
							<!-- views -->

							<!-- video views -->
							<?php if ($_smarty_tpl->getValue('post')['post_type'] == "video") {?>
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['video']['views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

							<?php }?>
							<?php if ($_smarty_tpl->getValue('post')['post_type'] == "shared" && $_smarty_tpl->getValue('post')['origin']['post_type'] == "video") {?>
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['origin']['video']['views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

							<?php }?>
							<!-- video views -->

							<!-- audio views -->
							<?php if ($_smarty_tpl->getValue('post')['post_type'] == "audio") {?>
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['audio']['views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

							<?php }?>
							<?php if ($_smarty_tpl->getValue('post')['post_type'] == "shared" && $_smarty_tpl->getValue('post')['origin']['post_type'] == "audio") {?>
								<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['origin']['audio']['views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

							<?php }?>
							<!-- audio views -->

							<!-- donations -->
							<?php if ($_smarty_tpl->getValue('post')['post_type'] == "funding") {?>
								<span class="pointer" data-toggle="modal" data-url="posts/who_donates.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
									<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['funding']['total_donations'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Donations");?>

								</span>
							<?php }?>
							<!-- donations -->

							<?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
								<!-- reviews -->
								<span class="pointer" data-toggle="modal" data-url="posts/who_reviews.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
									<span class="fw-bold mx-1">·</span><?php echo $_smarty_tpl->getValue('post')['reviews_count_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>

								</span>
								<!-- reviews -->
							<?php }?>
							<!-- comments & shares & views & plays & donations -->
						</div>
						<!-- post stats -->

						<!-- post actions -->
						<?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('_get') != "posts_information") {?>
							<div class="post-actions d-flex align-items-center justify-content-between">
								<!-- reactions -->
								<div class="action-btn position-relative rounded-circle main_bg_half p-2 lh-1 pointer unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('post')['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('post')['i_reaction'];?>
">
									<!-- reaction-btn -->
									<div class="reaction-btn position-relative">
										<?php if (!$_smarty_tpl->getValue('post')['i_react']) {?>
											<div class="reaction-btn-icon">
												<i class="far fa-smile fa-fw action-icon"></i>
											</div>
											<span class="reaction-btn-name d-none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("React");?>
</span>
										<?php } else { ?>
											<div class="reaction-btn-icon">
												<div class="inline-emoji no_animation">
													<?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('post')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
												</div>
											</div>
											<span class="reaction-btn-name" style="color: <?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('post')['i_reaction']]['color'];?>
;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('post')['i_reaction']]['title']);?>
</span>
										<?php }?>
									</div>
									<!-- reaction-btn -->

									<!-- reactions-container -->
									<div class="reactions-container">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach18DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach18Backup = clone $_smarty_tpl->getVariable('reaction');
?>
											<div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
												<?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
											</div>
										<?php
$_smarty_tpl->setVariable('reaction', $foreach18Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</div>
									<!-- reactions-container -->
								</div>
								<!-- reactions -->

								<!-- comment -->
								<div class="action-btn position-relative rounded-circle main_bg_half p-2 lh-1 pointer js_comment <?php if ($_smarty_tpl->getValue('post')['comments_disabled']) {?>x-hidden<?php }?>">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none" class="position-relative"><path d="M14.1706 20.8905C18.3536 20.6125 21.6856 17.2332 21.9598 12.9909C22.0134 12.1607 22.0134 11.3009 21.9598 10.4707C21.6856 6.22838 18.3536 2.84913 14.1706 2.57107C12.7435 2.47621 11.2536 2.47641 9.8294 2.57107C5.64639 2.84913 2.31441 6.22838 2.04024 10.4707C1.98659 11.3009 1.98659 12.1607 2.04024 12.9909C2.1401 14.536 2.82343 15.9666 3.62791 17.1746C4.09501 18.0203 3.78674 19.0758 3.30021 19.9978C2.94941 20.6626 2.77401 20.995 2.91484 21.2351C3.05568 21.4752 3.37026 21.4829 3.99943 21.4982C5.24367 21.5285 6.08268 21.1757 6.74868 20.6846C7.1264 20.4061 7.31527 20.2668 7.44544 20.2508C7.5756 20.2348 7.83177 20.3403 8.34401 20.5513C8.8044 20.7409 9.33896 20.8579 9.8294 20.8905C11.2536 20.9852 12.7435 20.9854 14.1706 20.8905Z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round" /><path d="M11.9953 12H12.0043M15.9908 12H15.9998M7.99982 12H8.00879" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
									<span class="d-none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comment");?>
</span>
								</div>
								<!-- comment -->

								<!-- share -->
								<?php if ($_smarty_tpl->getValue('post')['privacy'] == "public" || ($_smarty_tpl->getValue('post')['in_group'] && $_smarty_tpl->getValue('post')['group_privacy'] == "public") || ($_smarty_tpl->getValue('post')['in_event'] && $_smarty_tpl->getValue('post')['event_privacy'] == "public")) {?>
									<div class="action-btn position-relative rounded-circle main_bg_half p-2 lh-1 pointer" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none" class="position-relative"><path d="M18 7C18.7745 7.16058 19.3588 7.42859 19.8284 7.87589C21 8.99181 21 10.7879 21 14.38C21 17.9721 21 19.7681 19.8284 20.8841C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8841C3 19.7681 3 17.9721 3 14.38C3 10.7879 3 8.99181 4.17157 7.87589C4.64118 7.42859 5.2255 7.16058 6 7" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" /><path d="M12.0253 2.00052L12 14M12.0253 2.00052C11.8627 1.99379 11.6991 2.05191 11.5533 2.17492C10.6469 2.94006 9 4.92886 9 4.92886M12.0253 2.00052C12.1711 2.00657 12.3162 2.06476 12.4468 2.17508C13.3531 2.94037 15 4.92886 15 4.92886" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" /></svg>
										<span class="d-none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
</span>
									</div>
								<?php }?>
								<!-- share -->

								<!-- review -->
								<?php if ($_smarty_tpl->getValue('post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id'] && $_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
									<div class="action-btn position-relative rounded-circle main_bg_half p-2 lh-1 pointer" data-toggle="modal" data-url="modules/review.php?do=review&id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
&type=post">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none" class="position-relative"><path d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" /></svg>
										<span class="d-none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Review");?>
</span>
									</div>
								<?php }?>
								<!-- review -->

								<!-- tips -->
								<?php if ($_smarty_tpl->getValue('post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id'] && $_smarty_tpl->getValue('post')['tips_enabled']) {?>
									<div class="action-btn position-relative rounded-circle main_bg_half p-2 lh-1 pointer" data-toggle="modal" data-url="#send-tip" data-options='{ "id": "<?php echo $_smarty_tpl->getValue('post')['author_id'];?>
"}'>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none" class="position-relative"><path d="M19.7453 13C20.5362 11.8662 21 10.4872 21 9C21 5.13401 17.866 2 14 2C10.134 2 7 5.134 7 9C7 10.0736 7.24169 11.0907 7.67363 12" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" /><path d="M14 6C12.8954 6 12 6.67157 12 7.5C12 8.32843 12.8954 9 14 9C15.1046 9 16 9.67157 16 10.5C16 11.3284 15.1046 12 14 12M14 6C14.8708 6 15.6116 6.4174 15.8862 7M14 6V5M14 12C13.1292 12 12.3884 11.5826 12.1138 11M14 12V13" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" /><path d="M3 14H5.39482C5.68897 14 5.97908 14.0663 6.24217 14.1936L8.28415 15.1816C8.54724 15.3089 8.83735 15.3751 9.1315 15.3751H10.1741C11.1825 15.3751 12 16.1662 12 17.142C12 17.1814 11.973 17.2161 11.9338 17.2269L9.39287 17.9295C8.93707 18.0555 8.449 18.0116 8.025 17.8064L5.84211 16.7503M12 16.5L16.5928 15.0889C17.407 14.8352 18.2871 15.136 18.7971 15.8423C19.1659 16.3529 19.0157 17.0842 18.4785 17.3942L10.9629 21.7305C10.4849 22.0063 9.92094 22.0736 9.39516 21.9176L3 20.0199" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" /></svg>
										<span class="ml5 d-none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tip");?>
</span>
									</div>
								<?php }?>
								<!-- tips -->
							</div>
						<?php }?>
						<!-- post actions -->
					</div>
				</div>
			<?php }?>
		</div>
		<!-- post body -->

		<!-- post footer -->
		<?php if (!$_smarty_tpl->getValue('post')['needs_payment'] && !$_smarty_tpl->getValue('post')['needs_subscription'] && !$_smarty_tpl->getValue('post')['needs_pro_package'] && !$_smarty_tpl->getValue('post')['needs_age_verification']) {?>
			<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
				<div class="post-footer pt-3 mt-3 <?php if (!$_smarty_tpl->getValue('standalone')) {?>border-0 x_inside_comms<?php }?> <?php if (!$_smarty_tpl->getValue('standalone') || ($_smarty_tpl->getValue('page') != "post" && $_smarty_tpl->getValue('post')['boosted'])) {?>x-hidden<?php }?>">
					<!-- comments -->
					<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
					<!-- comments -->
				</div>
			<?php } else { ?>
				<div class="d-flex">
					<div class="post_empty_space flex-0"></div>
					<div class="flex-1">
						<div class="small">
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="d-inline-flex align-items-center gap-2">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="currentColor" fill="none"><path d="M11.5 2C6.21 2.24942 2 6.43482 2 11.5606C2 14.1004 3.03333 16.4082 4.71889 18.1208C5.09 18.4979 5.33778 19.0131 5.23778 19.5433C5.07275 20.4103 4.69874 21.2189 4.15111 21.8929C5.59195 22.1611 7.09014 21.9196 8.37499 21.2359C8.82918 20.9943 9.05627 20.8734 9.21653 20.8489C9.37678 20.8244 9.60633 20.8676 10.0654 20.9538C10.7032 21.0737 11.3507 21.1337 12 21.1329C17.5222 21.1329 22 16.8468 22 11.5606C22 11.3702 21.9942 11.1812 21.9827 10.9935" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" /><path d="M15.015 2.38661C16.0876 1.74692 17.0238 2.00471 17.5863 2.41534C17.8169 2.58371 17.9322 2.66789 18 2.66789C18.0678 2.66789 18.1831 2.58371 18.4137 2.41534C18.9762 2.00471 19.9124 1.74692 20.985 2.38661C22.3928 3.22614 22.7113 5.99577 19.4642 8.33241C18.8457 8.77747 18.5365 9 18 9C17.4635 9 17.1543 8.77747 16.5358 8.33241C13.2887 5.99577 13.6072 3.22614 15.015 2.38661Z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" /><path d="M11.9955 12H12.0045M15.991 12H16M8 12H8.00897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please log in to like, share and comment!");?>

							</a>
						</div>
					</div>
				</div>
			<?php }?>
		<?php }?>
		<!-- post footer -->

		<!-- post approval -->
		<?php if (($_smarty_tpl->getValue('post')['in_group'] && $_smarty_tpl->getValue('post')['is_group_admin'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && $_smarty_tpl->getValue('post')['is_event_admin'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>
			<div class="post-approval mt-3 pt-3 d-flex align-items-center justify-content-end gap-2">
				<button class="btn text-danger btn-sm js_delete-post">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" color="currentColor" fill="none"><path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path></svg><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>

				</button>
				<button class="btn btn-main btn-sm js_approve-post">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" color="currentColor" fill="none"><path d="M5 14L8.5 17.5L19 6.5" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path></svg><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>

				</button>
			</div>
		<?php }?>
		<!-- post approval -->
	</div>
	<!-- post -->
  <?php if (!$_smarty_tpl->getValue('standalone')) {?>
</li><?php }
}
}

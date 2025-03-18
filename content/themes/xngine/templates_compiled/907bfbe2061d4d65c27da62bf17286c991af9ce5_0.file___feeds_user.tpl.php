<?php
/* Smarty version 5.4.1, created on 2025-03-14 15:32:16
  from 'file:__feeds_user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d44c004a8ac0_65874643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907bfbe2061d4d65c27da62bf17286c991af9ce5' => 
    array (
      0 => '__feeds_user.tpl',
      1 => 1736492676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__reaction_emojis.tpl' => 1,
  ),
))) {
function content_67d44c004a8ac0_65874643 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('_tpl') == "box") {?>
    <div class="<?php if ($_smarty_tpl->getValue('_vsmall')) {?>col-md-6 col-lg-4<?php } else { ?>col-md-6 col-lg-3<?php }?>">
        <div class="ui-box">
            <div class="img">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
">
                    <img alt="" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" />
                </a>
            </div>
            <div class="mt10 truncate">
                <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                    <a class="h6" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
">
                        <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
                            <?php echo $_smarty_tpl->getValue('_user')['user_name'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];?>

                        <?php }?>
                    </a>
                </span>
                <?php if ($_smarty_tpl->getValue('_user')['user_verified']) {?>
					<span class="verified-color" data-toggle="tooltip" data-placement="top" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="currentColor" d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.5L12,2.96L8.6,1.5L6.71,4.69L3.1,5.5L3.44,9.2L1,12l2.44,2.79l-0.34,3.7 l3.61,0.82L8.6,22.5l3.4-1.47l3.4,1.46l1.89-3.19l3.61-0.82l-0.34-3.69L23,12z M9.38,16.01L7,13.61c-0.39-0.39-0.39-1.02,0-1.41 l0.07-0.07c0.39-0.39,1.03-0.39,1.42,0l1.61,1.62l5.15-5.16c0.39-0.39,1.03-0.39,1.42,0l0.07,0.07c0.39,0.39,0.39,1.02,0,1.41 l-5.92,5.94C10.41,16.4,9.78,16.4,9.38,16.01z"></path></svg></span>
                <?php }?>
            </div>
			<?php if ($_smarty_tpl->getValue('_user')['monetization_plan']) {?>
				<div class="mt10">
					<span class="badge badge-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_user')['monetization_plan']['price']);?>
 / <?php if ($_smarty_tpl->getValue('_user')['monetization_plan']['period_num'] != '1') {
echo $_smarty_tpl->getValue('_user')['monetization_plan']['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('_user')['monetization_plan']['period']));?>
</span>
				</div>
			<?php }?>
            <div class="mt10">
                <!-- buttons -->
                <?php if ($_smarty_tpl->getValue('_connection') == "request") {?>
                    <button type="button" class="btn btn-sm btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</button>
                    <button type="button" class="btn btn-sm btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "add") {?>
					<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
						<button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<i class="fa fa-user-plus mr5"></i><?php if ($_smarty_tpl->getValue('_small')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friend");
}?>
						</button>
					<?php } else { ?>
						<button type="button" class="btn btn-sm btn-success js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

						</button>
					<?php }?>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "cancel") {?>
                    <button type="button" class="btn btn-sm btn-warning js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-clock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>

                    </button>
					
                <?php } elseif ($_smarty_tpl->getValue('_connection') == "remove") {?>
					<button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
						<i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

					</button>
					<?php if ($_smarty_tpl->getValue('_top_friends')) {?>
						<button type="button" class="btn btn-sm btn-warning p-2 <?php if ($_smarty_tpl->getValue('_user')['top_friend']) {?>js_friend-unfavorite<?php } else { ?>js_friend-favorite<?php }?>" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php if ($_smarty_tpl->getValue('_user')['top_friend']) {?>
								<i class="fa-solid fa-star"></i>
							<?php } else { ?>
								<i class="fa-regular fa-star"></i>
							<?php }?>
						</button>
					<?php }?>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "follow") {?>
                    <button type="button" class="btn btn-sm btn-info js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-rss mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "unfollow") {?>
                    <button type="button" class="btn btn-sm btn-info js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "blocked") {?>
                    <button type="button" class="btn btn-sm btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unblock");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_invite") {?>
                    <button type="button" class="btn btn-info btn-sm js_page-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_manage") {?>
                    <button type="button" class="btn btn-danger js_page-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

                    </button>
                    <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
                        <button type="button" class="btn btn-danger js_page-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                            <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-primary js_page-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

                        </button>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_invite") {?>
                    <button type="button" class="btn btn-sm btn-info js_group-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_request") {?>
                    <button type="button" class="btn btn-sm btn-primary js_group-request-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
</button>
                    <button type="button" class="btn btn-sm btn-danger js_group-request-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_manage") {?>
                    <button type="button" class="btn btn-sm btn-danger js_group-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

                    </button>
                    <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
                        <button type="button" class="btn btn-sm btn-danger js_group-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                            <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-primary js_group-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

                        </button>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "event_invite") {?>
                    <button type="button" class="btn btn-sm btn-info js_event-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                        <i class="fa fa-user-plus mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

                    </button>

                <?php } elseif ($_smarty_tpl->getValue('_connection') == "unsubscribe") {?>
					<?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('_user')['plan_user_id']) {?>
						<button type="button" class="btn btn-sm btn-danger js_unsubscribe-plan" data-id="<?php echo $_smarty_tpl->getValue('_user')['plan_id'];?>
">
							<i class="fa fa-trash mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

						</button>
					<?php }?>

				<?php }?>
                <!-- buttons -->
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->getValue('_tpl') == "list") {?>
    <li class="feeds-item px-3 side_item_hover side_item_list" <?php if ($_smarty_tpl->getValue('_user')['id']) {?>data-id="<?php echo $_smarty_tpl->getValue('_user')['id'];?>
" <?php }?>>
		<div class="d-flex align-items-center justify-content-between x_user_info <?php if ($_smarty_tpl->getValue('_small')) {?>small<?php }?>">
			<div class="d-flex align-items-center position-relative mw-0">
				<a class="position-relative flex-0" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
					<img src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
" class="rounded-circle">
					<?php if ($_smarty_tpl->getValue('_reaction')) {?>
						<div class="data-reaction">
							<div class="inline-emoji no_animation">
								<?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('_reaction')), (int) 0, $_smarty_current_dir);
?>
							</div>
						</div>
					<?php }?>
				</a>
				<div class="mw-0 text-truncate mx-2 px-1">
					<div class="fw-semibold text-truncate">
						<span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>" class="body-color">
								<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
									<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];?>

								<?php }?>
							</a>
						</span>
						<?php if ($_smarty_tpl->getValue('_user')['user_verified']) {?>
							<span class="verified-badge align-middle d-inline-flex" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="currentColor" d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.5L12,2.96L8.6,1.5L6.71,4.69L3.1,5.5L3.44,9.2L1,12l2.44,2.79l-0.34,3.7 l3.61,0.82L8.6,22.5l3.4-1.47l3.4,1.46l1.89-3.19l3.61-0.82l-0.34-3.69L23,12z M9.38,16.01L7,13.61c-0.39-0.39-0.39-1.02,0-1.41 l0.07-0.07c0.39-0.39,1.03-0.39,1.42,0l1.61,1.62l5.15-5.16c0.39-0.39,1.03-0.39,1.42,0l0.07,0.07c0.39,0.39,0.39,1.02,0,1.41 l-5.92,5.94C10.41,16.4,9.78,16.4,9.38,16.01z"></path></svg></span>
						<?php }?>
						<?php if ($_smarty_tpl->getValue('_user')['user_subscribed']) {?>
							<span class="pro-badge align-middle d-inline-flex align-items-center small" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
								<svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0z" fill="none"></path><path fill="currentColor" d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm-.52 15.86v-4.14H8.82c-.37 0-.62-.4-.44-.73l3.68-7.17c.23-.47.94-.3.94.23v4.19h2.54c.37 0 .61.39.45.72l-3.56 7.12c-.24.48-.95.31-.95-.22z"></path></svg> <small>PRO</small>
							</span>
						<?php }?>
						<?php if ($_smarty_tpl->getValue('_user')['permission']) {?><span class="badge bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_user')['permission']));?>
</span><?php }?>
					</div>
					<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
					<?php } else { ?>
						<p class="m-0 text-muted text-truncate small">@<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
</p>
					<?php }?>
					<?php if ($_smarty_tpl->getValue('_connection') != "me" && $_smarty_tpl->getValue('_user')['mutual_friends_count'] > 0) {?>
						<p class="m-0 text-muted text-truncate small">
							<span class="" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getValue('_user')['mutual_friends_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("mutual friends");?>
</span>
						</p>
					<?php }?>
					<?php if ($_smarty_tpl->getValue('_donation')) {?>
						<p class="m-0 text-muted text-truncate small">
							<span class="badge badge-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('_donation'),2));?>
</span>
							<span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('_donation_time');?>
"><?php echo $_smarty_tpl->getValue('_donation_time');?>
</span>
						</p>
					<?php }?>
				</div>
			</div>
			<?php if (!$_smarty_tpl->getValue('_prusrs') == "pro") {?>
				<div class="flex-0">
					<!-- buttons -->
					<?php if ($_smarty_tpl->getValue('_connection') == "request") {?>
						<button type="button" class="btn btn-main btn-sm js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</button>
						<button type="button" class="btn btn-secondary btn-sm js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "add") {?>
						<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
							<button type="button" class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php if ($_smarty_tpl->getValue('_small')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add");
}?>
							</button>
						<?php } else { ?>
							<button type="button" class="btn btn-success btn-sm js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

							</button>
						<?php }?>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "cancel") {?>
						<button type="button" class="btn btn-sm btn-default js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>
</button>
					
					<?php } elseif ($_smarty_tpl->getValue('_connection') == "remove") {?>
						<button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "follow") {?>
						<button type="button" class="btn btn-sm btn-info js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "unfollow") {?>
						<button type="button" class="btn btn-sm btn-info js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "blocked") {?>
						<button type="button" class="btn btn-sm btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unblock");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "page_invite") {?>
						<button type="button" class="btn btn-info btn-sm js_page-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "page_manage") {?>
						<button type="button" class="btn btn-danger btn-sm js_page-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

						</button>
						<?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
							<button type="button" class="btn btn-danger btn-sm js_page-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

							</button>
						<?php } else { ?>
							<button type="button" class="btn btn-main btn-sm js_page-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

							</button>
						<?php }?>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "group_invite") {?>
						<button type="button" class="btn btn-sm btn-info js_group-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "group_request") {?>
						<button type="button" class="btn btn-sm btn-main js_group-request-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
</button>
						<button type="button" class="btn btn-sm btn-danger js_group-request-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "group_manage") {?>
						<button type="button" class="btn btn-sm btn-danger js_group-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

						</button>
						<?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
							<button type="button" class="btn btn-sm btn-danger js_group-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

							</button>
						<?php } else { ?>
							<button type="button" class="btn btn-sm btn-main js_group-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
								<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

							</button>
						<?php }?>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "event_invite") {?>
						<button type="button" class="btn btn-sm btn-info js_event-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "connected_account_remove") {?>
						<button type="button" class="btn btn-sm btn-danger js_connected-account-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "connected_account_revoke") {?>
						<button type="button" class="btn btn-sm btn-danger js_connected-account-revoke">
							<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Revoke");?>

						</button>
						
					<?php } elseif ($_smarty_tpl->getValue('_connection') == "page_activities_request") {?>
						<button type="button" class="btn btn-sm btn-danger js_activities-permission-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
">
						  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>

						</button>
						<button type="button" class="btn btn-sm btn-main js_activities-permission-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
" data-permission="editor">
						  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve Editor");?>

						</button>
						<button type="button" class="btn btn-sm btn-main js_activities-permission-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
" data-permission="viewer">
						  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve Viewer");?>

						</button>

					<?php } elseif ($_smarty_tpl->getValue('_connection') == "page_activities_manage") {?>
						<button type="button" class="btn btn-sm btn-danger js_activities-permission-revoke" data-id="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
						  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Revoke Permission");?>

						</button>

					<?php }?>
					<!-- buttons -->
				</div>
			<?php }?>
		</div>
    </li>
<?php }
}
}

<?php
/* Smarty version 5.4.1, created on 2025-03-15 10:05:44
  from 'file:ajax.popover.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d550f86350c9_95861645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59810b7b1799a0b9b9dce0b23fad2e39ed38a65f' => 
    array (
      0 => 'ajax.popover.tpl',
      1 => 1723652460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 6,
  ),
))) {
function content_67d550f86350c9_95861645 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates';
if ($_smarty_tpl->getValue('type') == "user") {?>
  <!-- user popover -->
  <div class="user-popover-content">
    <div class="user-card">
      <div class="user-card-cover" <?php if ($_smarty_tpl->getValue('profile')['user_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_cover'];?>
');" <?php }?>>
      </div>
      <div class="user-card-avatar">
        <img src="<?php echo $_smarty_tpl->getValue('profile')['user_picture'];?>
" alt="">
      </div>
      <div class="user-card-info">
        <a class="name" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
">
          <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
            <?php echo $_smarty_tpl->getValue('profile')['user_name'];?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getValue('profile')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('profile')['user_lastname'];?>

          <?php }?>
        </a>
        <?php if ($_smarty_tpl->getValue('profile')['user_verified']) {?>
          <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
        <div class="info">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getValue('profile')['followers_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("followers");?>
</a>
        </div>
      </div>
    </div>
    <div class="user-card-meta">
      <!-- mutual friends -->
      <?php if ($_smarty_tpl->getValue('profile')['mutual_friends_count'] && $_smarty_tpl->getValue('profile')['mutual_friends_count'] > 0) {?>
        <div class="mb10">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
          <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"><?php echo $_smarty_tpl->getValue('profile')['mutual_friends_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("mutual friends");?>
</span>
        </div>
      <?php }?>
      <!-- mutual friends -->
      <!-- work -->
      <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('is_empty')($_smarty_tpl->getValue('profile')['user_work_title'])) {?>
          <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_work'] == "public" || $_smarty_tpl->getValue('profile')['we_friends']) {?>
            <div class="mb10">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getValue('profile')['user_work_title'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("at");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('profile')['user_work_place'];?>
</span>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- work -->
      <!-- hometown -->
      <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('is_empty')($_smarty_tpl->getValue('profile')['user_hometown'])) {?>
          <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_location'] == "public" || $_smarty_tpl->getValue('profile')['we_friends']) {?>
            <div class="mb10">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"home",'class'=>"main-icon mr10",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('profile')['user_hometown'];?>
</span>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- hometown -->
    </div>
    <div class="popover-footer">
      <?php if ($_smarty_tpl->getValue('user')->_data['user_id'] != $_smarty_tpl->getValue('profile')['user_id']) {?>
        <!-- add friend -->
        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
          <?php if ($_smarty_tpl->getValue('profile')['we_friends']) {?>
            <button type="button" class="btn btn-sm btn-success btn-delete rounded-pill js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

            </button>
          <?php } elseif ($_smarty_tpl->getValue('profile')['he_request']) {?>
            <button type="button" class="btn btn-sm btn-primary rounded-pill js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</button>
            <button type="button" class="btn btn-sm btn-danger rounded-pill js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>
          <?php } elseif ($_smarty_tpl->getValue('profile')['i_request']) {?>
            <button type="button" class="btn btn-sm btn-warning rounded-pill js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-success rounded-pill js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friend");?>

            </button>
          <?php }?>
        <?php }?>
        <!-- add friend -->

        <!-- follow -->
        <?php if ($_smarty_tpl->getValue('profile')['i_follow']) {?>
          <button type="button" class="btn btn-sm btn-light rounded-pill js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-light rounded-pill js_follow" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
            <i class="fa fa-rss mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

          </button>
        <?php }?>
        <!-- follow -->

        <!-- message -->
        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
          <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('profile')['user_privacy_chat'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_chat'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
            <button type="button" class="btn btn-icon rounded-pill btn-light js_chat-start" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('profile')['user_name'];
} else {
echo $_smarty_tpl->getValue('profile')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('profile')['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('profile')['user_picture'];?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
              <?php if ($_smarty_tpl->getValue('profile')['chat_price']) {?><small class="ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('profile')['chat_price']);?>
</small><?php }?>
            </button>
          <?php }?>
        <?php }?>
        <!-- message -->
      <?php } else { ?>
        <!-- edit -->
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile" class="btn btn-sm btn-light rounded-pill">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update");?>

        </a>
        <!-- edit -->
      <?php }?>
    </div>
  </div>
  <!-- user popover -->
<?php } else { ?>
  <!-- page popover -->
  <div class="user-popover-content">
    <div class="user-card">
      <div class="user-card-cover" <?php if ($_smarty_tpl->getValue('profile')['page_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('profile')['page_cover'];?>
');" <?php }?>></div>
      <div class="user-card-avatar">
        <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('profile')['page_picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('profile')['page_title'];?>
">
      </div>
      <div class="user-card-info">
        <a class="name" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('profile')['page_name'];?>
"><?php echo $_smarty_tpl->getValue('profile')['page_title'];?>
</a>
        <?php if ($_smarty_tpl->getValue('profile')['page_verified']) {?>
          <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Page");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
        <div class="info"><?php echo $_smarty_tpl->getValue('profile')['page_likes'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Likes");?>
</div>
      </div>
    </div>
    <div class="popover-footer">
      <!-- like -->
      <?php if ($_smarty_tpl->getValue('profile')['i_like']) {?>
        <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->getValue('profile')['page_id'];?>
">
          <i class="fa fa-heart mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unlike");?>

        </button>
      <?php } else { ?>
        <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->getValue('profile')['page_id'];?>
">
          <i class="fa fa-heart mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Like");?>

        </button>
      <?php }?>
      <!-- like -->
    </div>
  </div>
  <!-- page popover -->
<?php }
}
}

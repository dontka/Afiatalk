<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:49:32
  from 'file:ajax.chat.master.sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e0c278458_36625106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737f8a2a5bfbbbfbf5576b88d61cffe4beb87a37' => 
    array (
      0 => 'ajax.chat.master.sidebar.tpl',
      1 => 1730617158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e0c278458_36625106 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sidebar_friends'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
	<div class="chat-avatar-wrapper clickable js_chat-start" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" data-bs-toggle="tooltip" data-bs-placement="left" title="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?> <?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];?>
 <?php }?>">
		<div class="chat-avatar position-relative mx-auto">
			<img class="rounded-circle" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="" />
			<?php if ($_smarty_tpl->getValue('_user')['user_is_online']) {?>
				<span class="online-dot position-absolute rounded-circle"></span>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->getValue('system')['chat_status_enabled'] && !$_smarty_tpl->getValue('_user')['user_is_online']) {?>
			<div class="last-seen rounded-2 text-center position-absolute text-white pe-none">
				<span class='js_moment' data-time='<?php echo $_smarty_tpl->getValue('_user')['user_last_seen'];?>
'><?php echo $_smarty_tpl->getValue('_user')['user_last_seen'];?>
</span>
			</div>
		<?php }?>
	</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}

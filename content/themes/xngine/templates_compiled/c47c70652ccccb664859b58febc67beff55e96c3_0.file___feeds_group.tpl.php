<?php
/* Smarty version 5.4.1, created on 2025-03-13 09:44:07
  from 'file:__feeds_group.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2a8e745cc92_39409068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47c70652ccccb664859b58febc67beff55e96c3' => 
    array (
      0 => '__feeds_group.tpl',
      1 => 1731062313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2a8e745cc92_39409068 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('_tpl') == "box") {?>
    <li class="px-3 side_item_hover side_item_list d-flex align-items-start gap-3 x_group_list <?php if ($_smarty_tpl->getValue('_darker')) {?>darker<?php }?>">
		<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_group')['group_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>" class="flex-0">
			<img alt="<?php echo $_smarty_tpl->getValue('_group')['group_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_group')['group_picture'];?>
" class="rounded-3" />
		</a>

		<div class="flex-1">
			<div class="">
				<a class="text-md fw-semibold body-color" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_group')['group_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->getValue('_group')['group_title'];?>
</a>
				<div class="text-muted small"><?php echo $_smarty_tpl->getValue('_group')['group_members'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>
</div>
			</div>
			<?php if ($_smarty_tpl->getValue('_group')['monetization_plan']) {?>
				<div class="mt-1">
					<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_group')['monetization_plan']['price']);?>
 / <?php if ($_smarty_tpl->getValue('_group')['monetization_plan']['period_num'] != '1') {
echo $_smarty_tpl->getValue('_group')['monetization_plan']['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('_group')['monetization_plan']['period']));?>

				</div>
			<?php }?>
			<div class="mt-2 pt-1">
				<?php if ($_smarty_tpl->getValue('_connection') == 'unsubscribe') {?>
					<?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('_group')['plan_user_id']) {?>
						<button type="button" class="btn btn-danger js_unsubscribe-plan" data-id="<?php echo $_smarty_tpl->getValue('_group')['plan_id'];?>
">
							<i class="fa fa-trash"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

						</button>
					<?php }?>
				<?php } else { ?>
					<?php if ($_smarty_tpl->getValue('_group')['i_joined'] == "approved") {?>
						<button type="button" class="btn btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_leave-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->getValue('_group')['group_privacy'];?>
">
							<i class="fa fa-check"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Joined");?>

						</button>
					<?php } elseif ($_smarty_tpl->getValue('_group')['i_joined'] == "pending") {?>
						<button type="button" class="btn btn-warning js_leave-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->getValue('_group')['group_privacy'];?>
">
							<i class="fa fa-clock"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>

						</button>
					<?php } else { ?>
						<button type="button" class="btn btn-dark js_join-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('_group')['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->getValue('_group')['group_privacy'];
}?>">
							<i class="fa fa-user-plus"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Join");?>

						</button>
					<?php }?>
				<?php }?>
			</div>
		</div>
    </li>
<?php } elseif ($_smarty_tpl->getValue('_tpl') == "list") {?>
	<li class="feeds-item px-3 side_item_hover side_item_list">
		<div class="d-flex align-items-center justify-content-between x_user_info <?php if ($_smarty_tpl->getValue('_small')) {?>small<?php }?>">
			<div class="d-flex align-items-center position-relative mw-0">
				<a class="position-relative flex-0" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_group')['group_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
					<img src="<?php echo $_smarty_tpl->getValue('_group')['group_picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('_group')['group_title'];?>
" class="rounded-circle">
				</a>
				<div class="mw-0 text-truncate mx-2 px-1">
					<div class="fw-semibold text-truncate">
						<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_group')['group_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>" class="body-color">
							<?php echo $_smarty_tpl->getValue('_group')['group_title'];?>

						</a>
					</div>
					<p class="m-0 text-muted text-truncate small"><?php echo $_smarty_tpl->getValue('_group')['group_members'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");?>
</p>
				</div>
			</div>
			<div class="flex-0">
				<!-- buttons -->
				<?php if ($_smarty_tpl->getValue('_group')['i_joined'] == "approved") {?>
					<button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_leave-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->getValue('_group')['group_privacy'];?>
">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Joined");?>

					</button>
				<?php } elseif ($_smarty_tpl->getValue('_group')['i_joined'] == "pending") {?>
					<button type="button" class="btn btn-sm btn-warning js_leave-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->getValue('_group')['group_privacy'];?>
">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>

					</button>
				<?php } else { ?>
					<button type="button" class="btn btn-sm btn-dark js_join-group" data-id="<?php echo $_smarty_tpl->getValue('_group')['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('_group')['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->getValue('_group')['group_privacy'];
}?>">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Join");?>

					</button>
				<?php }?>
				<!-- buttons -->
			</div>
		</div>
	</li>
<?php }
}
}

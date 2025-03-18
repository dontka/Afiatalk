<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:06
  from 'file:__feeds_post.body.photos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e6a8097d5_31002149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526cc8e77c3f6a3089ddc9b6c788a849c21ebe9d' => 
    array (
      0 => '__feeds_post.body.photos.tpl',
      1 => 1730022532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e6a8097d5_31002149 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="pg_wrapper overflow-hidden clearfix">
	<?php if ($_smarty_tpl->getValue('_post')['photos_num'] == 1) {?>
		<div class="pg_1x <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
			<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox d-block position-relative bg-transparent w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_post')['post_type'],array('product','offer'))) {?>post<?php } else { ?>album<?php }?>">
				<img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
">
			</a>
		</div>
	<?php } elseif ($_smarty_tpl->getValue('_post')['photos_num'] == 2) {?>
		<div class="d-flex align-items-center pg_img_gap">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['photos'], 'photo');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach24DoElse = false;
?>
				<div class="pg_2x h-100 <?php if ($_smarty_tpl->getValue('photo')['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
');"></a>
				</div>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</div>
	<?php } elseif ($_smarty_tpl->getValue('_post')['photos_num'] == 3) {?>
		<div class="pg_3x d-flex">
			<div class="pg_2o3 h-100">
				<div class="pg_2o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
');"></a>
				</div>
			</div>
			<div class="pg_1o3 d-flex flex-column h-100">
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][1]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
');"></a>
				</div>
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][2]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
');"></a>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="pg_3x d-flex">
			<div class="pg_1o3 d-flex flex-column h-100">
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][0]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][0]['source'];?>
');"></a>
				</div>
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][2]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][2]['source'];?>
');"></a>
				</div>
			</div>
			<div class="pg_1o3 d-flex flex-column h-100">
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][1]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][1]['source'];?>
');"></a>
				</div>
				<div class="pg_1o3_in w-100 h-100 <?php if ($_smarty_tpl->getValue('_post')['photos'][3]['blur']) {?>x-blured<?php }?>">
					<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['photo_id'];?>
" class="js_lightbox d-block position-relative w-100 h-100" data-id="<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['photos'][3]['source'];?>
');">
						<?php if ($_smarty_tpl->getValue('_post')['photos_num'] > 4) {?>
							<span class="more position-absolute text-center text-white fw-semibold d-flex align-items-center justify-content-center">+<?php echo $_smarty_tpl->getValue('_post')['photos_num']-4;?>
</span>
						<?php }?>
					</a>
				</div>
			</div>
		</div>
	<?php }?>
</div><?php }
}

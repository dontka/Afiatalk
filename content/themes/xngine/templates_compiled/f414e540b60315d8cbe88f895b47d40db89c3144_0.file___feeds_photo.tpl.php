<?php
/* Smarty version 5.4.1, created on 2025-03-13 08:08:24
  from 'file:__feeds_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d292789538f6_25254170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f414e540b60315d8cbe88f895b47d40db89c3144' => 
    array (
      0 => '__feeds_photo.tpl',
      1 => 1732980070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d292789538f6_25254170 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="<?php if ($_smarty_tpl->getValue('_small')) {?>col-4<?php } else { ?>col-6 col-md-4 col-lg-2<?php }?> <?php if ($_smarty_tpl->getValue('photo')['blur']) {?>x-blured<?php }?>">
	<a class="pg_photo position-relative w-100 h-100 d-block rounded-3 <?php if (!$_smarty_tpl->getValue('_small')) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" data-context="<?php echo $_smarty_tpl->getValue('_context');?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
);">
		<?php if (!$_smarty_tpl->getValue('_small') && ($_smarty_tpl->getValue('_manage') || $_smarty_tpl->getValue('photo')['manage'])) {?>
			<!-- delete -->
			<div class="pg_photo-delete-btn position-absolute">
				<button type="button" class="btn-close js_delete-photo" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
'></button>
			</div>
			<!-- delete -->
			<?php if ($_smarty_tpl->getValue('_can_pin')) {?>
				<!-- pin -->
				<div class="pg_photo-pin-btn position-absolute p-2 rounded-circle lh-1 <?php if ($_smarty_tpl->getValue('photo')['pinned']) {?>js_unpin-photo pinned<?php } else { ?>js_pin-photo<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pin");?>
'>
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 14.75C12.5523 14.75 13 15.1977 13 15.75V20.75C13 21.3023 12.5523 21.75 12 21.75C11.4477 21.75 11 21.3023 11 20.75V15.75C11 15.1977 11.4477 14.75 12 14.75Z" fill="currentColor"></path><path d="M10.2491 2.25001H13.751C13.9801 2.24994 14.1567 2.24989 14.3145 2.26805C15.5842 2.41419 16.5859 3.41586 16.732 4.68559C16.7502 4.84338 16.7501 5.01993 16.7501 5.24906C16.7501 5.31819 16.7501 5.45153 16.7443 5.52317C16.699 6.08346 16.3873 6.58786 15.9064 6.87899C15.8449 6.91621 15.7795 6.94887 15.7176 6.97975L15.7176 6.97976C15.5062 7.08549 15.1071 7.28554 15.0189 7.33808C14.9649 7.3702 14.9374 7.39363 14.9374 7.39363C14.9112 7.42485 14.8946 7.46052 14.886 7.50037C14.8854 7.50758 14.8846 7.53437 14.8924 7.59668C14.9051 7.69858 14.9315 7.83308 14.9779 8.0649L15.6149 11.25C16.0514 11.2509 16.402 11.2607 16.7118 11.3437C17.6608 11.598 18.4021 12.3393 18.6563 13.2883C18.7507 13.6404 18.7504 14.0451 18.7501 14.5689V14.569C18.7506 14.8115 18.7511 15.2264 18.6904 15.4529C18.5286 16.0569 18.0569 16.5286 17.453 16.6904C17.2264 16.7511 16.9734 16.7506 16.7308 16.7501H7.26927C7.0267 16.7506 6.77366 16.7511 6.54712 16.6904C5.9432 16.5286 5.4715 16.0569 5.30968 15.4529C5.24898 15.2264 5.24952 14.8115 5.25001 14.569C5.24966 14.0452 5.24939 13.6404 5.34375 13.2883C5.59804 12.3393 6.33929 11.598 7.2883 11.3437C7.59813 11.2607 7.94867 11.2509 8.3852 11.25L9.02222 8.0649C9.06858 7.83308 9.09501 7.69857 9.1077 7.59668C9.11547 7.53436 9.11467 7.50757 9.1141 7.50037C9.10555 7.46052 9.08887 7.42485 9.06267 7.39363C9.06267 7.39363 9.03518 7.37021 8.98123 7.33808C8.893 7.28554 8.49392 7.08549 8.28247 6.97976C8.22062 6.94888 8.15518 6.91621 8.0937 6.87899C7.61284 6.58786 7.3011 6.08346 7.25575 5.52317C7.24996 5.45153 7.25 5.31819 7.25004 5.24906C7.24997 5.01993 7.24992 4.84338 7.26808 4.68559C7.41422 3.41586 8.41589 2.41419 9.68562 2.26805C9.84341 2.24989 10.02 2.24994 10.2491 2.25001Z" fill="currentColor"></path></svg>
				</div>
				<!-- pin -->
			<?php }?>
		<?php }?>
	</a>
</div><?php }
}

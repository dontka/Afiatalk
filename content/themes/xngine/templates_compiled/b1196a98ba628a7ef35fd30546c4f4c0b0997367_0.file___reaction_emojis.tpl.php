<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:51:11
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28e6f91a1f8_04543917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1196a98ba628a7ef35fd30546c4f4c0b0997367' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1667424619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28e6f91a1f8_04543917 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}

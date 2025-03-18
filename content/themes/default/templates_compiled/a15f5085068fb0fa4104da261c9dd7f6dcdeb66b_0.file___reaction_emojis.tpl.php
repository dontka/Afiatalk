<?php
/* Smarty version 5.4.1, created on 2025-03-15 10:04:35
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d550b3ad7989_97958467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15f5085068fb0fa4104da261c9dd7f6dcdeb66b' => 
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
function content_67d550b3ad7989_97958467 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}

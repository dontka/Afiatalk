<?php
/* Smarty version 5.4.1, created on 2025-03-15 10:08:50
  from 'file:_footer.links.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d551b2861e46_83550324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f332e1aef2e701a848f0d3317c02efd1f372bae9' => 
    array (
      0 => '_footer.links.tpl',
      1 => 1714817598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d551b2861e46_83550324 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\default\\templates';
?><!-- footer links -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
  <div class="row footer <?php if ($_smarty_tpl->getValue('page') == 'index' && !$_smarty_tpl->getValue('user')->_logged_in) {?>border-top-0<?php }?>">
    <div class="col-sm-6 dropdown">
      <span class="mr5">&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</span>
      <!-- language -->
      <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
        <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('system')['language']['flag'];?>
">
        <span><?php echo $_smarty_tpl->getValue('system')['language']['title'];?>
</span>
      </a>
      <div class="dropdown-menu">
        <div class="js_scroller">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach13DoElse = false;
?>
            <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->getValue('language')['code'];?>
">
              <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('language')['flag'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>

            </a>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <!-- language -->
    </div>

    <div class="col-sm-6 links">
      <?php if ($_smarty_tpl->getValue('static_pages')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$_smarty_tpl->getVariable('static_page')->index = -1;
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach14DoElse = false;
$_smarty_tpl->getVariable('static_page')->index++;
$_smarty_tpl->getVariable('static_page')->first = !$_smarty_tpl->getVariable('static_page')->index;
$foreach14Backup = clone $_smarty_tpl->getVariable('static_page');
?>
          <?php if ($_smarty_tpl->getValue('static_page')['page_in_footer']) {?>
            <a <?php if (!$_smarty_tpl->getVariable('static_page')->first) {?>class="pl10" <?php }?> href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

            </a>
          <?php }?>
        <?php
$_smarty_tpl->setVariable('static_page', $foreach14Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['contact_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/contacts">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Us");?>

        </a>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['directory_enabled']) {?>
        <a class="pl10" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>

        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- footer links --><?php }
}

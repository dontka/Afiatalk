<?php
/* Smarty version 5.4.1, created on 2025-03-13 09:33:16
  from 'file:ajax.group.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d2a65c2af101_52855533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9ba856e22d2d76a2f59670b7e9ae007fe42bdc' => 
    array (
      0 => 'ajax.group.publisher.tpl',
      1 => 1725792474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_67d2a65c2af101_52855533 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Group");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="modules/create.php?type=group&do=create">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label" for="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name Your Group");?>
</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label class="form-label" for="username"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Username");?>
</label>
      <div class="input-group">
        <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/</span>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

      </div>
    </div>
    <div class="form-group">
      <label class="form-label" for="privacy"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Privacy");?>
</label>
      <select class="form-select" name="privacy">
        <option value="public"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public Group");?>
</option>
        <option value="closed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed Group");?>
</option>
        <option value="secret"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secret Group");?>
</option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
      <select class="form-select" name="category" id="category">
        <option><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Category");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="country"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
      <select class="form-select" name="country">
        <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
?>
          <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About");?>
</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- error -->
    <div class="alert alert-danger mb0 mt10 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create");?>
</button>
  </div>
</form><?php }
}

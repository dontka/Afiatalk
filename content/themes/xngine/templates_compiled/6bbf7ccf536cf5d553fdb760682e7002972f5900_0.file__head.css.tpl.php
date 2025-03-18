<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:47:26
  from 'file:_head.css.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28d8e012917_93431590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbf7ccf536cf5d553fdb760682e7002972f5900' => 
    array (
      0 => '_head.css.tpl',
      1 => 1736150400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28d8e012917_93431590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\templates';
if ($_smarty_tpl->getValue('system')['css_customized']) {?><style type="text/css">:root {<?php if ($_smarty_tpl->getValue('system')['css_background']) {?>--body-bg: <?php echo $_smarty_tpl->getValue('system')['css_background'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_link_color']) {?>--main-link: <?php echo $_smarty_tpl->getValue('system')['css_link_color'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_header']) {?>--header-background: <?php echo $_smarty_tpl->getValue('system')['css_header'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_header_search']) {?>--header-search-bg: <?php echo $_smarty_tpl->getValue('system')['css_header_search'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_header_search_color']) {?>--header-search-color: <?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_btn_primary']) {?>--main-btn: <?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
;--plyr-color-main: <?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_header_icons']) {?>--header-color: <?php echo $_smarty_tpl->getValue('system')['css_header_icons'];?>
;<?php }
if ($_smarty_tpl->getValue('system')['css_header_icons_night']) {?>--header-bg-color-dark: <?php echo $_smarty_tpl->getValue('system')['css_header_icons_night'];?>
;<?php }?>}<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['css_custome_css'],ENT_QUOTES);?>
</style><?php }
if ($_smarty_tpl->getValue('page') == "admin") {?><style type="text/css">.search-wrapper-prnt {display: none !important}.x-content-width .btn {display: inline-block;line-height: var(--bs-btn-line-height);min-width: max-content;padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);}.x-content-width .btn-sm {font-size: 11px;padding: 8px 26px;}.x-content-width .btn-sm.btn-icon {padding: 5px 8px;}</style><?php }
}
}

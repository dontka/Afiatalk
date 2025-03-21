<?php
/* Smarty version 5.4.1, created on 2025-03-13 07:47:24
  from 'file:../css/style.css' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67d28d8cbca742_03819928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47da645bb83667c49e7c123b3a1564aa369a736e' => 
    array (
      0 => '../css/style.css',
      1 => 1740119278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d28d8cbca742_03819928 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\Script\\content\\themes\\xngine\\css';
?>/*Basic*/
:root {
	--body-font-family: "Inter", sans-serif;
	--body-bg: #fff;
	--body-bg-dark: #121212;
	--body-color: #212529;
	--body-color-dark: #dcdcdc;
	--main-link: #b37feb;
	--main-btn: #b37feb;
	--header-background: #fff;
	--header-background-dark: #212121;
	--header-color: #252525;
	--header-bg-color-dark: #e8e8e8;
	--header-search-bg: #f2f2f2;
	--header-search-color: #252525;
	--main-color: #ffffff;
	--plyr-color-main: #b37feb;
	--font-family-headline: "Outfit", sans-serif;
	--border-divider: #eff3f4;
	--border-divider-2: #e6e7e7;
}
body.night-mode {
	--body-color: #dcdcdc;
	--body-bg: #121212;
	--header-background: #212121;
	--border-divider: #303a41;
	--border-divider-2: #485259;
	--header-search-bg: #272e35;
	--header-search-color: #ededed;
	--card-dark-color: #262D34;
	--card-dark-divider: #2e3f4d;
	--card-dark-hover: #2b3843;
    --card-dark-input: #1e252b;
    --card-dark-input-color: #eaeaea;
}
body.night-mode .bg-white, body.night-mode .content {
	background-color: #121212 !important;
}
	
* {
	outline: none !important;word-break: break-word;
}
.container {
	width: 100%;
	max-width: 1275px;
}
body {
	font-family: var(--body-font-family);
	color: var(--body-color);
	background-color: var(--body-bg);
	position: relative;letter-spacing: -0.2px;
	overflow-y: scroll;
}
ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
a {
	color:var(--main-link);
	text-decoration: none;
}
pre {
	padding:15px;font-size:13px;word-wrap:break-word;background-color:#f7f7f7;border:1px solid #dbdbdb;border-radius:4px
}
body.night-mode pre {
	color:var(--body-color-dark);background-color:#363636;border-color:#121212
}
.headline-font {
	font-family: var(--font-family-headline);
}
.body-color, .x_msg_user_name a {
	color: var(--body-color);
}
.main {
	color:var(--main-link);
}
.flex-0 {
	flex: 0 0 auto;
}
.flex-1 {
	flex: 1 1 auto;
}
.gap-10 {
	gap: 10px;
}
.gap-15 {
	gap: 15px;
}
.gap-20 {
	gap: 20px;
}
.mw-0 {
	min-width: 0;
}
.mh-0 {
	min-height: 0;
}
.main_bg_half:before {
	content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: var(--main-link);
    z-index: -1;
    opacity: 0;
    pointer-events: none;
	transition: all 0.2s;
}
hr {
	opacity: 1;
	border-color: var(--border-divider);
}
hr.hr-2 {
	border-color: var(--border-divider-2);
}
.object-cover {
	object-fit: cover;
}





/*Content*/
.x-sidebar-width {
	width: 275px;
}
.x-content-width {
	width: calc(100% - 275px);
}
.x_content_row {
	margin: 0;
}
.x_content_row > .col-lg-8, .x_content_row > .col-lg-12 {
	border-right: 1px solid var(--border-divider);
    padding: 0;
    width: 61.477%;
	min-height: 100dvh;
}
.x_content_row > .col-lg-4 {
	padding: 0;
    width: 38.52300%;
    padding-left: 26px;padding-top: 66px;
}
.content {
	background: #fff;
	border: 1px solid var(--border-divider);
	border-radius: 16px;
}
.main-wrapper {
	width: 100%;
	min-width: 260px;
}
@media (min-width: 1200px) {
	.main-wrapper, .top-bar {
		padding-right: 60px;
	}
	body.n_chat .main-wrapper, body.n_chat .top-bar {
		padding-right: 0;
	}
}
.row {
	--bs-gutter-x: 1rem;
}






/*Buttons*/
.btn {
	display: -ms-inline-flexbox;display: inline-flex;-ms-flex-align: center;align-items: center;-ms-flex-pack: center;justify-content: center;gap: 5px;padding: 0 24px;line-height: 42px;border-radius: 2em;font-weight: 500;font-family: var(--font-family-headline);transition: all 0.2s;border: 0;
}
.btn svg {
	flex: 0 0 auto;
}
.btn.btn-sm {
	line-height: 32px;
    font-size: .85rem;
    padding: 0 16px;
}
.btn.btn-lg {
	line-height: 50px;font-size: 1.15rem;padding: 0 30px;
}
.btn:focus {
	box-shadow: none;
}
.btn-main, .btn-main.show, .btn-main:focus, .btn-main:focus-visible, .btn-main:disabled, .btn-main.disabled, .btn-primary, .btn-primary.show, .btn-primary:focus, .btn-primary:focus-visible, .btn-primary:disabled, .btn-primary.disabled {
	background: var(--main-btn);color: var(--main-color);
}
.btn-main:hover, .btn.btn-main:active, .btn-primary:hover, .btn.btn-primary:active {
	background: var(--main-btn);color: var(--main-color);opacity: 0.9;
}
body.night-mode .btn-dark {
    --bs-btn-color: #000000;
    --bs-btn-bg: #cccccc;
}





/*Inputs*/
.form-floating {
	margin-bottom: 1.3rem;
}
.form-control:focus, .form-select:focus {
    box-shadow: 0 0 0 1px var(--main-btn);
    border-color: var(--main-btn);
}
.form-floating > .form-select[multiple] {
	height: auto;
}
.form-floating > textarea.form-control[rows="2"] {
	height: 4.9rem;
}
.form-floating > textarea.form-control[rows="3"] {
	height: 6.1rem;
}
.form-floating > textarea.form-control[rows="4"] {
	height: 7.4rem;
}
.form-floating > textarea.form-control[rows="5"] {
	height: 8.6rem;
}
.form-floating > textarea.form-control[rows="6"] {
	height: 9.9rem;
}
.form-floating > .form-control.tagify {
	height: auto;
}
.form-text {
    margin-top: .15rem;
    font-size: .8em;
    opacity: 0.8;
}
.x_distance {
	width: 38px;
}
.x_search_filter, .search-wrapper .form-control {
	height: 44px;
    text-indent: 18px;
	transition: all 0.2s;
    font-size: .95rem;
	padding: .75rem 1.5rem;
}





/*Dropdown*/
.dropdown-menu {
	--bs-dropdown-zindex: 1001;
	min-width: 280px;
    border: 0;
    box-shadow: rgba(101, 119, 134, 0.2) 0px 0px 15px, rgba(101, 119, 134, 0.15) 0px 0px 3px 1px;
    border-radius: 16px;
    padding: 12px 0;
}
.dropdown-toggle::after {
	display: none;
}
.dropdown-menu .dropdown-item {
	font-size: 15px;
    padding: 12px 16px;
    font-weight: 600;
    line-height: 20px;transition: all 0.2s;
	display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
	gap: 12px;
}
.dropdown-menu.countries-dropdown .dropdown-item {
	font-size: 14px;
    padding: 6px 16px;
    font-weight: 500;
}
.dropdown-menu .dropdown-item i.fa {
	width: 20px;
    text-align: center;
}
.dropdown-item:focus {
	background: transparent;
	color: var(--bs-dropdown-link-color);
}
.dropdown-item:active, .dropdown-item.active {
	background: var(--main-btn);
	color: var(--main-color);
}
.dropdown-divider {
	border-color: var(--border-divider);
    margin-top: 12px;
    margin-bottom: 12px;
}
.action-dropdown-menu .action-desc {
	font-size: 12px;
    line-height: 16px;
    opacity: 0.5;
}





/*Toast*/
.toast-container > .toast {
	box-shadow: rgba(101, 119, 134, 0.2) 0px 0px 15px, rgba(101, 119, 134, 0.15) 0px 0px 3px 1px;
    border-radius: 16px;
}





/*Top and bottom bar*/
.top-bar {
	top: 0;
	left: 0;
	right: 0;
	height: 53px;
	font-size: 13px;
	line-height: 50px;
	background: #fff2cc;
	z-index: 1002;
}
.top-bar.danger {
	background: #ce3426;
}
.top-bar.danger a {
	color: #fff200;
}
.top-bar.danger a:hover {
	text-decoration: underline;
}
.bottom-bar {
	bottom: 10px;
	left: 50%;
	transform: translate(-50%, 0);
	z-index: 1002;
}
.logged-as-container {
	background: #607D8B;
}
.logged-as-container a {
	color: #fff200;
}




/*Sidebar*/
.x-sidebar-width .dropdown-menu {
	z-index: 1002;
}
.x-sidebar-fixed {
	top: 0;
	z-index: 1001;border-right: 1px solid var(--border-divider);width: 275px;
}
.x-sidebar {
	overflow-y: auto;
}
.x-sidebar .main_bg_half:hover:before, .x_side_links:hover .main_bg_half:before {
	opacity: 0.1;
}
.main-header:before {
	content: '';
	background: var(--header-bg-color);
}
body.night-mode .main-header:before {
	background: var(--header-bg-color-dark);
}
.logo-wrapper {
	padding: 2px 0;
}
.logo-wrapper .logo {
	font-size: 19px;
	font-weight: 600;
	padding: 12px;
}
.logo-wrapper .logo:before, .x_side_links > div:before, .x_user_info.main_bg_half:before {
	border-radius: 2em;
}
.logo-wrapper .logo img {
  max-height: 30px;
}
.x_logo_mobi {
	display: none;
}
.logo-wrapper img.logo-light {
	display: inline-block;
}
body.night-mode .logo-wrapper img.logo-light {
	display: none;
}
.logo-wrapper img.logo-dark {
	display: none;
}
body.night-mode .logo-wrapper img.logo-dark {
	display: inline-block;
}
.x_side_links > div, .x_user_info.main_bg_half {
	padding: 12px;
}
.x_side_links > div span {
	font-size: 18px;
	margin: 0 20px;
}
.x_side_links > div span.counter {
    padding: 1px 5px;
    color: var(--main-color);
    font-size: 12px;
    background-color: var(--main-btn);
    min-width: 23px;
    height: 23px;
    top: 2px;
    transform: translateX(-5px);
    border: 2px solid var(--body-bg);
}
.x_side_more_menu {
	bottom: -57px !important;
	max-height: 470px;
    overflow-y: auto;
}
.x_side_create {
	max-width: 90%;
}
.x_side_create > .btn {
	line-height: 52px;font-size: 17px;
}
.x_user_info.main_bg_half:before {
	z-index: auto;
}
.x_user_info {
	line-height: 20px;
}
.x_user_info img:not(.attch_img) {
	width: 40px;
	height: 40px;
	object-fit: cover;
}
.x_user_info img.large {
	width: 55px;
	height: 55px;
}
.x_user_info .verified-badge, .x_user_info .pro-badge {
	margin-top: -4px;
}
.x_user_info.small {
	line-height: 17px;
}
.x_user_info.small img:not(.attch_img) {
	width: 34px;
    height: 34px;
}





/* Header search */
.search-wrapper-prnt {
	margin-bottom: -54px;
    position: sticky;
    z-index: 1001;
    top: 0;
	padding-left: 275px;
}
.search-wrapper {
    width: 350px;
	width: calc(38.52300% - 26px);
	padding: 5px 0;
	background-color: var(--body-bg);
	pointer-events: auto;
}
.search-input-icon {
	top: 0;
    margin: 13px;transition: all 0.2s;opacity: 0.7;
}
.search-wrapper .form-control {
    background: var(--header-search-bg);
    border: 1px solid var(--header-search-bg);
	transition: all 0.2s;
	color: var(--header-search-color);
}
.search-wrapper .form-control:focus {
	border-color: var(--main-btn);
	background-color: #fff;
}
.form-control:focus+.search-input-icon {
	color: var(--main-btn);opacity: 1;
}
.search-wrapper .form-control::placeholder {
	color: currentColor;opacity: 0.7;
}
body.night-mode .search-wrapper .form-control:focus {
	background-color: #121212;
}





/*Sidebar Widgets*/
.side_widget_title {
	font-size: 21px;
    padding: 12px 16px 10px;
}
.side_item_hover {
	transition: all 0.2s;
}
.side_item_hover:hover {
	background: rgb(0 0 0 / 3%);
}
body.night-mode .side_item_hover:hover {
	background: rgb(255 255 255 / 5%);
}
.side_item_list {
	padding-top: 12px;
    padding-bottom: 12px;
    line-height: 20px;
}





/*Footer*/
.mini-footer {
	font-size: 13px;
    line-height: 16px;
}
.mini-footer .links {
	gap: 4px 12px;
}





/* badges */
.verified-badge {
	color: var(--main-btn);
}
.pro-badge {
	color: #e13c4c;line-height: 1;gap: 2px;
}
.privacy-badge {
	color: #fff;
	font-size: 16px;
}





/*Chat Sidebar*/
.chat-sidebar {
	display: none;
	right: 0;
	top: 0;
	bottom: 0;
	width: 60px;
	padding: 10px 0;
	z-index: 9;
}
@media (min-width: 1200px) {
	.chat-sidebar {
		display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
	}
}
.chat-sidebar-content {
	flex: 1 auto;
    flex-grow: 1;
	overflow-y: auto;
}
.chat-avatar-wrapper {
	cursor: pointer;
	margin-bottom: 10px;
}
.chat-avatar {
	width: 40px;
	height: 40px;
}
.chat-avatar-wrapper .last-seen {
	opacity: 0;
    background: rgb(0 0 0 / 80%);
    font-size: 11px;
    padding: 6px 2px;
    z-index: 1;
    line-height: 12px;
    transition: all 0.2s;
}
.chat-avatar-wrapper:hover .last-seen {
	opacity: 1;
}
.chat-sidebar.disabled .chat-sidebar-content {
	opacity: 0.3;pointer-events: none;
}
.chat-sidebar.disabled .chat-sidebar-content .online, .chat-sidebar.disabled .chat-sidebar-content .offline {
	display: none;
}
.btn-chat {
	box-shadow: rgba(101, 119, 134, 0.2) 0px 0px 15px, rgba(101, 119, 134, 0.15) 0px 0px 3px 1px;
	width: 40px;
    height: 40px;
    padding: 10px;
}
.chat-widget {
	display: none;
	bottom: 0;
	right: 10px;
	width: 340px;
	z-index: 1001;
	box-shadow: rgba(101, 119, 134, 0.2) 0px 0px 15px, rgba(101, 119, 134, 0.15) 0px 0px 3px 1px;
	border-radius: 16px 16px 0 0;
	position: fixed;
}
@media (min-width: 992px) {
	.chat-widget {
		display: block;
	}
}
.chat-widget-head {
    padding: 10px;
    border-radius: 16px 16px 0 0;
    min-height: 60px;
}
.chat-head-label {
	display: none;
	position: absolute;
	top: -15px;
	right: 5px;
}
.chat-widget.chat-box.new .chat-head-label {
	display: block;
}
.chat-user-card .avatar {
	width: 40px;
	height: 40px;
}
.chat-user-card .avatar img {
	object-fit: cover;
}
.chat-user-card .online-dot.offline {
	display: none;
}
.chat-user-card .name {
	font-size: 0.9rem;
}
.chat-head-btn {
	transition: all 0.2s;
}
.chat-head-btn:hover {
	opacity: 0.6;
}
.chat-widget-content {
	display: none;
}
.chat-to {
	top: 0;
	left: 0;
	right: 0;
	border-bottom: 1px solid var(--border-divider);
}
.chat-conversations {
	padding: 0 7px;
}
.chat-typing {
	display: none;
}
.loading-dots:after {
	content: " .";
	animation: dots 1s steps(5, end) infinite;
}
@keyframes dots {
	0%, 20% {
		color: rgba(0, 0, 0, 0);
		text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0);
	}
	40% {
		color: var(--body-color);
		text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0);
	}
	60% {
		text-shadow: 0.25em 0 0 var(--body-color), 0.5em 0 0 rgba(0, 0, 0, 0);
	}
	80%, 100% {
		text-shadow: 0.25em 0 0 var(--body-color), 0.5em 0 0 var(--body-color);
	}
}
.chat-voice-notes {
	display: none;
}
.chat-voice-notes, .chat-attachments, .chat-form {
	border-top: 1px solid var(--border-divider);
}
.chat-form-message textarea, .chat-form-message input[type="text"] {
    resize: none;
    outline: none;
    line-height: 24px;
    height: 40px;
    overflow: hidden;
    overflow-y: auto !important;
    background: #f3f3f3;
    font-size: 0.85rem;
    border-radius: 20px;
	max-height: 82px;
	min-height: 40px;
}
body.night-mode .chat-form-message textarea, body.night-mode .chat-form-message input[type="text"] {
	background: #333333;
}
.chat-form .emoji-menu {
	bottom: 100%;
}
.chat-colors-menu {
	display: none;
    position: absolute;
    bottom: 33px;
    width: 189px;
    margin: 0;
    padding: 6px;
    font-size: 13px;
    line-height: 100%;
    background-color: #fff;
    border: 1px solid #f4f4f4;
    border-radius: 16px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    z-index: 99999;
}
.chat-colors-menu .item {
	float: left;
	padding: 4px;
	margin-right: 1px;
	margin-bottom: 1px;
}
.chat-colors-menu .item:hover {
	cursor: pointer;
	background: #f3f3f3;
	border-radius: 4px;
}
.conversation-user {
	width: 30px;
	height: 30px;
}
.conversation-body {
	max-width: calc(100% - 40px);
}
.conversation-body .text {
	background: #f3f3f3;
    padding: 5px 12px;
    border-radius: 16px;
    font-size: 0.83rem;
    line-height: 20px;
}
body.night-mode .conversation-body .text {
	background: #333333;
}
.conversation.right .conversation-body .text {
	background: var(--main-link);
	color: var(--main-color);
}
.conversation.right .conversation-body .text a {
	color: var(--main-color);
}
.conversation-body .text a {
	text-decoration: underline;
}
.conversation-body .text a:hover {
	text-decoration: none;
}
.conversation-body .text:empty {
	padding: 0;
	margin: 0;
}
.conversation-body img {
	max-height: calc(100dvh - 300px);
	border-radius: 16px;max-width: 100%;
}
.conversation-body img.sticker {
	max-height: 100px;
}
.conversation-body .time {
	color: #605f5f;
	font-size: 10px;
}
body.night-mode .conversation-body .time {
    color: #9c9c9c;
}
.conversation.right .conversation-body .time {
	text-align: end;
}
.conversation-body .seen {
	color: #2196F3;
    font-size: 10px;
}
.conversation-body .seen:before {
	content: "\f00c";
	font-family: "Font Awesome\ 5 Free";
	font-style: normal;
	font-weight: 900;
	text-decoration: inherit;
	margin-top: 4px;
	padding-right: 4px;
	font-size: 0.875em;
}
@media (min-width: 992px) {
	.twilio-stream-wrapper {
		background: #222;
	}
}
.twilio-stream video {
	width: 100%;
	border-radius: 8px;
}
.twilio-stream-local {
	display: none;
	border-radius: 8px;
}
.twilio-stream-local video {
	width: 100%;
	height: 100%;
	border-radius: 8px;
}
@media (min-width: 992px) {
	.twilio-stream-local {
		background: #000;
		position: absolute;
		width: 180px;
		height: 240px;
		top: 20px;
		right: 20px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		border: 1px solid #fff;
	}
	.twilio-stream-local div {
		width: 180px;
		height: 240px;
	}
}





/* Modal */
.modal.fade {
	text-align: center;
}
.modal.fade:before {
	content: '';
	display: inline-block;
	height: 100%;
	vertical-align: middle;
	margin-right: -4px;
} 
.modal.fade .modal-dialog {
	display: inline-flex;
	text-align: start;
	vertical-align: middle;
	transform: scale(.95);
	will-change: transform;
	transition: transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
	width: 100%;
}
.modal.fade.show .modal-dialog {
	transform: scale(1);
}
.modal-content {
	border: 0;
	border-radius: 1.8rem;
	box-shadow: 0px 4px 8px 3px rgb(0 0 0 / 15%), 0px 1px 3px rgb(0 0 0 / 30%);
}
.modal-content:before {
	content: '';
	position: absolute;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	background: var(--main-btn);
	border-radius: 1.8rem;
	opacity: 0.03;
}
.modal-content .modal-header, .modal-content .modal-body, .modal-content .modal-footer {
	position: relative;
	z-index: 1;
}
.modal-header {
	padding: 1.3rem 1.5rem 1rem;
	border: 0;
}
.modal-title {
	line-height: 1.3;
	font-size: 1.5rem;
}
.modal-title i, .modal-title .svg-container {
	display: none;
}
.modal-title .nav-tabs {
	border: 0;
	gap: 5px;
}
.modal-title .nav-tabs .nav-link {
	margin: 0;
	border-radius: 2em;
	border: 0;
	font-size: 15px;
	padding: 0 7px;
	line-height: 33px;
	height: 32px;
	min-width: 32px;
	vertical-align: middle;
	text-align: center;
	font-weight: 500;
	display: -ms-flexbox;
	display: flex;
	align-items: center;
	justify-content: center;
	transition: all 0.2s ease;
}
.modal-title .nav-tabs .nav-link.big {
	min-width: 60px;
}
.modal-title .nav-tabs .nav-link:hover, .modal-title .nav-tabs .nav-link.active {
	background: var(--main-btn);
	color: var(--main-color);
}
.modal-body {
	padding: 2px 1.5rem 1.5rem;
}
.modal-footer {
	padding: 0 1.5rem 1.5rem;
	border: 0;
	gap: 6px;
}
.modal-footer .btn {
	margin: 0;
}






/*Top Posts Filter*/
.posts-staging-btn {
	display: none;
	position: fixed;
	top: 100px;
	left: 50%;
	transition: all 0.2s ease;
	transform: translate(-50%, -50%);
	z-index: 99;
}
.x_top_posts {
	top: 0;
	z-index: 9;
	border-bottom: 1px solid var(--border-divider);line-height: 20px;font-size: 15px;
}
.x_top_posts:before, .x_top_posts:after {
	content: '';
	position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.x_top_posts:before {
	background-color: var(--body-bg);opacity: 0.85;
}
.x_top_posts:after {
	backdrop-filter: blur(12px);
}
.x_top_posts div:not(.dropdown-menu) {
	position: relative;z-index: 1;flex: 1 1 auto;
}
.x_top_posts.home div:not(.dropdown-menu) > a.side_item_hover {
	padding: 0 12px;
}
.x_top_posts div.active span:before {
	content: '';
	position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
	height: 4px;
	background: var(--main-btn);border-radius: 2em 2em 0 0;
}
.x_top_posts div.side_widget_title {
	z-index: 2;
}
.x_top_posts .side_widget_title .my2 {
	margin: 2px 0;
}
.x_top_posts div.d-flex.align-items-center.justify-content-center {
	white-space: nowrap;
    overflow-x: auto;
    justify-content: flex-start !important;
}
.x_top_posts div.d-flex.align-items-center.justify-content-center a {
	padding: 0 20px;
}





/*Announcement*/
.x_announcement, .publisher, .x_notification {
	border-bottom: 1px solid var(--border-divider);
}
.x_announcement .text-muted p:last-child, .text-with-list ul:last-child {
	margin: 0;
}
.text-with-list ul {
	list-style-type: disc;
	padding-inline-start: 40px;
	margin-top: 1rem;
	margin-bottom: 1rem;
}





/*Stories*/
.stories-wrapper > div {
	display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: start;
    -ms-flex-align: start;
    align-items: start;
    gap: 12px;
    padding: 1rem;
}
.add-story, .stories-wrapper .stories.carousel .story {
	position: relative;
    display: block;
    width: 68px;padding: 0 2px;margin: 0;flex: 0 0 auto;
}
.add-story img, .stories-wrapper .stories.carousel .story img {
	display: block;
    width: 100%;
    height: auto;
    aspect-ratio: 1;
    border-radius: 50%;
    object-fit: cover;
}
.add-story span {
	bottom: -7px;
    padding: 5px;
    background: var(--main-btn);
    color: var(--main-color);
    border: 2px solid #fff;
    transform: translateX(38px);
}
body.night-mode .add-story span {
	border-color: #121212;
}
.add-story p {
	font-size: 13px;margin-top: .5rem;line-height: 1.2em;
}
.stories-wrapper .stories.carousel .story > .item-link > .item-preview {
	max-height: 100%;
	height: auto;
    aspect-ratio: 1;
}
.stories-wrapper .stories.carousel .story > a > .item-preview > img {
	padding: 2px;
	border: 2px solid var(--main-link);
}
.stories-wrapper .stories.carousel .story > .item-link > .info {
    display: block;
    margin-top: .5rem;
    font-size: 13px;
    color: var(--body-color);
}
.stories-wrapper .stories.carousel .story > .item-link > .info .name {
	font-weight: 400;
}

.stories-wrapper .stories.carousel .story.seen {
	opacity: 0.5;
}
.stories-wrapper .stories.carousel .story.seen > a > .item-preview > img {
    border-color: #8e8e8e;
}
#zuck-modal-content .story-viewer.muted .tip.muted {
	display: none !important;
}
.stories-wrapper .stories.carousel::-webkit-scrollbar {
    height: 9px;
}
.stories-wrapper .stories.carousel::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
    border: 2px solid #fff;
    cursor: pointer;
}




/*Publisher*/
.publisher-overlay {
	opacity: 0;
	z-index: 1002;
	background: rgb(0 0 0 / 40%);
}
body.night-mode .publisher-overlay {
	background: rgb(0 0 0 / 80%);
}
body.publisher-focus .publisher-overlay {
	bottom: 0;
	opacity: 1;
}
body.publisher-focus .publisher {
	z-index: 1003;
	border-radius: 16px;
}
.publisher .post_empty_space {
	transition: all 0.2s;
}
body.publisher-focus .publisher .post_empty_space {
	width: 0;
}
.publisher-close {
	top: 8px;
	right: 8px;
	z-index: 1;
}
.x_progress {
	height: 3px;
	top: 0px;
	z-index: 1;
	display: none;
}
.x_progress:before {
	opacity: 0.2;
}
.x_progress .indeterminate {
    background-color: var(--main-btn);
}
.x_progress .indeterminate:before, .x_progress .indeterminate:after {
	content: '';position: absolute;background-color: inherit;top: 0;left: 0;bottom: 0;will-change: left, right;
}
.x_progress .indeterminate:before {
	-webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}
.x_progress .indeterminate:after {
	-webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;animation-delay: 1.15s;
}
@keyframes indeterminate {
	0% {
		left: -35%;right: 100%;
	}
	60% {
		left: 100%;right: -90%;
	}
	100% {
		left: 100%;right: -90%;
	}
}
@keyframes indeterminate-short {
	0% {
		left: -200%;right: 100%;
	}
	60% {
		left: 107%;right: -8%;
	}
	100% {
		left: 107%;right: -8%;
	}
}
body.publisher-focus .publisher-footer {
	border-top: 1px solid var(--border-divider);
}
.publisher-slider {
	display: none;
}
.publisher-tools-tabs {
	margin: 0 -8px;
}
.publisher-tools-tab {
	line-height: 1;
}
.publisher-tools-tab::before {
    border-radius: 50%;
    z-index: auto;
}
.publisher-tools-tab:hover::before, .x_pub_btn:hover .publisher-tools-tab::before, .publisher-tools-tab.activated::before {
	opacity: 0.1;
}
.publisher-tools-tab.disabled {
	color: var(--body-color);
	cursor: initial;
	opacity: 0.3;
    pointer-events: none;
}
.publisher-tools-tab.disabled:before {
	opacity: 0;
}
.publisher-footer-buttons .btn {
	line-height: 38px;
    min-width: 100px;
}
body:not(.publisher-focus) .publisher-footer-buttons .btn {
	pointer-events: none;
    opacity: 0.4;
}
.publisher-message.colored, .post-colored, .post-colored-preview {
	height: 300px;
	padding: 30px;
	background-repeat: no-repeat !important;
	background-size: cover !important;
	border-radius: 16px;margin-top: .5rem;
}
.post-colored-preview {
	border-radius: 16px;
}
.post-colored-preview.small {
	height: 180px;
}
.post-colored-preview h2 {
	text-align: center;
	padding-top: 100px;
}
.post-colored-preview h4 {
	text-align: center;
	padding-top: 50px;
}
.publisher-message.colored .colored-text-wrapper, .post-colored-text-wrapper {
	height: 240px;
	display: flex;
	text-align: center;
	justify-content: center;
    align-items: center;
}
.publisher-message.colored .colored-text-wrapper {
	overflow-x: auto;
}
.publisher textarea:not(.form-control) {
	resize: none;
	outline: none;
	font-size: 1.1rem;
	line-height: 24px;
	height: 24px;
	min-height: 60px;transition: all 0.2s;
}
body.publisher-focus .publisher .publisher-message:not(.colored) textarea:not(.form-control) {
	min-height: 150px;
}
body.publisher-focus .publisher.large-text .publisher-message:not(.colored) textarea:not(.form-control) {
	min-height: 100px;
}
.publisher textarea:not(.form-control)::placeholder {
	color: currentColor;
	opacity: 0.65;
}
.publisher-message.colored textarea, .post-colored .post-text {
	text-align: center !important;
	font-size: 25px;
	line-height: 30px;
	font-weight: 600;
	margin: auto;
}
.publisher-message.colored textarea {
	min-height: 60px;margin: 0 !important;
}
.post-colored .post-text a {
	color: inherit !important;
	text-decoration: underline !important;
}
.post-colored .post-text a:hover {
	text-decoration: none !important;
}
.publisher-scraper {
	display: none;
}
.publisher-scraper video {
	width: 100%;
}
.publisher-scraper img {
	width: 100%;
	height: auto;
}
.x_user_info .publisher-scraper .post-media-image img {
	height: 100%;
	width: 100%;
}
.publisher-scraper-remover {
	background-color: rgb(0 0 0 / 50%);
	z-index: 1;
}
.publisher-scraper-remover:hover {
	background-color: rgb(0 0 0 / 80%);
}
.publisher-meta {
	position: relative;
	display: none;padding: 12px 0 0;
}
.publisher-meta input, .publisher-meta-feelings, .publisher-meta select, .x_pub_paid_post, .post-edit .post-form, .comment-edit .comment-form {
	background: #f3f3f3;
    width: 100%;
    padding: 12px 16px;
    outline: 0 none;
    border: 0 none;
    border-radius: 10px;
}
body.night-mode .publisher-meta input, body.night-mode .publisher-meta-feelings, body.night-mode .publisher-meta select, body.night-mode .x_pub_paid_post, body.night-mode .post-edit .post-form, body.night-mode .comment-edit .comment-form {
	background: #222;
}
#feelings-menu-toggle.active {
	color: var(--main-link);
    font-weight: 500;
}
#feelings-menu-toggle.active:before {
	opacity: 0.1;
    margin: -4px -8px;
    border-radius: 5px;
	z-index: auto;
}
#feelings-data span .twa {
	vertical-align: middle;
    margin: 0;
    width: 16px;
    height: 16px;
    background-size: 16px;
}
.feeling-item .icon .twa {
    width: 20px;
    height: 20px;
    background-size: 20px;
}
.colored-pattern-item {
	height: 36px;
	width: 36px;
	border: 2px solid #fff;
	background-size: cover;
	transition: all 0.3s;
}
body.night-mode .colored-pattern-item {
	border-color: #121212;
}
.colored-pattern-item.active {
	box-shadow: 0 0 0 2px var(--main-link);
}
.dropdown-menu.gif-search {
	display: none;padding-left: 5px;padding-right: 5px;width: 100%;
}
.gif-search .item {
	width: 33.3333333%;
    display: inline-block;
    padding: 5px;
}
.gif-search .item > img {
	width: 100%;aspect-ratio: 1;cursor: pointer;
}
.publisher-custom-thumbnail {
	display: none;
}
.x_pub_paid_post .set_desc textarea {
    height: 46px;
    resize: none;
    font-size: 15px;box-shadow: none;
}
.x_pub_paid_post .set_price input {
    max-width: 100px;
    font-size: 34px;
}





/*Daytime Message*/
.daytime_message {
	display: none;
	border: 0;
	border-bottom: 1px solid var(--border-divider);
	background: transparent;
}
.daytime_message.morning strong, .daytime_message.morning svg {
	color: #4CAF50;
}
.daytime_message.noon strong, .daytime_message.noon svg {
	color: #FF9800;
}
.daytime_message.evening strong, .daytime_message.evening svg {
	color: #3F51B5;
}





/*Post Filters*/
.posts-filter {
	border-bottom: 1px solid var(--border-divider);
}
.btn.btn-gray {
    background: #eeeeee;
}
body.night-mode .btn.btn-gray {
	background: #353535;
}
.btn.btn-gray.btn-sm {
	line-height: 26px;
}





/*ON/OFF Toggle*/
.switch {
	position: relative;
	display: inline-block;
	width: 56px;
	height: 30px;
	margin: 0;
}
.switch.sm {
	width: 30px;
	height: 17px;
}
.switch input {
	display: none;
}
.switch .slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgb(0 0 0 / 10%);
	transition: all 0.2s;
}
body.night-mode .switch .slider {
	background-color: #666;
}
.switch .slider:before {
	position: absolute;
	content: "";
	height: 24px;
	width: 24px;
	left: 3px;
	bottom: 3px;
	background-color: white;
	transition: all 0.2s;
}
.switch.sm .slider:before {
	height: 13px;
	width: 13px;
	left: 2px;
	bottom: 2px;
}
.switch input:checked+.slider {
	background-color: var(--main-link);
}
.switch input:checked+.slider:before {
	transform: translateX(26px);
}
.switch.sm input:checked+.slider:before {
	transform: translateX(13px);
}
.switch .slider.round {
	border-radius: 34px;
}
.switch .slider.round:before {
	border-radius: 50%;
}





/*Post*/
.post {
	border-bottom: 1px solid var(--border-divider);
}
.text-orange {
	color: #ff7042;
}
.post.is_hidden {
	border: 2px dashed #aeaeae;
	z-index: 1;
}
.post-top-alert {
	background: repeating-linear-gradient(45deg, #6f8894, #6f8894 10px, #546E7A 10px, #546E7A 20px);
    margin: -1rem -1rem 1rem;
}
.post.pending, .blog.pending {
	border: 1px dashed #9b9b9b;
}
.post.flagged {
	background: var(--border-divider);
}
.post.highlighted {
	box-shadow: inset 0 0 0 2px var(--main-link);
}
.post a:not(.dropdown-item):hover {
	text-decoration: underline;
}
.post-avatar-anonymous {
	background: #8199a4;
    width: 40px;
    height: 40px;
}
.post-avatar-picture, .comment-avatar-picture, .chat-avatar img {
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	background-color: #eee;
	width: 40px;
    height: 40px;
}
body.night-mode .post-avatar-picture, body.night-mode .comment-avatar-picture, body.night-mode .chat-avatar img {
	background-color: #333;
}
.post-avatar-picture.small {
	width: 25px;
	height: 25px;
}
.post-avatar-picture.large {
	width: 60px;
	height: 60px;
}
.post-avatar .online-dot, .chat-avatar .online-dot, .chat-user-card .online-dot {
    top: 31px;
    right: 2px;
    width: 7px;
    height: 7px;
    background: #1bc3bb;
    box-shadow: 0 0 0 2px white;
}
body.night-mode .post-avatar .online-dot, body.night-mode .chat-avatar .online-dot, body.night-mode .chat-user-card .online-dot {
	box-shadow: 0 0 0 2px #121212;
}
.post-time {
	font-size: 12.5px;
}
.privacy-icon {
	font-size: 11px;
}
.post-text, .comment-text {
	overflow: hidden;padding-top: 4px;line-height: 22px;
}
.post-text:empty {
	padding: 0;
}
.post-text-translation {
	border-left: 2px solid var(--border-divider);
	padding-left: 10px;
	margin-top: 10px;
}
.post_empty_space {
	width: 48px;
}
.post-snippet, .post-funding-meta .funding-completion, .post-job-wrapper, .post audio, .post-downloader {
	border: 1px solid var(--border-divider-2);
}
.post-snippet {
	border-radius: 16px;padding: 12px;
}
.post-snippet .post_empty_space {
	width: 0;
}
.youtube-player {
	max-width: 100%;
	background: #000;
	border-radius: 16px;
	aspect-ratio: 16 / 9;
}
.youtube-player iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: transparent;
}
.youtube-player img {
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	max-width: 100%;
	height: auto;
	transition: all 0.2s;
}
.youtube-player img:hover {
	filter: brightness(75%);
}
.youtube-player .play {
	left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    color: #FF0000;
}
.youtube-player .play:before {
	content: '';
    position: absolute;
    background: #fff;
    top: 20px;
    right: 20px;
    bottom: 20px;
    left: 20px;
    z-index: -1;
}
.youtube-player.with-live .play {
	color: var(--main-btn);
}
.embed-facebook-wrapper iframe {
	display: none;
}
.embed-iframe-wrapper * {
	width: 100% !important;
}
.embed-iframe-wrapper iframe {
	min-height: 100%;
}
.pg_wrapper, .post-map, .post-video-reel, .vertical-reel > .plyr--video {
	border-radius: 16px;
}
.pg_wrapper a {
	background-size: cover;
	background-position: center center;
	background-color: #f5f5f5;
}
.pg_wrapper .more {
	top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgb(0 0 0 / 50%);
    font-size: 1.8em;
}
.pg_1x img {
	max-width: 100%;
	max-height: 680px;
	max-height: 80dvh;
    border-radius: 16px;
    object-fit: cover;
	background-color: #f5f5f5;
}
.pg_img_gap, .pg_3x {
	gap: 2px;
	aspect-ratio: 15/9;
}
.pg_2x, .pg_2o3, .pg_1o3, .pg_1o3 .pg_1o3_in {
	flex: 1;
}
.pg_2x > a {
	padding-bottom: 100%;
}
.pg_1o3 {
	gap: 2px;
}
.post-media img.img-fluid {
	width: 100%;
	max-height: 350px;
}
.post-media-image-wrapper {
	position: relative;
}
.post-media-image-meta {
	position: absolute;
	bottom: 15px;
	left: 15px;
}
.post-media-image img, .post-media-image .image {
	max-height: 500px;
	max-height: 80dvh;
    max-width: 100%;
    height: 100%;
    overflow: hidden;
    min-width: 100px;
    min-height: 100px;
    border-radius: 16px;
    object-fit: cover;
	aspect-ratio: 16 / 9;
}
.post-media-image .image {
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	background-color: #eee;
}
body.night-mode .post-media-image .image {
	background-color: #333;
}
.post-media-image .source:not(:empty) {
	bottom: 0;
    padding: 2px 10px;
    background: rgb(0 0 0 / 75%);
    font-size: 13px;
    border-radius: 8px;
	max-width: calc(100% - 1rem);
}
.post-media-meta {
	font-size: 14px;
}
.post-media-meta .text {
	max-height: 41px;
}
.progress, .progress-stacked {
	height: 6px;
}
.post-job-details {
	flex: 1;
}
.poll-option label {
	background-color: rgb(0 0 0 / 5%);
	transition: all 0.2s;
	font-size: 83%;
}
.poll-option label:hover {
	background-color: rgb(0 0 0 / 10%);
}
.poll-option label svg {
	width: 0;
}
.poll-option input:checked~label {
    color: var(--main-link);
}
.poll-option input:checked~label svg {
    width: 20px;
}
.poll-option .percentage-bg {
	top: 0;
	left: 0;opacity: 0.2;
	background-color: var(--main-link);
}
.poll-voters .more {
	min-width: 36px;
    height: 36px;
    background-color: rgb(0 0 0 / 5%);
    padding: 8px;font-size: 13px;
}
.vertical-reel > .plyr--video {
	max-height: 80dvh;
    max-width: 340px;
}
.vertical-reel > .plyr--video .plyr__video-wrapper {
	aspect-ratio: 9 / 16 !important;
}
.vertical-reel > .plyr--video .plyr__progress__container, .vertical-reel > .plyr--video .plyr__time {
	display: none;
}
.post audio::-webkit-media-controls-panel {
    background-color: #fff;
}
.post audio::-webkit-media-controls-play-button {
	background-color: #eee;
	border-radius: 50%;
}
body.night-mode .post audio::-webkit-media-controls-panel {
	background-color: #121212;
}
body.night-mode .post audio::-webkit-media-controls-play-button {
	background-color: #333;
}
.post-downloader .icon {
    padding: 11px;
}
.post-downloader .icon:before {
	opacity: 0.1;
    border-radius: 8px;
    z-index: auto;
}
.need-subscription .post-media-image .image {
	min-height: 450px;
}
.need-subscription-innr {
	top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.post-form textarea, .comment-form textarea {
	display: block;
	resize: none;
	outline: none;
	height: 42px;
}
.post-stats {
	margin-bottom: 10px;
	font-size: 11px;
	color: #999;
	flex-wrap: wrap;
}
.reactions-stats {
	gap: 1px;
}
.reactions-stats>.reactions-stats-item {
	margin: 0 0 0 -5px;
	padding: 1.1px;
    width: 16px;
    height: 16px;
}
.reactions-stats>.reactions-stats-item:nth-child(1) {
	z-index: 3;
    margin: 0;
}
.reactions-stats>.reactions-stats-item:nth-child(2) {
	z-index: 2;
}
.reactions-stats>.reactions-stats-item:nth-child(3) {
	z-index: 1;
}
.reactions-stats>.reactions-stats-item .inline-emoji {
	width: 14px;
    height: 14px;
}
.post-actions {
	margin: -8px;
}
.post-actions .action-btn:before {
	z-index: auto;
	border-radius: 50%;
}
.post-actions .action-btn:hover {
	color: var(--main-btn);
}
.post-actions .action-btn:hover::before {
	opacity: 0.1
}
.post-actions .action-btn.reactions-wrapper:before {
	background: #ef4c5d;
}
.post-actions .action-btn i.fa-thumbs-up, .post-actions .action-btn i.fa-smile, .reel-action-btn .action-btn i.fa-thumbs-up, .reel-action-btn .action-btn i.fa-smile {
    font-size: 0;
    width: 20px;
    height: 20px;
    line-height: 1;
    vertical-align: middle;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M19.86 8.08997C19.86 8.50997 19.83 8.91997 19.78 9.30997C19.32 9.10997 18.82 8.99997 18.29 8.99997C17.07 8.99997 15.99 9.58996 15.32 10.49C14.64 9.58996 13.56 8.99997 12.34 8.99997C10.29 8.99997 8.63 10.67 8.63 12.74C8.63 15.42 10.05 17.47 11.63 18.86C11.58 18.89 11.53 18.9 11.48 18.92C11.18 19.03 10.68 19.03 10.38 18.92C7.79 18.03 2 14.35 2 8.08997C2 5.32997 4.21999 3.09998 6.95999 3.09998C8.58999 3.09998 10.03 3.87997 10.93 5.08997C11.84 3.87997 13.28 3.09998 14.9 3.09998C17.64 3.09998 19.86 5.32997 19.86 8.08997Z' stroke='%23212529' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3cpath d='M22 12.74C22 17.42 17.67 20.18 15.73 20.84C15.5 20.92 15.13 20.92 14.9 20.84C14.07 20.56 12.8 19.89 11.63 18.86C10.05 17.47 8.63 15.42 8.63 12.74C8.63 10.67 10.29 9 12.34 9C13.56 9 14.64 9.58999 15.32 10.49C15.99 9.58999 17.07 9 18.29 9C18.82 9 19.32 9.11 19.78 9.31C21.09 9.89 22 11.2 22 12.74Z' stroke='%23212529' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3c/svg%3e");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body.night-mode .post-actions .action-btn i.fa-thumbs-up, body.night-mode .post-actions .action-btn i.fa-smile, body.night-mode .reel-action-btn .action-btn i.fa-thumbs-up, body.night-mode .reel-action-btn .action-btn i.fa-smile {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M19.86 8.08997C19.86 8.50997 19.83 8.91997 19.78 9.30997C19.32 9.10997 18.82 8.99997 18.29 8.99997C17.07 8.99997 15.99 9.58996 15.32 10.49C14.64 9.58996 13.56 8.99997 12.34 8.99997C10.29 8.99997 8.63 10.67 8.63 12.74C8.63 15.42 10.05 17.47 11.63 18.86C11.58 18.89 11.53 18.9 11.48 18.92C11.18 19.03 10.68 19.03 10.38 18.92C7.79 18.03 2 14.35 2 8.08997C2 5.32997 4.21999 3.09998 6.95999 3.09998C8.58999 3.09998 10.03 3.87997 10.93 5.08997C11.84 3.87997 13.28 3.09998 14.9 3.09998C17.64 3.09998 19.86 5.32997 19.86 8.08997Z' stroke='%23dcdcdc' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3cpath d='M22 12.74C22 17.42 17.67 20.18 15.73 20.84C15.5 20.92 15.13 20.92 14.9 20.84C14.07 20.56 12.8 19.89 11.63 18.86C10.05 17.47 8.63 15.42 8.63 12.74C8.63 10.67 10.29 9 12.34 9C13.56 9 14.64 9.58999 15.32 10.49C15.99 9.58999 17.07 9 18.29 9C18.82 9 19.32 9.11 19.78 9.31C21.09 9.89 22 11.2 22 12.74Z' stroke='%23dcdcdc' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3c/svg%3e");
}
.post-actions .action-btn.reactions-wrapper:hover i.fa-thumbs-up, .post-actions .action-btn.reactions-wrapper:hover i.fa-smile {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M19.86 8.08997C19.86 8.50997 19.83 8.91997 19.78 9.30997C19.32 9.10997 18.82 8.99997 18.29 8.99997C17.07 8.99997 15.99 9.58996 15.32 10.49C14.64 9.58996 13.56 8.99997 12.34 8.99997C10.29 8.99997 8.63 10.67 8.63 12.74C8.63 15.42 10.05 17.47 11.63 18.86C11.58 18.89 11.53 18.9 11.48 18.92C11.18 19.03 10.68 19.03 10.38 18.92C7.79 18.03 2 14.35 2 8.08997C2 5.32997 4.21999 3.09998 6.95999 3.09998C8.58999 3.09998 10.03 3.87997 10.93 5.08997C11.84 3.87997 13.28 3.09998 14.9 3.09998C17.64 3.09998 19.86 5.32997 19.86 8.08997Z' stroke='%23ef4c5d' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3cpath d='M22 12.74C22 17.42 17.67 20.18 15.73 20.84C15.5 20.92 15.13 20.92 14.9 20.84C14.07 20.56 12.8 19.89 11.63 18.86C10.05 17.47 8.63 15.42 8.63 12.74C8.63 10.67 10.29 9 12.34 9C13.56 9 14.64 9.58999 15.32 10.49C15.99 9.58999 17.07 9 18.29 9C18.82 9 19.32 9.11 19.78 9.31C21.09 9.89 22 11.2 22 12.74Z' stroke='%23ef4c5d' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3e%3c/svg%3e");
}
.post-approval {
	border-top: 1px solid var(--border-divider);
}
.post-tips {
	display: flex;
    gap: 10px;
    margin-top: 1rem;
    flex-wrap: wrap;
}
.post-tips .btn {
	flex: 1 1 auto;
}
.post-footer {
    border-top: 1px solid var(--border-divider-2);
}
.x_inside_comms {
	padding: 12px;
	border-radius: 16px;
	background: rgb(0 0 0 / 3%);
}
body.night-mode .x_inside_comms {
	background: rgb(255 255 255 / 5%);
}
.comment {
	padding: 12px 0;
    border-top: 1px solid var(--border-divider);
}
.x_inside_comms .comment {
	border-color: var(--border-divider-2);
}
.x_comms_list:not(:empty) {
	padding-top: 12px;
}
.comment-form textarea {
	height: 40px;
}
.comment-attachments {
	padding: 10px 10px 4px;
	border: 1px solid var(--border-divider-2);
	border-radius: 16px;
}
.comment-voice-notes {
	display: none;
}
.comment .comment-btn > svg {
	opacity: 0;
	transition: all 0.1s;
}
.comment:hover .comment-btn > svg, .comment .comment-btn > svg.show {
	opacity: 1;
}
.live-comments .comment:hover .comment-btn > svg {
	opacity: 0;
}
.comment-inner {
	position: relative;
}
@media (min-width: 992px) {
    .comment-replace {
		max-width: 90%;
	}
}
.comment-text {
	padding: 0;
}
.comment-data .img-fluid {
	max-width: 40%;
	max-height: 140px;
}
.comment-actions {
	margin-top: 3px;
	font-size: 13px;
}





/*Messages*/
.x_menu_sidebar, .x_menu_sidebar_content {
	min-height: 100dvh;
    border-right: 1px solid var(--border-divider);
}
.x_menu_sidebar.msg, .x_menu_sidebar_content.msg {
	height: 100dvh;
}
.x_menu_sidebar, .x_menu_sidebar_content {
    width: 40%;
}
.x_user_multi_avatar {
	width: 40px;
    height: 40px;
    gap: 1px;
}
.x_user_multi_avatar .avatar {
	background-size: cover;
    background-position: center center;
    width: 50%;
    height: 100%;
}
.x_message_empty_height {
	max-height: calc(100dvh - 24px);
}





/*Notification Icon*/
.x_action_icon {
	box-shadow: rgba(101, 119, 134, 0.2) 0 0 15px, rgba(101, 119, 134, 0.15) 0 0 3px 1px;
	right: -2px;
    bottom: -5px;
    line-height: 24px;
    width: 24px;
    height: 24px;
    font-size: 11px;
}
.x_action_icon .reaction-btn {
    padding: 5px 0;
}
.x_action_icon .inline-emoji {
	width: 14px;
    height: 14px;
}
.x_action_icon .emoji img {
	width: 100%;
	height: 100%;
}





/*Reels*/
.reels-loader {
	display: none;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 2;
}
.reel-container {
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	transform: translateY(0);
	transition: all 0.2s;
}
.reel-container.swipe-up {
	transform: translateY(-100%);
}
.reel-container.swipe-down {
	transform: translateY(100%);
}
.reel-container.hidden {
	opacity: 0;
	visibility: hidden;
}
.reel-video-wrapper {
	user-select: none;
}
.reel-next-btn, .reel-prev-btn {
	top: 66px;
    left: calc(100% + 26px);
    opacity: 0.7;
    transition: all 0.2s;
}
.reel-next-btn {
	margin-top: calc(48px + 1rem);
}
.reel-next-btn:hover, .reel-prev-btn:hover, .reel-actions .action-btn:hover {
	opacity: 1;
}
.reel-video-wrapper .reel-video-container .plyr--video {
	height: 100%;
}
.reel-video-wrapper .reel-video-container .plyr__controls {
	top: 0;
    right: 0;
    left: auto;
    bottom: auto;
    background: transparent;
    padding: 7px;
    filter: drop-shadow(2px 4px 6px rgb(0 0 0 / 40%));
}
.reel-video-wrapper .reel-video-container .video-caption-overlay {
	left: 0;
	right: 0;
	bottom: 0;
	background: linear-gradient(transparent, rgb(0 0 0 / 70%));
}
.reel-video-wrapper .reel-video-container .video-caption {
	
}
.reel-video-wrapper .reel-video-container .video-controlls {
	padding: 0 1rem;
}
@media (min-width: 992px) {
	.reel-video-wrapper .reel-video-container .video-controlls {
		margin-right: -100px;
		padding: 0 26px;
	}
}
.reel-actions .post-avatar-picture, .reel-actions .post-avatar-anonymous {
	width: 48px;
	height: 48px;
}
.reel-actions .post-avatar .online-dot {
	top: 37px;
}
.reel-action-btn .action-btn i.fa-thumbs-up, .reel-action-btn .action-btn i.fa-smile, .reel-actions .action-btn .inline-emoji {
	width: 24px;
    height: 24px;
}
.reel-actions .action-btn {
	opacity: 0.7;
    transition: all 0.2s;
}
@media (min-width: 520px) {
.reel-actions .action-btn:hover .reactions-container {
	display: flex !important;
    right: 0 !important;
	top: auto !important;
}
}
.reel-comments-wrapper {
	display: none;
    top: 66px;
    bottom: 1rem;
    left: calc(100% + 26px);
}
@media (min-width: 992px) {
	.reel-comments-wrapper {
		max-width: 351px;
	}
}
.reel-container.comments-shown .reel-comments-wrapper {
	display: block;
}
.reel-comments-wrapper .lightbox-post {
    height: calc(100dvh - 118px);
}
.reel-comments-wrapper .reactions-wrapper:hover .reactions-container {
	display: block !important;
    left: 0 !important;
    top: auto !important;
    right: auto !important;
    position: absolute !important;
    width: 250px;
}
.reel-comments-wrapper .post-footer .reactions-wrapper:hover .reactions-container {
    bottom: 100%;
}


/* -- */
.reels-box-wrapper {
	display: flex;white-space: nowrap;overflow-x: auto;padding: 0 12px 12px;gap: 12px;
}
.reel-box {
	background-color: #000;position: relative;display: block;border-radius: 7px;width: calc(100% / 3 - 5%);overflow: hidden;flex: 0 0 auto;
}
.reel-box .plyr {
	min-width: auto;
}
.reel-box video {
	position: absolute;top: 0;left: 0;right: 0;bottom: 0;object-fit: cover;width: 100%;height: auto;max-height: 400px;border-radius: 7px;
}
.reel-box .views {
	position: absolute;bottom: 10px;left: 15px;color: #fff;text-shadow: 1px 1px #000000;z-index: 2;
}





/*Page categories*/
.x_page_cats {
	height: 34px;
}
.x_page_cats li {
	flex: 0 0 auto;
}
.x_page_cats ul .btn {
	border: 1px solid var(--border-divider-2)
}
.x_page_cats ul .main:before {
	opacity: 0.15;
    border-radius: 2em;
}
.x_page_scroll .scroll-btns {
	opacity: 0;
	transition: all 0.2s;
}
.x_page_scroll:hover .scroll-btns {
	opacity: 1;
}





/*Groups*/
.x_group_list img {
	width: 99px;
	aspect-ratio: 1;
	object-fit: cover;
}
.x_group_list .btn {
	line-height: 39px;
}
.x_group_list .btn i {
	font-size: 12px;
}





/*Market*/
.boosted-icon {
	padding: 1px 6px;
    background: #C39924;
    z-index: 2;
}
.product-image {
	border-radius: 16px;
	aspect-ratio: 1;
	background: #eee;
}
body.night-mode .product-image {
	background: #333;
}
.product-image .stock_stat {
	bottom: 0;
    background: linear-gradient(to top right, rgb(0 0 0 / 90%), rgb(0 0 0 / 30%), transparent 55%);
    left: 0;
    right: 0;
    aspect-ratio: 1.8;text-shadow: 1px 1px 2px rgb(0 0 0 / 30%);
}
.product-image img {
	object-fit: cover;
}
.product-info .title {
	line-height: 20px;
	font-size: 1.1em;
}
.x_cart_list:not(:last-child) {
	border-bottom: 1px solid var(--border-divider-2);
}
.x_address {
	border: 1px solid var(--border-divider-2);
	border-radius: 16px;
}





/*Stats*/
.stat-panel {
	border-radius: 16px;
	margin-bottom: 1rem;
	overflow: hidden;
}
.stat-cell {
	position: relative;
	padding: 35px;
}
.stat-cell.narrow {
	padding: 20px;
}
.stat-cell .icon {
	position: absolute;
	top: 20px;
	right: 20px;
	background: #fff;
	font-size: 20px;
	width: 48px;
	height: 48px;
	padding: 14px;
	border-radius: 50%;
}
.stat-cell .bg-icon {
	position: absolute;
	bottom: -5px;
	right: -5px;
	font-size: 80px;
	opacity: 0.25;
}
.stat-cell a {
	font-size: 12px;
	color: #fff;
}
.stat-cell a:hover {
	text-decoration: underline;
}





/*Ads*/
.adblock-warning-message {
	display: none;
	padding: 1rem;
	background: #ef4c5d;
	color: #fff;
	border-radius: 1rem;
	margin-bottom: 20px;
}
.adblock-detector {
	position: fixed;
	bottom: 0;
	left: 0;
	right: 0;
	display: none;
	padding: 30px 10px;
	background: #ef4c5d;
	text-align: center;
	font-weight: bold;
	color: #fff;
	z-index: 1031;
}
.x_adslist, .x_feat_blog {
	background-color: rgb(0 0 0 / 4%);
	border-radius: 16px;
}
body.night-mode .x_adslist, body.night-mode .x_feat_blog {
	background-color: rgb(255 255 255 / 4%);
}





/*Event List*/
.x_event_list .avatar {
	aspect-ratio: 22/10;
}
.x_event_list .avatar img, .x_feat_blog_img_bg img {
	object-fit: cover;
}
.eventlist_foot {
	background: linear-gradient(transparent, rgb(0 0 0 / 35%));
}
.eventlist_foot .info {
	padding-left: 1.2rem;
	padding-right: 1.2rem;
}
.profle-date-wrapper {
	min-width: 48px;
}
.profle-date-wrapper span {
	background: #E91E63;
	font-size: 12px;
    padding: 3px 1px;
}
.profle-date-wrapper b {
	font-size: 24px;
    padding: 3px 1px;
}
.eventlist_foot .btn {
	padding: 10px;
    line-height: 1;
    border-radius: 50%;
    display: block;
    font-size: 0;
	width: 36px;
    height: 36px;
}
.eventlist_foot .btn i {
	width: 16px;
    height: 16px;
    margin: 0 !important;
    font-size: 16px;
}





/*Blogs*/
.blog-container {
	border-radius: 16px;
	border: 1px solid var(--border-divider-2);
}
.blog-image img {
	object-fit: cover;
}
.blog-content h3 {
	max-height: 101px;
}
.blog-content h6 {
	max-height: 38.4px;
}
.blog-content .text {
	max-height: 42px;
}
.x_feat_blog_bg {
	background: rgb(0 0 0 / 70%);
}
.x_feat_blog_img_bg {
	opacity: 0.8;
    filter: blur(160px);
    margin: -160px;
}
.x_feat_blog_grad_bg {
	background: linear-gradient(45deg, rgb(0 0 0 / 30%), transparent);
}
.x_feat_blog .blog-content .text {
	max-height: 63px;
}
.blog-text {
	font-size: 1.1rem;
	line-height: 1.6;
}
.blog-text img {
	max-width: 100% !important;
	height: auto !important;
}
.blog-text iframe {
	width: 100% !important;
}
.blog-tags a:hover {
	text-decoration: underline;
}





/*Funding*/
.x_funding_list h4 {
	max-height: 57.6px;
}
.x_funding_list .text {
	max-height: 48px;
}





/*Forum*/
.forum-category:before {
	opacity: 0.1;
}
.x_forum_section:not(:last-child) {
	border-bottom: 1px solid var(--border-divider-2);
}
.forum-thread {
	border-top: 1px solid var(--border-divider-2);
}
.forum-thread .text img, .forum-thread .text iframe {
	max-width: 100%;
}





/*Movies*/
.movie-picture {
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	aspect-ratio: 9 / 13.5;
	transition: all 0.2s;
}
.movie-card-top:hover .movie-picture {
	filter: brightness(0.8);
}





/*Games*/
.game_thumb_img, .directory-card {
	transition: all 0.2s;
}
.game_thumb_img:hover {
	transform: scale(1.02);
}





/*Directory*/
.directory-card:hover {
	background: rgb(0 0 0 / 3%);
}
body.night-mode .directory-card:hover {
	background: rgb(255 255 255 / 5%);
}





/*Settings*/
.side-nav a, .side-nav .static {
	display: block;
    font-weight: 500;
    padding: 14px 16px;
    color: var(--body-color);
    font-size: 15px;
    line-height: 20px;
}
.side-nav:not(.x_settings) > li.active > a {
	background-color: rgb(0 0 0 / 4%);
	border-radius: 16px;
}
.side-nav.x_settings > li > a {
	border-right: 2px solid transparent;
}
.side-nav.x_settings > li:not(.active) > a:hover {
	background-color: rgb(0 0 0 / 2%);
}
.side-nav.x_settings > li.active > a {
	border-color: var(--main-link);
}
.side-nav.x_settings > li.active > a:before {
	opacity: 0.06;
	z-index: auto;
}
.side-nav a[data-bs-toggle="collapse"]:after {
	font-family: "Font Awesome 5 Free";
    font-weight: 700;
    font-style: normal;
    font-variant: normal;
    display: inline-block;
    float: right;
    content: "\f105";
    transition: all 0.15s ease;
    opacity: 0.6;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
.side-nav a[data-bs-toggle="collapse"][aria-expanded="true"]:after {
	transform: rotate(90deg);
}
.side-nav ul a {
	margin-left: 16px;
    padding: 7px 16px;
    font-size: 11px;
    opacity: 0.7;
    border-left: 1px solid var(--border-divider-2);
    font-weight: 600;
	transition: all 0.2s;
}
.side-nav ul a:hover {
	opacity: 1;
	text-decoration: underline;text-underline-offset: 4px;
}





/*Premium*/
.x_premium {
	border-radius: 1rem;
}
.x_premium:before {
	background: currentColor;
    opacity: 0.07;
    z-index: auto;
	transition: all 0.2s;
}
.x_premium:hover:before {
	opacity: 0.1;
}
.x_premium hr {
	border-color: currentColor;
    opacity: 0.12;
}





/*Profile*/
.profile-cover-wrapper {
	min-height: 180px;
	aspect-ratio: 1296 / 360;
}
.profile-cover-wrapper img.js_position-cover-cropped {
	width: 100%;
	height: 100%;
	object-fit: cover;
}
.profile-cover-wrapper img.js_lightbox:hover {
	cursor: pointer;
}
.profile-cover-wrapper img.js_position-cover-full {
	width: 100%;
	height: auto;
	cursor: move;
}
.profile-cover-buttons .bg-black:not(:hover):not(.show), .profile-avatar-change .bg-black:not(:hover):not(.show) {
	--bs-bg-opacity: 0.5;
	transition: all 0.2s;
}
.profile-cover-wrapper:hover .profile-cover-buttons .bg-black, .profile-avatar-wrapper:hover .profile-avatar-change .bg-black {
	--bs-bg-opacity: 1;
}
.profile-cover-buttons form.x-uploader, .profile-avatar-change form.x-uploader {
	position: relative;
}
.profile-cover-buttons > div.profile-cover-position-buttons {
	display: none;
}
.profile-cover-change-loader, .profile-avatar-change-loader {
	display: none;
	left: 0;
	right: 0;
	padding-top: 10%;
	transition: all 0.5s;
}
.profile-cover-position-loader {
	display: none;
}
.profile-avatar-wrapper {
	width: 130px;
    height: 130px;
	margin-top: -70px;
}
.profile-avatar-wrapper img {
	width: 100%;
	height: 100%;
	border-radius: 50%;
}
.profile-avatar-change {
	bottom: 5px;
	right: 5px;
}
.profile-avatar-change-loader {
	padding-top: 50%;
}
.profile-name-wrapper {
	
}
.profile-buttons-wrapper {
	right: 20px;
    top: 20px;
}
.profile-buttons-wrapper .btn {
	line-height: 40px;
}
.profile-tabs-wrapper {
	
}
.about-bio {
	font-size: 0.9rem;
}
.panel-photos .row, .panel-videos .row {
    --bs-gutter-x: 0.5rem;
    --bs-gutter-y: 0.5rem;
}
.pg_photo, .album-cover {
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	background-color: #eee;
	padding-top: 100%;
	min-width: 40px;
}
body.night-mode .pg_photo, body.night-mode .album-cover {
	background-color: #333;
}
.pg_photo.large {
	min-width: 100px;
}
.pg_photo-delete-btn {
	right: 5px;
	top: 5px;
}
.pg_photo-pin-btn {
	left: 5px;
	top: 5px;
	background: rgb(0 0 0 / 50%);
	color: #fff;
}
.pg_photo-pin-btn.pinned {
	color: #ffc107;
}
.pg_video {
	transition: all 0.2s;
}
.pg_video .play-button {
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 45px;
	height: 45px;
}
.pg_video:hover {
	filter: brightness(0.9);
}
.review-stars {
	font-size: 21px;
	color: #cbcbcb;
}
.review-stars.small {
	font-size: 11px;
}
.review-stars i.checked {
	color: #FF9800;
}
.review-review {
	font-size: 14px;
}
.review-photos span {
	width: 80px;
}





/*Welcome*/
body.index-body {
	padding-top: 0;
}
.landing-row {
	height: 100dvh;
}
.landing-left {
	position: relative;
}
.landing-intro {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.landing-intro-grad {
	background-image: linear-gradient(0deg, rgb(0 0 0 / 90%), transparent);
}
.landing-form {
	max-width: 550px;
}
.card-register {
	padding: 20px;
}
@media (min-width: 992px) {
	.card-register {
		padding: 40px;
	}
}
.card-register .card-header {
	border: 0;
	background: transparent;
}
.card-register .card-header .card-title {
	font-size: 1.8em;
}





/*404*/
.notfound {
	max-width: 600px;
}





/*Live*/
.live-stream-video .live-counter {
	z-index: 2;
}
.live-stream-video .live-counter .status {
	background: #dc3545;
	padding: 3px 12px;
}
.live-stream-video .live-counter .status.offline {
	background: #383838;
}
.live-stream-video .live-counter .number {
	background: #383838;
	padding: 3px 9px;
}
.live-stream-video .live-recording {
	display: none;
	background: #383838;
	padding: 3px 12px;
	z-index: 2;
	margin-top: 55px;
}
.live-stream-video .live-video-player video {
	background: #000;
	height: 100% !important;
	transform: none !important;
	max-width: 100%;
	display: block;
	margin: auto;
	vertical-align: middle;
	object-fit: contain !important;
}
.x_live_foot {
	background: linear-gradient(transparent, rgb(0 0 0 / 80%));
}
.x_live_foot .live-comments {
	height: 200px;
}
.x_live_foot .live-status {
	padding: 10px 25px;
	background: #383838;
	color: #fff;
	max-width: 400px;
}
.x_live_foot .live-status.info {
	color: #1171ef;
}
.x_live_foot .live-status.success {
	color: #28a745;
}
.x_live_foot .live-status.error {
	color: #dc3545;
}
.live-stream-buttons {
	display: none;
}
.live-stream-buttons .btn {
	padding: 0;
    width: 42px;
    height: 42px;
}
.live-stream-tips-wrapper {
	background: #111111;
	padding: 10px 15px;
	border-radius: 20px;
	margin-top: 8px;
	font-size: 12px;
	line-height: 18px;
}
.x_live_show_modal {
	height: 100%;
}
.x_live_show_modal video {
	object-fit: contain !important;
}





/*User Popover*/
@media (min-width: 768px) {
.user-popover {
	position: relative;
}
.user-popover-wrapper {
	width: 400px;
    min-height: 180px;
    z-index: 99999;
}
.user-popover-content {
    width: 300px;
    position: absolute;
    top: 5px;
    left: 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.2);
    z-index: 999999;
}
body.night-mode .user-popover-content {
	box-shadow: 0 0px 0 1px rgb(255 255 255 / 20%);
}
.user-card-avatar img {
    width: 65px;
    height: 65px;
}
.user-popover-content .btn.btn-gray.btn-sm {
    line-height: 32px;
}
}











/* -- */

/* panel-mutual-friends */
@media (max-width: 559px) {
  .panel-mutual-friends {
    display: none;
  }
}

.panel-mutual-friends li {
  float: left;
  width: 40px;
  height: 40px;
  margin-right: -8px;
}

/* -- */





/* -- */
.post-social-share {
	padding-bottom: 20px;
	margin-bottom: 20px;
	border-bottom: 1px solid #f4f4f4;
}
body.night-mode .post-social-share {
	border-color: #545252;
}





/* who-shares */
.who-shares {
  background: #f3f3f3;
}

body.night-mode .who-shares {
  background: var(--body-bg-color-dark);
}

/* -- */

/* post-custom-fileds-wrapper  */
.post-custom-fileds-wrapper {
  background: #f7f7f7;
  padding: 10px 20px;
  border: 1px solid #e5e5e5;
  font-size: 14px;
  border-radius: 6px;
  text-align: left;
}

body.night-mode .post-custom-fileds-wrapper {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.post-custom-fileds-wrapper div:not(:last-child) {
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #e7e7e7;
}

body.night-mode .post-custom-fileds-wrapper div:not(:last-child) {
  border-color: var(--card-dark-divider);
}






/* -- */

/* MAIN */
/* ------------------------------- */

/* == Icons == */

/* header-icons */
.header-icon,
.header-icon * {
  color: #111 ! important;
  fill: #111 ! important;
}

body.night-mode .header-icon,
body.night-mode .header-icon * {
  color: #c1d4e3 ! important;
  fill: #c1d4e3 ! important;
}

.header-icon.active,
.header-icon.active *,
body.night-mode .header-icon.active,
body.night-mode .header-icon.active * {
  color: var(--link-color) ! important;
  fill: var(--link-color) ! important;
}

/* == */

/* main-icons */


/* == */

/* action-icons */
.action-icon,
.action-icon * {
  color: #111 ! important;
  fill: #111 ! important;
}

body.night-mode .action-icon,
body.night-mode .action-icon * {
  color: #c1d4e3 ! important;
  fill: #c1d4e3 ! important;
}

/* == */

/* cutom-icons */
.white-icon,
.white-icon * {
  color: #fff ! important;
  fill: #fff ! important;
}

.danger-icon,
.danger-icon * {
  color: #cb2027 ! important;
  fill: #cb2027 ! important;
}

/* == */

/* == SVG == */
.svg-container {
  display: inline-block;
}

.svg-container svg {
  width: inherit !important;
  height: inherit !important;
}

/* == */

/* == Scrollbar == */
.custom-scrollbar ::-webkit-scrollbar {
  visibility: hidden;
  height: 8px;
  width: 8px;
}

.custom-scrollbar ::-webkit-scrollbar-thumb {
  visibility: hidden;
  border-radius: 4px;
  background: #808080;
}

.custom-scrollbar:hover ::-webkit-scrollbar,
.custom-scrollbar:hover ::-webkit-scrollbar-thumb {
  visibility: visible;
}

/* == */

/* == Tooltip == */
.tooltip-inner {
  font-family: var(--body-font-family);
  white-space: nowrap;
  max-width: none;
}

/* == */

/* == */

/* == Badge == */
.badge.badge-lg {
  font-size: 100%;
}

/* == */

/* == Pagination == */
body.night-mode .pagination .page-link {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
  color: var(--body-color-dark);
}

/* == */

/* == Img-thumbnail == */
body.night-mode .img-thumbnail {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

/* == */

/* == Nav-pills == */

.nav-link {
  color: var(--link-color);
}

/* -- Custom Nav */
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
	color: var(--main-color);
    background-color: var(--main-btn);
}
.nav-pills.nav-search .nav-item,
.nav-pills.nav-started .nav-item {
  margin-right: 10px;
  margin-bottom: 10px;
}

.nav-pills.nav-search .nav-item:last-child,
.nav-pills.nav-started .nav-item:last-child {
  margin-right: 0;
}

.nav-pills.nav-search .nav-link:not(.active) {
  background: #fff;
}

.nav-pills.nav-started .nav-link {
  padding-top: 15px;
  padding-bottom: 15px;
}

.nav-pills.nav-started .nav-link:not(.active) {
  background: #f3f3f3;
}

body.night-mode .nav-pills.nav-search .nav-link:not(.active),
body.night-mode .nav-pills.nav-started .nav-link:not(.active) {
  background: var(--card-dark-color);
  color: #fff;
}

body.night-mode .nav-pills.nav-search .nav-link:not(.active):hover,
body.night-mode .nav-pills.nav-started .nav-link:not(.active):hover {
  background: var(--card-dark-hover);
}

/* == */

/* == Nav-tabs == */
body.night-mode .nav-tabs {
  border-bottom-color: var(--card-dark-divider);
}

body.night-mode .nav-tabs .nav-item.show .nav-link,
body.night-mode .nav-tabs .nav-link.active {
  color: var(--body-color-dark);
  border-color: var(--card-dark-divider);
  background-color: var(--card-dark-divider);
}

body.night-mode .nav-tabs .nav-link:not(.active):hover {
  border-color: var(--card-dark-divider);
}



/* == Modal == */
.modal {
  z-index: 999999;
}

body.night-mode .modal-content {
  background-color: var(--card-dark-color);
}

body.night-mode .modal-header,
body.night-mode .modal-footer {
  border-color: var(--card-dark-divider);
}

.modal-header.with-nav {
  padding-bottom: 0;
  border-bottom: 0;
}

/* == */

/* == Alert == */
.alert {
  padding: 16px 24px;
  border-radius: 16px;
}

.alert-link:hover {
  text-decoration: underline;
}

.alert-dismissible {
  padding-right: 72px;
}

.alert-primary {
  color: #fff;
  border-color: #7889e8;
  background-color: #7889e8;
}

.alert-primary hr {
  border-top-color: #6276e4;
}

.alert-secondary {
  color: #212529;
  border-color: #f6f7f8;
  background-color: #f6f7f8;
}
body.night-mode .alert-secondary {
	color: var(--bs-secondary-text-emphasis);
    border-color: var(--bs-secondary-bg);
    background-color: var(--bs-secondary-bg);
}
.alert-secondary hr {
  border-top-color: #e8eaed;
}

.alert-success {
  color: #fff;
  border-color: #4fd69c;
  background-color: #4fd69c;
}

.alert-success hr {
  border-top-color: #3ad190;
}

.alert-info {
  color: #fff;
  border-color: #37d5f2;
  background-color: #37d5f2;
}

.alert-info hr {
  border-top-color: #1fd0f0;
}

.alert-warning {
  color: #fff;
  border-color: #fc7c5f;
  background-color: #fc7c5f;
}

.alert-warning hr {
  border-top-color: #fc6846;
}

.alert-danger {
  color: #fff;
  border-color: #f75676;
  background-color: #f75676;
}

.alert-danger hr {
  border-top-color: #f63e62;
}

.alert-light {
  color: #fff;
  border-color: #bac1c8;
  background-color: #bac1c8;
}

.alert-light hr {
  border-top-color: #acb4bd;
}

.alert-dark {
  color: #fff;
  border-color: #45484b;
  background-color: #45484b;
}

.alert-dark hr {
  border-top-color: #393b3e;
}

/* -- Custom Alerts */
.alert-post {
  background: #f8f9fa;
  color: var(--link-color);
  font-weight: 600;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

body.night-mode .alert-post {
  background: var(--card-dark-hover);
}

.alert-chat {
  background: #f4f4f4;
  width: 75%;
  padding: 15px 25px !important;
  margin: 0 auto !important;
  color: #555;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}

body.night-mode .alert-chat {
  background: var(--card-dark-input);
}

.alert .title {
  padding-bottom: 8px;
  margin-bottom: 10px;
  font-weight: 600;
  border-bottom: 1px solid #00000012;
}

.alert .icon {
  display: table-cell;
  vertical-align: middle;
  padding-right: 10px;
}

.alert .text {
  display: table-cell;
  vertical-align: top;
  text-align: left;
}

/* == */

/* == Buttons == */

/* -- Custom Buttons */
.btn-rounded {
  border: 0 !important;
  border-radius: 50%;
}

.btn-delete:hover {
  color: #fff;
  border-color: #eb3357;
  background-color: #eb3357;
}

.btn-delete:hover .fa:before {
  content: "\f1f8";
}

.btn-payment {
  background: #f7f7f7;
}

.btn-payment:hover {
  background: #f1f1f1;
}

body.night-mode .btn-payment {
  background: var(--card-dark-input);
}

body.night-mode .btn-payment:hover {
  background: var(--card-dark-hover);
}





.btn-icon-social {
  display: inline-block;
  background: #fbfbfb;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 50%;
}

body.night-mode .btn-icon-social {
  background: var(--card-dark-hover);
}

.btn-icon-social:hover {
  background: #f7f7f7;
}

body.night-mode .btn-icon-social:hover {
  background: var(--card-dark-color);
}

.btn-social {
	border: 2px solid #EFEFEF;
	transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.btn-social:hover {
  background-color: #EFEFEF;
}

body.night-mode .btn-social {
  border-color: #444a4c;
  color: #fff;
}

body.night-mode .btn-social:hover {
  background-color: #444a4c;
}

/* == */

/* == Inputs == */




body.night-mode .form-control-plaintext {
  color: var(--body-color-dark);
}

.input-group .btn {
  padding-top: 9px;
  padding-bottom: 9px;
}

.form-check-label {
  padding-top: 2px;
}

/* -- Custom Inputs */
.form-table-row {
  display: flex;
  margin-bottom: 30px;
}

.form-table-row.disabled {
  opacity: 0.5;
}

.form-table-row>div {
  flex: 1;
}

.form-table-row>div:last-child {
  flex-basis: auto;
  flex-grow: 0;
  margin-left: 10px;
}

.form-table-row>div.avatar {
  flex-basis: auto;
  flex-grow: 0;
  margin-right: 10px;
}

.input-money {
  position: relative;
}

.input-money span {
  font-size: 20px;
  position: absolute;
  top: 15px;
  left: 0;
  width: 45px;
  text-align: center;
}

.input-money.right span {
  left: auto;
  right: 0;
}

.input-money input {
  font-size: 40px;
  line-height: 40px;
  font-family: opensanslight;
  margin: 0;
  padding: 10px;
  padding-left: 45px;
  height: 60px;
  outline: 0;
}

.input-money.right input {
  padding-left: 10px;
  padding-right: 45px;
}

/* == */


.modal-body .divider {
  border-top: 1px solid #e6ecf5;
  margin: 25px 0;
}

.modal-body .divider.dashed {
  border-top-style: dashed;
}

body.night-mode .modal-body .divider {
  border-color: var(--card-dark-divider);
}


.card-pricing {
  border: 1px solid #f4f4f4;
}

.card-pricing .icon {
  max-width: 42px;
  border: 1px solid #f4f4f4;
  padding: 4px;
  border-radius: 16px;
}

body.night-mode .card-pricing .icon {
  border-color: var(--card-dark-divider);
}

.card-pricing .price {
  font-weight: 700;
}

body.night-mode .card-pricing,
body.night-mode .card-pricing .list-group-item {
  border-color: var(--card-dark-divider);
}

.card-footer-fake {
  text-align: right;
  padding: 0.75rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  margin: 1rem -1rem -1rem;
  border-radius: 0 0 16px 16px;
}

/* == */

/* == Bg-gradient == */
.bg-gradient-primary {
  color: #fff !important;
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-primary {
  color: #fff !important;
  background: #5e72e4 !important;
}

.bg-gradient-secondary {
  background: linear-gradient(87deg, #f7fafc 0, #f7f8fc 100%) !important;
}

.bg-gradient-success {
  color: #fff !important;
  background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-info {
  color: #fff !important;
  background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-gradient-warning {
  color: #fff !important;
  background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-danger {
  color: #fff !important;
  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-light {
  background: linear-gradient(87deg, #adb5bd 0, #adaebd 100%) !important;
}

.bg-gradient-dark {
  color: #eee;
  background: linear-gradient(87deg, #212529 0, #212229 100%) !important;
}

.bg-gradient-default {
  color: #eee;
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-white {
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-neutral {
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-darker {
  color: #eee;
  background: linear-gradient(87deg, #000 0, #000 100%) !important;
}

.bg-gradient-blue {
  color: #fff !important;
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-indigo {
  color: #fff !important;
  background: linear-gradient(87deg, #5603ad 0, #9d03ad 100%) !important;
}

.bg-indigo {
  color: #fff !important;
  background: #5603ad !important;
}

.bg-gradient-purple {
  color: #fff !important;
  background: linear-gradient(87deg, #8965e0 0, #bc65e0 100%) !important;
}

.bg-gradient-pink {
  color: #fff !important;
  background: linear-gradient(87deg, #f3a4b5 0, #f3b4a4 100%) !important;
}

.bg-gradient-red {
  color: #fff !important;
  background: linear-gradient(87deg, #f5365c 0, #aa2b07 100%) !important;
}

.bg-red {
  color: #fff !important;
  background: #f5365c !important;
}

.bg-gradient-orange {
  color: #fff !important;
  background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-yellow {
  color: #666;
  background: linear-gradient(87deg, #ffd600 0, #beff00 100%) !important;
}

.bg-gradient-green {
  color: #fff !important;
  background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-teal {
  color: #fff !important;
  background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-teal {
  color: #fff !important;
  background: #1171ef !important;
}

.bg-gradient-cyan {
  color: #fff !important;
  background: linear-gradient(87deg, #009688 0, #26b8ab 100%) !important
}

.bg-gradient-white {
  color: #000 !important;
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-gray {
  color: #fff !important;
  background: linear-gradient(87deg, #8898aa 0, #888aaa 100%) !important;
}

.bg-gradient-gray-dark {
  color: #fff !important;
  background: linear-gradient(87deg, #32325d 0, #44325d 100%) !important;
}

.bg-gradient-light {
  color: #000 !important;
  background: linear-gradient(87deg, #ced4da 0, #cecfda 100%) !important;
}

.bg-gradient-lighter {
  color: #000 !important;
  background: linear-gradient(87deg, #e9ecef 0, #e9eaef 100%) !important;
}

/* == */

/* == Callout == */
.bs-callout {
  background: #fff;
  padding: 20px;
  margin: 20px 0;
  border-left: 5px solid #eee;
  border-radius: 3px;
}

body.night-mode .bs-callout {
  background: var(--card-dark-input);
}

.bs-callout h4 {
  margin-top: 0;
  margin-bottom: 5px;
}

.bs-callout p:last-child {
  margin-bottom: 0;
}

.bs-callout code {
  border-radius: 3px;
}

.bs-callout+.bs-callout {
  margin-top: -5px;
}

.bs-callout-default {
  border-left-color: #777;
}

.bs-callout-default h4 {
  color: #777;
}

.bs-callout-primary {
  border-left-color: #428bca;
}

.bs-callout-primary h4 {
  color: #428bca;
}

.bs-callout-success {
  border-left-color: #5cb85c;
}

.bs-callout-success h4 {
  color: #5cb85c;
}

.bs-callout-danger {
  border-left-color: #d9534f;
}

.bs-callout-danger h4 {
  color: #d9534f;
}

.bs-callout-warning {
  border-left-color: #f0ad4e;
}

.bs-callout-warning h4 {
  color: #f0ad4e;
}

.bs-callout-info {
  border-left-color: #5bc0de;
}

.bs-callout-info h4 {
  color: #5bc0de;
}

/* == */

/* == [JS Plugin] Bootstrap-Select == */
.bootstrap-select:not(.input-group-btn) {
  height: 100%;
}

.bootstrap-select .dropdown-toggle .filter-option {
  display: inline-block !important;
  position: static !important;
  padding: 0 !important;
}

.bootstrap-select .btn-outline-light {
  color: #495057;
  border-color: #ddd;
}

.bootstrap-select .option .icon {
  display: table-cell;
  vertical-align: middle;
  padding-right: 10px;
}

.bootstrap-select .option .text {
  display: table-cell;
  vertical-align: top;
  text-align: left;
}

/* == */

/* == [JS Plugin] MCE Editor == */
div.mce-fullscreen {
  z-index: 99999;
}

/* == */

/* == [JS Plugin] jQuery-UI (autocomplete) == */
.ui-autocomplete {
  position: absolute;
  top: 0;
  left: 0;
  cursor: default;
  z-index: 9999;
}

.ui-widget-content {
  background: #fff;
  color: #444;
  z-index: 999999;
  padding: 10px;
  border-radius: 0 0 3px 3px;
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
}

body.night-mode .ui-widget-content {
  background: var(--bs-body-bg);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

.ui-menu-item {
  position: relative;
  margin: 0;
  padding: 5px 0;
  border-radius: 3px;
  cursor: pointer;
}

.ui-menu-item:hover {
  background: #efefef;
}

body.night-mode .ui-menu-item:hover {
  background: #424242;
}

.ui-menu-item a {
  color: #444;
}

body.night-mode .ui-menu-item a {
  color: #e5e5e5;
}

.ui-menu-item img {
  width: 30px;
  margin: 5px;
  border-radius: 50%;
}

.ui-menu-item span {
  font-size: 13px;
}

.ui-helper-hidden-accessible {
  display: none;
}

/* -- */

/* == [JS Plugin] Tagify == */
.tagify {
  width: 100%;
}

body.night-mode .tagify {
  border-color: var(--card-dark-divider);
  color: var(--body-color-dark);
}

body.night-mode .tagify__dropdown,
body.night-mode .tagify__dropdown__wrapper {
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .tagify__dropdown__item--active {
  background-color: var(--card-dark-input);
}

/* == */

/* == [JS Plugin] CookieConsent == */
.cc-window.cc-floating {
  border-radius: 10px;
}

/* == */

/* == [JS Plugin] DataTables == */
.table>:not(caption)>*>* {
  padding: .875rem .875rem;
}

/* == */

/* == [JS Plugin] Tagify == */
.tagify {
  border-radius: var(--bs-border-radius);
}

/* == */

/* == [JS Plugin] Plyr.JS == */
.plyr.fluid-video.non-fullscreen .plyr__video-wrapper {
  max-height: calc(100vh - 350px);
  width: auto;
  height: auto;
  max-width: 100%;
  overflow: hidden;
}

.plyr.fluid-video.non-fullscreen .plyr__video-wrapper video {
  max-height: calc(100vh - 350px);
}

.plyr.fluid-video.fullscreen .plyr__video-wrapper {
  max-height: 100%;
  height: 100%;
  width: 100%;
}

.plyr.fluid-video.fullscreen .plyr__video-wrapper video {
  max-height: 100%;
}

/* == */

/* HEADER */
/* ------------------------------- */

/* main-wrapper */


/* -- */





/* -- */



/* -- */



/* -- */


/* navbar-wrapper */
.navbar-wrapper>ul {
  display: flex;
}

.navbar-wrapper>ul>li {
  flex: 1;
  text-align: center;
  margin: 0 2px;
}

.navbar-wrapper>ul>li.mini-search {
  flex: 4;
}

.navbar-wrapper>ul>li>a {
  position: relative;
  display: block;
  text-align: center;
  height: 50px;
  margin-top: 10px;
  padding: 0 10px;
  line-height: 50px;
  border-radius: 8px;
}

.navbar-wrapper>ul>li>a:hover {
  background-color: rgb(160 160 160 / 10%);
}

body.night-mode .navbar-wrapper>ul>li>a:hover {
  background-color: rgb(234 234 234 / 10%);
}

.navbar-wrapper>ul>li.dropdown.show>a {
  background-color: rgba(255, 255, 255, 0.1);
}

body.night-mode .navbar-wrapper>ul>li.dropdown.show>a {
  background-color: #494c62;
}


/* -- dropdown-menu */
.navbar-wrapper>ul>li.dropdown {
  position: static;
}

@media (min-width: 768px) {
  .navbar-wrapper>ul>li.dropdown {
    position: relative;
  }
}

/* -- dropdown-widget */
.dropdown-widget {
  width: 100%;
  padding-bottom: 0;
  padding-top: 0;
}

.dropdown-widget-header {
  padding: 12px;
  font-size: 11px;
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .dropdown-widget-header {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-header .title {
  font-size: 16px;
  line-height: 22px;
  font-weight: 500;
}

.dropdown-widget-header a:hover {
  text-decoration: underline;
}

.dropdown-widget-body {
  padding: 0;
  font-size: 12px;
}

.dropdown-widget-body .title {
  border-top: 1px solid #e4e4e4;
  border-bottom: 1px solid #e4e4e4;
  color: #9a9fbf;
  padding: 8px;
  display: block;
  font-size: 11px;
  font-weight: 600;
  line-height: 16px;
}

body.night-mode .dropdown-widget-body .title {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-footer {
  display: block;
  padding: 10px 0;
  border-top: 1px solid #f4f4f4;
  border-bottom: 0 none;
  text-align: center;
  font-size: 13px;
}

body.night-mode .dropdown-widget-footer {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-footer:hover {
  text-decoration: underline;
}

@media (min-width: 768px) {
  .dropdown-widget {
    min-width: 380px !important;
  }

  .dropdown-widget.dropdown-search {
    border-radius: 0.375rem;
	min-width: 100% !important;
  }
}

/* -- */

/* COMMON */
/* ------------------------------- */

/* no-data */
.no-data {
  padding: 8px 20px;
  background: #f7f7f7;
  border-radius: 10px;
  font-weight: 500;
}

body.night-mode .no-data {
  background: var(--card-dark-input);
}



/* -- */

/* shipping-address */


/* -- */

/* section-title */
.section-title {
  background: #f5f5f5;
  padding: 14px;
  font-weight: 600;
  text-align: center;
  border-radius: 8px;
}

body.night-mode .section-title {
  background-color: var(--card-dark-hover);
}

/* -- */

/* heading */
.heading-small {
  font-size: 12px;
  padding: 4px 0;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

/* -- */

/* hr-heading */
.hr-heading {
  display: block;
  overflow: hidden;
  text-align: center;
  white-space: nowrap;
}

.hr-heading-text {
  position: relative;
  display: inline-block;
}

.hr-heading-text:before,
.hr-heading-text:after {
  position: absolute;
  top: 50%;
  width: 9999px;
  height: 1px;
  background: #f4f4f4;
  content: "";
}

body.night-mode .hr-heading-text:before,
body.night-mode .hr-heading-text:after {
  background: var(--card-dark-divider);
}

.hr-heading-text:before {
  right: 100%;
  margin-right: 15px;
}

.hr-heading-text:after {
  left: 100%;
  margin-left: 15px;
}

/* -- */

/* user-box */
.user-box {
  display: block;
  margin: 5px;
  text-align: center;
  text-decoration: none;
}

.circled-user-box {
  margin: 5px;
}

.circled-user-box .user-box {
  position: relative;
  padding-top: 100%;
  margin: 0;
  margin-bottom: 20px;
}

.pro-box-wrapper .user-box {
  width: 71px;
  float: left;
  opacity: 0.55;
}

.pro-box-wrapper.full-opacity .user-box {
  opacity: 1;
}

.pro-box-wrapper .user-box.slick-center {
  opacity: 1;
  transform: scale(1.1);
  font-weight: 600;
}

.user-box img {
  width: 100%;
  height: 100%;
  margin: 0 auto;
  border-radius: 50%;
}

.circled-user-box .user-box img {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  object-fit: cover;
}

.pro-box-wrapper .user-box img {
  width: 60px;
  height: 60px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.user-box .name {
  margin-top: 5px;
  font-size: 11px;
  word-break: break-word;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.circled-user-box .user-box .name {
  position: absolute;
  left: 0;
  right: 0;
}

/* -- */

/* ui-box */
.ui-box {
  position: relative;
  background: #fff;
  padding: 50px 15px 15px;
  margin-top: 50px;
  margin-bottom: 20px;
  text-align: center;
  border-radius: 16px;
}

.ui-box.darker {
  background: #f4f4f4;
}

body.night-mode .ui-box {
  background: var(--card-dark-input);
}

.ui-box .img {
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translate(-50%);
  background: #fff;
  padding: 4px;
  margin: 0 auto;
  border-radius: 50%;
}

body.night-mode .ui-box .img {
  background: var(--card-dark-color);
}

.ui-box img {
  height: 92px;
  width: 92px;
  border-radius: 50%;
}

.ui-box .btn {
  box-shadow: none;
}

/* -- */


/* -- */



/* -- */

/* content-tabs */
.content-tabs {
  background: #fff;
  margin-bottom: 20px;
  padding: 0 5px;
  border-radius: 8px;
}

body.night-mode .content-tabs {
  background: var(--card-dark-color);
}

@media (min-width: 768px) {
  .content-tabs {
    padding: 0 10px;
  }
}

.content-tabs>ul>li {
  float: left;
}

.content-tabs>ul>li>a {
  display: block;
  padding: 12px 14px;
  font-size: 12px;
  line-height: 24px;
  color: #666;
  transition: all 0.2s ease;
}

body.night-mode .content-tabs>ul>li>a {
  color: var(--body-color-dark);
}

@media (min-width: 768px) {
  .content-tabs>ul>li>a {
    padding: 20px 28px;
    font-size: 15px;
  }
}

.content-tabs>ul>li.active>a {
  color: var(--link-color);
  font-weight: 600;
  border-bottom: 2px solid var(--link-color);
}

/* -- */

/* see-more */
.see-more {
  text-align: center;
  margin: 10px 0 0;
  padding: 10px;
}

.see-more:hover {
  text-decoration: underline;
  cursor: pointer;
}

.see-more.loading:hover {
  text-decoration: none;
  cursor: default;
}

.see-more.done:hover {
  text-decoration: underline;
  cursor: text;
}

/* --*/

/* feeds-item */
.feeds-item.unread {
  background: #f1f1f1;
}

body.night-mode .feeds-item.unread {
  background: var(--card-dark-input);
}

/* -- */

/* data-container */
.data-container {
  display: block;
  width: 100%;
  padding: 8px;
  min-height: 56px;
  /* 40px avatar + 16px padding */
}

.data-container.small {
  min-height: 46px;
  /* 30px avatar + 16px padding */
}

a.data-container:hover,
.data-container.clickable:hover {
  background: #f6f7f8;
  text-decoration: none;
  cursor: pointer;
}

body.night-mode a.data-container:hover,
body.night-mode .data-container.clickable:hover {
  background: var(--card-dark-divider);
}

.data-avatar {
  display: block;
  position: relative;
  /* relative for .data-reaction to be absolute */
  float: left;
}

.data-avatar img {
  width: 30px;
  height: 30px;
  text-align: center;
  border-radius: 50%;
}

@media (min-width: 768px) {
  .data-avatar img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }

  .data-container.small .data-avatar img {
    width: 30px;
    /* override the previous */
    height: 30px;
  }
}

.data-avatar .left-avatar,
.data-avatar .right-avatar {
  background-size: cover;
  background-position: center center;
  float: left;
  overflow: hidden;
  width: 14px;
  height: 30px;
  margin-right: 1px;
  border-radius: 20px 0 0 20px;
}

.data-avatar .right-avatar {
  width: 15px;
  margin-right: 0;
  border-radius: 0 20px 20px 0;
}

@media (min-width: 768px) {

  .data-avatar .left-avatar,
  .data-avatar .right-avatar {
    width: 19px;
    height: 40px;
    border-radius: 20px 0 0 20px;
  }

  .data-avatar .right-avatar {
    width: 20px;
    border-radius: 0 20px 20px 0;
  }

  .data-container.small .data-avatar .left-avatar,
  .data-container.small .data-avatar .right-avatar {
    width: 14px;
    height: 30px;
  }

  .data-container.small .data-avatar .right-avatar {
    width: 15px;
  }
}

.data-reaction {
  position: absolute;
  bottom: -4px;
  right: -6px;
}

.data-content {
  padding-left: 38px;
  color: #555;
  font-size: 13px;
}

body.night-mode .data-content {
  color: var(--body-color-dark);
}


@media (min-width: 768px) {
  .data-content {
    padding-left: 48px;
    word-wrap: break-word;
  }

  .data-container.small .data-content {
    padding-left: 38px;
    /* override the previous */
  }
}

.data-content .data-img {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 1px;
  width: 48px;
  height: 48px;
  object-fit: cover;
}

.data-content .btn {
  padding: 2px 6px;
  font-size: 10px;
}

@media (min-width: 576px) {
  .data-content .btn {
    padding: 4px 12px;
    font-size: 12px;
  }
}

.data-content .name {
  font-weight: bold;
}

.data-content .time {
  font-size: 10px;
  color: #888;
}

.data-content .text {
  word-break: break-all;
}

/* -- */

/* x-form */
.x-form {
	position: relative;
}
.x-form-tools>li {
	transition: all 0.2s;
}
.x-form-tools>li:hover {
	opacity: 0.8;
}


.x-form-tools-post,
.x-form-tools-attach,
.x-form-tools-voice,
.x-form-tools-emoji {
  position: relative;
  /* for input & menus */
  overflow: hidden;
  display: inline-block;
  cursor: pointer;
}

@media (min-width: 992px) {
  .x-form-tools-post {
    display: none;
  }
}

.x-form-tools-attach input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}





/*Attachments*/
.attachments li {
	float: left;
	width: 64px;
	height: 64px;
	margin-right: 5px;
	margin-bottom: 5px;
	transition: padding 0.5s;
}
@media (min-width: 768px) {
	.attachments li {
		width: 96px;
		height: 96px;
	}
}
.attachments li.item {
	position: relative;
	cursor: pointer;
	border-radius: 10px;
}
.attachments li.item img {
	width: 64px;
	height: 64px;
	border-radius: 10px;
}
@media (min-width: 768px) {
	.attachments li.item img {
		width: 94px;
		height: 94px;
	}
}
.attachments li.item .name {
	background: #fafafa;
	height: 100%;
	width: 100%;
	padding: 10px;
	color: #999;
	font-size: 10px;
	word-break: break-all;
}
.attachments li.item button {
	position: absolute;
	top: 5px;
	right: 5px;
	color: #fff;
	text-shadow: 0 1px 0 #000;
	--bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
	background-color: black;
    border-radius: 50%;
	background-size: 11px;
    opacity: 1;
}
.attachments li.loading {
	padding-top: 22px;
	/* 64px-20px(loader) / 2 */
	background: #f3f3f3;
	border: 1px solid #f4f4f4;
	display: none;
	border-radius: 10px;
}
@media (min-width: 768px) {
	.attachments li.loading {
		padding-top: 45px;
		/* 96px-5px(loader) / 2 */
	}
}
.attachments li.add {
	position: relative;
	overflow: hidden;
	padding: 20px 0 0 25px;
	color: #ddd;
	font-size: 16px;
	cursor: pointer;
	border-radius: 16px;
	border: 2px dashed #cecece;
}
@media (min-width: 768px) {
	.attachments li.add {
		padding: 30px 0 0 35px;
		font-size: 24px;
	}
}





/* x-uploader */
.x-uploader {
  overflow: hidden;
}

.x-uploader input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  opacity: 0;
  outline: none;
  background: white;
  cursor: pointer;
  display: block;
}

.x-uploader .fa {
  cursor: pointer;
}

/* -- */

/* x-image */
.x-image {
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  border: 1px dashed #ccc;
  width: 96px;
  height: 96px;
  overflow: hidden;
  display: block;
  border-radius: 10px;
}

body.night-mode .x-image {
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}
.x-image.w-100 {
	height: 160px;
}
.x-image.w-100 .x-image-loader {
	padding-top: 80px;
}
.x-image.full {
  width: 100%;
}

.x-image.sm {
  width: 48px;
  height: 48px;
}

.x-image:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: #000;
  content: "";
  opacity: 0;
}

.x-image:hover.x-image:before {
  opacity: 0.2;
}

.x-image-success {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.5;
  background: #000;
  width: 100%;
  height: 100%;
  padding-top: 30%;
  text-align: center;
  color: #fff;
  font-size: 12px;
  transition: all 0.5s;
}
.x-image.full .x-image-loader {
	padding-top: 20%;
}
.x-image .x-uploader {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	text-align: center;
	padding: 25px;display: flex;
    align-items: center;
    justify-content: center;
}
.x-image button {
	z-index: 2;
    line-height: 1;
}
.x-image-loader {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0.5;
	background: #000;
	width: 100%;
	height: 100%;
	padding-top: 50%;
	transition: all 0.5s;
}
.x-progress {
	height: 5px;
	margin: 0 1.5rem;
	border-radius: 25px;
}

/* -- */

/* tbl-image */
.tbl-image {
  width: 24px;
  height: 24px;
  float: left;
  margin-right: 5px;
  border-radius: 50%;
}

.tbl-image.app-icon {
  width: 34px;
  height: 34px;
  border-radius: 4px;
}

/* -- */





/* -- */

/* sticker */
.sticker {
  max-height: 100px;
  display: block;
  margin: 0 auto;
}

/* -- */



/* -- */



/* -- */

/* jobs publisher */
.add-job-question {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 10px;
  font-weight: 600;
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 4px;
  cursor: pointer;
}

.add-job-question:hover {
  background: #f3f3f3;
}

body.night-mode .add-job-question {
  background: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .add-job-question:hover {
  background: var(--card-dark-color);
}

.job-question {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 20px;
  border-radius: 16px;
}

body.night-mode .job-question {
  background: var(--card-dark-input);
}

.job-question .question {
  font-size: 16px;
  font-weight: bold;
}

.job-question .answer {
  font-size: 14px;
}

.job-candidate-wrapper {
  padding: 15px;
  border: 1px solid #f4f4f4;
  border-radius: 16px;
  margin-bottom: 20px;
}

body.night-mode .job-candidate-wrapper {
  border-color: var(--card-dark-divider);
}

.job-candidate-avatar {
  position: relative;
  display: table-cell;
  vertical-align: top;
  padding-right: 10px;
}

.job-candidate-info {
  display: table-cell;
  vertical-align: top;
  width: 100%;
  font-size: 14px;
  word-break: break-word;
}

.job-candidate-info .name {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}


/* -- */





/* -- */

/* AUTO-COMPLETE */
/* ------------------------------- */

.dropdown-menu.auto-complete {
  display: none;
}

.typeahead {
  position: relative;
  /* for dropdown-menu */
  float: left;
}

.typeahead input {
  background: transparent;
  width: 100%;
  color: #4e5665;
  font-size: 16px;
  line-height: 30px;
  outline: 0 none;
  border: 0 none;
}

body.night-mode .typeahead input {
  color: #fff;
}

.tags li {
  float: left;
  padding: 8px 12px;
  margin: 0 3px 3px 0;
  background: #f4f4f4;
  font-size: 12px;
  line-height: 16px;
  border-radius: 16px;
}

body.night-mode .tags li {
  background: var(--card-dark-color);
}

.tags button {
  font-size: 8px;
  margin-left: 4px;
}

/* Google Geo-Autocomplete */
.pac-container {
  z-index: 999999;
}

/* -- */

/* LIGHTBOX */
/* ------------------------------- */

.lightbox-open {
  overflow: hidden;
  /* hide the page scroll */
}

.lightbox {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.75);
  z-index: 99999;
  overflow-y: scroll;
}

@media (min-width: 992px) {
  .lightbox {
    overflow-y: none;
  }
}

.lightbox-container {
  display: table;
  width: 100%;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.6);
  padding-right: 0;
  padding-left: 0;
}

@media (min-width: 992px) {
  .lightbox-container {
    height: 100%;
  }
}

.lightbox-preview {
  position: relative;
  display: block;
  width: 100%;
  vertical-align: middle;
  background: #000;
  text-align: center;
}

@media (min-width: 992px) {
  .lightbox-preview {
    display: table-cell;
    width: 60%;
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .lightbox-preview {
    width: 70%;
  }
}

.lightbox-preview.nodata {
  width: 100%;
}

.lightbox-preview.with-live video {
  top: 0 !important;
  left: 0 !important;
}

.lightbox-exit {
  position: absolute;
  top: 4%;
  right: 2%;
  opacity: 0.5;
  color: #fff;
}

.lightbox-exit:hover {
  opacity: 1;
  cursor: pointer;
}

.lightbox-next,
.lightbox-prev {
  position: absolute;
  top: 50%;
  opacity: 0.5;
}

.lightbox-next {
  right: 2%;
}

.lightbox-prev {
  left: 2%;
}

.lightbox-next:hover,
.lightbox-prev:hover {
  opacity: 1;
  cursor: pointer;
}

.lightbox-next .fa,
.lightbox-prev .fa {
  color: #fff;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}

.lightbox-download {
  position: absolute;
  bottom: 4%;
  left: 2%;
}

.lightbox-download a {
  color: #fff;
  opacity: 0.5;
}

.lightbox-download a:hover {
  opacity: 0.75;
}

.lightbox-preview img {
  margin: 0 auto;
  max-width: 100%;
  max-height: calc(100vh - 92px);
  /* 92px = 46*2 (header) */
}

.lightbox-data {
  display: block;
  width: 100%;
  vertical-align: top;
  background: #fff;
}

@media (min-width: 992px) {
  .lightbox-data {
    display: table-cell;
    width: 40%;
  }
}

@media (min-width: 1200px) {
  .lightbox-data {
    width: 30%;
  }
}

body.night-mode .lightbox-data {
  background: var(--card-dark-color);
}

.lightbox-post {
  padding: 0 8px;
  height: calc(100vh - 113px);
  /* 113px = 46*2 (header) + 21px (close btn) */
}


/* -- */

/* CHAT */
/* ------------------------------- */



/* -- */

/* EMOJI */
/* ------------------------------- */

.emoji-menu {
  display: none;
  position: absolute;
  bottom: 30px;
  right: 0;
  min-width: 252px;
  margin: 0;
  padding: 6px 2px 0 6px;
  font-size: 13px;
  line-height: 100%;
  background-color: #fff;
  border: 1px solid #f5f5f5;
  border-radius: 16px;
  box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 10%) 0px 4px 6px -4px;
  z-index: 99999;
}

body.night-mode .emoji-menu {
  background-color: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.publisher .emoji-menu, .post-form .emoji-menu, .comment-form .emoji-menu {
	bottom: auto;
	top: 30px;
}

.lightbox .emoji-menu {
  bottom: auto;
  top: 27px;
  right: -7px;
}

.emoji-menu .item {
  float: left;
  padding: 3px;
  margin-right: 3px;
  margin-bottom: 3px;
}

.emoji-menu .item:hover {
  cursor: pointer;
  background: #f3f3f3;
  border-radius: 4px;
}

body.night-mode .emoji-menu .item:hover {
  background: var(--card-dark-divider);
}

.emoji-menu .item>img {
  width: 65px;
  height: 65px;
}

.emoji-menu .nav-tabs {
  border-top: 1px #f3f3f3 solid;
  border-bottom: 0;
  margin: 0px -2px 0px -6px;
  padding: 0 20px;
}

body.night-mode .emoji-menu .nav-tabs {
  border-color: var(--card-dark-divider);
}

.emoji-menu .nav-tabs>li>.nav-link {
  color: #555;
  padding: 14px 18px;
  margin: 0;
  border: 0;
  border-radius: 0;
  border-top: 2px solid transparent;
}

body.night-mode .emoji-menu .nav-tabs>li>.nav-link {
  color: var(--body-color-dark);
}

.emoji-menu .nav-tabs>li>.nav-link:hover {
  background: transparent;
  color: var(--link-color);
  border-color: transparent;
  border-bottom: 0;
}

.emoji-menu .nav-tabs>li>.nav-link.active,
.emoji-menu .nav-tabs>li>.nav-link.active:hover,
.emoji-menu .nav-tabs>li>.nav-link.active:focus {
  border: 0;
  color: var(--link-color);
  background: transparent;
  border-top: 2px solid var(--link-color);
  margin-top: -1px;
}

/* -- */

/* REACTIONS */
/* ------------------------------- */



/* -- */

.reactions-wrapper {
  position: relative;
}

/* reaction-btn */
.reaction-btn {
  display: flex;
  align-items: center;
  justify-content: center;
}

.reaction-btn .reaction-btn-icon {
  display: inline-block;
}

.reaction-btn .reaction-btn-icon .far {
  font-size: 20px;
  color: #000
}

.post-body .reaction-btn .reaction-btn-name {
	display: none;
}

/* -- */

.reactions-container {
	display: none;
	position: fixed;
	background: #fff;
	box-shadow: rgba(101, 119, 134, 0.2) 0 0 15px, rgba(101, 119, 134, 0.15) 0 0 3px 1px;
	border-radius: 24px;
	z-index: 4;
}
body.night-mode .reactions-container {
	background: #2e2e2e;
}
.reactions_item {
	width: 48px;
	height: 48px;
	float: left;
	transform: scale(1);
	transition: transform 0.2s ease;
	animation-fill-mode: both;
	animation: slideUp cubic-bezier(0.49, 0, 0.46, 1);
}
.reactions_item .emoji {
    transform: scale(0.75);
}
.reactions_item.duration-1 {
  -webkit-animation-duration: 0.1s;
  animation-duration: 0.1s;
}

.reactions_item.duration-2 {
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
}

.reactions_item.duration-3 {
  -webkit-animation-duration: 0.3s;
  animation-duration: 0.3s;
}

.reactions_item.duration-4 {
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
}

.reactions_item.duration-5 {
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
}

.reactions_item.duration-6 {
  -webkit-animation-duration: 0.6s;
  animation-duration: 0.6s;
}

.reactions_item.duration-7 {
  -webkit-animation-duration: 0.7s;
  animation-duration: 0.7s;
}

.reactions_item:hover {
  transform: scale(1.25) translate(0, -3px);
}

.reactions_item:after {
  content: attr(data-title);
  position: absolute;
  background-color: rgba(0, 0, 0, 0.75);
  border-radius: 16px;
  box-sizing: border-box;
  color: #fff;
  display: inline-block;
  font-size: 10px;
  font-weight: bold;
  font-style: normal;
  line-height: 16px;
  opacity: 0;
  overflow: hidden;
  padding: 0 8px;
  text-decoration: none;
  text-overflow: ellipsis;
  transition: opacity 50ms ease;
  -webkit-user-select: none;
  text-transform: capitalize;
  visibility: hidden;
  top: 0;
  left: 50%;
  -webkit-transform: translate(-50%, -100%);
  transform: translate(-50%, -100%);word-break: normal;
}

.reactions_item:hover:after {
  opacity: 1;
  visibility: visible;
}

@-webkit-keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }

  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

@keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }

  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

/* -- Reaction Emoji */
.inline-emoji {
	width: 20px;
	height: 20px;line-height: 1;
}
.inline-emoji .emoji {
	line-height: 1;
}

.no_animation *,
.no_animation *:after,
.no_animation *:before {
  animation: none !important;
}

.emoji {
  display: inline-block;
  border-radius: 50%;
  position: relative;
}

.emoji img, .comment-actions .emoji img, .x_user_info .emoji > img:not(.attch_img) {
  width: 100%;
  height: 100%;
}

.reaction img {
  animation-fill-mode: both;
  animation-duration: 1.3s;
  animation-iteration-count: infinite;
}


.reaction.reaction-1 img {
  animation-name: bounce;
  transform-origin: center bottom;
}

.reaction.reaction-2 img {
  animation-name: heartBeat;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-3 img {
  animation-name: swing;
  transform-origin: top center;
}

.reaction.reaction-4 img {
  animation-name: pulse;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-5 img {
  animation-name: fadeInDown;
}

.reaction.reaction-6 img {
  animation-name: swing;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-7 img {
  animation-name: headShake;
  animation-timing-function: ease-in-out;
}


@keyframes bounce {

  from,
  20%,
  53%,
  to {
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translate3d(0, 0, 0);
  }

  40%,
  43% {
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transform: translate3d(0, -2px, 0) scaleY(1.1);
  }

  70% {
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transform: translate3d(0, -1px, 0) scaleY(1.05);
  }

  80% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translate3d(0, 0, 0) scaleY(0.95);
  }

  90% {
    transform: translate3d(0, -1px, 0) scaleY(1.02);
  }
}

@keyframes heartBeat {
  0% {
    transform: scale(1);
  }

  14% {
    transform: scale(1.05);
  }

  28% {
    transform: scale(1);
  }

  42% {
    transform: scale(1.05);
  }

  70% {
    transform: scale(1);
  }
}

@keyframes swing {
  20% {
    transform: rotate3d(0, 0, 1, 2deg);
  }

  40% {
    transform: rotate3d(0, 0, 1, -2deg);
  }

  60% {
    transform: rotate3d(0, 0, 1, 0deg);
  }

  80% {
    transform: rotate3d(0, 0, 1, -2deg);
  }

  to {
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes pulse {
  from {
    transform: scale3d(1, 1, 1);
  }

  50% {
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    transform: scale3d(1, 1, 1);
  }
}

@keyframes fadeInDown {
  from {
    opacity: 1;
    transform: translate3d(0, -5%, 0);
  }

  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

@keyframes headShake {
  0% {
    transform: translateX(0);
  }

  6.5% {
    transform: translateX(-2px) rotateY(-9deg);
  }

  18.5% {
    transform: translateX(1px) rotateY(7deg);
  }

  31.5% {
    transform: translateX(-1px) rotateY(-5deg);
  }

  43.5% {
    transform: translateX(1px) rotateY(3deg);
  }

  50% {
    transform: translateX(0);
  }
}

/* -- */

/* RATING */
/* ------------------------------- */

/* star-rating */
.star-rating {
  display: flex;
  justify-content: flex-end;
  flex-direction: row-reverse;
  font-size: 28px;
  color: #999;
}

.star-rating input {
  display: none;
}

.star-rating label {
  margin-left: 5px;
  cursor: pointer;
}

.star-rating label:last-child {
  margin-left: 0;
}

.star-rating>label:hover i {
  color: #FF9800;
}

.star-rating>label:hover~label i {
  color: #FF9800;
}

.star-rating>input:checked~label i {
  color: #FF9800;
}


/* -- */


/* PAGE = [BASIC] */
/* ------------------------------- */

/* page-header */
.page-header {
  background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
  position: relative;
  text-align: center;
  padding: 70px 15px;
  overflow: hidden;
  color: #fff;
  z-index: auto;
}

.page-header.mini {
  padding: 35px 15px;
}

@media (min-width: 768px) {
  .page-header {
    padding: 90px 15px;
  }

  .page-header.mini {
    padding: 45px 15px;
  }
}

.page-header.bank-transfer {
  z-index: 1;
  padding: 20px;
  background-color: #2196f3;
  background: linear-gradient(90deg, #03a9f4 0%, #2196f3 35%, #3f51b5 100%);
}




.page-header .inner {
  z-index: 999;
}

.page-header.bank-transfer .inner {
  border: 6px solid rgba(255, 255, 255, 0.3);
  padding: 20px;
  border-radius: 5px;
}

.page-header.bank-transfer .bank-info-meta {
  font-size: 18px;
}

.page-header.bank-transfer .bank-info-help {
  font-size: 12px;
  color: #eee;
  text-transform: uppercase;
}

/* -- */

/* footer */
.footer {
  border-top: 1px solid #e6ecf5;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-top: 25px;
  margin-bottom: 25px;
}

@media (max-width: 768px) {
  .footer {
    margin-bottom: 85px;
  }
}

body.night-mode .footer {
  border-top: 1px solid var(--card-dark-divider);
}

@media (min-width: 768px) {
  .footer .links {
    text-align: right;
  }
}

/* -- */


/* footer bottom bar */
.footer-bottom-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 999;
  background: #fff;
  border-top: 1px solid #e6ecf5;
  height: 70px;
}

body.night-mode .footer-bottom-bar {
  background: #1c1e21;
  border-top: 1px solid #2c2f33;
}

@media (min-width: 768px) {
  .footer-bottom-bar {
    display: none;
  }
}

/* bottom bar links */
.footer-bottom-bar-links {
  display: flex;
  gap: 10px;
}

.footer-bottom-bar-links>.link {
  flex: 1;
  text-align: center;
  height: 70px;
}

.footer-bottom-bar-links>.link>a {
  position: relative;
  display: block;
  text-align: center;
  padding: 8px 10px 8px 10px;
  margin: 2px 0;
  border-radius: 10px;
  color: #000;
}

.footer-bottom-bar-links>.link>a:hover {
  background-color: rgb(160 160 160 / 10%);
}

body.night-mode .footer-bottom-bar-links>.link>a:hover {
  background-color: rgb(234 234 234 / 10%);
}

.footer-bottom-bar-links .link>a>.title {
  font-size: 12px;
  line-height: 26px;
}

body.night-mode .footer-bottom-bar-links .link>a>.title {
  color: #c1d4e3;
}

.footer-bottom-bar-links>.link.active>a>.title,
body.night-mode .footer-bottom-bar-links>.link.active>a>.title {
  color: var(--link-color);
  font-weight: bold;
}

.footer-bottom-bar-links .dropdown-widget {
  box-shadow: none;
  border-radius: 8px 8px 0 0;
}

.footer-quick-adds {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  padding: 20px;
}

.footer-quick-adds .add-quick-item {
  flex: 1;
  text-align: center;
  background: #f7f7f7;
  padding: 10px;
  border-radius: 12px;
  min-width: 150px;
  color: #000;
  cursor: pointer;
  font-size: 13px;
}

.footer-quick-adds .add-quick-item.full {
  flex-basis: 100%;
}

.footer-quick-adds .add-quick-item:hover {
  background: #f3f6f9;
}

body.night-mode .footer-quick-adds .add-quick-item {
  background: var(--card-dark-hover);
  color: #c1d4e3;
}

body.night-mode .footer-quick-adds .add-quick-item:hover {
  background: var(--card-dark-input);
}

.quick-menu-items {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 15px;
}

.quick-menu-item,
.quick-menu-item-mini {
  flex: 1;
  display: block;
  background: #f7f7f7;
  padding: 20px 15px;
  border-radius: 12px;
  color: #000;
}

body.night-mode .quick-menu-item,
body.night-mode .quick-menu-item-mini {
  background: var(--card-dark-hover);
  color: #c1d4e3;
}

.quick-menu-item-mini {
  min-width: 150px;
  font-size: 13px;
}

/* -- */


/* -- */



/* -- */

/* PAGE = [OAUTH] */
/* ------------------------------- */

/* ouath-card */
.card-ouath-overlay {
  background: #000;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.6;
  transition: opacity 0.5s;
  z-index: 1002;
}

.card-ouath {
  background: #fff;
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  z-index: 1003;
}

/* -- */




/* -- */



/* -- */



/* -- */



/* -- */

/* -- */



/* -- */



/* PAGE = [ADMIN] */
/* ------------------------------- */

/* admin sidebar */
@media (max-width: 767px) {
  .admin-sidebar {
    background: #fff;
    border-radius: 16px;
  }

  body.night-mode .admin-sidebar {
    background: var(--card-dark-color);
  }

}

/* -- */

/* admin-chart */
.admin-chart {
  min-width: 100%;
  height: 400px;
  margin: 0 auto;
  border: 1px solid #e6ecf5;
}

body.night-mode .admin-chart {
  border-color: var(--card-dark-divider);
}

body.night-mode .admin-chart .highcharts-title,
body.night-mode .admin-chart .highcharts-axis>*,
body.night-mode .admin-chart .highcharts-axis-labels>*,
body.night-mode .admin-chart .highcharts-legend-item text {
  color: var(--body-color-dark) !important;
  fill: var(--body-color-dark) !important;
}

/* -- */

/* table-img-thumbnail */
.table-img-thumbnail {
  max-width: 100px;
}

/* -- */

/* change-log-list */
.change-log-list {
  margin-left: 30px;
}

.change-log-list>li {
  margin-left: 30px;
  list-style-type: disc;
}

/* -- */

/* auto-connect-nodes */
.add-auto-connect-node {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 10px;
  font-weight: 600;
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 16px;
  cursor: pointer;
}

.add-auto-connect-node :hover {
  background: #f3f3f3;
}

body.night-mode .add-auto-connect-node {
  background: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .add-auto-connect-node :hover {
  background: var(--card-dark-color);
}

.auto-connect-node {
  margin: 10px 0;
  padding: 20px 30px 0;
  border: 1px solid #ddd;
  border-radius: 16px;
}

body.night-mode .auto-connect-node {
  border-color: var(--card-dark-divider);
}

/* -- */



/* -- */

/* invoice */
.invoice-title h2,
.invoice-title h3 {
  display: inline-block;
}

.table-invoice>tbody>tr>.no-line {
  border-top: none;
}

.table-invoice>thead>tr>.no-line {
  border-bottom: none;
}

.table-invoice>tbody>tr>.thick-line {
  border-top: 2px solid;
}

/* -- */

/* -- */



/* -- */


/* -- */

/* TRANSLATOR */
/* ------------------------------- */

.translator-language {
  display: block;
  font-size: 15px;
  line-height: 100%;
  padding: 15px;
  margin-bottom: 5px;
  border: 1px solid #eee;
  border-radius: 1px;
}

.translator-language:hover {
  background: #f3f3f3;
  cursor: pointer;
}

/* -- */

/* BIG ICON */
/* ------------------------------- */

.big-icon {
  width: 80px;
  height: 80px;
  border: 4px solid rgba(128, 128, 128, 0.15);
  border-radius: 50%;
  margin: 20px auto;
  position: relative;
}

.big-icon.success {
  border-color: rgba(76, 174, 76, 0.15);
}

.big-icon.error {
  border-color: rgba(217, 83, 79, 0.15);
}

.big-icon.warning {
  border-color: rgba(255, 153, 0, 0.21);
}

.big-icon .fa {
  padding-top: 17px;
  padding-left: 3px;
}

.big-icon.success .fa {
  color: #4cae4c;
}

.big-icon.error .fa {
  color: #d9534f;
}

.big-icon.warning .fa {
  color: #d9954f;
}

/* -- */

/* LOADER */
/* ------------------------------- */

.x-loader {
  text-align: center;
}

.loader {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 5px 0;
}

.loader:after {
  display: block;
  position: relative;
  width: 20px;
  height: 20px;
  -webkit-animation: rotate 0.6s linear infinite;
  -moz-animation: rotate 0.6s linear infinite;
  -ms-animation: rotate 0.6s linear infinite;
  -o-animation: rotate 0.6s linear infinite;
  animation: rotate 0.6s linear infinite;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  border-top: 1px solid #545a6a;
  border-bottom: 1px solid #d4d4db;
  border-left: 1px solid #545a6a;
  border-right: 1px solid #d4d4db;
  content: "";
  opacity: 0.5;
}

.loader.loader_large:after {
  width: 40px;
  height: 40px;
}

.loader.loader_medium:after {
  width: 25px;
  height: 25px;
}

.loader.loader_small:after {
  width: 10px;
  height: 10px;
}

.loader.loader_green:after {
  opacity: 1;
  border-top: 1px solid #42a26e;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #42a26e;
  border-right: 1px solid #fff;
}

@keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-webkit-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-moz-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-o-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

/* -- */

/* POST LOADER */
/* ------------------------------- */
@keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-o-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-ms-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-moz-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-webkit-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

.panel-effect {
  position: relative;
  background: #f6f7f8 no-repeat 800px 104px;
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y2ZjdmOCIvPjxzdG9wIG9mZnNldD0iMjAlIiBzdG9wLWNvbG9yPSIjZWRlZWYxIi8+PHN0b3Agb2Zmc2V0PSI0MCUiIHN0b3AtY29sb3I9IiNmNmY3ZjgiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNmY3ZjgiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=");
  background-size: 100%;
  background-image: -webkit-gradient(linear,
      0% 50%,
      100% 50%,
      color-stop(0%, #f6f7f8),
      color-stop(20%, #edeef1),
      color-stop(40%, #f6f7f8),
      color-stop(100%, #f6f7f8));
  background-image: -moz-linear-gradient(left,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  background-image: -webkit-linear-gradient(left,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  background-image: linear-gradient(to right,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  height: 104px;
  -moz-animation: anim 1s forwards infinite linear;
  -webkit-animation: anim 1s forwards infinite linear;
  animation: anim 1s forwards infinite linear;
}

.fake-effect {
  position: absolute;
  background: #fff;
  right: 0;
  left: 0;
  height: 6px;
}

.fe-0 {
  height: 40px;
  left: 40px;
  width: 8px;
}

.fe-1 {
  height: 8px;
  left: 48px;
  top: 0;
  right: 0;
}

.fe-2 {
  left: 136px;
  top: 8px;
}

.fe-3 {
  height: 12px;
  left: 48px;
  top: 14px;
}

.fe-4 {
  left: 100px;
  top: 26px;
}

.fe-5 {
  height: 10px;
  left: 48px;
  top: 32px;
}

.fe-6 {
  height: 20px;
  top: 40px;
}

.fe-7 {
  left: 410px;
  top: 60px;
}

.fe-8 {
  height: 13px;
  top: 66px;
}

.fe-9 {
  left: 440px;
  top: 79px;
}

.fe-10 {
  height: 13px;
  top: 85px;
}

.fe-11 {
  left: 178px;
  top: 98px;
}

/* -- */



/* -- */

/* CUSTOM RADIO/CHECKBOX TEMPLATES */
/* ------------------------------- */

.button-label {
  display: inline-block;
  padding: 1em 2em;
  margin: 0.5em;
  cursor: pointer;
  border-radius: 6px;
  transition: 0.3s;
  box-shadow: 0 0 0 1px var(--border-divider-2);
  min-width: 115px;
}

.button-label.small {
  min-width: 80px;
}

.button-label-image {
  display: block;
  padding: 5px;
  margin: 0px;
  width: 100%;
  height: 100%;
  box-shadow: none;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 2px;
}

.button-label .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f3f3f3;
  height: 60px;
  width: 60px;
  margin: 0 auto;
  border-radius: 50%;
  transition: all 0.2s;
  opacity: 0.75;
  filter: grayscale(1);
}

body.night-mode .button-label .icon {
  background: var(--card-dark-input);
}

.button-label.small .icon {
  width: 30px;
  height: 30px;
}

.button-label .icon img {
  width: 32px;
  height: 32px;
}

.button-label-image img {
  width: 100%;
  height: 100%;
  border-radius: 2px;
}

.button-label .title {
  font-weight: 500;
  font-size: 14px;
  margin-top: 15px;
  text-transform: capitalize;
  text-align: center;
}

.button-label:hover,
.button-label-image:hover {
  box-shadow: 0px 0px 0px 2px var(--main-link);
}

.input-label:checked+.button-label,
.input-label:checked+.button-label-image {
  box-shadow: 0px 0px 0px 2px var(--main-link);
}

.input-label:checked+.button-label .icon {
  filter: grayscale(0);
  opacity: 1;
}
.input-label:checked+.button-label > svg {
	color: var(--main-link);
}

/* -- */


/* EXTRAS */
/* ------------------------------- */

/* == margins == */
.ml0 {
  margin-left: 0 !important;
}

.mr0 {
  margin-right: 0 !important;
}

.mlr0 {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.mt0 {
  margin-top: 0 !important;
}

.mb0 {
  margin-bottom: 0 !important;
}

.mtb0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.ml5 {
  margin-left: 5px !important;
}

.mr5 {
  margin-right: 5px !important;
}

.mlr5 {
  margin-left: 5px !important;
  margin-right: 5px !important;
}

.mt5 {
  margin-top: 5px !important;
}

.mb5 {
  margin-bottom: 5px !important;
}

.mtb5 {
  margin-top: 5px !important;
  margin-bottom: 5px !important;
}

.ml10 {
  margin-left: 10px !important;
}

.mr10 {
  margin-right: 10px !important;
}

.mlr10 {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.mt10 {
  margin-top: 10px !important;
}

.mb10 {
  margin-bottom: 10px !important;
}

.mtb10 {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.ml15 {
  margin-left: 15px !important;
}

.mr15 {
  margin-right: 15px !important;
}

.mlr15 {
  margin-left: 15px !important;
  margin-right: 15px !important;
}

.mt15 {
  margin-top: 15px !important;
}

.mb15 {
  margin-bottom: 15px !important;
}

.mtb15 {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.ml20 {
  margin-left: 20px !important;
}

.mr20 {
  margin-right: 20px !important;
}

.mlr20 {
  margin-left: 20px !important;
  margin-right: 20px !important;
}

.mt20 {
  margin-top: 20px !important;
}

.mb20 {
  margin-bottom: 20px !important;
}

.mtb20 {
  margin-top: 20px !important;
  margin-bottom: 20px !important;
}

.ml25 {
  margin-left: 25px !important;
}

.mr25 {
  margin-right: 25px !important;
}

.mlr25 {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.mt25 {
  margin-top: 25px !important;
}

.mb25 {
  margin-bottom: 25px !important;
}

.mtb25 {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.ml30 {
  margin-left: 30px !important;
}

.mr30 {
  margin-right: 30px !important;
}

.mlr30 {
  margin-left: 30px !important;
  margin-right: 30px !important;
}

.mt30 {
  margin-top: 30px !important;
}

.mb30 {
  margin-bottom: 30px !important;
}

.mtb30 {
  margin-top: 30px !important;
  margin-bottom: 30px !important;
}

/* -- */

/* == paddings == */
.pl0 {
  padding-left: 0px !important;
}

.pr0 {
  padding-right: 0px !important;
}

.plr0 {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

.pt0 {
  padding-top: 0px !important;
}

.pb0 {
  padding-bottom: 0px !important;
}

.ptb0 {
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}

.pl5 {
  padding-left: 5px !important;
}

.pr5 {
  padding-right: 5px !important;
}

.plr5 {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.pt5 {
  padding-top: 5px !important;
}

.pb5 {
  padding-bottom: 5px !important;
}

.ptb5 {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}

.pl10 {
  padding-left: 10px !important;
}

.pr10 {
  padding-right: 10px !important;
}

.plr10 {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.pt10 {
  padding-top: 10px !important;
}

.pb10 {
  padding-bottom: 10px !important;
}

.ptb10 {
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}

.pl15 {
  padding-left: 15px !important;
}

.pr15 {
  padding-right: 15px !important;
}

.plr15 {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.pt15 {
  padding-top: 15px !important;
}

.pb15 {
  padding-bottom: 15px !important;
}

.ptb15 {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.pl20 {
  padding-left: 20px !important;
}

.pr20 {
  padding-right: 20px !important;
}

.plr20 {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.pt20 {
  padding-top: 20px !important;
}

.pb20 {
  padding-bottom: 20px !important;
}

.ptb20 {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}

.pl25 {
  padding-left: 25px !important;
}

.pr25 {
  padding-right: 25px !important;
}

.plr25 {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.pt25 {
  padding-top: 25px !important;
}

.pb25 {
  padding-bottom: 25px !important;
}

.ptb25 {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.pl30 {
  padding-left: 30px !important;
}

.pr30 {
  padding-right: 30px !important;
}

.plr30 {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

.pt30 {
  padding-top: 30px !important;
}

.pb30 {
  padding-bottom: 30px !important;
}

.ptb30 {
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

/* -- */

/* == text == */
.text-link {
  color: var(--link-color);
}

.text-link:hover {
  cursor: pointer;
  text-decoration: underline;
}

.text-link-no-underline {
  color: var(--link-color);
}

.text-underline:hover {
  cursor: pointer;
  text-decoration: underline;
}

.text-no-underline:hover {
  text-decoration: none !important;
}

.text-active {
  color: #1e8bd2 !important;
}

/* text sizes */
.text-sm {
  font-size: 0.8em;
  line-height: 1;
}

.text-md {
  font-size: 1.1em;
  line-height: 1.6;
}

.text-lg {
  font-size: 1.2em;
  line-height: 1.7;
}

.text-xlg {
  font-size: 1.3em;
  line-height: 1.8em;
}

.text-xxlg {
  font-size: 2.3em;
  font-weight: 700;
}

/* -- */



.red {
  color: red;
}

.green {
  color: green;
}

.yellow {
  color: #ebba16;
}

/* -- */

/* == user-select == */
.unselectable {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* -- */

/* == cursor == */
.pointer {
  cursor: pointer;
}

/* -- */

/* == vertical-align == */
.vertical-align-top {
  vertical-align: top;
}

.vertical-align-middle {
  vertical-align: middle;
}

.vertical-align-bottom {
  vertical-align: bottom;
}

/* -- */

/* == x == */
.x-notifier {
  background: #ffffcd !important;
}
body.night-mode .x-notifier {
    background: #4a4a28 !important;
}
.x-hidden {
  display: none;
}

.x-blured {
  overflow: hidden;
}

.x-blured .js_lightbox,
.x-blured .album-cover {
  filter: blur(10px);
}

/* -- */



@media (min-width: 1100px) {
.logo-wrapper .logo img {
    max-height: 36px;
}
}

@media (max-width: 1440px) {
.container {
    max-width: 1081px;
}
.x-sidebar-width, .x-sidebar-fixed {
	width: 81px;
}
.x-content-width {
    width: calc(100% - 81px);
}
.search-wrapper-prnt {
    padding-left: 81px;
}
.logo-wrapper, .x_side_links {
	text-align: center;
}
.logo-wrapper img.x_logo_pc, body.night-mode .logo-wrapper img.x_logo_pc, .x_side_links>div span.text, .x-sidebar .x_user_info img.rounded-circle+.mw-0.mx-2, .x-sidebar .x_user_info > svg, .x_side_create>.btn > span {
	display: none;
}
.x_side_create {
    max-width: 52px;
	margin-left: auto;
	margin-right: auto;
}
.x_side_create>.btn {
	height: 52px;padding: 0;
}
.x_logo_mobi, .x_side_create>.btn > svg {
	display: block;
}
.x_side_links>div span.counter {
    transform: none;
    margin: 0;
	white-space: nowrap;
}
}

@media (max-width: 1100px) {
.reel-comments-wrapper {
	max-width: none;
	left: 0;
	bottom: 0;
	right: 0;
	border-radius: 16px 16px 0 0;
}
}

@media (max-width: 992px) {
.x_content_row>.col-lg-8 {
    width: 58%;
}
.x_content_row>.col-lg-4 {
	width: 42%;
}
.search-wrapper {
    width: calc(42% - 26px);
}
.reel-action-btn {
    color: #fff;
    text-shadow: 1px 1px 1px rgb(0 0 0 / 30%);
}
.x_live_show_modal {
	height: 85vh;
}
}

@media (max-width: 930px) {
.x_content_row>.col-lg-8, .x_content_row>.col-lg-4, .search-wrapper {
    width: 100%;
}
.x_content_row>.col-lg-8, .x_content_row>.col-lg-12 {
    min-height: calc(100dvh - 54px);
}
.x_content_row>.col-lg-8.order-1 {
	border: 0;
}
.x_content_row>.col-lg-4 {
	padding: 1rem;
}
.x_sidebar_order {
	order: 1 !important;
}
.x_sidebar_order footer {
	display: none;
}
body .search-wrapper-prnt {
	margin: 0;border-right: 1px solid var(--border-divider);
	display: block !important;position: relative;
}
.search-wrapper {
	padding-left: 0.8rem;
    padding-right: 0.8rem;
}
.container {
	max-width: 700px;
}
.no_hide_settings {
	flex-direction: column;
}
.x_menu_sidebar:not(.no_hide) {
	display: none !important;
}
.x_menu_sidebar, .x_menu_sidebar_content {
    min-height: calc(100dvh - 54px);
	width: 100%;
}
body.show_menu_sidebar .x_menu_sidebar {
	display: flex !important;
	flex-direction: column
}
.no_hide_settings .x_menu_sidebar, .no_hide_settings .x_menu_sidebar_content {
	min-height: auto;
	border: 0;
}
.x_menu_sidebar_back {
	display: block;
}
.profile-cover-wrapper {
    height: 240px;
    aspect-ratio: auto;
}
.profile-buttons-wrapper {
	position: relative !important;
	right: auto;
	top: auto;
	left: auto;
	margin-top: 20px;
}
.x_message_empty_height {
    max-height: calc(100dvh - 110px);
}
}

@media (max-width: 690px) {
.x-sidebar-width, .x-sidebar-fixed {
	width: 73px;
}
.x-content-width {
    width: calc(100% - 73px);
}
.search-wrapper-prnt {
    padding-left: 73px;
}
.x-sidebar {
    padding-left: 0 !important;
}
.table-responsive {
    white-space: nowrap;
}
}

@media (max-width: 576px) {
.modal.fade:before {
	display: none;
}
.modal-dialog {
	margin: 0;
	display: flex !important;
	height: 100%;
	align-items: flex-end;
}
.modal-content {
    border-radius: 1.8rem 1.8rem 0 0;
    flex: 0 0 auto;
    margin-top: auto;
}
}

@media (max-width: 520px) {
.main-wrapper {
    padding: 50px 0 120px;
}
.container {
	padding: 0;
}
.x_content_row>.col-lg-8, .x_content_row>.col-lg-12 {
    min-height: calc(100dvh - 99px);
	border: 0;
}
body .search-wrapper-prnt {
	padding: 8px 10px;
	border: 0;
	display: flex !important;
	gap: 10px;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	z-index: 1002;transition: all 0.2s;
}
.search-wrapper {
	padding: 0;
	width: 0;
	transition: width 0.15s;
	visibility: hidden;
	opacity: 0;
}
body.search_open .search-wrapper {
	width: 100%;
	visibility: visible;
	opacity: 1;
}
.search-wrapper .form-control {
    height: 34px;
	text-indent: 9px;
}
.search-wrapper .search-input-icon {
    margin: 9px;
    width: 16px;
    height: auto;
}
.x_mobi_search {
	display: flex !important;
}
body.search_open .x_mobi_search .srch_ico {
	display: none;
}
body.search_open .x_mobi_search .srch_close_ico {
	display: block !important;
}
body.search_open .search-wrapper .dropdown-search {
	position: fixed;
	top: 50px;
	left: 0;
	right: 0;
	bottom: 0;
	border-radius: 0;
	box-shadow: none;
}
body.search_open .search-wrapper .dropdown-search .dropdown-widget-body {
	height: calc(100% - 88px);
}
body.search_open .search-wrapper .dropdown-search .dropdown-widget-body .js_scroller {
	height: 100% !important;
}
.x-sidebar-width, .x-sidebar-fixed {
	width: 100%;
}
.x-sidebar-fixed {
	height: calc(3rem + 1px) !important;
	top: auto;
	bottom: 0;
}
.x-sidebar {
	padding: 0 !important;
	overflow: hidden;
}
.logo-wrapper {
	position: fixed !important;
    top: 0;
    left: 0;
    right: 0;
	display: flex;
    align-items: center;
    justify-content: center;
	padding: 10px;
	background: var(--header-background);
	transition: all 0.2s;
}
.logo-wrapper .logo {
    padding: 0;
}
.logo-wrapper img.logo-light, body.night-mode .logo-wrapper img.logo-dark {
	display: block;
}
.logo-wrapper img.x_logo_mobi {
	display: none;
}
.x_sidebar_links {
	display: flex;
	align-items: center;
	background: var(--header-background);
	border-top: 1px solid var(--border-divider);
	justify-content: space-between;
	padding: 0 0.6rem;
}
.x_side_links>div {
    padding: 7.5px;
}
.x_side_links>div svg {
	width: 25px;
	height: auto;
}
.x_hide_mobi_side_link {
	display: none !important;
}
.x_show_market_link, .x_show_pages_link, .x_show_groups_link, .x_show_saved_link, .x_show_pro_link {
	display: flex !important;
}
.x_side_create {
	position: fixed;
	right: 1rem;
	bottom: 4rem;
	width: 52px;
	margin: 0 !important;
}
.x_side_create>.btn {
	box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px;
}
.x_user_mobi_menu {
	padding: 0 !important;
	position: fixed;
	top: 8px;
	left: 10px;
	transition: all 0.2s;
}
.x_user_mobi_menu > .dropup {
	margin: 0 !important;
}
.x_user_mobi_menu .x_user_info {
	padding: 0;
}
.x_user_mobi_menu img:not(.attch_img) {
	width: 34px;
	height: 34px;
}
body.user_menu_open, body.search_open, body.more_menu_open {
	overflow: hidden;
}
body.user_menu_open .x_user_menu_backdrop {
	display: block !important;
	z-index: 1001;
}
.x_mobi_user_menu {
	position: fixed !important;
	transform: translateX(-110%) !important;
	border-radius: 0;
	inset: 0 auto 0 0 !important;
	transition: all 0.2s;
	display: block;
}
body.user_menu_open .x_mobi_user_menu {
	transform: translateX(0) !important;
}
.x_side_more_menu {
	transform: none !important;
	border-radius: 0;
	inset: 0 0 48px 0 !important;
	position: fixed !important;
	max-height: none;
	box-shadow: none;
}
.x-content-width {
	width: 100%;
}
.x_top_posts {
    top: 50px;
	transition: all 0.2s;
}
.x_top_posts:before {
    opacity: 1;
}
.x_page_scroll .scroll-btns {
	display: none !important;
}
.profile-cover-wrapper {
	height: 180px;
}
.blog-content h3 {
    max-height: none;
}
.reel-comments-wrapper {
	box-shadow: rgba(0, 0, 0, 0.1) 0px -10px 15px -3px, rgba(0, 0, 0, 0.1) 0px -4px 6px -4px;
}
.reel-comments-wrapper .lightbox-post {
    height: calc(100dvh - 200px);
}
.reel-actions .action-btn {
    opacity: 1;
}
.reel-actions .action-btn .reactions-container {
	top: auto !important;
}
.reactions-container {
	width: 192px;
	border-radius: 20px;
}
body.scroll_down .logo-wrapper, body.scroll_down .search-wrapper-prnt, body.scroll_down .x_user_mobi_menu {
	transform: translateY(-52px);
}
body.scroll_down .x_top_posts {
	top: 0;
}
.x_message_empty_height {
    max-height: calc(100dvh - 56px);
}
.emoji-menu .item>img {
    width: calc(100vw / 5 - 13px);
    height: auto;
    aspect-ratio: 1;
}
.x_cf_p {
	padding: 0;
}
.pg_1x img {
    max-height: 350px;
    width: 100%;
}
.post-media-image img, .post-media-image .image {
    max-height: 350px;
}
}

@media (max-width: 390px) {
.publisher .emoji-menu {
    right: auto;
    left: auto;
}
}

@media (min-width: 520px) and (max-height: 892px) {
.x_hide_market_link {
	display: none !important;
}
.x_show_market_link {
	display: flex !important;
}
}

@media (min-width: 520px) and (max-height: 835px) {
.x_hide_pages_link {
	display: none !important;
}
.x_show_pages_link {
	display: flex !important;
}
}

@media (min-width: 520px) and (max-height: 770px) {
.x_hide_groups_link {
	display: none !important;
}
.x_show_groups_link {
	display: flex !important;
}
}

@media (min-width: 520px) and (max-height: 710px) {
.x_hide_saved_link {
	display: none !important;
}
.x_show_saved_link {
	display: flex !important;
}
.x_side_more_menu {
    max-height: 410px;
}
}

@media (min-width: 520px) and (max-height: 655px) {
.x_hide_pro_link {
	display: none !important;
}
.x_show_pro_link {
	display: flex !important;
}
.x_side_more_menu {
    max-height: 350px;
}
}<?php }
}

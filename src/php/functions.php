<?php

// Отключение ревизий

function revisions_to_keep($revisions) {
	return 0;
}
add_filter('wp_revisions_to_keep', 'revisions_to_keep');

// Создаем собственные пункты меню

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Меню',
		'menu_title' => 'Меню',
		'menu_slug' => 'menu',
		'capability' => 'edit_posts',
		'icon_url' => 'dashicons-networking',
		'redirect' => false,
	));
	acf_add_options_page(array(
		'page_title' => 'Контакты',
		'menu_title' => 'Контакты',
		'menu_slug' => 'contacts',
		'capability' => 'edit_posts',
		'icon_url' => 'dashicons-phone',
		'redirect' => false,
	));
	acf_add_options_page(array(
		'page_title' => 'Настройки',
		'menu_title' => 'Настройки',
		'menu_slug' => 'settings',
		'capability' => 'edit_posts',
		'icon_url' => 'dashicons-admin-generic',
		'redirect' => false,
	));
}

// Переименование пунктов меню

function rename_menu() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Подъемники';
	$submenu['edit.php'][5][0] = 'Все модели';
	$submenu['edit.php'][10][0] = 'Добавить новый';
}
add_action('admin_menu', 'rename_menu');

// Скрываем пункты в верхнем меню

function remove_topbar_items() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo'); //Логотип
	$wp_admin_bar->remove_menu('comments'); //Коментарии
	$wp_admin_bar->remove_menu('updates'); //Обновления
	$wp_admin_bar->remove_menu('new-content'); //Добавить
}
add_action('wp_before_admin_bar_render', 'remove_topbar_items');
// Скрываем пункты в боковом меню
function remove_menu_items() {
	remove_menu_page('index.php'); // Консоль
	remove_menu_page('edit-comments.php'); // Комментарии
	//remove_menu_page('themes.php'); // Внешний вид
	//remove_menu_page('plugins.php'); // Плагины
	remove_menu_page('upload.php'); // Медиафайлы
	remove_menu_page('tools.php'); // Инструменты
	remove_menu_page('users.php'); // Пользователи
	//remove_menu_page('options-general.php'); // Настройки
	remove_menu_page('separator1'); // Первый разделитель
	remove_menu_page('separator2'); // Второй разделитель
	remove_menu_page('separator-last'); // Последний разделитель
	//remove_menu_page('edit.php?post_type=acf-field-group'); // Группы полей ACF
}
add_action('admin_menu', 'remove_menu_items');
// Скрываем пункты подменю
function remove_submenu_items() {
	remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag'); // Записи > Метки
}
add_action('admin_menu', 'remove_submenu_items');
// Скрываем контекстную справку
function remove_contextual_help() {
	global $current_screen;
	$current_screen->remove_help_tabs();
}
add_filter('contextual_help_list','remove_contextual_help');
// Скрываем копирайт Wordpress
function remove_footer_admin() {
	return false;
}
add_filter('admin_footer_text', 'remove_footer_admin');
// Скрываем версию Wordpress
function remove_footer_version ($default) {
	return false;
}
add_filter ('update_footer', 'remove_footer_version', 999);
// Скрываем уведомления о новой версии Wordpress
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}
// Скрываем логотип при входе
function hide_login_logo() {
	echo '<style type="text/css">h1 a {display:none !important;}</style>';
}
add_action('login_head', 'hide_login_logo');
// Перенаправление при входе
function redirect_admin_page() {
	return home_url('/wp-admin/edit.php?post_type=page');
}
add_filter('login_redirect', 'redirect_admin_page');
?>

<?php
add_action('init','register_nav_menus_on_init');

function register_nav_menus_on_init() {
	register_nav_menus(array(
		'top-pages-menu' => 'Menu > Topo da página',
		'top-cat-menu' => 'Menu > Categorias',
		'footer-link-menu' => 'Menu > Links no rodapé'
	));
}
?>
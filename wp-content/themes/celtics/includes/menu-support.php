<?php
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dl-submenu\">\n";
  }
}
/*
 * Add menu
 */
register_nav_menu( 'primary', 'Menu principal' );



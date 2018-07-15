<?php

function change_login_logo() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/assets/css/admin.css">';
}

add_action('login_head', 'change_login_logo');
add_action( 'admin_head', 'change_login_logo' );

?>

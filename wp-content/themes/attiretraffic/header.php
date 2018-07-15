<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="container clearfix">
			<h1 class="logo-container pull-left">
				<a href="/" class="logo disp-b"></a>
			</h1>
			<div class="searchbox pull-left">
			    <form role="search" class="search-form" method="get" id="search-form" action="">
			        <input type="text" class="search-txt" value="" name="s" id="search" placeholder="What can we help you find ?" autocomplete="off">
			        <input type="submit" id="search-submit" value="" class="search-submit">
			        <input type="hidden" name="post_type" value="post">
			    </form>
			</div>
			<div class="header-social">
                <a href="https://www.facebook.com/Searchinsider-1736933436612229/" target="_blank" class="social h-fb"></a>
                <a href="https://twitter.com/_SearchInsider" target="_blank" class="social h-tweet"></a>
            </div>
		</div>
	</header>
	<nav class="header-menu">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>

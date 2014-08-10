<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container">

<img src="<?=get_template_directory_uri();?>/images/libertine_letter_graphic.png">

<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
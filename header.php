<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Load our Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- Load fontawesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>

    <nav class="secondaryNav flex">
      <ul class="options flex">
        <li>
          <a href="#">EN</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-usd"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-search"></i></a>
        </li>
      </ul> <!-- END OF OPTIONS -->
      <ul class="login flex">
        <?php wp_nav_menu( array('container' => false, 'theme_location' => 'secondary', 'items_wrap' => '%3$s' ) ); ?>
      </ul>
    </nav> <!-- END OF SECONDARYNAV -->

    <nav class="primaryNav container flex">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delphinusLogo.png" alt="" width="" height="" />
      <ul class="homeNavBar flex">
        <?php wp_nav_menu( array('container' => false, 'theme_location' => 'primary', 'items_wrap' => '%3$s' ) ); ?>
      </ul>
    </nav> <!-- END OF PRIMARYNAV -->

</header><!--/.header-->









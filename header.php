<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css">
  <?php wp_head(); ?>
  <?php include "svg.php";  ?>
  <?php include "funcoesSalt.php";  ?>

</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <?php if(!is_front_page()){ ?>
  <style>
  .webp .headerinterno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/headerinterno@2x.webp')
  }

  .no-webp .headerinterno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/headerinterno@2x.jpg')
  }

  @media screen and(max-width: 650px) {
    .webp .headerinterno {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/headerinterno.webp')
    }

    .no-webp .headerinterno {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/headerinterno.jpg')
    }
  }
  </style>

  <div class="headerinterno">
    <h1>
      <?php
        global $post;
        if ( is_page() && $post->post_parent ) {
          $parent_title = get_the_title($post->post_parent);
          echo $parent_title;
        } else {
          the_title();
        }
			?>
    </h1>
  </div>

  <? } ?>



  <header class="header">

    <a href="<?=site_url()?>/">
      <img src="<?=get_template_directory_URI()?>/img/src/logo.png" alt="Logo">
    </a>
    <div class="menu-wrapper">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>

      <svg width="32" height="32" viewBox="0 0 32 32">
        <use xlink:href="#instagram"></use>
      </svg>

      <a href="" target="_blank" class="header-telefone">31 3333-3333</a>
    </div>
  </header>
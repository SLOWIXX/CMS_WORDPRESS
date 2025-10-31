<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="clean-header">
  <div class="clean-header__inner">
    <div class="clean-header__logo">
      <img src="" alt="DNK Logo">
    </div>

    <nav class="clean-header__nav">
      <ul>
        <li><a href="#">Everything</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Accessories</a></li>
      </ul>
    </nav>

    <div class="clean-header__actions">
      <button class="clean-header__cta">Contact Us</button>
    </div>
  </div>
</header>


<main id="content" class="site-content">
  <div class="ast-container">

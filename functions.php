<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [ 'astra-theme-css' ],
        wp_get_theme()->get( 'Version' )
    );
}, 10 );

add_action( 'wp', function () {
    remove_all_actions( 'astra_footer' );

    add_action( 'astra_footer', 'astra_child_footer_markup' );

    add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
});

} );

function astra_child_footer_markup() { ?>
<footer class="astra-child-footer" role="contentinfo">
    <div class="footer-inner">
      <div class="footer-col about">
        <h2 class="footer-logo">DNK</h2>
        <p class="footer-text">
          A brand store is a physical retail establishment that primarily focuses
          on selling products from a specific brand or a curated selection of brands.
        </p>
      </div>

      <div class="footer-col links">
        <h4>Quick Link</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Everything</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col faq">
        <h4>FAQ</h4>
        <ul>
          <li><a href="#">Shipping and Delivery</a></li>
          <li><a href="#">Returns and Exchanges</a></li>
          <li><a href="#">Size Guides</a></li>
          <li><a href="#">Payment Methods</a></li>
        </ul>
      </div>

      <div class="footer-col contact">
        <h4>Get in Touch</h4>
        <ul>
          <li>Bundesstra 123, 456<br>Hamburg, Germany.</li>
          <li>Call: +49-1234-56-7</li>
          <li>mail@example.com</li>
        </ul>
      </div>
    </div>




    <div class="footer-bottom">
      <p>Copyright © <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
      </div>
    </div>
  </footer>
<?php }





// hook

add_action( 'astra_primary_content_top', function() {
    echo '<p class="custom-message-hook">
            éléments ajoutés via hook wp
          </p>';
});

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->

  <footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8">
          <ul class="foot d-none d-md-inline-flex mb-2">
            <li class="pr-4">©2021 NOFUTURA</li>
            <li class="pr-4 d-flex"><img class="pr-2 pb-2 skip-lazy" src="<?php echo get_template_directory_uri(); ?>/img/bell.svg" height="20px" width="20px" alt="Liberty Bell">PHILA. PA</li>
            <li class="pr-4 d-flex"><img class="pr-2 pb-2 skip-lazy" src="<?php echo get_template_directory_uri(); ?>/img/keystone.svg" height="20px" width="20px" alt="Keystone">Born & refined.</li>
          </ul>
      </div>
      <div class="col-12 col-md-4">
        <ul class="socials">
          <li>
            <a href="mailto: pcummmings87@gmail.com">
              <i class="far fa-envelope pr-5 fa-lg"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/nofutura/">
              <i class="fab fa-instagram pr-5 fa-lg"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/nofutura">
              <i class="fab fa-twitter pr-5 fa-lg"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1-slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js?cb=1.0.1" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js?cb=1.0.1" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js.map" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aos.js?cb=1.0.1"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js?cb=1.0.1"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ready.js?cb=1.0.1"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://unpkg.com/embeddable-nfts/dist/nft-card.min.js"></script>

</div><!-- #page -->

<?php// wp_footer(); ?>
<script>
    AOS.init();
    </script>
</body>
</html>

<?php
/**
 * Template Name: Front-page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

$args = array(
  'posts_per_page' => '-1',
  'post_type' => 'post',
);

$posts = get_posts($args);
?>

<!-- <section class="site-header"></section> -->

<!-- This device isn’t a spaceship, it’s a time machine. It goes backwards, forwards, takes us to a place where we ache to go again. It’s not called the wheel. It’s called the carousel. -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <!-- Helter Skelter -->
  <div class="carousel-inner"> 
  
    <div class="carousel-item">
      <img class="d-block w-100 skip-lazy" src="<?php echo get_template_directory_uri(); ?>/img/spacemt-web.gif" data-color="lightblue" alt="First Image">
      <div class="carousel-caption d-md-block">
        <div class="col-12 col-lg-8 right">
          <h1 class="landingtype fw-light text-right text-uppercase pb-5">Nofutura is the work of Patrick Cummings.  Designer, artist, and front-end dev.</span></h1>
        </div>  
      </div>
    </div>
<!--
    <div class="carousel-item">
      <section class="fullsize-video-bg">
        <div id="video-viewport">
          <video width="1920px" height="1080px" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri(); ?>/img/SEERSLOTweb.mp4" type="video/mp4" />
          </video>
        </div>
      </section>
      <div class="carousel-caption d-md-block">
        <h1 class="landingtype fw-light text-left text-uppercase pb-5">I like to fiddle in: Videography, 3D, programming, and animation.</h1>
      </div> 
    </div> 
-->
	<div class="carousel-item">
      <img class="d-block w-100 skip-lazy" src="<?php echo get_template_directory_uri(); ?>/img/grimesnycweb.jpg.webp" alt="" >
      <div class="carousel-caption d-md-block">
		<h1 class="landingtype fw-light text-left text-uppercase pb-5">NOFUTURA because of the font but also the future is now.</h1>
      </div>
    </div>
	


    <div class="carousel-item">
      <img class="d-block w-100 skip-lazy" src="<?php echo get_template_directory_uri(); ?>/img/monstersquadcover.jpg.webp" alt="" >
      <div class="carousel-caption d-md-block">
		<h1 class="landingtype fw-light text-left pb-5">Available for: HIRE/FREELANCE</h1>
      </div>
    </div>

  </div>

  <!-- C0ntr0l -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
  </div>

  <!-- Body // Gallery -->

  <section class="container-fluid p-5">


    <div class="grid"> 		
      <div class="grid-sizer"></div>
	
	<?php foreach($posts as $post) : ?>
		
      <div class="content grid-item" data-aos="zoom-in-up"> 
        <a href="<?php echo get_permalink(); ?>">
          <div class="content-overlay"></div>
			<img class="content-image " src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="d-flex content-details fadeIn-bottom">
              <h3 class="content-title my-auto"><?php echo get_the_title(); ?></h3>
          </div>
        </a> 
      </div> <?php
	endforeach; ?>
    </div>
    
</section>

<script>
$(document).ready(function() {
  $(window).trigger('resize');
  console.log('hit');
}
</script>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php get_footer(); ?>




  

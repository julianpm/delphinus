<?php get_header();  ?>

<div class="main">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

		<section class="splash flex" style='background-image:url("<?php the_field('splash_hero_image'); ?>")';>
		        <?php if ( get_field("splash_header") ) : ?>
		        	<h1 class="splashHeadline"><?php the_field("splash_header"); ?></h1>
		        <?php endif; ?>

		        <?php if (get_field("splash_blurb") ) : ?>
		        	<p class="splashBlurb"><?php the_field("splash_blurb"); ?></p>
		        <?php endif; ?>
	    </section> <!-- END OF SPLASH -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>
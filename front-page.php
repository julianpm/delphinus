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

		<section class="clients container">
	    	<?php 
			$images = get_field('client_gallery');

			if( $images ): ?>
			    <ul class="clientsList flex">
			        <?php foreach( $images as $image ): ?>
			            <li>
			                <a href="<?php echo $image['url']; ?>">
			                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul> <!-- END OF CLIENTSLIST -->
			<?php endif; ?>
		</section> <!-- END OF CLIENTS -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>
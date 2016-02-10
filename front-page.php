<?php get_header();  ?>

  <?php // Start the loop ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="splash flex" style='background-image:url("<?php the_field('splash_hero_image'); ?>")';>
	    <?php if ( get_field("splash_header") ) : ?>
	    	<h1 class="splashHeadline"><?php the_field("splash_header"); ?></h1>
	    <?php endif; ?>

	    <?php if (get_field("splash_blurb") ) : ?>
	    	<p class="splashBlurb"><?php the_field("splash_blurb"); ?></p>
	    <?php endif; ?>
    </section> <!-- END OF SPLASH -->

	<section class="productPreview container flex">
		<?php

		// check if the repeater field has rows of data
		if( have_rows('product_preview') ):

			// loop through the rows of data
			while ( have_rows('product_preview') ) : the_row();

	    			// VARIABLES
					$img = get_sub_field('product_preview_image');
					$color = get_sub_field('product_preview_color');
					$title = get_sub_field('product_preview_title');?>
					
					<!-- display a sub field value -->
					<?php if ( !empty($img) ): ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
					<?php endif; ?>
					
					<div class="productPreviewInfo">	
						<?php echo $title; ?>
					</div> <!-- END OF PRODUCTPREVIEWINFO -->

			<?php endwhile;

			else :

		    // no rows found

			endif;

			?>	
	</section> <!-- END OF PRODUCTPREVIEW -->

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

<?php get_footer(); ?>
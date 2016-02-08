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

	    <section class="promotion">
		    <div class="promotionInner flex container">
		    	<?php if ( get_field("promotion_shipping") ) : ?>
					<h3 class="free"><?php the_field("promotion_shipping"); ?></h3>
		    	<?php endif; ?>

		    	<?php if (get_field("promotion_returns") ) : ?>
					<h3 class="free"><?php the_field("promotion_returns"); ?></h3>
		    	<?php endif; ?>
		    </div> <!-- END OF PROMOTIONINNER -->
	    </section> <!-- END OF PROMOTION -->

	    <section class="fullNav container">
	    	
	    </section> <!-- END OF FULLNAV -->

	    <section class="newsletter">
			<div class="innerNewsletter flex container">
				<div class="social flex">
					<?php if (get_field("social_facebook") ) : ?>
						<a href="<?php the_field("social_facebook"); ?>">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="<?php the_field("social_twitter"); ?>">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="<?php the_field("social_instagram"); ?>">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="<?php the_field("social_linkedin"); ?>">
							<i class="fa fa-linkedin"></i>
						</a>
					<?php endif; ?>
				</div> <!-- END OF SOCIAL -->

				<?php if (get_field("newsletter_label") ) : ?>
					<h3 class="newsletterLabel"><?php the_field("newsletter_label") ?></h3>
				<?php endif; ?>
			</div> <!-- END OF INNERNEWSLETTER -->	
	    </section> <!-- END OF NEWSLETTER -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>
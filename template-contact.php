<?php

/*
	Template Name: Contact
*/

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="office container">
		<?php

			$image = get_field('office_interior');

			if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>
	</div> <!-- END OF OFFICE -->

	<section class="mainContact container flex">
		
		<div class="address">
		    <div class="streetAddress">
		    	<?php if (get_field ("address") ) : ?>
					<?php the_field("address"); ?>
		    	<?php endif; ?>
		    </div> <!-- END OF STREETADDRESS -->
		    
		    <div class="social contactSocial flex">
				<?php if (get_field("social_facebook", "option") ) : ?>
					<a href="<?php the_field("social_facebook", "option"); ?>">
						<i class="fa fa-facebook"></i>
					</a>
				<?php endif; ?>
				<?php if (get_field("social_twitter", "option") ) : ?>
					<a href="<?php the_field("social_twitter", "option"); ?>">
						<i class="fa fa-twitter"></i>
					</a>
				<?php endif; ?>
				<?php if (get_field("social_instagram", "option") ) : ?>
					<a href="<?php the_field("social_instagram", "option"); ?>">
						<i class="fa fa-instagram"></i>
					</a>
				<?php endif; ?>
				<?php if (get_field("social_linkedin", "option") ) : ?>
					<a href="<?php the_field("social_linkedin", "option"); ?>">
						<i class="fa fa-linkedin"></i>
					</a>
				<?php endif; ?>
			</div> <!-- END OF SOCIAL -->
		</div> <!-- END OF ADDRESS -->

		<div class="contactUs">
			<?php if ( get_field( "greeting") ) : ?>
				<h3><?php the_field("greeting"); ?></h3>
			<?php endif; ?>
			<?php the_content(); ?>
		</div> <!-- END OF CONTACTUS -->

	</section> <!-- END OF MAINCONTACT -->

    <?php endwhile; // end the loop?>

<?php get_footer(); ?>

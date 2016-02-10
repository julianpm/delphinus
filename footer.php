<section class="promotion">
    <div class="promotionInner flex container">
    	<?php if ( get_field("promotion_shipping", "option") ) : ?>
			<h3 class="free"><?php the_field("promotion_shipping", "option"); ?></h3>
    	<?php endif; ?>

    	<?php if (get_field("promotion_returns", "option") ) : ?>
			<h3 class="free"><?php the_field("promotion_returns", "option"); ?></h3>
    	<?php endif; ?>
    </div> <!-- END OF PROMOTIONINNER -->
</section> <!-- END OF PROMOTION -->

<nav class="footerNav container">
	<ul class="footerNavItems flex">
		<?php wp_nav_menu( array('container' => false, 'theme_location' => 'full', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav> <!-- END OF FULLNAV -->

<?php if ( is_front_page() ) : ?>
	<section class="newsletter">
		<div class="innerNewsletter flex container">
			<div class="social flex">
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

			<?php if (get_field("newsletter_label", "option") ) : ?>
				<h3 class="newsletterLabel"><?php the_field("newsletter_label", "option"); ?></h3>
			<?php endif; ?>
		</div> <!-- END OF INNERNEWSLETTER -->	
	</section> <!-- END OF NEWSLETTER -->
<?php endif; ?>

<?php if( is_front_page() ) : ?>
	<footer class="mainFooter">
	    <p>&copy; <?php echo date('Y'); ?> Delphinus </p>
	</footer> <!-- END OF MAINFOOTER -->

<?php else : ?>
	<footer class="elseFooter">
		<div class="footerSocial flex">
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
		</div> <!-- END OF FOOTERSOCIAL -->
		<p>&copy; <?php echo date('Y'); ?> Delphinus</p>
	</footer> <!-- END OF ELSEFOOTER -->
<?php endif; ?>


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pawshop
 */

?>

	<footer id="colophon" class="site-footer">
     <div class="bg-primary text-white pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-2">
				 <?php dynamic_sidebar('footer-widget-col-one');?>
				</div>
				<div class="col-sm-6 col-md-2">
                 <?php dynamic_sidebar('footer-widget-col-two');?>
				</div>
				<div class="col-md-4 col-sm-12 ms-auto">
                 <?php dynamic_sidebar('footer-widget-col-three');?>
				</div>
			</div>
		</div>
	 </div>
	 <div class="container pt-4">
<div class="row d-flex align-items-center">
	<div class="col">
		<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> develop by <a href="https://erwinllano.vercel.app/" target="_blank">Erwin Llano</a></p>
	</div>
	<div class="col h-25 d-inline-block text-end">
		<img src="<?php echo get_template_directory_uri(); ?>/img/payment/footer-cards.png" class="img-fluid w-50 h-50" loading="lazy" alt="...">
	</div>
</div> 
	 </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

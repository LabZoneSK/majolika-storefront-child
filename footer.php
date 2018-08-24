<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action('storefront_before_footer');?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<div class="flex-columns-simple">
				<div class="col-4">
					<h2 class="small-header">Menu</h2>

				</div>
				<div class="col-4">
				  <h2 class="small-header">Užitočné odkazy</h2>
					
				</div>
				<div class="col-4">
				  <h2 class="small-header">Kontakt</h2>
					<p>
						Slovenská ľudová majolika Modra<br/>
						Dolná 138<br/>
						900 01 Modra<br/>
					</p>
				</div>
			</div>
			<div>
				@2018 Slovenská ľudová majolika, a.s.
			</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action('storefront_after_footer');?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/main.js" async defer>
	<!-- Majolika Custom Scripts -->
</script>
</body>
</html>

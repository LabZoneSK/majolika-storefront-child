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

	<footer id="colophon" class="site-footer site-footer-small" role="contentinfo">
		<div class="col-full">
			<div class="flex-columns">
				<div class="col">
					<a href="/vseobecne-obchodne-podmienky/">Všeobecné obchodné podmienky</a><br/>
					<a href="/ochrana-a-spracovanie-osobnych-udajov/">Ochrana osobných údajov</a><br/>
					<a href="/kontakty/">Kontakty</a>
				</div>
				<div class="col has-text-centered">
					<img class="site-footer-logo" src="<?= get_stylesheet_directory_uri(); ?>/media/logo-SLM-102x108.png" alt="Logo Slovenská ľudová majolika">
				</div>
				<div class="col">
					<a href="https://majolikamodra.sk/o-nas/">Slovenská ľudová majolika</a> @<?= date("Y") ?> <br/>
					<a class="social-icon" href="/kontakty" title="Kliknutím na odkaz prejdete na stránku Kontakty">
						<img src="<?= get_stylesheet_directory_uri(); ?>/media/contact.png" alt="Facebook Slovenská ľudová majolika" />
					</a>
					<a class="social-icon" href="https://www.facebook.com/majolikamodra/" title="Kliknutím na odkaz prejdete na Facebook Slovenská ľudová majolika">
						<img src="<?= get_stylesheet_directory_uri(); ?>/media/facebook-logo.png" alt="Facebook | Slovenská ľudová majolika" />
					</a>
					<a class="social-icon" href="https://www.instagram.com/majolikamodra.sk/" title="Kliknutím na odkaz prejdete na Instagram Slovenská ľudová majolika">
						<img src="<?= get_stylesheet_directory_uri(); ?>/media/instagram-logo.png" alt="Instagram | Slovenská ľudová majolika" />
					</a>
					<a class="social-icon" href="https://sk.pinterest.com/slovenskudovmajolika/?eq=slovensk%C3%A1%20%C4%BD&etslf=6408" title="Kliknutím na odkaz prejdete na Pinterest Slovenská ľudová majolika">
						<img src="<?= get_stylesheet_directory_uri(); ?>/media/pinterest-logo.png" alt="Pinterest | Slovenská ľudová majolika" />
					</a>
					<a class="" href="https://www.sashe.sk/Modranska_Majolika" title="Kliknutím na odkaz prejdete na Sashe Slovenská ľudová majolika">
					<img src="<?= get_stylesheet_directory_uri(); ?>/media/sashe-logo.png" alt="Sashe | Slovenská ľudová majolika" />
					</a>
					</div>
				</div>
			</div>
		</div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action('storefront_after_footer');?>

</div><!-- #page -->

<?php wp_footer();?>

<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/js/main.js" async defer>
	<!-- Majolika Custom Scripts -->
</script>
</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */
?>

<footer id="footer">
	<div class="footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget-first">
						<?php dynamic_sidebar('footer-widget-first'); ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget-second">
						<?php dynamic_sidebar('footer-widget-second'); ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="footer-widget-third">
						<?php dynamic_sidebar('footer-widget-third'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-rights">
		<div class="container">
			<div class="row">
				<div class="footer-logo">
					<div class="col-sm-7">
						<div class="row">
							<div class="logo col-sm-3 col-md-2">
								<i class="icon sprite-footer-logo"></i>
							</div>
							<div class="rights col-sm-5">
								Celtics Brasil - Direitos reservados
							</div>
							<div class="creative col-sm-4 col-md-5">
								<a href="#" target="_blank"><i class="icon sprite-creative"></i></a>
							</div>
						</div>
					</div>
					<div class="developed-by col-sm-5">
						<a href="http://mamweb.com.br" target="_blank">Desenvolvido por | <i class="icon sprite-developed-by"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
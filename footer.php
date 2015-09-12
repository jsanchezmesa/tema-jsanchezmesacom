</div> <!-- fin wrapper -->
<footer class="footer-main">
	<?php wp_nav_menu( array(
			'theme_location' => 'datos-legales-menu',
			'container' => 'nav',
			'container_class' => 'footer-menu',
			'container_id' => 'footer-menu'
		) ); ?>
	<p>&copy; <?php bloginfo('name'); ?> - <?php echo date('Y');?></p>
</footer>

<!-- mensaje cookies -->
<div id="cookie-message" class="cookie-message">
	<p><strong>Uso de cookies.</strong>Este sitio utiliza cookies para que tengas la mejor experiencia de uso. Si continuas navegando estás dando tu consentimiento para la aceptación de dichas cookies y la <a href="http://jsanchezmesa.com/politica-de-cookies">política de cookies</a>.<button class="close">Aceptar</button></p>
</div>
<!-- fin mensaje cookies -->

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- mensaje cookies -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cookies.js"></script>
<!-- fin mensaje cookies -->

<!-- menu responsive -->
<script>
$(document).ready(function(){
	var btn_movil = $('.nav-mobile'), menu = $('.menu-main').find('ul');

	btn_movil.on('click', function(e){
		var el = $(this);

		el.toggleClass('nav-active');
		menu.toggleClass('open-menu');
	});
});
</script>
<!-- fin menu responsive -->

<?php wp_footer(); ?>
</body>
</html>
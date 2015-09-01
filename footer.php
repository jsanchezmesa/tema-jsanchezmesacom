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

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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

<?php wp_footer(); ?>
</body>
</html>
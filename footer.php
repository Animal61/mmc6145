<footer>
	<div id="footer-sidebar" class="secondary">
		<div id="left-footer">
			<?php
			if(is_active_sidebar('left-footer')){
				dynamic_sidebar('left-footer');
			}
			?>
				
			</div>

		<div id="right-footer">
			<?php
			if(is_active_sidebar('right-footer')){
				dynamic_sidebar('right-footer');
			}
			?>
				
			</div>
	</div>
	<div class="wrapper">
		<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
		<p>&copy; This website is for MMC6145 Coursework</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
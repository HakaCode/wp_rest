		<footer>
			<nav class="nav-footer">
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>

		<!-- Footer Wordpress -->
		<?php wp_footer(); ?>
		<!-- Fecha Footer Wordpress -->
	</body>
</html>
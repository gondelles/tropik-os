<?php
/**
 * Footer — mirrors the drawer's four groups (2026-09-07 IA), matching
 * the Golden Master's own standing rule that drawer and footer stay
 * structurally consistent. Markup ported from ARTIFACT_SOURCE.html
 * lines ~3842-3885.
 */
?>
</main>

<footer class="tk-footer">
	<div class="tk-container tk-footer__top">
		<div class="tk-footer__brand-col">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tk-footer__brand" aria-label="<?php esc_attr_e( 'Tropik Re:Build — Home', 'tropik-rebuild' ); ?>">
				<img class="tk-brand__mark" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/toucan-logo.png' ); ?>" alt="Tropik Re:Build" width="40" height="40">
			</a>
			<p class="tk-muted" style="max-width:32ch"><?php esc_html_e( 'A circular recovery system turning safely-recoverable earthquake debris into usable materials, local jobs, and a path back to reconstruction.', 'tropik-rebuild' ); ?></p>
		</div>
		<div class="tk-footer__col">
			<div class="tk-footer__col-title"><?php esc_html_e( 'Explore Re:Build', 'tropik-rebuild' ); ?></div>
			<?php tk_drawer_menu( 'explore-rebuild' ); ?>
		</div>
		<div class="tk-footer__col">
			<div class="tk-footer__col-title"><?php esc_html_e( 'Support', 'tropik-rebuild' ); ?></div>
			<?php tk_drawer_menu( 'support' ); ?>
		</div>
		<div class="tk-footer__col">
			<div class="tk-footer__col-title"><?php esc_html_e( 'Shop', 'tropik-rebuild' ); ?></div>
			<?php tk_drawer_menu( 'shop' ); ?>
		</div>
	</div>
	<div class="tk-container tk-footer__bottom">
		<span>&copy; <span data-tk-year><?php echo esc_html( gmdate( 'Y' ) ); ?></span> <?php esc_html_e( 'Tropik Re:Build. A Tropik Goods venture.', 'tropik-rebuild' ); ?></span>
		<a class="tk-footer__back-top" href="#top" data-tk-top><?php esc_html_e( 'Back to top', 'tropik-rebuild' ); ?> &uarr;</a>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

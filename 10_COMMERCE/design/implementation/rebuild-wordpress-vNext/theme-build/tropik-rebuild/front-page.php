<?php
/**
 * Home. If the founder-approved Home content lands (via the block editor,
 * using the registered patterns below) this simply renders it — the_content()
 * is the entire template. Until then, on a fresh install with no content
 * authored, it renders one honest hero placeholder rather than any
 * invented copy, using the Golden Master's own .tk-hero shape.
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( ! has_blocks( get_the_content() ) && '' === trim( get_the_content() ) ) : ?>
		<section class="tk-hero tk-surface-night">
			<div class="tk-container">
				<span class="tk-eyebrow"><?php esc_html_e( 'Tropik Re:Build', 'tropik-rebuild' ); ?></span>
				<h1 class="tk-h-xl" style="margin-top:var(--tk-space-3);max-width:20ch"><?php esc_html_e( 'Home', 'tropik-rebuild' ); ?></h1>
				<div style="margin-top:var(--tk-space-6);max-width:640px">
					<?php
					/*
					 * Deliberately generic, not the draft Home headline/lede this
					 * project has circulated elsewhere (commit bac9ada) — that copy
					 * is still unapproved, and this project's own notes flag the
					 * risk of an unapproved draft quietly becoming "the" Home copy
					 * through a second path. This fallback never repeats it.
					 */
					tk_content_pending( __( 'Home hero, stats, and every section below — see 08_CONTENT_AND_CLAIM_GATE_MAP.md. Build this page in the block editor with the registered Re:Build patterns once content is founder-approved.', 'tropik-rebuild' ) );
					?>
				</div>
			</div>
		</section>
	<?php else : ?>
		<?php the_content(); ?>
	<?php endif; ?>
<?php endwhile; ?>

<?php get_footer(); ?>

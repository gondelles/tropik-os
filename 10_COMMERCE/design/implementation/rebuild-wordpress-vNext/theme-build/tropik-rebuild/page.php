<?php
/**
 * Standard page template. Theme owns the .tk-section/.tk-container shell;
 * the editor owns everything inside the_content() — copy, headings, media,
 * section order — per RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_
 * OVERRIDES_v0.1.md §6 ("theme PHP owns shell/functional components, not
 * final marketing copy").
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class( 'tk-section tk-surface-night' ); ?>>
		<div class="tk-container tk-content-width">
			<?php if ( ! has_blocks( get_the_content() ) && '' === trim( get_the_content() ) ) : ?>
				<h1 class="tk-h-lg"><?php the_title(); ?></h1>
				<?php tk_content_pending( sprintf( /* translators: %s: page title */ __( '"%s" page copy', 'tropik-rebuild' ), get_the_title() ) ); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>

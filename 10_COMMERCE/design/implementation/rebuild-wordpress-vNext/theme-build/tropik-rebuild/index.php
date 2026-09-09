<?php
/**
 * Fallback template — search results, archives, anything without a more
 * specific template. Iteration 1 scope keeps this minimal and correct
 * rather than building the Updates/blog card-rail pattern early.
 */

get_header();
?>

<div class="tk-section tk-surface-night">
	<div class="tk-container tk-content-width">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_search() ) : ?>
				<h1 class="tk-h-lg">
					<?php
					printf(
						/* translators: %s: search query */
						esc_html__( 'Search results for: %s', 'tropik-rebuild' ),
						'<span>' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h1>
			<?php endif; ?>

			<div class="tk-stack--lg" style="margin-top:var(--tk-space-6)">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'tk-media-card' ); ?>>
						<a href="<?php the_permalink(); ?>">
							<div class="tk-media-card__tag"><?php echo esc_html( get_the_date() ); ?></div>
							<h2 class="tk-media-card__title"><?php the_title(); ?></h2>
							<p class="tk-media-card__excerpt"><?php the_excerpt(); ?></p>
						</a>
					</article>
					<?php
				endwhile;
				?>
			</div>

			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<h1 class="tk-h-lg"><?php esc_html_e( 'Nothing found', 'tropik-rebuild' ); ?></h1>
			<p class="tk-lede"><?php esc_html_e( 'Try a different search, or use the menu to browse Re:Build.', 'tropik-rebuild' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>

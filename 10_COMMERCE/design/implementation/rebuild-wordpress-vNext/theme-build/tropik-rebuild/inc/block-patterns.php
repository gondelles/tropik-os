<?php
/**
 * Register the founder-required minimum reusable patterns
 * (RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md §6),
 * built from real core blocks carrying the Golden Master's own tk-*
 * classes, so a non-developer composes a page from these in the block
 * editor and inherits the correct container/typography/spacing/accent
 * system without touching code.
 *
 * 7 of the Golden Master's 8 required patterns are registered here.
 * The 8th — Impact/Update teaser — is NOT registered: PATTERN_MAP.md #7
 * confirms no equivalent markup exists anywhere in the Golden Master, and
 * 01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md §3.4.1 flags it as a founder
 * decision, not something to invent here.
 *
 * Every pattern ships with neutral, clearly-placeholder example text
 * (e.g. "Section eyebrow", "Add your heading") — never real Re:Build
 * copy — since content approval (Lane 1) is independent of this
 * shell (Lane 2) and this theme must not pre-empt it.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function tk_register_block_patterns() {
	register_block_pattern_category(
		'tropik-rebuild',
		array( 'label' => __( 'Tropik Re:Build', 'tropik-rebuild' ) )
	);

	// 1. Hero / intro — .tk-hero.tk-surface-night > eyebrow > h1 > lede > buttons.
	register_block_pattern(
		'tropik-rebuild/hero-intro',
		array(
			'title'       => __( 'Re:Build: Hero / Intro', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Eyebrow, headline, lede paragraph, primary + secondary CTA. Golden Master pattern #1.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-hero tk-surface-night","layout":{"type":"constrained"}} -->
<div class="wp-block-group tk-hero tk-surface-night"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Section eyebrow', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tk-h-xl"} --><h1 class="tk-h-xl">' . esc_html__( 'Add your headline', 'tropik-rebuild' ) . '</h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"tk-lede"} --><p class="tk-lede">' . esc_html__( 'Add your supporting sentence.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"tk-btn tk-btn--primary is-style-fill"} --><div class="wp-block-button tk-btn tk-btn--primary"><a class="wp-block-button__link">' . esc_html__( 'Primary CTA', 'tropik-rebuild' ) . '</a></div><!-- /wp:button -->
<!-- wp:button {"className":"tk-btn tk-btn--secondary"} --><div class="wp-block-button tk-btn tk-btn--secondary"><a class="wp-block-button__link">' . esc_html__( 'Secondary CTA', 'tropik-rebuild' ) . '</a></div><!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 2. Evidence / stat — centered number + evidence block.
	register_block_pattern(
		'tropik-rebuild/evidence-stat',
		array(
			'title'       => __( 'Re:Build: Evidence / Stat', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'A sourced, cited number — never publish a stat without this evidence block underneath it. Golden Master pattern #2.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section tk-surface-graphite","layout":{"type":"constrained"}} -->
<div class="wp-block-group tk-section tk-surface-graphite"><!-- wp:group {"className":"tk-container tk-content-width","style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-group tk-container tk-content-width" style="text-align:center">
<!-- wp:heading {"className":"tk-h-xl","style":{"color":{"text":"#f6b218"}}} --><h2 class="tk-h-xl" style="color:#f6b218">' . esc_html__( '0', 'tropik-rebuild' ) . '</h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"tk-lede"} --><p class="tk-lede">' . esc_html__( 'What this number measures.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:group {"className":"tk-evidence-block","style":{"typography":{"textAlign":"left"}}} -->
<div class="wp-block-group tk-evidence-block" style="text-align:left">
<!-- wp:group {"className":"tk-evidence-block__row"} -->
<div class="wp-block-group tk-evidence-block__row">
<!-- wp:paragraph {"className":"tk-claim-badge tk-claim-badge--fact"} --><p class="tk-claim-badge tk-claim-badge--fact">' . esc_html__( 'Verified fact', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tk-evidence-block__source"} --><p class="tk-evidence-block__source">' . esc_html__( 'Source, published date, re-verified date', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tk-evidence-block__text tk-mt-0"} --><p class="tk-evidence-block__text tk-mt-0">' . esc_html__( 'Caveat / methodology note.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 3. Narrative zone — eyebrow > h2 > lede, alternating surface.
	register_block_pattern(
		'tropik-rebuild/narrative-zone',
		array(
			'title'       => __( 'Re:Build: Narrative Zone', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'The workhorse "explain a concept" section — Recovery, Process overview, Impact overview, About. Golden Master pattern #3.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section tk-surface-night","layout":{"type":"constrained"}} -->
<div class="wp-block-group tk-section tk-surface-night"><!-- wp:group {"className":"tk-container tk-content-width tk-stack--lg"} -->
<div class="wp-block-group tk-container tk-content-width tk-stack--lg">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Section eyebrow', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"className":"tk-h-lg"} --><h2 class="tk-h-lg">' . esc_html__( 'Add your section heading', 'tropik-rebuild' ) . '</h2><!-- /wp:heading -->
<!-- wp:paragraph {"className":"tk-lede"} --><p class="tk-lede">' . esc_html__( 'Add one or two supporting paragraphs.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 4. Card rail — .tk-hub-head + .tk-carousel of 3 .tk-product-card placeholders.
	register_block_pattern(
		'tropik-rebuild/card-rail',
		array(
			'title'       => __( 'Re:Build: Card Rail', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Horizontal scrolling card row. Mobile shows one card at a time with visible centered arrows (founder override — see 03_GOLDEN_MASTER_PARITY_MATRIX.md row 8). Golden Master pattern #4.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section tk-surface-graphite","layout":{"type":"constrained"}} -->
<div class="wp-block-group tk-section tk-surface-graphite"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:group {"className":"tk-hub-head"} -->
<div class="wp-block-group tk-hub-head">
<!-- wp:group {"className":"tk-hub-head__text"} -->
<div class="wp-block-group tk-hub-head__text">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Rail eyebrow', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"className":"tk-h-lg"} --><h2 class="tk-h-lg">' . esc_html__( 'Rail heading', 'tropik-rebuild' ) . '</h2><!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html --><div class="tk-carousel"><button type="button" class="tk-icon-btn tk-carousel__btn tk-carousel__btn--prev" aria-label="' . esc_attr__( 'Previous', 'tropik-rebuild' ) . '"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg></button>
<div class="tk-carousel__track">
<div class="tk-carousel__item tk-card" style="width:280px"><h3 class="tk-h-sm">' . esc_html__( 'Card title', 'tropik-rebuild' ) . '</h3><p class="tk-muted">' . esc_html__( 'Card copy.', 'tropik-rebuild' ) . '</p></div>
<div class="tk-carousel__item tk-card" style="width:280px"><h3 class="tk-h-sm">' . esc_html__( 'Card title', 'tropik-rebuild' ) . '</h3><p class="tk-muted">' . esc_html__( 'Card copy.', 'tropik-rebuild' ) . '</p></div>
<div class="tk-carousel__item tk-card" style="width:280px"><h3 class="tk-h-sm">' . esc_html__( 'Card title', 'tropik-rebuild' ) . '</h3><p class="tk-muted">' . esc_html__( 'Card copy.', 'tropik-rebuild' ) . '</p></div>
</div>
<button type="button" class="tk-icon-btn tk-carousel__btn tk-carousel__btn--next" aria-label="' . esc_attr__( 'Next', 'tropik-rebuild' ) . '"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
</div><!-- /wp:html -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 5a. CTA band — Shape A, light ask (.tk-closer).
	register_block_pattern(
		'tropik-rebuild/cta-band-light',
		array(
			'title'       => __( 'Re:Build: CTA Band — Light Ask', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Single low-friction ask, one button. Golden Master pattern #5, shape A.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section"} -->
<div class="wp-block-group tk-section"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:group {"className":"tk-closer"} -->
<div class="wp-block-group tk-closer">
<!-- wp:heading {"level":3} --><h3>' . esc_html__( 'Add your ask', 'tropik-rebuild' ) . '</h3><!-- /wp:heading -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"tk-btn tk-btn--primary"} --><div class="wp-block-button tk-btn tk-btn--primary"><a class="wp-block-button__link">' . esc_html__( 'CTA', 'tropik-rebuild' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 5b. CTA band — Shape B, heavier mission band (.tk-mission-banner).
	register_block_pattern(
		'tropik-rebuild/cta-band-mission',
		array(
			'title'       => __( 'Re:Build: CTA Band — Mission', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Heavier ask, longer copy, two buttons. Golden Master pattern #5, shape B.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section"} -->
<div class="wp-block-group tk-section"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:group {"className":"tk-mission-banner"} -->
<div class="wp-block-group tk-mission-banner">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Eyebrow', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3>' . esc_html__( 'Add your heading', 'tropik-rebuild' ) . '</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>' . esc_html__( 'Add supporting copy.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"tk-btn tk-btn--primary"} --><div class="wp-block-button tk-btn tk-btn--primary"><a class="wp-block-button__link">' . esc_html__( 'Primary CTA', 'tropik-rebuild' ) . '</a></div><!-- /wp:button --><!-- wp:button {"className":"tk-btn tk-btn--secondary"} --><div class="wp-block-button tk-btn tk-btn--secondary"><a class="wp-block-button__link">' . esc_html__( 'Secondary CTA', 'tropik-rebuild' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 6. Need / Work With Us teaser — homepage 3-territory-card variant.
	register_block_pattern(
		'tropik-rebuild/need-teaser',
		array(
			'title'       => __( 'Re:Build: Need / Work With Us Teaser', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Homepage 3-path teaser (Donate/Shop/Partner-style). Golden Master pattern #6, homepage variant.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section tk-surface-night"} -->
<div class="wp-block-group tk-section tk-surface-night"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Section eyebrow', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"className":"tk-h-lg"} --><h2 class="tk-h-lg">' . esc_html__( 'Add your section heading', 'tropik-rebuild' ) . '</h2><!-- /wp:heading -->
<!-- wp:columns {"className":"tk-grid tk-cols-3","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns tk-grid tk-cols-3">
<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"tk-territory-card"} --><div class="wp-block-group tk-territory-card"><!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Route 1', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . esc_html__( 'Short copy.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"tk-territory-card"} --><div class="wp-block-group tk-territory-card"><!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Route 2', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . esc_html__( 'Short copy.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- wp:group {"className":"tk-territory-card"} --><div class="wp-block-group tk-territory-card"><!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Route 3', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . esc_html__( 'Short copy.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);

	// 7. Editorial / policy section — TOC + body, .tk-gate-tag placeholder preserved.
	register_block_pattern(
		'tropik-rebuild/editorial-policy',
		array(
			'title'       => __( 'Re:Build: Editorial / Policy Section', 'tropik-rebuild' ),
			'categories'  => array( 'tropik-rebuild' ),
			'description' => __( 'Legal/FAQ-style page: title, last-updated, gate-tag placeholder, body. Golden Master pattern #8.', 'tropik-rebuild' ),
			'content'     => '<!-- wp:group {"className":"tk-section--tight"} -->
<div class="wp-block-group tk-section--tight"><!-- wp:group {"className":"tk-container"} -->
<div class="wp-block-group tk-container">
<!-- wp:paragraph {"className":"tk-eyebrow"} --><p class="tk-eyebrow">' . esc_html__( 'Legal', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tk-h-lg"} --><h1 class="tk-h-lg">' . esc_html__( 'Add your policy title', 'tropik-rebuild' ) . '</h1><!-- /wp:heading -->
<!-- wp:paragraph {"className":"tk-gate-tag"} --><p class="tk-gate-tag">' . esc_html__( 'Final launch policy content required', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>' . esc_html__( 'Add your policy body here once legal copy is approved.', 'tropik-rebuild' ) . '</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'tk_register_block_patterns' );

/**
 * Remove core's default pattern categories from the inserter's first
 * screen so the Re:Build set is the obvious choice — does not unregister
 * core patterns themselves, only stops WordPress.org's remote pattern
 * directory calls, which is also a reasonable performance default for a
 * staging environment.
 */
remove_theme_support( 'core-block-patterns' );

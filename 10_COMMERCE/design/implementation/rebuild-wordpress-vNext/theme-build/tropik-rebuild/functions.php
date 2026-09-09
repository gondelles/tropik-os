<?php
/**
 * Tropik Re:Build theme — Iteration 1 (architecture + Golden Master shell).
 *
 * Scope, deliberately: design tokens, header, left drawer, single
 * WooCommerce-backed bag drawer, shared card/button/form primitives, and
 * 7 of the 8 founder-required Gutenberg patterns (the 8th — Impact/Update
 * teaser — has no source markup anywhere in the Golden Master and is not
 * invented here; see PATTERN_MAP.md #7). No final page copy ships in this
 * theme — every placeholder is explicitly marked content-pending. See
 * 10_COMMERCE/design/implementation/rebuild-wordpress-vNext/ for the full
 * pre-build documentation set this theme was built against.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TK_THEME_VERSION', '0.1.0-iteration1' );

/**
 * Theme setup.
 */
function tk_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// Golden Master's approved token set — no separate editor-color-palette
	// invented here; these are the exact tk-* tokens from TOKENS.md.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Ink', 'tropik-rebuild' ),
				'slug'  => 'tk-ink',
				'color' => '#171717',
			),
			array(
				'name'  => __( 'Ivory', 'tropik-rebuild' ),
				'slug'  => 'tk-ivory',
				'color' => '#F6F2E8',
			),
			array(
				'name'  => __( 'Sun', 'tropik-rebuild' ),
				'slug'  => 'tk-sun',
				'color' => '#F6B218',
			),
			array(
				'name'  => __( 'Signal green', 'tropik-rebuild' ),
				'slug'  => 'tk-signal-green',
				'color' => '#2FB98F',
			),
			array(
				'name'  => __( 'Signal coral', 'tropik-rebuild' ),
				'slug'  => 'tk-signal-coral',
				'color' => '#F25B66',
			),
			array(
				'name'  => __( 'Night', 'tropik-rebuild' ),
				'slug'  => 'tk-night',
				'color' => '#1D201F',
			),
		)
	);

	// 2026-09-07 IA — four drawer/footer groups, each its own editable menu
	// location rather than one flattened wp_nav_menu(), per
	// RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md §2 and
	// §7 ("hierarchy must not be flattened by one generic wp_nav_menu()").
	register_nav_menus(
		array(
			'explore-rebuild' => __( 'Explore Re:Build (drawer group 1)', 'tropik-rebuild' ),
			'support'         => __( 'Support (drawer group 2 — absorbs About/Updates/FAQ/Contact/Transparency/Work With Us/Shipping/Terms/Privacy/Returns)', 'tropik-rebuild' ),
			'shop'            => __( 'Shop (drawer group 3 — Merch / Products)', 'tropik-rebuild' ),
			'my-account'      => __( 'My Account (drawer group 4)', 'tropik-rebuild' ),
		)
	);
}
add_action( 'after_setup_theme', 'tk_setup' );

/**
 * WooCommerce declared support. Real Woo wiring (cart fragments, wrapper
 * hooks, AJAX endpoints) lives in inc/woocommerce.php.
 */
function tk_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'tk_woocommerce_support' );

/**
 * Enqueue the Golden Master stylesheet + Plus Jakarta Sans (must be
 * actually enqueued, not just referenced in CSS — TOKENS.md records this
 * exact failure mode from an earlier build) + theme.js.
 */
function tk_enqueue_assets() {
	wp_enqueue_style(
		'tk-google-fonts',
		'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'tropik-rebuild-style', get_stylesheet_uri(), array( 'tk-google-fonts' ), TK_THEME_VERSION );

	wp_enqueue_script( 'tropik-rebuild-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), TK_THEME_VERSION, true );

	wp_localize_script(
		'tropik-rebuild-theme',
		'tkAjax',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'tk_cart_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'tk_enqueue_assets' );

/**
 * Includes.
 */
require get_template_directory() . '/inc/woocommerce.php';
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Shared helper: render the "content pending founder approval" placeholder.
 * Used by front-page.php and any starter template section so nothing here
 * ever ships an invented claim — same convention as the Golden Master's own
 * .tk-gate-tag placeholder on unsupplied legal copy (terms.html/privacy.html).
 *
 * @param string $label Short label for what's pending, e.g. "Home hero copy".
 */
function tk_content_pending( $label ) {
	printf(
		'<div class="tk-content-pending"><span class="tk-gate-tag">%s</span><p>%s</p></div>',
		esc_html__( 'Content pending founder approval', 'tropik-rebuild' ),
		esc_html( $label )
	);
}

/**
 * Custom nav walker for the drawer's four grouped menus.
 *
 * Wraps items in .tk-drawer__list (matching the Golden Master's markup),
 * and renders a page as "coming soon" (disabled, muted, Soon badge) when
 * an admin adds the "tk-soon" CSS class to that menu item via
 * Appearance → Menus → (enable Screen Options → CSS Classes) — this is how
 * an editor marks a drawer link as not-yet-built without touching code,
 * matching the Golden Master's own .tk-drawer__soon convention (used there
 * on "Rebuilding").
 */
class TK_Drawer_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$is_soon = in_array( 'tk-soon', (array) $item->classes, true );
		$title   = apply_filters( 'the_title', $item->title, $item->ID );

		if ( $is_soon ) {
			$output .= sprintf(
				'<li><a href="#" class="tk-drawer__soon" aria-disabled="true">%s <span class="tk-drawer__soon-badge">%s</span></a></li>',
				esc_html( $title ),
				esc_html__( 'Soon', 'tropik-rebuild' )
			);
			return;
		}

		$output .= sprintf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( $item->url ),
			esc_html( $title )
		);
	}
}

/**
 * Print one drawer menu group as a .tk-drawer__list. Silent (no output,
 * no PHP notice) if the location hasn't been assigned a menu yet — an
 * unassigned location is expected on first install, not an error.
 */
function tk_drawer_menu( $location ) {
	if ( ! has_nav_menu( $location ) ) {
		return;
	}
	wp_nav_menu(
		array(
			'theme_location' => $location,
			'container'      => false,
			'items_wrap'     => '<ul class="tk-drawer__list">%3$s</ul>',
			'walker'         => new TK_Drawer_Walker(),
			'fallback_cb'    => false,
		)
	);
}

/**
 * Drawer-footer language row (ES/EN) — same "only if real routes exist"
 * rule as tk_language_switch(), wrapped in the drawer's own row layout.
 */
function tk_language_switch_row() {
	if ( ! function_exists( 'pll_the_languages' ) ) {
		return;
	}
	echo '<div class="tk-drawer__lang-row">';
	tk_language_switch();
	echo '</div>';
}

/**
 * Language switch — only prints when Polylang is actually active with real
 * translated routes. Never renders a non-functional/fake toggle; the
 * founder's rule is explicit ("no fake unavailable translation").
 */
function tk_language_switch() {
	if ( ! function_exists( 'pll_the_languages' ) ) {
		return;
	}
	$languages = pll_the_languages(
		array(
			'raw'               => 1,
			'hide_if_no_translation' => 0,
		)
	);
	if ( empty( $languages ) ) {
		return;
	}
	echo '<div class="tk-lang-switch" role="group" aria-label="Language / Idioma">';
	foreach ( $languages as $lang ) {
		printf(
			'<a href="%1$s" class="tk-lang-switch__opt" aria-pressed="%2$s">%3$s</a>',
			esc_url( $lang['url'] ),
			$lang['current_lang'] ? 'true' : 'false',
			esc_html( strtoupper( $lang['slug'] ) )
		);
	}
	echo '</div>';
}

<?php
/**
 * Header: utility cluster, search bar, left drawer, right bag drawer.
 * Markup ported from the Golden Master (ARTIFACT_SOURCE.html lines
 * ~1504-1666), with the DEC-026 drawer grouping replaced by the
 * 2026-09-07 IA (RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_
 * v0.1.md §2) and Claude-preview-only content ("Artifact by you" /
 * "Viendo: ..." chrome — never present in this markup to begin with,
 * since it's Claude editor chrome, not Artifact source) excluded.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="tk-skip-link" href="#tk-main"><?php esc_html_e( 'Skip to content', 'tropik-rebuild' ); ?></a>

<header class="tk-header">
	<div class="tk-header__inner">
		<div class="tk-header__start">
			<button class="tk-icon-btn" data-tk-drawer-open aria-expanded="false" aria-controls="tk-drawer" aria-label="<?php esc_attr_e( 'Open menu', 'tropik-rebuild' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
			</button>
		</div>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tk-header__brand" aria-label="<?php esc_attr_e( 'Tropik Re:Build — Home', 'tropik-rebuild' ); ?>">
			<img class="tk-brand__mark" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/toucan-logo.png' ); ?>" alt="Tropik Re:Build" width="44" height="44">
		</a>

		<div class="tk-header__end">
			<?php tk_language_switch(); ?>

			<button class="tk-icon-btn" data-tk-search-open aria-expanded="false" aria-controls="tk-search-bar" aria-label="<?php esc_attr_e( 'Search', 'tropik-rebuild' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
			</button>

			<a class="tk-icon-btn" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : admin_url() ); ?>" aria-label="<?php esc_attr_e( 'My account', 'tropik-rebuild' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 4-6 8-6s8 2 8 6"/></svg>
			</a>

			<button class="tk-icon-btn" data-tk-cart-open aria-expanded="false" aria-controls="tk-cart-panel" aria-label="<?php esc_attr_e( 'Open bag', 'tropik-rebuild' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 12H7L6 8Z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
				<span class="tk-icon-btn__badge" data-wp-dynamic="cart-count"><?php echo esc_html( function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
			</button>
		</div>
	</div>
</header>

<div id="tk-search-bar" class="tk-search-bar" hidden>
	<form class="tk-search-bar__form tk-container" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
		<span class="tk-search-bar__icon" aria-hidden="true">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
		</span>
		<input class="tk-search-bar__input" type="search" name="s" placeholder="<?php esc_attr_e( 'Search Re:Build', 'tropik-rebuild' ); ?>" aria-label="<?php esc_attr_e( 'Search Re:Build', 'tropik-rebuild' ); ?>" autocomplete="off" data-tk-search-url="<?php echo esc_url( home_url( '/?s=' ) ); ?>">
		<button type="submit" class="tk-btn tk-btn--primary tk-btn--sm"><?php esc_html_e( 'Search', 'tropik-rebuild' ); ?></button>
		<button type="button" class="tk-icon-btn" data-tk-search-close aria-label="<?php esc_attr_e( 'Close search', 'tropik-rebuild' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18"/></svg>
		</button>
	</form>
</div>

<div id="tk-drawer-backdrop" class="tk-drawer-backdrop" data-tk-drawer-close></div>
<nav id="tk-drawer" class="tk-drawer" aria-label="<?php esc_attr_e( 'Site menu', 'tropik-rebuild' ); ?>">
	<div class="tk-drawer__head">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tk-header__brand" aria-label="<?php esc_attr_e( 'Tropik Re:Build — Home', 'tropik-rebuild' ); ?>">
			<img class="tk-brand__mark" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/toucan-logo.png' ); ?>" alt="Tropik Re:Build" width="36" height="36">
		</a>
		<button class="tk-icon-btn" data-tk-drawer-close aria-label="<?php esc_attr_e( 'Close menu', 'tropik-rebuild' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18"/></svg>
		</button>
	</div>
	<div class="tk-drawer__body">
		<div class="tk-drawer__cols">
			<div>
				<div class="tk-drawer__group-title"><?php esc_html_e( 'Explore Re:Build', 'tropik-rebuild' ); ?></div>
				<?php tk_drawer_menu( 'explore-rebuild' ); ?>
			</div>
			<div>
				<div class="tk-drawer__group-title"><?php esc_html_e( 'Shop', 'tropik-rebuild' ); ?></div>
				<?php tk_drawer_menu( 'shop' ); ?>
			</div>
		</div>

		<hr class="tk-drawer__divider">

		<div>
			<div class="tk-drawer__group-title"><?php esc_html_e( 'Support', 'tropik-rebuild' ); ?></div>
			<?php tk_drawer_menu( 'support' ); ?>
		</div>

		<hr class="tk-drawer__divider">

		<div>
			<div class="tk-drawer__group-title"><?php esc_html_e( 'My Account', 'tropik-rebuild' ); ?></div>
			<?php tk_drawer_menu( 'my-account' ); ?>
		</div>
	</div>

	<div class="tk-drawer__footer">
		<?php tk_language_switch_row(); ?>
		<a class="tk-drawer__support-card" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: home_url( '/contact/' ) ); ?>">
			<span>
				<strong style="display:block"><?php esc_html_e( 'Need a hand?', 'tropik-rebuild' ); ?></strong>
				<span class="tk-muted" style="font-size:var(--tk-fs-body-sm)"><?php esc_html_e( 'Support runs by email — a person reads it.', 'tropik-rebuild' ); ?></span>
			</span>
			<svg class="tk-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
		</a>
	</div>
</nav>

<div id="tk-cart-backdrop" class="tk-cart-backdrop" data-tk-cart-close></div>
<aside id="tk-cart-panel" class="tk-cart-panel" aria-label="<?php esc_attr_e( 'Your bag', 'tropik-rebuild' ); ?>">
	<div class="tk-cart-panel__head">
		<strong><?php esc_html_e( 'Your bag', 'tropik-rebuild' ); ?> <span data-wp-dynamic="cart-count">(<?php echo esc_html( function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?>)</span></strong>
		<button class="tk-icon-btn" data-tk-cart-close aria-label="<?php esc_attr_e( 'Close bag', 'tropik-rebuild' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18"/></svg>
		</button>
	</div>
	<?php if ( function_exists( 'WC' ) && WC()->cart && ! WC()->cart->is_empty() ) : ?>
		<div class="tk-cart-panel__body" data-wp-dynamic="cart-items">
			<?php
			foreach ( WC()->cart->get_cart() as $key => $item ) {
				echo tk_render_cart_line( $key, $item ); // phpcs:ignore WordPress.Security.EscapeOutput -- escaped field-by-field in tk_render_cart_line().
			}
			?>
		</div>
		<div class="tk-cart-panel__foot">
			<div class="tk-summary-row"><span><?php esc_html_e( 'Subtotal', 'tropik-rebuild' ); ?></span><span data-wp-dynamic="cart-subtotal"><?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?></span></div>
			<p class="tk-muted" style="font-size:var(--tk-fs-body-sm);margin:0"><?php esc_html_e( 'Shipping, taxes and discounts are calculated at checkout.', 'tropik-rebuild' ); ?></p>
			<a class="tk-btn tk-btn--secondary tk-btn--block" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><?php esc_html_e( 'View my bag', 'tropik-rebuild' ); ?></a>
			<a class="tk-btn tk-btn--primary tk-btn--block" href="<?php echo esc_url( wc_get_checkout_url() ); ?>"><?php esc_html_e( 'Checkout', 'tropik-rebuild' ); ?></a>
		</div>
	<?php else : ?>
		<div class="tk-cart-panel__body" data-wp-dynamic="cart-items">
			<?php echo tk_render_cart_empty(); // phpcs:ignore WordPress.Security.EscapeOutput -- static markup. ?>
		</div>
	<?php endif; ?>
</aside>

<main id="tk-main">

<?php
/**
 * WooCommerce integration — Iteration 1 scope.
 *
 * Builds the ONE custom Artifact-matching bag drawer required by
 * RB-D-038 / 05_WOOCOMMERCE_COMPONENT_CONTRACT.md §4: the drawer markup
 * lives in header.php, this file only supplies the data (cart fragments)
 * and the two small AJAX actions (qty change, remove) the drawer's own
 * quantity stepper / remove button need. The WooCommerce Mini-Cart
 * block/widget is never rendered anywhere in this theme — there is no
 * second cart UI to accidentally nest it inside.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Prevent WooCommerce's default page wrapper from nesting a second <main>
 * inside the theme's own — same fix DEC-029 already made in v2, carried
 * forward here since it's correct regardless of which theme ships it.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action(
	'woocommerce_before_main_content',
	function () {
		echo '<div class="tk-section tk-surface-night"><div class="tk-container">';
	},
	10
);
add_action(
	'woocommerce_after_main_content',
	function () {
		echo '</div></div>';
	},
	10
);

/**
 * Render one bag line's markup — shared by the initial cart-fragments
 * payload and any later AJAX refresh, so the drawer's own JS never has to
 * duplicate this template.
 */
function tk_render_cart_line( $cart_item_key, $cart_item ) {
	$product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	if ( ! $product || ! $product->exists() || $cart_item['quantity'] <= 0 ) {
		return '';
	}
	$thumbnail   = apply_filters( 'woocommerce_cart_item_thumbnail', $product->get_image( 'thumbnail' ), $cart_item, $cart_item_key );
	$title       = apply_filters( 'woocommerce_cart_item_name', $product->get_name(), $cart_item, $cart_item_key );
	$price       = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $product ), $cart_item, $cart_item_key );
	$variation   = wc_get_formatted_cart_item_data( $cart_item, true );
	$qty         = $cart_item['quantity'];
	$max_qty     = $product->get_max_purchase_quantity();
	$max_attr    = ( $max_qty > 0 ) ? $max_qty : 99;

	ob_start();
	?>
	<div class="tk-cart-line" data-cart-item-key="<?php echo esc_attr( $cart_item_key ); ?>">
		<div class="tk-cart-line__media" aria-hidden="true"><?php echo wp_kses_post( $thumbnail ); ?></div>
		<div>
			<div class="tk-cart-line__title"><?php echo wp_kses_post( $title ); ?></div>
			<?php if ( $variation ) : ?>
				<div class="tk-cart-line__meta"><?php echo wp_kses_post( $variation ); ?></div>
			<?php endif; ?>
			<div class="tk-cart-line__row">
				<div class="tk-qty tk-qty--sm" data-min="1" data-max="<?php echo esc_attr( $max_attr ); ?>">
					<button type="button" data-step="-1" aria-label="<?php esc_attr_e( 'Decrease quantity', 'tropik-rebuild' ); ?>">&minus;</button>
					<input type="text" inputmode="numeric" value="<?php echo esc_attr( $qty ); ?>" aria-label="<?php esc_attr_e( 'Quantity', 'tropik-rebuild' ); ?>" data-wp-dynamic="cart-item-qty">
					<button type="button" data-step="1" aria-label="<?php esc_attr_e( 'Increase quantity', 'tropik-rebuild' ); ?>">+</button>
				</div>
			</div>
		</div>
		<div>
			<div class="tk-cart-line__price"><?php echo wp_kses_post( $price ); ?></div>
			<button class="tk-cart-line__remove" style="margin-top:var(--tk-space-3)" aria-label="<?php esc_attr_e( 'Remove item', 'tropik-rebuild' ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2m2 0-1 13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 7"/></svg>
			</button>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Render the drawer's empty state — .tk-empty, per COMPONENT_INVENTORY.md
 * ("used for empty cart/order states"), not a blank panel.
 */
function tk_render_cart_empty() {
	ob_start();
	?>
	<div class="tk-empty">
		<div class="tk-empty__icon">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 12H7L6 8Z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
		</div>
		<p><?php esc_html_e( 'Your bag is empty.', 'tropik-rebuild' ); ?></p>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Cart fragments — the single source WooCommerce's own core
 * wc-cart-fragments.js script already knows how to swap in on
 * add-to-cart / wc_fragment_refresh, no theme JS has to reimplement that
 * polling itself. Keys are real DOM selectors already present in header.php.
 */
function tk_cart_fragments( $fragments ) {
	$cart  = WC()->cart;
	$count = $cart ? $cart->get_cart_contents_count() : 0;

	ob_start();
	if ( $cart && ! $cart->is_empty() ) {
		foreach ( $cart->get_cart() as $key => $item ) {
			echo tk_render_cart_line( $key, $item ); // phpcs:ignore WordPress.Security.EscapeOutput -- already escaped field-by-field above.
		}
	} else {
		echo tk_render_cart_empty(); // phpcs:ignore WordPress.Security.EscapeOutput -- static markup, no dynamic fields.
	}
	$fragments['[data-wp-dynamic="cart-items"]'] = '<div class="tk-cart-panel__body" data-wp-dynamic="cart-items">' . ob_get_clean() . '</div>';

	$fragments['[data-wp-dynamic="cart-count"]'] = '<span data-wp-dynamic="cart-count">' . esc_html( $count ) . '</span>';

	$fragments['[data-wp-dynamic="cart-subtotal"]'] = '<span data-wp-dynamic="cart-subtotal">' . wp_kses_post( $cart ? $cart->get_cart_subtotal() : wc_price( 0 ) ) . '</span>';

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'tk_cart_fragments' );

/**
 * AJAX: quantity change from inside the drawer.
 */
function tk_ajax_update_cart_qty() {
	check_ajax_referer( 'tk_cart_nonce', 'nonce' );
	$key = isset( $_POST['key'] ) ? sanitize_text_field( wp_unslash( $_POST['key'] ) ) : '';
	$qty = isset( $_POST['qty'] ) ? absint( $_POST['qty'] ) : 0;
	if ( ! $key || ! WC()->cart->get_cart_item( $key ) ) {
		wp_send_json_error( array( 'message' => 'Invalid cart item.' ), 400 );
	}
	if ( $qty <= 0 ) {
		WC()->cart->remove_cart_item( $key );
	} else {
		WC()->cart->set_quantity( $key, $qty, true );
	}
	wp_send_json_success( array( 'fragments' => tk_cart_fragments( array() ) ) );
}
add_action( 'wp_ajax_tk_update_cart_qty', 'tk_ajax_update_cart_qty' );
add_action( 'wp_ajax_nopriv_tk_update_cart_qty', 'tk_ajax_update_cart_qty' );

/**
 * AJAX: remove item from inside the drawer.
 */
function tk_ajax_remove_cart_item() {
	check_ajax_referer( 'tk_cart_nonce', 'nonce' );
	$key = isset( $_POST['key'] ) ? sanitize_text_field( wp_unslash( $_POST['key'] ) ) : '';
	if ( ! $key || ! WC()->cart->get_cart_item( $key ) ) {
		wp_send_json_error( array( 'message' => 'Invalid cart item.' ), 400 );
	}
	WC()->cart->remove_cart_item( $key );
	wp_send_json_success( array( 'fragments' => tk_cart_fragments( array() ) ) );
}
add_action( 'wp_ajax_tk_remove_cart_item', 'tk_ajax_remove_cart_item' );
add_action( 'wp_ajax_nopriv_tk_remove_cart_item', 'tk_ajax_remove_cart_item' );

/**
 * Products in the Re:Build "Products" collection (recovered materials) stay
 * inquiry/quote-led, not default Add-to-Cart, per RB_WEB_UX_NAVIGATION_
 * COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md §5 and RB-D-008. This filters
 * Add-to-Cart off for any product in the "re-build-materials" category —
 * the category itself (and its 4 products) is Iteration 2 scope to create;
 * this filter is shell-scoped groundwork so it's in place before that
 * category exists, and is a no-op until then.
 */
add_filter(
	'woocommerce_is_purchasable',
	function ( $purchasable, $product ) {
		if ( has_term( 're-build-materials', 'product_cat', $product->get_id() ) ) {
			return false;
		}
		return $purchasable;
	},
	10,
	2
);

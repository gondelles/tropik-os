# ITERATION_01_NOTES — Tropik Re:Build theme, architecture + shell

**Status:** build notes, not a completed `ITERATION_01_REVIEW.md`. This session has no live WordPress/WooCommerce/MySQL environment to install into, so the golden-master-screenshot → WordPress-screenshot → fix → retest loop `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` requires could not run here. What follows is what was built, how it was checked without a live install, and exactly what still needs a real staging pass before this can be called PASS.

## What triggered this build

The zip previously delivered as the "Golden Master" (`10_COMMERCE/design/reference/rebuild-page-system-golden-master/`) failed WordPress install with "the theme is missing the style.css stylesheet" — correctly, because that package was never a theme. It's the reference documentation (tokens, component inventory, pattern map, interaction contract, source HTML, screenshots) Lane 2 is supposed to build a theme *from*. This folder is that build.

## Source discipline

Every class name, CSS custom property, and JS behavior in this theme is copied from `ARTIFACT_SOURCE.html` (the frozen Golden Master, commit `262bed1`) or its accompanying `TOKENS.md`/`COMPONENT_INVENTORY.md`/`PATTERN_MAP.md`/`INTERACTIONS.md`. Nothing was invented from memory. Where source needed adaptation for WordPress (dynamic cart counts, real menu locations instead of static `<li>`s, a real search URL instead of `search.html`), the change is commented in-place and cross-referenced to the specific gap it closes.

## What's in scope and built

- `style.css` — the Golden Master's actual `tokens.css` / `base.css` / `components.css` / `pages.css` / `responsive.css` / `rebuild-components.css` layers, verbatim, with only the `demo-only chrome` block removed (that's the Claude-preview "Todas las páginas" switcher bar — explicitly flagged in the Golden Master's own README as never-ship). A small, isolated override block at the end implements the founder's mobile-rail conflict resolution (arrows stay visible + centered, one card per scroll-snap stop) instead of the frozen `≤640px{display:none}` rule.
- `header.php` / `footer.php` — hamburger, centered logo (the actual 526×525 toucan PNG, decoded from the Golden Master's embedded base64, matching DEC-027's corrected asset), ES/EN pill (real Polylang-driven, hidden if Polylang isn't active — no fake toggle), search icon → real WP search, account icon → `wc_get_page_permalink('myaccount')`, bag icon with a real live cart count. Drawer: 4 real `wp_nav_menu()` locations matching the 2026-09-07 IA (Explore Re:Build / Support / Shop / My Account), a custom walker supporting a `tk-soon` CSS class for "coming soon" items, and — a deliberate improvement over the frozen source, which doesn't do this either — drawer links now close the drawer on click.
- Bag drawer — one `.tk-cart-panel`, server-rendered on first load from the real WooCommerce cart, kept in sync via WooCommerce's own cart-fragments mechanism plus two small custom AJAX actions (`tk_update_cart_qty`, `tk_remove_cart_item`) for the quantity stepper and remove button inside the drawer. No Mini-Cart block/widget is registered or rendered anywhere in this theme.
- `inc/block-patterns.php` — 7 of the Golden Master's 8 required patterns, registered under a "Tropik Re:Build" category in the block inserter, built from core Gutenberg blocks carrying the real `tk-*` classes. Placeholder copy only ("Add your heading," etc.) — never Re:Build marketing language.
- `page.php` / `front-page.php` / `index.php` — theme owns the `.tk-section`/`.tk-container` shell, editor owns everything inside `the_content()`. An empty page (fresh install, nothing authored) renders `.tk-content-pending` — the same honest-placeholder convention the Golden Master already uses for unsupplied legal copy — never invented text.

## Checked without a live install

- `php -l` on all 8 PHP files: zero syntax errors (PHP 8.4.19).
- Every `tk-*` class referenced in the PHP templates cross-checked against `COMPONENT_INVENTORY.md` and the actual CSS now in `style.css` — no class is referenced that doesn't exist in the ported stylesheet.
- Toucan logo PNG verified: 526×525, matches DEC-027's corrected-asset description exactly.
- WooCommerce hook names (`woocommerce_before_main_content`, `woocommerce_add_to_cart_fragments`, `woocommerce_is_purchasable`, etc.) and function signatures checked against WooCommerce core conventions from memory — **not executed against a real WooCommerce install**, so a real activation could still surface a hook-timing or version-compatibility issue this static check can't catch.

## NOT yet checked — do this before calling Iteration 1 PASS

1. Actually install on your staging WordPress + WooCommerce and confirm activation succeeds with no PHP warnings/notices in the debug log.
2. Screenshot Home/header/drawer/bag (populated + empty) at 1440/1024/768/480/390 and compare against the Golden Master's own screenshots where they exist (`rebuild-home_*.png`) — this is the actual visual-regression step `04_RESPONSIVE_TEST_MATRIX.md` calls for; it hasn't run yet.
3. Confirm the cart-fragments AJAX round-trip in a real browser: add a product, watch the drawer open and the count update; change quantity in the drawer; remove an item; confirm the empty state renders correctly at zero items.
4. Confirm the drawer closes on a real link tap (this is new behavior, not reproduced from source — verify it actually works, not just that the code looks right).
5. Assign the 4 nav menus (README_INSTALL.md has the exact structure) — until then, drawer groups will render empty, which is correct/expected but should be confirmed visually rather than assumed.

## Explicitly out of scope for this build (Iteration 2+)

Shop/Merch/Products WooCommerce categories and the 4 Re:Build Products SKUs, product gallery, cart page, checkout, My Account template overrides, Work With Us / Keep Updated functional forms, Impact/Update teaser pattern (blocked on a founder decision — see `01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md` §3.4.1), any real page copy. See `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` for the full remaining plan.

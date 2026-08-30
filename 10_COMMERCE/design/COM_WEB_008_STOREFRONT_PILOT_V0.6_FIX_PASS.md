# COM_WEB_008_STOREFRONT_PILOT_V0.6_FIX_PASS

Status: PRIVATE_WORKING
Date: 2026-08-30
Venture: Tropik Commerce
Parent: COM-WEB-006 / GitHub Issue #3

## Objective
Correct the first staging pass of the Tropik storefront theme so the shopping path no longer leaks legacy Divi content and the navigation/product/account experience behaves as one coherent system across desktop and mobile.

## Founder feedback captured from v0.5 staging
- Native variation option dropdown looked like an unbranded white square rather than a controlled Tropik interaction.
- Header icons and typography were too small; the displayed wordmark was not the real Tropik logo.
- PDP gallery/info panels felt proportionally unrelated rather than one harmonious product surface.
- Left burger navigation was confusing/broken and did not provide a useful global navigation path.
- My Account rendered legacy Divi shortcode text instead of Woo dashboard / orders / addresses / account details.
- Cart and Checkout leaked legacy `et_pb_*` shortcode content from the old Divi pages.
- Account/contact affordances were duplicated or unclear.
- Founder wants dark-mode-led visual language, consistent rounded geometry, Sun highlighting only where useful, and key site surfaces reachable from the left drawer in no more than three clicks.

## v0.6 implementation decisions

### 1. Woo transactional path bypasses legacy page content
The theme now calls WooCommerce directly:
- Cart: `[woocommerce_cart]`
- Checkout: `[woocommerce_checkout]`
- My Account: `[woocommerce_my_account]`

Purpose: stop rendering Divi page-builder shortcode chrome while preserving Woo/plugin ownership of commerce functionality.

### 2. Theme-owned left navigation drawer
Replace the WordPress Navigation overlay with a deterministic off-canvas left drawer controlled by the theme.

Drawer includes direct access to:
- Shop all;
- two most recent published Woo products;
- Our Story;
- Learn / Guides;
- FAQs;
- Contact;
- Shipping & Returns;
- My Account;
- Bag;
- Terms;
- Privacy.

### 3. Header system
Desktop:
- left: Menu + Contact;
- center: actual Tropik logo recovery path;
- right: Search + Account + Mini-cart.

Mobile:
- simplify to Menu + centered logo + Search + Cart;
- Contact and Account remain available in drawer to prevent crowding/duplication.

Logo recovery priority:
1. WordPress Site Logo;
2. current theme custom logo;
3. legacy Divi theme custom logo;
4. legacy Divi logo URL;
5. text fallback only if none exist.

### 4. PDP proportional system
Gallery and product-info areas become one rounded outer shell rather than two unrelated cards.
- desktop: 56 / 44 split;
- shared outer radius and border;
- light gallery surface + dark product-info surface;
- mobile: clean vertical stack inside the same shell.

### 5. Variation control enhancement
Keep the native Woo select as source of truth, but progressively enhance it with a custom Tropik dropdown UI:
- rounded dark surface;
- Sun border/focus state;
- controlled option menu;
- selected option highlighted in Sun;
- Woo change events continue to be emitted through the native select.

### 6. My Account
Use Woo-owned account output and style:
- Dashboard;
- Orders;
- Downloads when enabled;
- Addresses;
- Account details;
- Logout.

Desktop uses a left account navigation card + content panel; mobile stacks them.

### 7. Contact
Header gets a dedicated Contact action on desktop.
Contact page is theme-owned and provides:
- email support action;
- existing-orders self-service link;
- FAQ link.
No ticketing backend is invented by the theme.

### 8. Content / credibility
`/learn/` receives a theme-owned recent-post content hub for guides/SEO credibility rather than old Divi page content.
The existing long-form industry-guide template remains available for structured authority content.

### 9. Legacy content pages
Policy/generic content templates strip shortcode chrome before rendering legacy copy. Policy copy remains a founder/legal review gate and is not made approved by the theme.

## Static validation completed
- PHP syntax: PASS.
- JavaScript parse: PASS.
- `theme.json`: valid JSON.
- ZIP integrity: PASS.
- Theme template scan: no `et_pb_*` references remain inside theme template files.

## Founder staging validation required
P0 screenshots / walkthrough after installing v0.6:
1. Header with real logo, larger icons and left drawer.
2. Drawer open; verify direct navigation.
3. PDP with custom variation dropdown and unified shell.
4. My Account with Woo navigation/content.
5. Cart with no Divi shortcode text.
6. Checkout with no Divi shortcode text.
7. Mobile 390px: header, drawer, PDP, Cart, Checkout with no permanent horizontal overflow.

## Separate operational blocker
If Checkout still says no payment methods are available after the shortcode leak is removed, that is a gateway/configuration workstream, not a storefront-theme layout defect.

## Approval status
v0.6 code package: READY FOR STAGING TEST.
Production deployment: RED until founder UX gate + checkout readiness are approved.

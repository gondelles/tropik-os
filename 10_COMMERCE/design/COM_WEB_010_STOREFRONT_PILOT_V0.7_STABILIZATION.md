# COM_WEB_010 — Storefront Pilot v0.7 Stabilization

Status: PRIVATE_WORKING
Version: 0.1
Updated: 2026-08-30
Venture: Tropik Commerce
Parent workstream: COM-WEB-006 / GitHub Issue #3

## Objective
Stabilize the staging storefront before the real WooCommerce × Printify pilot order by fixing navigation visibility, transactional-page architecture, PDP proportions, responsive interaction patterns, and Tropik's broader public product narrative.

## Founder defects driving v0.7
- left burger drawer is visually trapped/clipped and not navigable;
- circular header controls are not consistently aligned;
- PDP media/purchase panels still lack visual harmony and quantity controls look square/inconsistent;
- Cart still exposes legacy Divi shortcode content;
- Checkout must visually integrate Contact / Delivery / Payment with the rest of the storefront while remaining Woo-owned;
- brand content must establish Tropik beyond merch as a future useful-product / mobility / travel / work-convenience brand without implying unavailable products are already launched.

## v0.7 implementation decisions
1. Portal theme-owned drawer/backdrop to `document.body` at runtime so sticky-header/backdrop-filter containing-block behavior cannot clip the panel.
2. Use one deterministic theme-owned header component with centered Tropik wordmark, aligned circular controls, Contact, Account, Search and native Woo Mini Cart.
3. Reject square logo attachments for the header; use a sufficiently wide real logo when available, otherwise use the working `TROPIK` wordmark.
4. Safely back up legacy Cart / Checkout / My Account page content before migration.
5. Migrate Cart to the native `woocommerce/cart` block and Checkout to the native `woocommerce/checkout` block in the assigned Woo pages; My Account uses `[woocommerce_my_account]`.
6. Theme templates render assigned page content around Woo's native blocks, matching WooCommerce block-theme architecture.
7. Add Appearance → Tropik Pilot Setup to re-run the safe migration or restore backed-up legacy page content.
8. PDP becomes two harmonized rounded cards using one spacing/radius grammar; media does not stretch to match a taller purchase panel. Quantity and CTA use pill/rounded controls.
9. Checkout styling treats Contact → Delivery → Payment as a visually sequential native Woo flow; no custom checkout business logic.
10. Home / Our Story / Field Notes add a public narrative around mobile work, travel, compact utility and useful technology as research territories only. Current availability remains defined by Shop.

## Governance
- No real payment until founder staging UX approval.
- No Printify production Submit until imported line items and Printify charge are reviewed and founder explicitly approves.
- Future mobility/travel/work product territories are not product announcements or claims of availability.
- No public pricing, shipping, returns, tax, sustainability, fulfillment or payment-method claims are introduced by this theme.

## v0.7 QA gate
- Header controls visually centered and usable desktop/mobile.
- Left drawer opens at full intended width/height, scrolls internally, and exposes Shop / Discover / Account / Support routes within three actions.
- PDP has no stretched blank media panel; variations, quantity and Add to Cart follow the same rounded interaction grammar.
- Cart contains the Woo Cart block and no `et_pb_*` output.
- Checkout contains the Woo Checkout block and no `et_pb_*` output.
- My Account shows Woo navigation for Orders / Addresses / Account details.
- No permanent horizontal overflow at 390px.
- Home and story surfaces position Tropik beyond apparel without suggesting future products are already for sale.

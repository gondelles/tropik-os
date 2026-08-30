# COM_WEB_006_STAGING_STOREFRONT_PILOT_BUILD

Status: PRIVATE_WORKING
Version: 0.1
Updated: 2026-08-30
Venture: Tropik Commerce

## Objective
Turn the current staging block-theme shell into a complete, believable, founder-reviewable shopping experience using the two real Printify pilot products before the single paid WooCommerce x Printify test order.

The pilot order must validate the **new Tropik experience**, not a legacy/placeholder storefront.

## Source of truth
Read first:
- `10_COMMERCE/design/COM_05_STORE_UX_PERFORMANCE_REQUIREMENTS.md`
- `10_COMMERCE/brand/COM_08_DESIGN_SYSTEM_v0.1.md`
- `10_COMMERCE/design/COM_WEB_004_CLAUDE_HOME_DESIGN_REVIEW.md`
- `10_COMMERCE/woocommerce/COM_WEB_005_THEME_ASSET_PIPELINE_FIX.md`
- GitHub Issue #2 — WooCommerce x Printify End-to-End Pilot

Relevant decisions:
- DEC-014 — centered Tropik logo + off-canvas/drawer shopping experience.
- DEC-017 — speed, responsive behavior, low maintenance and conversion clarity; native WordPress/WooCommerce preferred over plugin-heavy implementation.

## Current evidence — 2026-08-30
Founder screenshots show:
- Printify order submission is set to **Manual**.
- normal `Enable order routing` appears unchecked in the captured settings screen.
- Printify Choice upgrade/routing setting appears enabled; both current pilot products are Printify Choice products, so do not claim a fixed production partner from these screenshots.
- pilot products currently use two different garment cuts:
  - P14 `Estás todo timbrao` — Bella+Canvas 3010 shown in Printify Choice.
  - P04 `Qué Manguangua` — AS Colour 5080 shown in Printify Choice.
- P14 appears `Published` in the provided Printify screenshot.
- P04/AS Colour 5080 shows `Uploading images` in the provided screenshot; publication/sync to WooCommerce must be verified rather than assumed.
- current Printify displayed prices/costs are evidence only and are NOT founder-approved public pricing decisions.

## Scope — P0 staging experience
Build and validate all of the following on staging:

1. Global header
2. Branded off-canvas navigation
3. Home
4. Shop/catalog or relevant product collection surface
5. Single Product template
6. Mini-cart/cart drawer if feasible natively; otherwise clear cart entry with no fragile custom logic
7. Cart
8. Checkout
9. Order Confirmation / Thank You
10. Footer
11. Responsive/mobile behavior
12. Real dynamic WooCommerce data for the two pilot products

## Architecture
Continue the v0.4 block-theme architecture from `COM_WEB_005`:
- `theme.json` — tokens/global styles/template registration
- `assets/css/tropik.css` — component/responsive styles
- `functions.php` — asset loading only unless a later explicit decision expands the PHP boundary
- `parts/` — reusable header/footer
- `patterns/` — reusable stable editorial/store sections where useful
- `templates/` — Home/page/store/WooCommerce template overrides

Use native WooCommerce blocks/templates for product, cart, checkout and order-confirmation flows wherever possible.
Do not replace WooCommerce checkout logic with hand-built custom PHP.

## Design system
Palette:
- Ink `#171717`
- Ivory `#F6F2E8`
- Sun `#F6B218`
- Leaf `#0F5A46`
- White `#FFFFFF`
- Mist `#ECEBE7`

Typography POC:
- Bricolage Grotesque 700/800 — hero/H1/editorial H2
- Lexend 300/400/500 — navigation/product/body/UI/buttons/prices

Rules:
- Sun = accent/CTA/active state, not dominant background system.
- large areas = Ivory/White/Mist/editorial imagery/selective Ink.
- rounded product/editorial imagery 24–32px where appropriate.
- strong negative space.
- no random mixed-color category-card family.
- product cards prioritize image, product name, real WooCommerce price and clear destination/action.

## Header / navigation
Desktop target:
`[☰ SHOP]        [CENTERED TROPIK LOGO]        [Search] [Account] [Cart]`

Mobile target:
`[☰]             [CENTERED TROPIK]             [Cart]`

Drawer:
- SHOP
  - New
  - T-Shirts
  - Shop All
- COLLECTIONS only when there is a live/meaningful collection
- DISCOVER
  - Our Story
  - Materials & Care only if truthful source content exists
  - FAQ only if truthful content exists
  - Shipping & Returns only if actual policy choices exist

Do not expose empty Hoodies/Caps/Posters/Travel categories merely to make navigation appear full during the two-product pilot.

## Home — staging pilot content model
Use real dynamic products where product data is shown.

Recommended section order:
1. thin/header navigation
2. editorial hero
3. `Shop the pilot` / featured-products section powered by WooCommerce Product Collection showing the two real products
4. optional compact product-type/category surface only for categories with live products
5. editorial Tropik/Calle story block using safe brand copy, not unapproved mission/legal/sustainability claims
6. neutral reassurance/navigation strip using links, not invented promises
7. dark Ink footer

### Safe working Home copy
This is staging working copy, not canonical public campaign copy:
- Eyebrow: `TROPIK / CALLE`
- H1: `Hecho para moverse.`
- Support: `Diseños que nacen de frases, ritmo y vida de calle.`
- Primary CTA: `VER PRODUCTOS`

Do NOT use:
- `limited`, scarcity or countdown claims
- sustainability/carbon claims
- return-window promises
- shipping-speed promises
- material claims not coming from WooCommerce/Printify source product data
- fake product counts
- invented payment-method copy

## Product collection / Shop
- dynamic WooCommerce Product Collection; no static fake cards
- show only currently published/available pilot products during the pilot
- product card minimum: image, product name, real configured WooCommerce price, link/action
- no category or filtering complexity until assortment justifies it

## Single Product template
Use WooCommerce product data dynamically.
Required experience:
- product gallery above fold on mobile / prominent on desktop
- product title
- real price
- variation selectors for the actual published attributes (size/color)
- clear Add to Cart
- stock/availability behavior from WooCommerce, not invented text
- product description/content sourced from actual Printify product data and founder-approved edits
- no generated material/fit/care/shipping claims unless confirmed by the underlying product listing/provider
- clear path to cart after Add to Cart

Do not change Printify-linked SKUs manually.

## Cart / mini-cart
- cart status always discoverable from header
- product thumbnail/name/variation/quantity/price visible
- easy remove/update
- strong Checkout CTA
- no intrusive upsells for this pilot
- use native WooCommerce blocks where possible

## Checkout
Use WooCommerce Checkout block/template unless a documented compatibility issue forces a fallback.
Requirements:
- simplified branded checkout header
- minimum necessary fields
- order summary visible/understandable
- actual configured shipping and payment methods only
- no invented trust badges
- mobile-first QA

No real paid test order until founder explicitly approves the checkout configuration and amount.

## Order confirmation
Brand the WooCommerce Order Confirmation template while keeping actual order details dynamic.
Verify:
- order number/status/details
- customer email confirmation
- no invented fulfillment promises

## Printify pilot integration constraints
- Printify order submission remains Manual for the pilot.
- WooCommerce order must reach `Processing` for normal Printify import behavior.
- after payment/import, STOP before Printify production submission.
- founder must review imported line items/variants + Printify charge and explicitly approve production.
- because current pilot products are Printify Choice, do not infer a fixed print provider without separate evidence.

## Staging-only implementation sequence
### Gate A — Theme/package ready
- build complete theme/template changes
- no production deployment
- no destructive plugin removals

### Gate B — Staging populated
- two real Printify-linked products visible if they are actually published to WooCommerce
- Home and Shop use live WooCommerce data
- PDP works for both
- cart works with both line items
- checkout renders actual configured gateway/shipping options

### Gate C — Founder UX review
Review desktop + mobile:
`Home -> Product -> variation -> Add to cart -> Cart -> Checkout`

Founder must explicitly approve UX before the real pilot purchase.

### Gate D — Paid pilot
Handled under GitHub Issue #2.
Do not submit Printify production without a second explicit founder approval after import/cost review.

## Acceptance checklist
### Header / navigation
- [ ] logo visually centered on desktop/mobile
- [ ] header hit areas aligned
- [ ] drawer works keyboard/touch and closes predictably
- [ ] cart state visible

### Home
- [ ] no empty/placeholder visual shell
- [ ] hero feels Tropik, not default WordPress
- [ ] real pilot products are dynamically surfaced
- [ ] no fake claims
- [ ] responsive without horizontal overflow

### PDP
- [ ] both real products resolve to new template
- [ ] real gallery/price/variation data renders
- [ ] Add to Cart works
- [ ] mobile first interaction is clear

### Cart / checkout
- [ ] both pilot products can coexist in same cart
- [ ] variants survive cart transition
- [ ] totals/shipping/payment are understandable
- [ ] checkout uses actual configuration only
- [ ] no forced account creation unless existing policy requires it

### Technical
- [ ] CSS asset loads reliably using v0.4 pipeline fix
- [ ] no PHP business-logic expansion without approval
- [ ] no unnecessary new paid plugin
- [ ] no visible fatal/error notices
- [ ] no obvious duplicate WooCommerce UI from legacy theme/plugins

## Definition of Done
`COM-WEB-006` is complete only when the founder can use staging on mobile and desktop to navigate:

**Home -> live pilot product -> select variation -> Add to Cart -> cart -> checkout**

with the approved Tropik POC visual system and no invented product/policy/business facts.

The real payment remains a separate founder gate under Issue #2.

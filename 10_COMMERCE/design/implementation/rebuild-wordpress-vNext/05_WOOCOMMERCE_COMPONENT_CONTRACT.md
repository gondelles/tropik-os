# 05_WOOCOMMERCE_COMPONENT_CONTRACT

**Status:** PRIVATE_WORKING
**Sources:** `RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md`, Golden Master `INTERACTIONS.md`/`COMPONENT_INVENTORY.md`, `RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md` §5, `RB_MVP_MATERIALS_CATALOG_v0.1.md`

## 1. Shop information architecture — exactly two first-level collections

`SHOP` (drawer heading, not a redundant child link) → `Merch` | `Products`.

- Landing markup: `.tk-shop-collections` — stacked named `.tk-shop-collection` rows, each its own `.tk-carousel`. This is the confirmed real shape (`COMPONENT_INVENTORY.md`), not a generic Woo shop grid.
- Do not add a third first-level collection. `Re:Build Verified Reuse Components` stays out of `Products` until separately approved (RB-D-008/`RB_MVP_MATERIALS_CATALOG_v0.1.md`).

## 2. Products collection — current MVP catalog (exactly 4 live SKUs)

| SKU | Name | Status | Commerce behavior |
|---|---|---|---|
| `RB-RB-040` | Re:Build Road Base 0–40 | FIELD TRIAL / local spec TBD | Inquiry/quote-led, not default Add-to-Cart |
| `RB-MF-GEN` | Re:Build Mineral Fill | FIELD TRIAL / local spec TBD | Inquiry/quote-led |
| `RB-MA-025` | Re:Build Masonry Aggregate 0–25 | FIELD TRIAL / **YELLOW** until source variability proven — must not visually read as tested/available | Inquiry/quote-led |
| `RB-FE-SCRAP` | Re:Build Ferrous Scrap | BUYER VALIDATION | Inquiry/quote-led, separate recycler lane |

Excluded from this collection for now: `RB-REUSE-VER` (Verified Reuse Components) — `SELECTIVE HOLD`, case-by-case, stays outside the primary Products collection.

**Product data model** (every Re:Build Materials product): name, functional subtitle, lifecycle status badge, SKU, nominal gradation/size, source material, intended applications, prohibited uses, current availability status, batch/lot note, QA/tests required, local engineering-spec status, evidence/methodology links, minimum inquiry quantity if established, service area/pickup-delivery rule, inquiry CTA.

**Woo object mapping:** WooCommerce Products in **catalog/quote mode**; category `Re:Build Materials`. Status field is a custom taxonomy/meta layered on top of native stock status (`Available / Trial batch / Hold / Out / By request`), not native stock status alone — native stock status does not carry lifecycle semantics like `FIELD TRIAL` or `BUYER VALIDATION`.

## 3. Merch collection

Normal WooCommerce products, normal order/stock/fulfillment flow, category `Re:Build Support Merch`, kept financially/reporting-separate from material and grant/donation revenue (RB-D-010).

**Manguangua/Timbrao are NOT seeded here.** Per `10_COMMERCE/brand/COM_09_CURRENT_CREATIVE_APPROVAL_OVERRIDE_2026-09-07.md`, both are `CREATIVE BACKLOG — REQUIRES NEW FOUNDER APPROVAL` and must not appear as products, mockups-as-final, or catalog seed data. See `08_CONTENT_AND_CLAIM_GATE_MAP.md` §3 for the full rule.

## 4. Bag — single custom Woo-backed drawer (non-negotiable, RB-D-038)

**Architecture:** ONE `.tk-cart-panel`, a `TkPanel` instance sharing its open/close logic with the left drawer (`INTERACTIONS.md` #1). **Never** embed the WooCommerce Mini-Cart block inside it — that nested-drawer pattern is the exact defect that got v2 rejected (`02_THEME_CODE_GAP_AUDIT.md` row 3).

**Populated layout (top to bottom):** `Your bag (N)` heading with live count → close X → per line: thumbnail, product title, variation/attributes, line price, quantity stepper (`initQty` contract: `button[data-step]` +/- clamped to the input's own `min`/`max`), trash/remove → subtotal → shipping/tax/discount note → `View my bag` button → `Checkout` button.

**Required behaviors, each independently testable:**
1. Add-to-cart (from any surface: rail card, PDP, quote-not-applicable items excluded) refreshes drawer contents and header bag-count badge.
2. Quantity +/- refreshes line total, subtotal, and count.
3. Remove refreshes drawer contents, subtotal, and count; if last item, transitions to the empty state.
4. Empty state uses `.tk-empty` (icon + message), not a blank panel.
5. Internal scroll works when line count exceeds panel height; footer (subtotal/CTAs) stays reachable/pinned.
6. Focus trap + ESC + scrim-click + return-focus-to-trigger all work (shared `TkPanel` contract).
7. Panel width caps at `min(92vw, 400px)` (DEC-027) — never `100vw`.
8. No second Woo cart UI (default Mini-Cart widget/block, default `cart.php` fragment popup, etc.) renders anywhere simultaneously.

**Implementation note:** use WooCommerce's cart fragments API (`wc_cart_fragments` / `woocommerce_add_to_cart_fragments`) to drive the custom drawer's AJAX refresh, rather than reimplementing cart state client-side — this keeps the single source of truth in Woo while presenting only the custom markup.

## 5. Recovered-material quote/inquiry flow

`Product page → inquiry form → manual qualification → availability/spec check → quote → founder/commercial approval → customer acceptance → manual Woo order if useful → dispatch → closeout.`

**Form fields:** company/organization, contact, product (auto-filled), intended use, quantity (t or m³), required gradation/specification, project location, requested date, pickup vs. delivered, engineer/specification attachment (optional), notes.

This is a **form-attached-to-product** pattern, not the standard Woo Add-to-Cart → Checkout path, for all 4 current Products SKUs. Do not wire default Add-to-Cart behavior to these products.

## 6. Merch checkout flow

Standard: `Product → cart → checkout → POD/local fulfillment → order status → customer service.` Uses the normal Woo cart/checkout described in §7-8 below.

## 7. Checkout

Single-page, collapsible-step architecture (`.tk-checkout-layout`, `initCollapseGroup`/`openOnly` — distinct from the FAQ accordion, single-section-open, linear step-through via each section's "Continue" button). Billing-address toggle (`initBillingToggle`, "same as shipping" checkbox) shows/hides a billing panel. Form fields must use the Golden Master's dark field tokens (`--tk-field-bg` etc.) — `TOKENS.md` explicitly flags that Woo ships unstyled/white-by-default fields as a known failure mode to avoid.

## 8. My Account

Quick-action layout must not collapse to 4 cramped mobile columns (recurring, explicitly-flagged founder complaint). No specific target layout is captured in a screenshot (`03_GOLDEN_MASTER_PARITY_MATRIX.md` row 21 — BLOCKED for visual reference); build to 2-column-or-stacked on mobile per the standing instruction, confirm with founder once a WordPress screenshot exists.

## 9. Non-Woo systems of record (explicitly out of WooCommerce)

Per `RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md`, WooCommerce/WordPress are **not** the system of record for: HSE incident records, hazardous-material chain-of-custody, calibrated weigh tickets, laboratory result master files, mass-balance workbook, grant accounting, engineering approvals, or worker payroll/PII. The site may display **approved summaries** exported from those systems (see `RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1.md`), never raw/live operational data.

## 10. Donations / funding — commerce-layer rule

`RED until specialist approval`: WooCommerce checkout must never be presented or coded as a tax-deductible donation, must not promise beneficiary percentages, must not issue charitable receipts, and donation/support revenue must not mix with normal merch/material revenue in reporting. Nothing in this build should add a "Donate" product or checkout path.

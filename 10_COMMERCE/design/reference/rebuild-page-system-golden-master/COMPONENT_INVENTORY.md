# Golden Master — Component Inventory

Every reusable `.tk-*` class actually defined in the Artifact's CSS (components.css + pages.css
layers), grouped by function. This is an inventory of what exists, not a proposal — nothing listed here
was added for this freeze.

## Buttons
`.tk-btn` (base) with `--primary` (sun bg / ink text), `--secondary` (outline), `--ghost` (text + arrow
that translates on hover), `--block`, `--sm`. `.tk-icon-btn` (46px circular, header/utility icons) with
an optional `.tk-icon-btn__badge` (cart count pill).

## Header / navigation shell
`.tk-header` (sticky, 72px/60px mobile, blurred translucent bg) → `.tk-header__inner` (3-col grid:
start / centered brand / end) → `.tk-header__brand` (logo sized by height only, `width:auto`, never
cropped) → `.tk-header__start` / `.tk-header__end` (icon clusters). `.tk-search-bar` (sticky secondary
bar under header, own input styling).

## Drawer (left nav) & Cart panel (right)
`.tk-drawer-backdrop` / `.tk-cart-backdrop` (shared fade-in overlay pattern) → `.tk-drawer` /
`.tk-cart-panel` (fixed, `translateX`, capped at `min(92vw,400px)` per DEC-027) → `__head` / `__body`
(scrollable) / `__footer`. Drawer body uses `.tk-drawer__cols` (2-col grid, collapses to 1 col ≤560px),
`.tk-drawer__group-title` (eyebrow-style group label), `.tk-drawer__list`, `.tk-drawer__support-card`,
`.tk-drawer__legal`.

## Cards
`.tk-card` (base charcoal card, light-surface variant via `[data-surface="light"]`). `.tk-territory-card`
(top-accent-bar card, 3 color variants: `--work`=sun, `--travel`=green, `--everyday`=coral — used for
3-way value/segment splits). `.tk-value-card` (numbered index card). `.tk-product-card` (media +
tag + title + price, `del`/`--sale` price states). `.tk-media-card` (article/story card: media + tag +
title + excerpt + meta).

## Tags / chips / breadcrumb / callout
`.tk-chip` (pill filter, `.is-active`/`[aria-pressed]` state). `.tk-breadcrumb`. `.tk-callout` (icon +
title + text, `--gate` and `--success` variants). `.tk-gate-tag` (sun pill, "content pending approval"
marker — used throughout legal/FAQ pages). `.tk-status-badge` / `.tk-claim-badge` (Re:Build-specific,
DEC-026 — map directly to the status/claim token table in `TOKENS.md`).

## Forms
`.tk-field` / `.tk-field__control` (54px height, dark field tokens), `.tk-select`, `.tk-checkbox` /
`.tk-radio`, `.tk-variant-group` / `.tk-variant-swatch` (product option picker, disabled/pressed
states), `.tk-form-row` (2-col grid).

## Accordion / collapse
`.tk-accordion` + `.tk-accordion-item` (FAQ pattern, plus-to-x icon rotation). `.tk-collapse` (checkout
step pattern: numbered step circle, complete state, edit link, expand/collapse body) — distinct from
the accordion, used specifically for the single-page fast-checkout flow.

## Progress / stepper
`.tk-stepper` (dot + line, active/done states).

## Gallery & carousels (3 distinct patterns, do not conflate)
1. `.tk-gallery` — product image gallery: stage + prev/next nav + thumbnail strip, keyboard + swipe.
2. `.tk-hero-carousel` — full-bleed home hero slider: autoplay (pauses on hover/focus), dots, arrows.
3. `.tk-carousel` — the general-purpose **card rail**: horizontal scroll-snap track + prev/next buttons
   that scroll by one page, buttons hidden ≤640px (native touch scroll takes over). This is the pattern
   behind Materials/products rows on Home and the Shop's collection rows.

## Tables, modal, toast, empty state
`.tk-table` / `.tk-table-wrap` (horizontally scrollable). `.tk-modal-backdrop` / `.tk-modal`. `.tk-toast`
(bottom-center, auto-dismiss pattern per its JS). `.tk-empty` (icon + message, used for empty cart/order
states).

## Page-level layout classes (examples of composed sections)
`.tk-hero` (home-style intro band). `.tk-pieces-grid` / `.tk-territories-grid` / `.tk-values-grid` /
`.tk-learn-grid` / `.tk-support-grid` (3–4-col static grids, distinct from the scrolling `.tk-carousel`).
`.tk-story-preview` (2-col image+text split). `.tk-closer` and `.tk-mission-banner` (two distinct CTA
band shapes — see `PATTERN_MAP.md`). `.tk-shop-collections` / `.tk-shop-collection` (stacked named
carousel rows — this is the real markup shape for Shop → Merch / Products per the founder's 2026-09-07
IA). `.tk-product-layout` / `.tk-buy-panel` (PDP). `.tk-cart-layout` / `.tk-order-summary`.
`.tk-checkout-layout` / `.tk-checkout-sections` / `.tk-payment-slot` (single-page collapsible checkout).
`.tk-legal-body` / `.tk-legal-layout` / `.tk-toc` / `.tk-anchor-nav` (the editorial/policy pattern — see
`PATTERN_MAP.md`). `.tk-contact-grid` / `.tk-contact-form` (the contact/Need-teaser pattern).
`.tk-faq-cats` / `.tk-faq-group` (FAQ category chips + grouped accordions).

## Re:Build-specific additions (DEC-026, on top of the base storefront system)
`.tk-hub-head` (section header with eyebrow+h2 on the left, either a "see more" ghost link or prev/next
nav buttons on the right — fixes the carousel-arrow overlap bug DEC-026 flagged). `.tk-stage-flow` /
`.tk-stage-flow__step` (Assess→Sort→Recover→Make→Rebuild horizontal process indicator). `.tk-stage-grid`
/ `.tk-stage-card` (numbered process-stage mini-cards). `.tk-evidence-block` (claim badge + source line
+ caveat text — the evidence/stat pattern's supporting component).

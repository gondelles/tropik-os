# 06_WORDPRESS_EDITABILITY_AND_PATTERN_MAP

**Status:** PRIVATE_WORKING
**Rule:** theme PHP owns shell/functional components; the WordPress editor owns normal page copy, headings, media, links and section order. Final marketing copy is never hard-coded in PHP. No Divi dependency for any new Re:Build page. Source: `RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md` §6, Golden Master `PATTERN_MAP.md`.

## 1. The 8 required patterns → Gutenberg registration

| # | Pattern | Source markup (Golden Master) | Editable fields | Status |
|---|---|---|---|---|
| 1 | Hero / intro | `.tk-hero.tk-surface-night` → eyebrow → h1 → lede → button row | eyebrow text, headline, lede paragraph, primary CTA (label+link), secondary CTA (label+link), surface variant | READY — build from real markup |
| 2 | Evidence / stat | `.tk-section.tk-surface-graphite` → big number → lede → `.tk-evidence-block` | stat number, unit/caption, claim-badge type (fact/hypothesis/target — maps to `TOKENS.md` claim tokens), source citation text, caveat/methodology link | READY |
| 3 | Narrative zone | alternating-surface eyebrow→h2→lede sections, optional supporting grid or `.tk-callout` | eyebrow, heading, 1–2 lede paragraphs, surface variant (night/graphite), optional child grid block | READY |
| 4 | Card rail | `.tk-hub-head` + `.tk-carousel` of `.tk-product-card` or `.tk-media-card` | section eyebrow, heading, "see more" link (optional), card items (repeatable inner blocks: media, tag, title, price/excerpt, link) | READY — **must implement the mobile one-card-visible + visible-centered-arrows override**, not the frozen ≤640px-hide-arrows rule (see `03_GOLDEN_MASTER_PARITY_MATRIX.md` row 8) |
| 5 | CTA band | Shape A `.tk-closer` (light ask, 1 button) / Shape B `.tk-mission-banner` (heavier, 2 buttons, stacks ≤760px) | heading, eyebrow, supporting paragraph (Shape B only), button(s) label+link, shape selector | READY — register both shapes as pattern variants, not two unrelated patterns |
| 6 | Need / Work With Us teaser | homepage: 3× `.tk-territory-card` (`RB_WORK_WITH_US...`'s routes distilled to 3); full page: `.tk-contact-grid` (numbered 01/02/03 cards) + `.tk-contact-form` | per-card: eyebrow, short copy, ghost link; form: field set per `05_WOOCOMMERCE_COMPONENT_CONTRACT.md`-adjacent intake schema in `RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1.md` §4 | READY for homepage teaser variant; **the actual 10-route Work With Us page content does not exist yet** (Content approval order item 8, not started) |
| 7 | Impact / Update teaser | **GAP — no dedicated markup** | N/A until founder decides | **BLOCKED — do not invent; see `01_SOURCE_OF_TRUTH...md` §3.4.1.** Interim recommendation stated there (reuse `.tk-media-card`) is a recommendation, not an approval to proceed |
| 8 | Editorial / policy section | `.tk-legal-layout` (TOC sidebar) or `.tk-anchor-nav` (horizontal chip TOC) variants, `<h2 id>` sections, `.tk-gate-tag` placeholder for missing legal copy | title, "last updated" date, TOC style selector, body sections (repeatable heading+richtext blocks) | READY — **preserve the `.tk-gate-tag` placeholder behavior** for any policy text not yet founder-supplied; do not invent legal copy to fill it |

**Score: 6 of 8 fully ready to build now, 1 partially ready (teaser pattern ready, its page content is not), 1 blocked on a founder decision.**

## 2. Page-type → pattern composition map

Built from `RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md`'s "Refined Re:Build sitemap" and the content approval order:

| Page | Composed from patterns |
|---|---|
| Home | Hero/intro → Evidence/stat → Narrative zone (Recovery/Method framing) → Card rail (Materials) → Narrative zone or stat (Impact/Proof) → Need teaser (homepage variant) → Card rail or narrative zone (Local Work) → CTA band (Ways to Help) → CTA band or dedicated block (Keep Updated) |
| How It Works | Narrative zone (intro) → Card rail or grid (`.tk-stage-grid`/`.tk-stage-card` numbered stages) |
| Materials landing | Card rail (all SKUs) → CTA band |
| Material detail (×4 SKUs) | Custom Woo product template (not a generic pattern — see `05...md` §2) + Evidence/stat for test data once available |
| Impact | Evidence/stat (repeated per KPI) → Impact/Update teaser (**blocked**, #7) |
| Needs / Support | Card rail or grid (Need cards) → Need teaser form |
| Work With Us | Need teaser (full `.tk-contact-grid` variant, 10 routes, not 3) |
| Transparency | Narrative zone → editorial/policy-style report sections |
| About | Narrative zone (repeated, this is exactly `our-story.html`'s existing shape) |
| FAQ | Editorial/policy variant with `.tk-faq-cats`/`.tk-faq-group` (accordion, not TOC sidebar) |
| Contact | Need teaser (full variant) |
| Updates | Card rail or grid of Impact/Update teaser items (**blocked on #7**) |

## 3. Non-developer editing guarantee

A page assembled from the patterns above must inherit, with zero custom CSS/PHP: canonical container width (`--tk-container-max: 1280px`, `--tk-content-max: 760px`), typography scale, `--tk-section-gap` spacing rhythm, card geometry/radius, button styles, and the four semantic accent tokens (Sun/Green-or-Leaf pending confirmation/Coral/Ivory). This is the acceptance test for pattern registration: create a throwaway test page in the WordPress editor using only registered patterns and confirm it looks correct without touching code.

## 4. Content seed requirement

Include a WXR export and/or a deterministic PHP/WP-CLI seed script that creates each approved page using these registered patterns, so content doesn't have to be hand-typed into the editor from scratch during staging setup — required per the fidelity prompt's Delivery section.

## 5. No-hardcode enforcement

Theme templates (`single-product.php`, `archive-product.php`, `cart.php`, `checkout` template, `my-account` template overrides) own **functional structure and Woo data binding only**. Any marketing copy currently sitting in those templates as literal strings (headings, CTA labels, empty-state messages beyond Woo's own defaults) must move to either a registered pattern, a theme option/customizer field, or a translatable string constant reviewed against the content-approval package — never a literal string a non-developer can't reach.

# 02_THEME_CODE_GAP_AUDIT

**Status:** PRIVATE_WORKING
**Scope:** `tropik-rebuild-theme-v2` (SHA-256 `d8626bb2e2f1aa8013489f8228b32f27db7955df2e286f9f81507e98554b2e11`, internal version `2.0.0`) vs. the Golden Master (`10_COMMERCE/design/reference/rebuild-page-system-golden-master/`)

## 0. Method limitation — read this before the table

**The v2 theme source is not present in this repository** (`01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md` §4). This audit is built entirely from findings already recorded in `RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1.md` and decision-log entries RB-D-037/038 — a prior Claude Code session that did have the zip. Every row below is sourced, not re-derived from code this session actually read. Rows are marked **[DOCUMENTED]** where they come from that prior audit, and **[GOLDEN MASTER]** where the gap is inferred by comparing what the Golden Master now requires against what the documented v2 behavior does — those inferences follow directly from the two sources without adding new claims about v2 internals this session cannot see.

If a component-level PHP/CSS diff is wanted before Iteration 1 starts, commit the v2 zip's extracted source to this repo (e.g. `10_COMMERCE/design/reference/tropik-rebuild-theme-v2/`) or provide it directly to the Lane-2 build session, and this document should be re-run against actual files.

---

## 1. Component-by-component disposition

| Component | Documented v2 behavior | Golden Master requirement | Disposition | Confidence |
|---|---|---|---|---|
| Header | Renders Language + textual "Support" button + Bag, but **lacks** Search and Account controls | `[hamburger] — [centered toucan] — [ES/EN pill] [search] [account] [bag+count]` desktop; no textual Support button unless Golden Master explicitly has one (it doesn't) | **REPLACE** — missing controls can't be patched in, needs the full utility cluster rebuilt against `.tk-header__start`/`.tk-header__end` | DOCUMENTED |
| Language switch | Polylang default flag+name output | Custom ES/EN segmented text pill, no flags, from real Polylang routes | **REPLACE** | DOCUMENTED |
| Bag / Cart | WooCommerce Mini-Cart block nested inside a separate custom Re:Build drawer (two cart UIs) | ONE custom `.tk-cart-panel` (`TkPanel` instance) backed by Woo cart data/AJAX; never nest the Mini-Cart block | **REPLACE** — architectural mismatch, not a styling fix. Golden Master's `INTERACTIONS.md` #1 gives the exact `TkPanel(panelId, backdropId, openSelector, closeSelector)` contract to reproduce instead | DOCUMENTED + GOLDEN MASTER |
| Left drawer nav | Assigned via generic `wp_nav_menu()`, flattening the approved grouped structure; does not close on in-panel link tap | Grouped `.tk-drawer__cols` / `.tk-drawer__group-title` structure (Explore Re:Build / Support / Shop / My Account per the 2026-09-07 IA); `TkPanel` closes on X, scrim, ESC, **and route/link activation** | **REPLACE** — both the markup structure and the missing close-on-navigate behavior need rebuilding, not patching a single menu location | DOCUMENTED |
| Card rails / carousels | Arrows explicitly hidden `≤640px` | Founder override: rail arrows visible and vertically centered on mobile, one card at a time, never hidden | **REFACTOR** — the JS module (`initCarousel`/`scrollByPage`) and the `.tk-carousel__btn` hide rule both need the mobile behavior change documented in Golden Master `INTERACTIONS.md` #4; this is a targeted fix to an existing pattern, not a rebuild from zero, once the underlying `.tk-carousel` component exists | DOCUMENTED + GOLDEN MASTER |
| WooCommerce shop/product/cart/checkout/account surfaces | "Still require stronger visual parity with the Artifact"; staging screenshots show section geometry/card/shell drift and stale content contamination | Same Page System as editorial pages: no default Woo visual leakage, no blank placeholders, no giant empty header zones, proportional/scrollable product gallery, My Account not 4 cramped mobile columns | **REPLACE** — general "drift" with no specific defect list means treat as ground-up build against the Golden Master's card/form/button primitives (`.tk-product-card`, `.tk-buy-panel`, `.tk-cart-layout`, `.tk-checkout-layout`, `.tk-field`), not incremental patching | DOCUMENTED |
| Design tokens | Not separately documented as wrong, but v2 is rejected wholesale as the fidelity baseline (RB-D-037) | Exact `:root` custom properties in `TOKENS.md`, especially Coral `#F25B66` and the font-loading requirement (`Plus Jakarta Sans` must be actually enqueued, not just referenced in CSS — Golden Master flags this exact historical failure mode) | **REPLACE / RE-VERIFY** — even if v2 happens to define similar-looking tokens, they must be checked character-for-character against `TOKENS.md` rather than assumed correct, per the Golden Master's own instruction not to re-derive or approximate any hex value | GOLDEN MASTER |

---

## 2. What this audit explicitly does NOT claim

- It does not claim v2's PHP architecture, template hierarchy, build tooling, or dependency list are good or bad — none of that was inspected this session.
- It does not claim the list of defects above is exhaustive. It is the list that was documented; a real file-level pass could find more or fewer issues.
- It does not recommend patching v2 in place as a general strategy. Per `RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt` §3 ("Do not attempt a single giant CSS patch over v2. Refactor shared primitives first.") and the founder's own instruction that v2 is "reusable code only," the recommended posture for Iteration 1 is: **use v2's PHP/template scaffolding and WooCommerce wiring where it is structurally sound and swap the primitives (tokens, header, drawer, bag, cards, buttons) for Golden-Master-derived equivalents**, rather than deciding file-by-file reuse before the actual source can be inspected.

## 3. Immediate recommendation before Iteration 1

Obtain the actual v2 source (or its extracted contents) into this repository or the Lane-2 session before component work begins, so `KEEP` decisions can be made against real files instead of a documented defect list. Until then, the safe default for Iteration 1 is: **treat every listed component as REPLACE**, since every one of them has a specific, sourced reason to be rebuilt rather than patched.

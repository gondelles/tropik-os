# Golden Master — Required Pattern Map

The founder's synchronized context pack (2026-09-07) requires these 8 minimum reusable Gutenberg
patterns for Lane 2. Each one below is mapped to markup that **already exists** in the Artifact —
verified by reading the actual HTML, not assumed. Where nothing equivalent exists, it's marked GAP
rather than invented.

## 1. Hero / intro

**Source:** `rebuild-home.html` hero, also `our-story.html` and `what-we-build.html` heroes (same shape
reused 3×, confirming it's a real pattern, not a one-off).
**Markup:** `.tk-hero.tk-surface-night` → `.tk-container` → `.tk-eyebrow` (kicker) → `<h1 class="tk-h-xl">`
(headline, `max-width` constrained in ch units) → `.tk-lede` (supporting paragraph) → `.tk-flex.tk-gap-3`
button row (`.tk-btn--primary` + `.tk-btn--secondary` or `--ghost`).
**Variants seen:** centered text-align on the narrative pages (`our-story`, `what-we-build`) vs.
left-aligned with a `.tk-hero-carousel` background option on `index.html`'s legacy hero. Re:Build's own
`rebuild-home.html` uses the plain non-carousel version.

## 2. Evidence / stat

**Source:** `rebuild-home.html`, the "2.1M tonnes" stat band.
**Markup:** `.tk-section.tk-surface-graphite` → centered `.tk-h-xl` number in `--tk-sun` color →
`.tk-lede` explaining it → `.tk-evidence-block` (`.tk-evidence-block__row` with `.tk-claim-badge
tk-claim-badge--fact` + `.tk-evidence-block__source` citation text, then `.tk-evidence-block__text` for
a caveat/methodology link). This is the only place in the Artifact combining a large number with a
sourced claim badge — the correct pattern to reuse for every Re:Build stat, not just this one.

## 3. Narrative zone

**Source:** `our-story.html` / `what-we-build.html` — the repeating eyebrow→h2→lede sections that
alternate `.tk-surface-night` / `.tk-surface-graphite` down the page.
**Markup:** `.tk-section[--tight] .tk-surface-{night|graphite}` → `.tk-container.tk-content-width
.tk-stack--lg` → `.tk-eyebrow` → `<h2 class="tk-h-lg">` → one or two `.tk-lede` paragraphs. Sometimes
followed by a supporting grid (`.tk-philosophy-steps`, `.tk-territories-grid`, `.tk-values-grid`) or a
`.tk-callout`. This is the workhorse pattern for any "explain a concept in prose" section — Recovery,
Process overview, Impact overview, About, etc. should all compose from this plus a supporting grid.

## 4. Card rail

**Source:** `rebuild-home.html` Materials section; `shop.html`'s `.tk-shop-collections` rows.
**Markup:** `.tk-hub-head` (eyebrow+h2 left, `.tk-hub-head__controls` prev/next buttons or a ghost
"see more" link right) → `.tk-carousel` → `.tk-carousel__track` (horizontal scroll-snap) of
`.tk-carousel__item` wrapping either `.tk-product-card` (products/materials) or `.tk-media-card`
(stories/updates). Buttons hide ≤640px; native swipe takes over.
**Founder's mobile-rail override (2026-09-07 context pack) — read before Lane 2 builds this:** on
mobile, narrative/landing rails must show **exactly one card at a time**, never a partial peek of the
next card, cards must stay horizontal (never stack vertically), and the prev/next arrows must stay
**visible and vertically centered**, not hidden as the current `≤640px { display:none }` rule does.
**This is a real, confirmed gap between the current Artifact CSS and the founder's current requirement
— do not silently carry the `≤640px` hide-arrows rule into Lane 2's rebuild.** Catalog/collection grid
pages (not narrative rails) may keep normal vertical scrolling per the same rule.

## 5. CTA band

**Source:** two distinct existing shapes — both valid, used for different weights of ask.
**Shape A — `.tk-closer`:** flex row, heading+eyebrow stack on the left, one primary button on the
right, wraps on narrow widths. Used for a single, low-friction ask ("Read the free guides →").
**Shape B — `.tk-mission-banner`:** grid (content col + button col, stacks to 1 col ≤760px), heavier
surface background, room for a longer supporting paragraph plus **two** buttons. Used in `our-story.html`
for the "Support the mission" band. This is the closer match for Re:Build's Support/Shop CTA weight.

## 6. Need / Work With Us teaser

**Source:** `contact.html`'s `.tk-contact-grid` (3-card "Fastest / Self-serve / Browse" row) +
`.tk-contact-form`; also `rebuild-home.html`'s Support section (`.tk-territory-card` × 3: Donate / Shop
/ Partner).
**Markup:** for the 3-path teaser: `.tk-grid.tk-cols-3` of `.tk-territory-card` (eyebrow + short copy +
ghost link with arrow), one card per path. For a fuller "reach out" version: `.tk-contact-grid` (3
`.tk-card`s, each numbered "01/02/03" with an eyebrow, short headline, muted copy, one CTA button) above
a `.tk-contact-form` (`.tk-field` rows in a `.tk-card`).
**Note for Lane 2:** the founder's IA (2026-09-07) names this specifically "Work With Us" as its own
Support sub-item, distinct from the general Contact Us page — the 3-territory-card shape
(`rebuild-home.html`'s Support section) is the closer structural match; the fuller `.tk-contact-grid` +
form shape stays the pattern for the general Contact Us page.

## 7. Impact / Update teaser

**GAP — no dedicated pattern exists in the Artifact today.** `rebuild-home.html`'s Impact section is 3
plain `.tk-stage-card`s with claim badges (Target/Working hypothesis), which covers "Impact" as a
static summary, but there is no card shape anywhere in the Artifact built specifically to preview a
chronological Update/field-report post (title + date + excerpt + link), the way `.tk-media-card` does
for a generic story/article. **Flagging this rather than inventing a new component** — Lane 2 should
either reuse `.tk-media-card` (it already has the right anatomy: media/tag/title/excerpt/meta) for
Update previews, or the founder should confirm a distinct shape is wanted before Lane 2 builds one from
scratch. This is a real open item, not a silent gap-fill.

## 8. Editorial / policy section

**Source:** `terms.html`, `privacy.html`, `shipping-returns.html` — these already exist in the Artifact
and are the exact pattern needed for the founder's 2026-09-07 IA additions (Shipping, Terms &
Conditions, Privacy Policy, Return Policy all now named as real Support sub-pages).
**Markup:** `.tk-section--tight` → `.tk-eyebrow` ("Legal") → `<h1 class="tk-h-lg">` → "Last updated"
line (`data-wp-dynamic="legal-last-updated"`) → `.tk-legal-layout` (2-col: `.tk-toc` sidebar of anchor
links + `.tk-legal-body` with `<h2 id="...">` sections). `shipping-returns.html` uses a variant with the
TOC as a horizontal `.tk-anchor-nav` chip row above the content instead of a sidebar — both are valid,
pick one per page based on section count. Every section currently uses the `.tk-gate-tag` "Final launch
policy content required" placeholder — correct behavior per this project's evidence rules; Lane 2 should
preserve that placeholder pattern for any policy text the founder hasn't supplied yet, not invent legal
copy.

## Summary for the founder

7 of 8 required patterns already exist in the Artifact, verified against real markup. 1 gap
(Impact/Update teaser) needs a decision, not an invention. 1 explicit conflict needs resolving before
Lane 2 builds card rails (the current desktop-only-arrows/hide-on-mobile rule vs. the 2026-09-07 context
pack's one-card-at-a-time, always-visible-arrows mobile rail requirement) — both are called out above so
neither gets silently decided by Claude Code without your sign-off.

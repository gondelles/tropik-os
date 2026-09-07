# RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build / Tropik Commerce web execution  
**Updated:** 2026-09-07  
**Authority:** Founder UX/content architecture override for the Re:Build Artifact Golden Master and Lane-2 WordPress implementation.

---

# 1. Objective

Lock the current founder decisions that must be reflected in both the Re:Build Artifact Golden Master and the later WordPress/WooCommerce theme so navigation, content zoning, mobile rails, Shop collections and WordPress editing remain consistent and simple.

This document overrides older drawer-group labels or behaviors wherever they conflict.

---

# 2. Drawer navigation — FINAL WORKING STRUCTURE

The drawer must preserve visual hierarchy. Group labels are not ordinary links and must have the same typographic/spacing treatment.

## EXPLORE RE:BUILD
- Recovery
- How It Works
- Materials
- Rebuilding
- Impact

## SUPPORT
- Support Re:Build
- Work With Us
- Transparency — only according to public-readiness state
- About Us
- Updates
- FAQ
- Contact Us
- Shipping
- Terms & Conditions
- Privacy Policy
- Return Policy

## SHOP
- Merch
- Products

`SHOP` is a section heading at the same hierarchy level as `EXPLORE RE:BUILD` and `SUPPORT`; do not render a redundant `Shop` child link simply to repeat the heading.

## MY ACCOUNT
- My Account
- Orders
- Bag

### Removed drawer group
`PROJECT` must disappear completely from production navigation.

### Production exclusions
Never expose:
- Design Reference;
- Component Library;
- Claude Artifact preview controls;
- developer routes;
- stale Platform/Myco:Skin/Re:Build Hub navigation unless separately re-approved.

### Behavior
- drawer closes on X, scrim, ESC and any route/link activation;
- drawer body scrolls independently when required;
- bottom CTA/support area never overlaps navigation;
- hierarchy must not be flattened by one generic `wp_nav_menu()`.

---

# 3. Content-section accent system

## Founder rule
Primary public pages should be broken into **at least four clear narrative/content zones** wherever content scope supports it. The purpose is orientation and rhythm, not decorative fragmentation.

Each zone must use one approved accent family consistently through a restrained device such as:
- eyebrow/bullet;
- top border or small edge rule;
- status marker;
- icon detail;
- rail arrow/active dot;
- small CTA/detail.

Do **not** turn every zone into a large full-color panel and do not create a random rainbow card system.

## Semantic accent mapping
Use only the approved Golden Master palette/tokens; introduce no new hex values here.

### SUN / YELLOW
Best for:
- primary action;
- active state;
- progress/current step;
- commerce CTA;
- important next action.

### LEAF / GREEN
Best for:
- recovery/process;
- materials;
- validated/positive operational progress;
- reuse/resource logic;
- technical path moving forward.

### CORAL
Best for:
- people/community/work;
- support/participation;
- urgency or human consequence;
- contribution prompts that should feel warm rather than transactional.

### IVORY / WHITE
Best for:
- evidence/methodology;
- transparency;
- neutral explanation;
- policy/supporting information;
- quiet breathing sections.

## Design discipline
- section accents must carry meaning consistently across pages;
- equivalent components retain the same base card surface/radius/padding regardless of accent;
- accent is secondary to hierarchy/readability;
- do not use low-contrast accent body text;
- dark base remains the primary Re:Build shell where the Golden Master uses it.

---

# 4. Mobile card/rail behavior — NON-NEGOTIABLE

For landing-page sections that present multiple cards/items:

### Mobile target
- **one primary card visible per section viewport at a time**;
- cards remain in a horizontal rail, not a vertical stack;
- left/right arrows are visible and vertically centered on the rail edges;
- each arrow advances exactly one item/card;
- horizontal touch swipe may remain enabled as a secondary gesture;
- use scroll-snap or equivalent deterministic positioning;
- arrows may sit partially outside the card surface but must remain inside safe viewport margins;
- arrows must never cover card text;
- no user should have to vertically scroll through card 2/3/4 just to continue the page narrative.

### Tablet/Desktop
- horizontal rail remains intentional where the Artifact uses one;
- multiple cards may be visible according to available width;
- arrows remain aligned to the rail, not the section heading.

### Exception — collection/product listing pages
When the visitor enters a dedicated collection such as `Shop > Merch` or `Shop > Products`, normal catalog browsing may scroll vertically through the collection/grid. The one-card mobile rule applies to narrative/landing-page rails, not to full collection browsing.

---

# 5. Shop information architecture

`SHOP` contains exactly two first-level collections for the current build:

## Merch
Support/lifestyle merchandise sold through normal WooCommerce commerce flow, with actual readiness/availability truthfully represented.

## Products
Re:Build recovered-material/byproduct catalog.

For the current MVP web collection, show only the four active validation lanes:
1. Re:Build Road Base 0–40 (`RB-RB-040`)
2. Re:Build Mineral Fill (`RB-MF-GEN`)
3. Re:Build Ferrous Scrap (`RB-FE-SCRAP`)
4. Re:Build Masonry Aggregate 0–25 (`RB-MA-025`)

### Truth/status caveat
The current product source of truth classifies Masonry Aggregate as `GREEN/YELLOW — test source variability`, not fully commercial/available. Therefore the collection may include it as an MVP validation product, but the UI must preserve its honest lifecycle/status and may not present it as tested/available until evidence supports that.

`Re:Build Verified Reuse Components` remains outside the primary Products collection while its source-of-truth status is selective/YELLOW hold unless later founder/evidence approval changes that decision.

### Product commerce rule
Recovered-material Products remain quote/inquiry-led until batch availability/specification/pricing are validated. Do not default them to consumer Add-to-Cart behavior merely because WooCommerce is used as the catalog layer.

---

# 6. WordPress editability / no-builder dependency

## Founder requirement
A non-developer must be able to enter WordPress, edit an existing page or add a new page and keep it visually congruent with the rest of the site without touching PHP/CSS.

## Required implementation
Use:
- native WordPress Pages;
- Gutenberg/core blocks;
- reusable registered block patterns for approved Re:Build section types;
- `rb-*` style variations/component classes;
- global design tokens in the theme;
- WooCommerce templates/components only for commerce functionality.

Theme PHP owns shell/functional components, not final marketing copy.

## Minimum reusable patterns
Create editor-visible patterns for at least:
- Hero / intro;
- evidence/stat block;
- 4-zone narrative section system;
- card rail;
- CTA band;
- quote/Need/Work-With-Us teaser;
- update/impact teaser;
- policy/editorial content section.

Each pattern should expose normal editable fields: heading, eyebrow, body, links, image/media and allowed accent token.

## New-page rule
A new page created from approved patterns must inherit:
- canonical container width;
- typography;
- spacing rhythm;
- card geometry;
- buttons;
- accent mapping;
- responsive behavior.

No Divi/Elementor/proprietary builder dependency is required for the new Re:Build experience.

---

# 7. Acceptance checklist

PASS requires:
- no `PROJECT` drawer section;
- `SHOP` appears as a group heading with `Merch` and `Products` children;
- About/Updates/FAQ/Contact plus Shipping/Terms/Privacy/Returns are under SUPPORT;
- primary landing pages use at least four intentional narrative zones where scope allows;
- accents follow semantic Sun/Green/Coral/Ivory logic using Golden Master tokens only;
- mobile narrative rails show one card at a time with centered arrows;
- Shop collection pages can use normal vertical catalog browsing;
- Products collection contains the four current MVP validation product lanes with truthful statuses;
- editor can create/edit pages with Gutenberg patterns without custom code;
- no new page requires Divi to remain visually consistent.

## Not approved
- flat ungrouped drawer;
- PROJECT retained as a heading;
- random per-card accent colors;
- stacked multi-card mobile landing sections;
- hidden mobile arrows;
- Reuse Components silently added as a fifth live Products item;
- hard-coded page copy in templates;
- visual consistency that depends on an unavailable paid page-builder license.

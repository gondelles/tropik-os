# RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build / Tropik Commerce web execution  
**Updated:** 2026-09-07  
**Purpose:** define the exact Lane-2 Claude Code reconstruction contract required to make the WordPress/WooCommerce implementation visually and behaviorally match the founder-approved Re:Build Page System Artifact instead of approximating it.

---

# 1. Executive decision

The latest founder-supplied WordPress theme build `tropik-rebuild-theme-v2.zip` is **NOT ACCEPTED as visual-fidelity complete** and must not be treated as the final theme baseline.

Audit anchor for the supplied ZIP:
- filename: `tropik-rebuild-theme-v2.zip`
- SHA-256: `d8626bb2e2f1aa8013489f8228b32f27db7955df2e286f9f81507e98554b2e11`
- theme version reported in `style.css/functions.php`: `2.0.0`

The build contains useful structural work, but the shared shell, cart, language control, responsive rails, navigation behavior and several WooCommerce surfaces have materially drifted from the approved Artifact.

**STRATEGIC DECISION:** Claude Code must reconstruct the WordPress shell from the Artifact as a **golden master**, not infer the design from the current PHP/CSS.

**STRATEGIC DECISION:** visual similarity is not enough. PASS requires screenshot parity at agreed breakpoints plus functional parity of the header, drawer, bag/cart, rails, account and checkout.

---

# 2. Source hierarchy for Lane 2

When sources conflict, use this order:

1. **Founder-approved Re:Build Artifact/Page System** — visual geometry, component appearance, interaction language and responsive behavior.
2. **Founder annotations/screenshots** — explicit corrections to the Artifact or staging implementation.
3. `40_REBUILD/digital/RB_WEBSITE_SITEMAP_v0.1.md` — public IA/navigation.
4. approved page-content package / page build matrix — copy and section order.
5. `40_REBUILD/` business/data/governance files — facts, statuses, claim controls.
6. `RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md` — WordPress/Woo responsibilities.
7. current `tropik-rebuild-theme-v2.zip` — reusable implementation fragments only; it is **not** the visual authority.

The general Tropik Commerce design system remains background context, but where the later Re:Build Artifact deliberately differs, the approved Re:Build Artifact wins for the Re:Build experience.

---

# 3. GOLDEN MASTER GATE — required before theme reconstruction

The single most important anti-drift control is to put the approved Artifact source/reference under version control.

Before Claude Code performs the final theme reconstruction, create/commit a frozen Artifact reference package containing, where technically possible:

`10_COMMERCE/design/reference/rebuild-page-system-golden-master/`

with:
- exported/static Artifact HTML or component source;
- compiled/authoritative CSS or token map;
- JS/interactions needed to reproduce shell behavior;
- exact toucan asset used;
- reference screenshots at `1440`, `1024`, `768`, `480`, `390` px widths;
- screenshots for Header, Drawer, Bag, Home, one rail/carousel page, Shop, Checkout and My Account;
- `REFERENCE_NOTES.md` identifying anything visible that is Claude preview chrome and must NOT ship.

If direct export is impossible, Claude Cowork must at minimum commit the relevant source snippets/components plus the reference screenshots.

**NOT APPROVED:** rebuilding from screenshots alone when the Artifact source is accessible in Cowork.

---

# 4. Confirmed defects in `tropik-rebuild-theme-v2.zip`

These are code-level findings from the supplied ZIP.

## 4.1 Header shell is not the approved Artifact shell — FATAL VISUAL DEFECT

Current `header.php` renders:

`[hamburger] — [centered toucan] — [language] [Support text button] [bag]`

The founder-approved Artifact shell is:

### Desktop target
`[hamburger] — [true centered toucan] — [ES/EN pill] [search icon] [account icon] [bag icon + count]`

### Mobile target
`[hamburger] — [true centered toucan] — [search] [account] [bag]`

Language is lower-priority on narrow mobile and may move/hide according to the approved Artifact behavior.

### Required Claude Code correction
- remove the textual `Support` CTA from the header shell;
- add real Search and Account controls matching Artifact icons/hit areas;
- Bag remains icon-only with accurate count badge;
- preserve true optical/viewport centering of the toucan regardless of unequal left/right control widths;
- all icon buttons use the same circle size, stroke language, baseline and hover/focus treatment;
- header is persistent/sticky exactly like the Artifact;
- when the WordPress admin bar is visible, offset sticky/fixed behavior correctly so the header is not hidden underneath it;
- every visible control must work. No decorative/fake control.

## 4.2 Language control visually wrong

Current `rb_language_switcher()` asks Polylang for:
- `show_flags => 1`
- `show_names => 1`

This produces flags + language text, which is the wrong visual treatment shown in the staging screenshots.

### Target
Artifact-style compact `ES / EN` segmented pill:
- no country flags;
- current language = Sun/active treatment;
- inactive available language = dark/neutral treatment;
- only real translated routes are clickable.

### Required implementation
Use Polylang raw language data (`pll_the_languages()` raw output or equivalent) and render the custom Artifact markup instead of accepting Polylang's default HTML.

If only one language is actually configured, render a single honest state or hide the switch. Never fake a route.

## 4.3 Search and Account are missing from theme code

`rb_icon()` defines menu, close, bag and arrow only. No search or account/user icons exist, and `header.php` has no Search or Account controls.

### Required correction
Create the shared Artifact-consistent SVG icon set and map:
- menu;
- close;
- search;
- account/user;
- bag;
- arrow left/right;
- trash;
- minus/plus where required by bag/cart.

All icons use one stroke weight, viewBox logic and hit-area system.

## 4.4 Current cart architecture is technically wrong for the approved custom bag drawer

Current `rb_cart_panel()` runs:

`do_blocks('<!-- wp:woocommerce/mini-cart ... /-->')`

inside a separate custom `.rb-cart-panel` drawer.

This effectively nests WooCommerce Mini-Cart behavior inside a second custom drawer. On staging this produces the wrong/empty body state, separate mini-cart icon behavior and visual mismatch.

### Required correction — NON-NEGOTIABLE
Do **not** embed the WooCommerce Mini-Cart block inside the custom Re:Build drawer.

Build ONE bag drawer that matches the Artifact and source its state from WooCommerce using:
- `WC()->cart` / cart items;
- `woocommerce_mini_cart()` only if its markup is fully controlled/re-skinned, OR direct custom markup over WC cart data;
- WooCommerce AJAX endpoints/fragments for add/remove/count/quantity refresh;
- no second nested modal/drawer.

### Artifact bag target
Header:
- `Your bag (N)`;
- close X top-right.

Each item row:
- thumbnail;
- product title;
- variant/attributes;
- line price;
- quantity stepper `− qty +`;
- remove/trash action;
- consistent row alignment and dividers.

Pinned/footer summary:
- Subtotal;
- truthful note about shipping/taxes/discounts at checkout;
- `View my bag` secondary/ghost button;
- `Checkout` primary Sun button.

Empty state:
- intentional, compact and balanced;
- no giant blank panel;
- CTA depends on actual merch readiness and must not falsely label Re:Build merch live.

Drawer requirements:
- independent body scroll lock;
- internal body scroll when items exceed viewport;
- footer remains reachable;
- safe-area padding on mobile;
- focus trap + ESC + scrim + close button;
- return focus to trigger after close.

## 4.5 Drawer navigation can lose the Artifact grouping

Current code uses one generic `wp_nav_menu()` when a drawer menu is assigned. That bypasses the structured fallback and can flatten the navigation hierarchy.

### Production target groups
Use controlled groups consistent with the approved Artifact/current sitemap:

**EXPLORE RE:BUILD**
- Recovery
- How It Works
- Materials
- Rebuilding
- Impact

**SUPPORT**
- Support Re:Build
- Work With Us when page is approved/available
- Transparency according to readiness state

**MERCH**
- Shop / Re:Build merch route according to real catalog readiness

**PROJECT**
- About
- Updates
- FAQ
- Contact

**MY ACCOUNT / YOUR TROPIK utility area**
- My Account
- Orders
- Bag

Do not expose `Design Reference`, `Component library`, Claude preview routes or dev controls in production.

### Implementation recommendation
Use either:
- separate WordPress menu locations per group; or
- a controlled drawer component whose labels/routes are editable via WP settings/menu items without losing group markup.

Do not let a single flat menu silently destroy the Artifact structure.

## 4.6 Drawer links do not auto-close

Current generic `RbPanel` closes on:
- X;
- scrim;
- ESC.

It does not close when a user taps a navigation link.

### Required correction
Within each navigation panel, close on in-panel navigation link activation before/while route navigation occurs. Preserve accessibility/focus behavior.

## 4.7 Mobile rail arrows are still explicitly hidden

Current CSS still contains:

`@media (max-width: 640px){ .rb-rail__btn{ display: none; } }`

### Required correction
Delete this behavior.

Target:
- desktop: horizontal rail + left/right arrows;
- tablet: rail + swipe + arrows where space permits;
- mobile: swipe + visible safe arrow affordance;
- arrows vertically centered on the rail edges, not floating in the section heading;
- arrows never cover card copy;
- intentional partial-next-card peek where the Artifact uses it;
- correct disabled state.

## 4.8 Section geometry is not a fidelity-controlled system yet

The current theme has useful tokens but visual sections still drift on staging.

### Required correction
Define one canonical geometry system from the Artifact:
- full-bleed section background;
- one centered content container;
- one consistent content start X;
- consistent heading/eyebrow baseline;
- intentional max-widths;
- predictable vertical rhythm;
- no unexplained dead columns/blank space;
- no random horizontal lines that resemble broken buttons;
- no arbitrary one-off inline spacing.

All pages must reuse the same primitives.

## 4.9 Cards/text bubbles are visually too weak/inconsistent on staging

Founder feedback identifies areas where text cards read like floating text instead of intentional surfaces.

### Required correction
Match the Artifact card language exactly:
- consistent radius;
- consistent padding;
- visible-but-subtle border where the Artifact has one;
- restrained surface contrast;
- no arbitrary teal/pink/category rainbow system;
- no random border/no-border changes between equivalent cards;
- no text overflow beyond card bounds;
- no clipped card corners at responsive widths.

Do not over-box the whole site. Cards are used only where the Artifact uses cards.

## 4.10 Header/admin/staging interaction

Founder staging screenshot shows WordPress admin bar above the site.

### Required correction
Authenticated staging must still look structurally correct:
- sticky header offset below `#wpadminbar` at desktop/mobile admin-bar heights;
- no unexpected overlap;
- production view without admin bar remains identical to golden master geometry.

## 4.11 Stale/legacy content contamination

The staging screenshots still expose older concepts such as `Re:Aggregate`, `Myco:Skin`, `Re:Build Hub` and unrelated generic store content within a Re:Build review flow.

### Required correction
- production Re:Build page content comes only from the approved Re:Build content package;
- no legacy apparel/platform/demo section appears unless explicitly approved for that page;
- demo fixtures used for visual QA must be clearly isolated and never mistaken for live project truth;
- existing customer carts may contain legitimate Tropik products, but seeded QA/demo carts should use approved Re:Build/Tropik fixtures or an empty cart.

## 4.12 `Shop Live` / readiness state must not be hard-coded

The design has shown contradictory `Live` vs `Coming Soon` states.

### Required correction
- do not hard-code `Live` in drawer/footer;
- use an explicit merch readiness/configuration state or simply show `Shop` with no status badge;
- Re:Build-specific merch can be `Coming Soon` until actual products/fulfillment are founder-approved;
- actual existing Tropik commerce readiness must not be confused with Re:Build-specific merch readiness.

---

# 5. Exact shared-shell visual contract

## Header

### Desktop
- height and spacing copied from golden master;
- left: hamburger circle;
- center: toucan mark, truly centered;
- right: ES/EN segmented control + Search + Account + Bag;
- all circular utility controls equal size;
- bag count is a small Sun badge, aligned like Artifact;
- no textual Support button in header.

### Mobile
- hamburger left;
- toucan centered;
- Search + Account + Bag right according to the approved mobile Artifact;
- lower-priority language control may hide/move before core icons are compressed;
- no icon overlaps or tiny hit targets.

## Left drawer
- overlay, not permanent desktop sidebar;
- opens over page with scrim;
- Artifact width/spacing;
- grouped navigation;
- scrollable body;
- stable top logo/close area;
- bottom action/contact region never overlaps content;
- closes on X, scrim, ESC and link navigation.

## Right bag drawer
- one drawer only;
- exact Artifact hierarchy described in §4.4;
- no default WooCommerce mini-cart block UI visible.

---

# 6. WooCommerce surface parity

The current Shop screenshot reads like lightly styled default WooCommerce, not the approved Page System.

Claude Code must treat Woo pages as first-class Page System surfaces.

## Shop/archive
- same header/footer/shell as Re:Build;
- same container geometry;
- product cards use approved typography, spacing, image ratios and CTA/button language;
- no unrelated empty placeholder rectangles;
- collection/category sections are intentional and data-driven, not manually blank blocks;
- if collections are used, each section has title, optional intro, product rail/grid and correct controls;
- sorting/filter controls use the design system rather than browser/default Woo styling.

## Product detail
- image area proportional and aligned;
- image gallery behaves as a proper carousel/gallery rather than two visually noisy misaligned rectangles;
- product title/price/variation/CTA spacing matches Page System;
- no default Woo styling leaks.

## Cart page
Use same naming convention as Artifact (`Bag` or approved final term) consistently; do not mix `Cart`, `Bag`, `Your cart`, `Your bag` across surfaces.

## Checkout
- minimal shell allowed, but still visibly same product;
- logo truly centered;
- form and order summary bounded/aligned;
- dark field styling;
- no giant dead header zones;
- one-column mobile fallback;
- primary action uses exact approved CTA treatment;
- no plugin/default blue/white styles leak.

## My Account
- same shell;
- mobile quick actions become 2 columns or stacked, never four compressed word-breaking columns;
- orders, payment methods, returns/refunds and purchase history routes use usable touch targets;
- consistent account naming.

---

# 7. Responsive contract

QA widths — mandatory:
- 1440
- 1024
- 768
- 480
- 390

For each width inspect:
- header centering;
- icon spacing;
- drawer width/scroll;
- bag drawer item geometry;
- hero max width;
- CTA wrapping;
- section X alignment;
- heading/body line length;
- card padding/overflow;
- rails/arrows;
- Shop grid/rails;
- product gallery;
- checkout columns;
- account actions;
- footer.

### Rule
Responsive design is not `desktop CSS + stack everything at 480px`.
Each component gets an intentional responsive layout matching the golden master.

---

# 8. CSS/code architecture rule

Claude Code should refactor rather than keep adding patches to a drifting stylesheet.

Preferred architecture:

`tokens -> layout primitives -> shared shell -> typography -> buttons/forms -> cards -> rails -> Woo surfaces -> page-specific exceptions`

Requirements:
- CSS variables derived from Artifact values;
- minimize inline styles currently embedded in PHP;
- no per-page magic offsets unless documented;
- reusable component classes;
- accessible focus states;
- reduced-motion support;
- semantic markup;
- no JS framework required unless the existing stack proves necessary;
- avoid duplicate drawer/cart controllers.

The current `rb-*` namespace may be retained if components are rebuilt to fidelity.

---

# 9. WordPress editability

Do not solve visual parity by hard-coding final marketing copy into PHP.

Theme owns:
- shell;
- component markup/patterns;
- Woo integration;
- utility shortcodes/data-backed components.

WordPress content owns:
- headings;
- body copy;
- section order where approved;
- CTA labels/links where appropriate;
- page-specific cards that are editorial content.

Use Gutenberg/core blocks/patterns or deterministic seeded block markup.

Final package must include the missing content import/seed mechanism referenced by `page.php`.

---

# 10. Work With Us + Keep Updated — preserve architecture, do not let it distort visual shell

Implement after approved content according to:
- `RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1.md`
- `RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1.md`

Forms use the exact Page System field/button/card language.

Newsletter signup must use durable supporter/contact identity and consent lifecycle; do not create WordPress login accounts for every subscriber.

---

# 11. Visual regression / acceptance workflow

Claude Code must not self-declare completion from code review alone.

For each required viewport and surface:

`GOLDEN MASTER SCREENSHOT -> WORDPRESS SCREENSHOT -> SIDE-BY-SIDE / OVERLAY REVIEW -> FIX -> REPEAT`

Required surfaces:
1. Home header/hero;
2. left drawer;
3. right bag drawer populated;
4. right bag drawer empty;
5. one horizontal rail;
6. Shop/archive;
7. product detail/gallery;
8. Checkout;
9. My Account;
10. one long content page with multiple section types.

Founder review must be based on those comparisons.

### PASS
- layout reads as the same design system at first glance and close inspection;
- shared shell geometry matches;
- no default Woo UI leaks;
- responsive behavior matches reference intent;
- no awkward overflow, crop, giant dead space, accidental whitespace or cramped text;
- all visible controls work.

### FAIL
Any of:
- textual Support button remains in header when golden master does not have it;
- country flags replace ES/EN pill;
- Search/Account absent where Artifact has them;
- nested Woo mini-cart block/drawer remains;
- mobile rail arrows hidden;
- menu grouping flattened;
- header overlaps WP admin bar;
- drawer/cart differs materially from reference;
- `Cart`/`Bag` terminology inconsistent;
- default Woo checkout/account/shop styling leaks visibly;
- responsive layout relies on accidental stacking rather than component design;
- page copy is hard-coded into PHP;
- preview chrome is recreated in production.

---

# 12. Current v2 code disposition

### REUSE / GREEN
- general WordPress theme setup;
- `rb-*` namespace concept;
- toucan asset if verified identical to Artifact asset;
- basic focus/reduced-motion approach;
- WooCommerce support declaration;
- external content/master-record separation;
- panel focus-trap/scrim/ESC logic as a base;
- general tokenization concept.

### REFACTOR / YELLOW
- container/spacing tokens;
- drawer markup;
- button system;
- form system;
- Woo wrappers;
- lead CPT/form implementation;
- footer;
- page content import architecture.

### REPLACE / RED
- current header composition;
- default Polylang flags/names rendering;
- current mini-cart block nested inside custom drawer;
- mobile arrow-hide rule;
- any flat generic menu implementation that loses Artifact groups;
- stale/demo content that bleeds into Re:Build;
- any standard Woo UI that does not match Page System.

---

# 13. Required Claude Code outputs

After Lane-1 content approval and Golden Master package are available, Claude Code must deliver:

1. source-controlled theme implementation;
2. installable theme ZIP;
3. content WXR and/or deterministic seed script;
4. exact plugin/config requirements;
5. `README_INSTALL`;
6. `CHANGELOG`;
7. `IMPLEMENTATION_STATUS`;
8. breakpoint QA screenshots;
9. golden-master vs WordPress comparison set;
10. unresolved blocker list;
11. proof that drawer/cart/header controls work;
12. proof that Woo add/remove/quantity/count refresh works in the custom bag;
13. proof that translated language links only appear when valid;
14. proof that content remains editable from WordPress.

No direct production promotion. Founder performs/approves promotion after staging acceptance.

---

# 14. Major implementation block

**Objective:** rebuild the current v2 theme into a WordPress implementation that is visually and behaviorally faithful to the approved Re:Build Artifact.  
**Expected result:** one coherent Page System across editorial pages and WooCommerce, with shared header/drawer/bag/components and intentional responsive behavior.  
**Recommended tools:** Claude Code + Git/version control + WordPress staging + browser responsive screenshots + WooCommerce core + Polylang if real bilingual pages exist.  
**Concrete steps:** freeze Artifact golden master -> compare current theme -> rebuild shared shell -> rebuild custom Woo bag -> normalize tokens/geometry -> rebuild responsive rails -> skin Woo surfaces -> seed approved content -> run screenshot parity QA -> founder review.  
**Validation checklist:** header exact; language exact; search/account functional; bag exact; drawer grouping exact; mobile rails arrows; WordPress admin-bar offset; no stale content; Woo surfaces consistent; content editable; screenshot parity supplied.  
**Approved criterion:** founder can compare Artifact and staging side-by-side at every mandatory breakpoint without material design drift, and functional Woo behavior remains correct.  
**Not approved:** theme merely uses similar colors/fonts while header, drawer, bag, responsive geometry or Woo surfaces differ materially.  
**Risks/common errors:** patching v2 instead of rebuilding shared primitives; relying on Woo default blocks; screenshot-only guessing; flattening navigation through `wp_nav_menu`; hiding controls on mobile rather than designing them; hard-coded page copy; confusing current Tropik shop readiness with Re:Build merch readiness.  
**Delegation:** Claude Code owns implementation; Claude Cowork/content stage owns Artifact golden-master/export and approved copy; founder owns visual acceptance; WordPress staging is the verification environment.  
**Exact next action:** while Content continues, export/commit the approved Artifact golden-master source/screenshots. Do not ask Claude Code to generate a third approximation before that reference exists in GitHub.
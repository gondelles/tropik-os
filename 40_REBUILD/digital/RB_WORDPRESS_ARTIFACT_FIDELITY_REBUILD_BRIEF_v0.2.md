# RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.2

**Status:** PRIVATE_WORKING  
**Updated:** 2026-09-07  
**Supersedes/extends:** `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md` for current navigation, creative-merch state and execution QA.

## 1. Executive rule
The founder-approved Re:Build Artifact/Page System remains the visual/interaction Golden Master. The v2 WordPress theme remains reusable code only.

Claude Code must not approximate the Artifact from the old theme. It must use the frozen Golden Master + current founder overrides + approved content and demonstrate parity.

## 2. Current founder overrides
Read and obey:
- `RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md`
- `RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md`
- `10_COMMERCE/context/COM_WEB_CURRENT_STATE_2026-09-07.md`
- `10_COMMERCE/brand/COM_09_CURRENT_CREATIVE_APPROVAL_OVERRIDE_2026-09-07.md`

These override stale navigation/creative assumptions in older artifacts/themes.

## 3. Drawer final working IA
**EXPLORE RE:BUILD** — Recovery / How It Works / Materials / Rebuilding / Impact

**SUPPORT** — Support Re:Build / Work With Us / Transparency when ready / About Us / Updates / FAQ / Contact Us / Shipping / Terms & Conditions / Privacy Policy / Return Policy

**SHOP** — Merch / Products

**MY ACCOUNT** — My Account / Orders / Bag

Remove `PROJECT` completely. `SHOP` is a group title like EXPLORE/SUPPORT, not a redundant child link.

## 4. Current Merch creative status
Do not seed or treat `Qué Manguangua` or `Estás todo timbrao` apparel artwork/designs as approved current catalog items.

Status:
`CREATIVE BACKLOG — REQUIRES NEW FOUNDER APPROVAL`

Historical COM-09 approvals are preserved as history only.

## 5. Re:Build Products collection
Current web Products collection is limited to:
- Road Base 0–40
- Mineral Fill
- Ferrous Scrap
- Masonry Aggregate 0–25

Use truthful lifecycle labels. Masonry is not to be represented as proven/available beyond its current evidence status. Reuse Components remains outside the primary Products collection for now.

## 6. Mobile rail contract
Landing/narrative rails on mobile show one primary card at a time. Cards remain horizontal; do not vertically stack the remaining cards. Visible left/right arrows are vertically centered on rail edges and advance exactly one card. Swipe may remain. Dedicated collection pages may scroll vertically.

## 7. Content-zone rhythm
Where scope supports it, primary public pages use at least four intentional content/narrative zones. Use only approved Golden Master accent tokens:
- Sun/Yellow — action/progress/CTA;
- Leaf/Green — recovery/material/process;
- Coral — people/work/support/participation;
- Ivory/White — evidence/methodology/transparency/policy.

Accents are semantic and restrained. Equivalent cards remain one consistent component family.

## 8. WordPress editability
No Divi dependency for new Re:Build pages.
Use native Pages + Gutenberg/core blocks + registered reusable patterns + global theme tokens. Theme PHP owns shell/functionality, not final marketing copy.

A non-developer must be able to create/edit pages and preserve container geometry, typography, spacing, card language, accents and responsive behavior.

## 9. Pre-build documents required from Claude Code
Before implementation, Claude Code must create/commit the following under an appropriate `10_COMMERCE/design/implementation/` or equivalent version-controlled folder:

1. `01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md`
   - exact files read;
   - Golden Master present/missing;
   - content package present/missing;
   - current theme baseline identified;
   - blockers and conflicts.

2. `02_THEME_CODE_GAP_AUDIT.md`
   - current theme vs Golden Master/founder override;
   - header, drawer, bag, rails, Woo surfaces, responsive, editability defects;
   - KEEP / REFACTOR / REPLACE by component/file.

3. `03_GOLDEN_MASTER_PARITY_MATRIX.md`
   - surface/component;
   - Artifact requirement;
   - WordPress target;
   - breakpoint expectations;
   - verification method;
   - status.

4. `04_RESPONSIVE_TEST_MATRIX.md`
   - 1440 / 1024 / 768 / 480 / 390;
   - Header, Drawer, Bag, Home, rail, Shop, Merch, Products, Product Detail, Checkout, My Account, editorial page.

5. `05_WOOCOMMERCE_COMPONENT_CONTRACT.md`
   - Shop/collections/product/bag/checkout/account behavior and custom styling boundaries;
   - one custom Woo-backed Bag drawer;
   - AJAX/update requirements.

6. `06_WORDPRESS_EDITABILITY_AND_PATTERN_MAP.md`
   - page types;
   - Gutenberg patterns;
   - editable fields;
   - how a non-developer creates a congruent page;
   - no hard-coded final marketing copy.

7. `07_PLUGIN_AUDIT.md`
   - Plugin / version / active / current purpose / dependency / KEEP|KEEP TEMP|DEACTIVATE|REMOVE / removal risk / native alternative / founder action.

8. `08_CONTENT_AND_CLAIM_GATE_MAP.md`
   - approved copy vs pre-pilot placeholders;
   - prohibited claims;
   - Merch creative backlog state;
   - Re:Build Products status truth.

9. `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md`
   - exact iteration scope, test gates, commits and expected improvement.

10. `10_MIGRATION_ROLLBACK_AND_STAGING_PLAN.md`
   - backup;
   - Divi/legacy dependency migration;
   - staging changes;
   - rollback;
   - no automatic production promotion.

## 10. Four-iteration quality loop — mandatory
The founder instruction for Claude Code must be preserved verbatim:

> "finish the website perfectly, high standards and amazing outcome, making no mistakes. Provide 4 iterations of reviews and improve each time so the las one is the best outcome."

Operational interpretation: do not claim literal impossibility of mistakes; instead use four documented review/fix cycles with objective evidence and no known P0/P1 defects at final handoff.

### Iteration 1 — Architecture + Golden Master fidelity
Focus:
- tokens/container geometry;
- header;
- drawer IA;
- language/search/account/bag utilities;
- single Bag architecture;
- base card/button/form primitives.

Deliver review log + screenshots + defect list + fixes.

### Iteration 2 — Responsive + commerce functionality
Focus:
- required breakpoints;
- one-card mobile rails;
- Shop > Merch / Products;
- product gallery;
- cart/bag AJAX;
- checkout;
- My Account.

Repeat review, measure regression from Iteration 1, fix issues.

### Iteration 3 — Content + editability + accessibility/performance
Focus:
- approved page content/patterns;
- four-zone narrative rhythm;
- semantic accents;
- Work With Us / Keep Updated surfaces;
- keyboard/focus/reduced-motion;
- WordPress editor usability;
- obvious performance waste/plugin leakage.

Repeat review and improve.

### Iteration 4 — Final regression + polish
Focus:
- Golden Master screenshot comparison/overlay;
- cross-page visual harmony;
- typography/spacing/details;
- functional smoke tests;
- stale/demo content removal;
- no known P0/P1 defects;
- final plugin recommendations;
- installation/editability verification.

This fourth output is the candidate for founder staging review. It is not auto-approved or auto-promoted to production.

## 11. Iteration evidence requirement
Each iteration must create a dated review artifact recording:
- what was tested;
- screenshots/viewport;
- issues found;
- severity;
- changes made;
- tests rerun;
- remaining issues;
- why the current iteration is measurably better than the previous one.

Do not simply say “reviewed 4 times.”

## 12. Completion gate
Final PASS requires:
- Golden Master/founder override parity across required surfaces;
- responsive behavior at all required widths;
- no nested/default Woo mini-cart drawer leakage;
- current navigation hierarchy;
- current Merch backlog status respected;
- current Products status truth respected;
- editable Gutenberg architecture proven;
- plugin audit delivered;
- four documented review/improvement iterations completed;
- no known P0/P1 defects at handoff;
- founder manual approval still pending before production.

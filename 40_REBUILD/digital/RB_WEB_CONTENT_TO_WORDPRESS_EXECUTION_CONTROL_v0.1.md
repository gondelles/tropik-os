# RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build / Tropik Commerce web execution  
**Updated:** 2026-09-07 — v2 theme fidelity audit

## Purpose

Prevent Page System, content approval, WordPress engineering and Re:Build field evidence from being mixed into one conversation or one build step, while ensuring the WordPress implementation does not visually drift from the founder-approved Artifact.

## Current state

### Page System / Artifact
Founder direction: preserve the current approved visual/navigation language and use it as the design reference. Screenshot-derived audit items remain a punch list, not permission to redesign the system.

Known Artifact/prototype items include drawer link auto-close, stale/demo terminology/content, rail-arrow placement/visibility, section spacing, card overflow, mobile My Account layout, and legacy apparel cross-bleed. Artifact preview chrome is not production UI.

**NEW CONTROL — GOLDEN MASTER REQUIRED:** before the final Claude Code reconstruction, export/commit the approved Artifact source/reference and breakpoint screenshots under version control. Claude Code must compare WordPress output against that golden master rather than approximate the design from an older theme ZIP.

Canonical implementation brief:
- `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`

### Content
**ACTIVE NOW.** Page-by-page Re:Build copy and storytelling remains Lane 1 and must be founder-approved before final WordPress implementation/content seeding.

Claude branch currently contains the Home proposal at commit `bac9ada6c40cbcf4ecc887bb8fd94b9128263d39`; it remains DRAFT/pending founder approval until explicitly accepted/merged.

### Latest WordPress theme build
Founder-supplied `tropik-rebuild-theme-v2.zip` was inspected on 2026-09-07.

Audit anchor:
- SHA-256: `d8626bb2e2f1aa8013489f8228b32f27db7955df2e286f9f81507e98554b2e11`
- internal theme version: `2.0.0`

**STATUS: REJECTED AS FINAL VISUAL-FIDELITY BUILD / REUSABLE CODE ONLY.**

Confirmed code-level drift includes:
- header renders Language + textual Support + Bag but lacks Artifact Search + Account controls;
- language switch asks Polylang for flags/names rather than the approved ES/EN segmented pill;
- Woo Mini-Cart block is nested inside a separate custom Re:Build cart drawer, producing the wrong cart UI architecture;
- mobile carousel arrows are still explicitly hidden at <=640 px;
- drawer does not close when an in-panel navigation link is activated;
- generic assigned `wp_nav_menu()` can flatten the approved grouped drawer architecture;
- WordPress/Woo surfaces still require stronger visual parity with the Artifact;
- staging screenshots show section geometry/card/shell drift and stale content contamination.

Do not promote this v2 build merely because it installs or resembles the color palette.

### WordPress engineering
**PREP SPEC NOW / IMPLEMENT AFTER CONTENT GATE.**

It is valid to prepare the Lane-2 defect/fidelity specification now. The final rebuild/content seed still begins after Lane-1 Content approval and Golden Master availability.

Use Claude Code / version-controlled code. The Artifact is the visual authority; WordPress pages/blocks remain editable and approved marketing copy is not hard-coded into PHP templates.

### Re:Build field/commercial validation
Independent from web implementation. RB-03D is currently **HOLD** until real decision-grade evidence arrives. Website forms may acquire leads/evidence opportunities but cannot manufacture or automatically verify evidence.

## Namespace warning

Claude/Tropik-Commerce project decisions labeled `DEC-026 / DEC-027 / DEC-028` are Commerce/Page-System decision identifiers from that workspace. They must not be confused with Re:Build GitHub decisions `RB-D-026 / RB-D-027 / RB-D-028`, which refer to Santa authority, characterization and first-product trial logic.

## Exactly three active work lanes

### LANE 1 — CLAUDE COWORK / CURRENT `Tropik rebuild content stage`

**Objective:** finish Content approval against the already-approved Page System and freeze the Artifact golden master.

**Do here:**
- ingest the current Re:Build context pack;
- review Home and every Re:Build page copy;
- reconcile copy to current Re:Build claims/gates;
- apply Artifact-only polish items that do not require a WordPress build;
- maintain/update page-build/content matrix;
- produce an approved content package;
- export/commit the approved Artifact reference/source/screenshots for Lane 2.

**Do not do here:**
- build the final WordPress theme ZIP;
- invent new site/business facts;
- enable donations;
- implement production subscriber/backend architecture;
- treat screenshot audit assumptions as higher authority than current Re:Build project facts.

**Exit gate:** all required public pages have founder-approved copy/status, the Page System has no blocking content/geometry issue, and the golden-master reference package exists for Claude Code.

### LANE 2 — CLAUDE CODE / NEW WORDPRESS IMPLEMENTATION SESSION

Open for final implementation only after Lane 1 exit gate.

**Objective:** reconstruct the WordPress/WooCommerce implementation against the approved Artifact golden master, not patch the v2 approximation indefinitely.

**Inputs required:**
- golden-master Artifact export/reference + breakpoint screenshots;
- approved content package/page matrix;
- `tropik-rebuild-theme-v2.zip` or its source as a reusable-code starting point only;
- `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`;
- current GitHub/context pack;
- WordPress/WooCommerce architecture and forms/data requirements.

**Priority implementation order:**
1. shared design tokens/geometry;
2. canonical header;
3. canonical left drawer;
4. single custom Woo-backed bag drawer;
5. language/search/account utilities;
6. rails/carousels;
7. Woo Shop/product/cart/checkout/account surfaces;
8. approved page content/patterns;
9. Work With Us + Keep Updated architecture;
10. breakpoint screenshot regression QA.

**Outputs:**
- version-controlled source;
- installable theme ZIP;
- editable WordPress pages/blocks;
- WXR and/or deterministic seed script;
- Work With Us forms/data mapping;
- Keep Updated subscriber/contact architecture;
- README / changelog / implementation status;
- golden-master vs WordPress comparison screenshots;
- responsive QA.

**Founder gate:** no production promotion, donation/payment activation or sensitive automation without explicit approval.

### LANE 3 — CHATGPT / RB-03D EVIDENCE INGESTION

**Objective:** ingest real field/commercial evidence and update GitHub decisions/economics.

Use the same RB-03D evidence conversation for incoming packages. Do not create one conversation per interview/quote.

Follow `governance/RB_03D_EVIDENCE_COLLECTION_ROUTER_v0.1.md`.

## What happens to missing evidence packages

They do **not** block Content/design implementation unless copy depends on an unverified claim. Use truthful placeholder/status language such as:

- `Measurement begins with the pilot.`
- `We are validating the first operating site.`
- `See what Re:Build currently needs.` only for public-ready verified Needs.
- funding/donation CTA remains non-transactional until approved.

Field evidence changes future facts/data/statuses, not the approved visual system.

## Stage sequence

`NOW: CONTENT APPROVAL + ARTIFACT POLISH + GOLDEN MASTER EXPORT + LANE-2 SPEC`

→ `CONTENT FOUNDER APPROVED + GOLDEN MASTER FROZEN`

→ `CLAUDE CODE WORDPRESS RECONSTRUCTION`

→ `VISUAL REGRESSION + STAGING QA`

→ `MANUAL FOUNDER PROMOTION`

Meanwhile, independently:

`RB-03D HOLD -> REAL EVIDENCE ARRIVES -> INGEST/VERIFY -> UPDATE GITHUB -> PUBLIC-SAFE EXPORT WHEN APPROVED`

## Decision rule when a task feels ambiguous

Ask: **Does this change words/prototype, production code, or real-world evidence?**

- Words / Artifact content / reference export -> Lane 1.
- WordPress/PHP/CSS/Woo/backend/import/deployment -> Lane 2.
- Authority/site/buyer/lab/recycler/workforce/feedstock facts -> Lane 3.

## Exact next action

Do not ask Claude Code to produce another approximate theme from v2 alone. First finish/freeze the approved Artifact reference and page content. Then start Lane 2 with `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md` as the implementation contract.
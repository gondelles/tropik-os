# RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build / Tropik Commerce web execution  
**Updated:** 2026-09-06

## Purpose

Prevent Page System, content approval, WordPress engineering and Re:Build field evidence from being mixed into one conversation or one build step.

## Current state

### Page System / Artifact
Founder direction: preserve the current approved visual/navigation language and use it as the design reference. Screenshot-derived audit items remain a punch list, not permission to redesign the system.

Known screenshot/audit issues to reconcile include drawer link auto-close, stale/demo terminology/content, rail-arrow placement/visibility, section spacing, card overflow, mobile My Account layout, and legacy apparel cross-bleed. Artifact preview chrome is not production UI.

### Content
**ACTIVE NOW.** Page-by-page Re:Build copy and storytelling must be approved before the WordPress engineering pass.

### WordPress engineering
**NEXT, NOT NOW.** Build only after Content approval. Use Claude Code / version-controlled code workflow. The Artifact is the visual reference; WordPress pages/blocks remain editable and must not hard-code approved marketing copy into PHP templates.

### Re:Build field/commercial validation
Independent from web implementation. RB-03D is currently **HOLD** until real decision-grade evidence arrives. Website forms may acquire leads/evidence opportunities but cannot manufacture or automatically verify evidence.

## Namespace warning

Claude/Tropik-Commerce project decisions labeled `DEC-026 / DEC-027 / DEC-028` are Commerce/Page-System decision identifiers from that workspace. They must not be confused with Re:Build GitHub decisions `RB-D-026 / RB-D-027 / RB-D-028`, which refer to Santa authority, characterization and first-product trial logic.

## Exactly three active work lanes

### LANE 1 — CLAUDE COWORK / CURRENT `Tropik rebuild content stage`

**Objective:** finish Content approval against the already-approved Page System.

**Do here:**
- ingest the current Re:Build context pack;
- review Home and every Re:Build page copy;
- reconcile copy to current Re:Build claims/gates;
- apply Artifact-only polish items that do not require a WordPress build;
- maintain/update page-build/content matrix;
- produce an approved content package for implementation.

**Do not do here:**
- build the final WordPress theme ZIP;
- invent new site/business facts;
- enable donations;
- implement production subscriber/backend architecture;
- treat screenshot audit assumptions as higher authority than current Re:Build project facts.

**Exit gate:** all required public pages have founder-approved copy/status and the Page System has no blocking content/geometry issue.

### LANE 2 — CLAUDE CODE / NEW WORDPRESS IMPLEMENTATION SESSION

Open only after Lane 1 exit gate.

**Objective:** turn the approved Artifact + approved Content into the installable/editable WordPress/WooCommerce implementation.

**Inputs required:**
- approved Page System/Artifact export/reference;
- approved content package/page matrix;
- actual current Re:Build theme/codebase (not the legacy apparel ZIP);
- current GitHub/context pack;
- implementation requirements from `RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE` and public data/forms architecture.

**Outputs:**
- version-controlled source;
- installable theme ZIP;
- editable WordPress pages/blocks;
- WXR and/or deterministic seed script;
- Work With Us forms/data mapping;
- Keep Updated subscriber/contact architecture;
- README / changelog / implementation status;
- responsive QA.

**Founder gate:** no production promotion, donation/payment activation or sensitive automation without explicit approval.

### LANE 3 — CHATGPT / RB-03D EVIDENCE INGESTION

**Objective:** ingest real field/commercial evidence and update GitHub decisions/economics.

Use the same RB-03D evidence conversation for incoming packages. Do not create one conversation per interview/quote.

Follow `governance/RB_03D_EVIDENCE_COLLECTION_ROUTER_v0.1.md`.

## What happens to the seven missing evidence packages

They do **not** block Content approval unless copy depends on an unverified claim. Use truthful placeholder/status language such as:

- `Measurement begins with the pilot.`
- `We are validating the first operating site.`
- `See what Re:Build currently needs.` only for public-ready verified Needs.
- funding/donation CTA remains non-transactional until approved.

Field evidence changes future facts/data/statuses, not the underlying approved visual system.

## Stage sequence

`NOW: CONTENT APPROVAL + ARTIFACT POLISH`

→ `CONTENT FOUNDER APPROVED`

→ `CLAUDE CODE WORDPRESS BUILD`

→ `STAGING QA`

→ `MANUAL FOUNDER PROMOTION`

Meanwhile, independently:

`RB-03D HOLD -> REAL EVIDENCE ARRIVES -> INGEST/VERIFY -> UPDATE GITHUB -> PUBLIC-SAFE EXPORT WHEN APPROVED`

## Decision rule when a task feels ambiguous

Ask: **Does this change words/layout in the approved prototype, production code, or real-world evidence?**

- Words / prototype content -> Lane 1.
- WordPress/PHP/CSS/backend/import/deployment -> Lane 2.
- Authority/site/buyer/lab/recycler/workforce/feedstock facts -> Lane 3.

## Exact next action

Close the current coordination conversation after delivering the Claude Commerce context pack. In Claude `Tropik rebuild content stage`, upload/paste that pack plus the screenshot audit and continue page-by-page Content approval. Do not start WordPress engineering until that content gate is closed.
# RB_LANE2_GATE_RESOLUTION_2026-09-07_v0.1

**Status:** PRIVATE_WORKING  
**Updated:** 2026-09-07  
**Purpose:** resolve the remaining founder-facing ambiguities identified by the Cowork Golden Master freeze and Claude Code pre-build audit, and define the shortest path from HOLD to implementation-ready.

## Executive decision

The Claude Code pre-build HOLD is valid. Final WordPress implementation remains blocked by incomplete Content approval and incomplete Golden Master screenshot coverage. However, three items previously labeled as founder conflicts are now resolved and must not be re-opened unless the founder explicitly changes them.

## Resolution 1 — mobile narrative rails

**Decision:** the 2026-09-07 founder override wins over the frozen Artifact's legacy mobile behavior.

For narrative/landing-page rails on mobile:
- exactly one primary card is visible at a time;
- cards remain horizontal, not stacked vertically;
- left/right arrows remain visible and vertically centered on the rail edges;
- each arrow advances exactly one card;
- swipe remains available as a secondary gesture;
- deterministic snap behavior is required;
- arrows may not cover copy.

The frozen Artifact rule that hides carousel buttons at `<=640px` is historical reference only and must not be reproduced in Lane 2.

Dedicated catalog/collection pages remain exempt and may browse vertically.

## Resolution 2 — green token semantics

Use both green tokens, but for different semantic jobs:

### `--tk-leaf` — `#0F5A46`
Use as the **editorial/section accent** for recovery, material and process content where a restrained brand accent is needed.

Examples:
- eyebrow/bullet;
- top rule/edge detail;
- quiet section marker;
- decorative process/recovery accent.

### `--tk-signal-green` — `#2FB98F`
Reserve primarily for **status and evidence semantics**:
- verified;
- tested;
- commercial/positive status;
- success feedback;
- operational signal states.

Do not use Signal Green as the default large recovery-section accent simply because the frozen Artifact currently uses it in some components. This separation preserves the core brand Leaf while keeping status/evidence colors unambiguous.

## Resolution 3 — Impact / Update teaser pattern

Do not create a new visual family unless later evidence shows it is necessary.

**Decision:** reuse `.tk-media-card` as the base pattern for Updates/field-report previews.

Allowed implementation:
- same base media-card geometry, surface, radius, spacing and typography;
- content anatomy adapted to Update metadata: date/report period, title, short excerpt, optional status/category, link;
- an optional modifier such as `.tk-media-card--update` may exist only to support update-specific metadata/layout while preserving the same family.

Impact summary cards may continue to use the existing `.tk-stage-card` / evidence/status patterns as appropriate.

## Resolution 4 — Home content source reconciliation

Do **not** approve Home blindly while two content versions may exist.

Cowork must compare:
1. current `rebuild-home.html` / Home Artifact copy;
2. Home page copy inside `tropik-rebuild-content-v2.xml` associated with DEC-030;
3. current Home proposal/context pack storytelling direction.

Required output before founder approval:
- section-by-section delta table;
- factual/claim-risk differences;
- duplicate/outdated wording;
- recommendation for one canonical Home version;
- final proposed Home copy only after reconciliation.

No XML content wins merely because it is longer or was generated later.

## Resolution 5 — Golden Master second-pass requirement

Cowork must produce a supplemental Golden Master coverage pack before full visual-regression QA.

Required missing widths:
- 1024;
- 480.

Required priority surfaces at 1440 / 1024 / 768 / 480 / 390 where the Artifact supports them:
- header / shared shell;
- left drawer open;
- Bag populated;
- Bag empty;
- Shop landing;
- Product Detail / product gallery;
- Checkout;
- My Account;
- one narrative rail showing the mobile one-card target as a founder-required delta/reference note.

If the current Artifact itself does not yet reflect a founder override (for example arrows on mobile or new drawer IA), Cowork must not fake a screenshot. It must capture the current state and document the required delta explicitly.

## Resolution 6 — theme source intake

Claude Code cannot perform a trustworthy line-by-line v2 code audit until it has the actual theme source.

Before Iteration 1:
- supply `tropik-rebuild-theme-v2.zip` directly to Claude Code or commit its extracted source under a clearly labeled legacy/rejected-baseline path;
- do not treat that code as visual authority;
- use it only to identify reusable WordPress/Woo functionality and defects.

Preferred repository path if committed:
`10_COMMERCE/design/implementation/rebuild-wordpress-vNext/input/theme-v2-rejected-baseline/`

Do not commit credentials, environment files or secrets.

## Resolution 7 — plugin audit input

`07_PLUGIN_AUDIT.md` remains incomplete until the actual WordPress plugin inventory is supplied.

Required input:
- plugin name;
- version;
- active/inactive state.

A screenshot export of WordPress `Plugins > Installed Plugins` is acceptable for initial classification.

Plugin cleanup is not allowed to block Content approval, but plugin dependency decisions must be closed before final staging acceptance/removal actions.

## Current gate

### HOLD — final implementation
Remains HOLD because:
- Content is not founder-approved page-by-page;
- Golden Master screenshot parity coverage is incomplete.

### GREEN — work that may proceed in parallel
- Cowork Home XML-vs-Artifact reconciliation;
- Cowork Golden Master supplemental screenshot export;
- Claude Code intake/code-level audit of the rejected v2 theme once supplied;
- plugin inventory capture/classification;
- preparation of non-destructive implementation scaffolding/documentation only.

No production deployment.

## Exit criteria to start Iteration 1

Minimum:
1. founder approves Home and the agreed Content implementation stage permits build work;
2. remaining page copy/state is sufficiently approved or explicitly marked as truthful pre-pilot placeholders according to the Content gate;
3. Golden Master supplemental coverage exists for priority shell/Woo surfaces and 1024/480 widths;
4. v2 source is available to Code if reuse/code audit is expected;
5. no unresolved P0 source-of-truth conflict remains.

Founder staging approval remains required after all four implementation/review iterations.

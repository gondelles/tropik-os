# 04_RESPONSIVE_TEST_MATRIX

**Status:** PRIVATE_WORKING
**Required widths** (per `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.2.md` and `RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt`): **1440 / 1024 / 768 / 480 / 390**
**Required surfaces:** Header, Drawer, Populated Bag, Empty Bag, One rail, Shop landing, Merch collection, Products collection, Product Detail, Checkout, My Account, One long editorial page

This is the grid every iteration review (`ITERATION_0X_REVIEW.md`) must fill in with GOLDEN-MASTER-screenshot → WORDPRESS-screenshot → PASS/FAIL, per `RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt` §15 ("For each: GOLDEN MASTER screenshot -> WordPress screenshot -> side-by-side/overlay -> fix -> repeat. Do not self-approve based on code review.").

## 1. Current Golden Master screenshot coverage (as committed this session)

`✓` = screenshot exists in `10_COMMERCE/design/reference/rebuild-page-system-golden-master/screenshots/`. `—` = does not exist.

| Surface | 1440 | 1024 | 768 | 480 | 390 |
|---|:---:|:---:|:---:|:---:|:---:|
| Header (isolated) | — | — | — | — | — |
| Drawer (open state) | — | — | — | — | — |
| Populated Bag | — | — | — | — | — |
| Empty Bag | — | — | — | — | — |
| One rail (mobile one-card state) | — | — | — | — | — |
| Shop landing | — | — | — | — | — |
| Merch collection | — | — | — | — | — |
| Products collection | — | — | — | — | — |
| Product Detail (generic Woo PDP) | — | — | — | — | — |
| Checkout | — | — | — | — | — |
| My Account | — | — | — | — | — |
| Home (full page, not a required-surface row but captured) | ✓ | — | ✓ | — | ✓ |
| Process / How It Works (full page) | ✓ | — | ✓ | — | ✓ |
| Re:Build material detail (full page) | ✓ | — | ✓ | — | ✓ |
| FAQ (full page) | ✓ | — | ✓ | — | ✓ |
| Contact (full page) | ✓ | — | ✓ | — | ✓ |
| Terms (editorial/policy proxy) | ✓ | — | ✓ | — | ✓ |

**Coverage summary:** 0 of 12 mandatory surface rows have any Golden Master reference image at any width. 6 full pages exist as reference, but only at 3 of the 5 required widths (1024 and 480 are missing everywhere), and none of those 6 pages is actually one of the 12 mandatory surfaces as named in the spec (Home is close to "one long editorial page" in spirit but is a landing page, not a narrative/editorial page like `our-story.html`).

## 2. What this means for QA sequencing

Responsive QA as specified (Golden-Master-screenshot vs. WordPress-screenshot, side-by-side) is **only fully possible today** for: Home, Process, Materials, FAQ, Contact, Terms, and only at 390/768/1440 (not 1024/480). For the 12 mandatory surfaces, WordPress screenshots can still be captured once the surface is built, but there is nothing to compare them against except the written spec in `COMPONENT_INVENTORY.md`/`PATTERN_MAP.md`/`INTERACTIONS.md` — i.e. spec conformance, not visual-overlay parity, until Lane 1 supplies the missing captures.

**Recommendation carried into `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md`:** request a second Cowork export pass covering the missing surfaces/widths in parallel with Content approval, so it is ready before Iteration 4's final regression pass (which is the iteration that most depends on complete reference imagery).

## 3. Per-iteration responsive scope (fill during actual QA)

| Iteration | Surfaces in scope this pass | Widths in scope |
|---|---|---|
| 1 — Architecture + shell | Header, Drawer, Bag (populated+empty) | 1440, 390 (spot-check; full 5-width pass in Iteration 4) |
| 2 — Responsive + commerce | Shop landing, Merch, Products, Product Detail, Checkout, My Account, one rail | All 5 |
| 3 — Content + editability | One long editorial page, narrative-zone pages, CTA bands | All 5 |
| 4 — Final regression | **All 12 mandatory surfaces + the 6 already-covered pages** | All 5 |

## 4. Table template for each `ITERATION_0X_REVIEW.md`

```
Surface: _______________
Width: _______________
Golden Master reference: [path, or "NONE — spec-only, see 03_GOLDEN_MASTER_PARITY_MATRIX.md row #__"]
WordPress screenshot: [path/commit]
Comparison method: [overlay / side-by-side / spec-conformance-only]
Defects found: [list]
Severity: [P0/P1/P2/P3]
Fix applied: [commit]
Retest result: [PASS/FAIL]
```

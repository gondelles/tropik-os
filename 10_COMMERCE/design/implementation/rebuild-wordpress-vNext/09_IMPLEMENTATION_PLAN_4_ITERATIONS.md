# 09_IMPLEMENTATION_PLAN_4_ITERATIONS

**Status:** PRIVATE_WORKING — **plan defined, execution NOT STARTED, gated HOLD**

Founder instruction, preserved verbatim as required:

> "finish the website perfectly, high standards and amazing outcome, making no mistakes. Provide 4 iterations of reviews and improve each time so the las one is the best outcome."

Operational interpretation used throughout this plan: four **evidence-based** review/fix cycles, each producing a dated `ITERATION_0X_REVIEW.md` with screenshots, defects, severity, fixes, retests, and an explicit statement of what is measurably better than the previous iteration. No iteration may be closed by asserting it was "reviewed" without that evidence. No known P0/P1 defect may remain at the Iteration 4 handoff.

---

## 1. Entry gate — evaluated now

Implementation begins only when all three are true (per the execution prompt's Phase B):

| Gate | Status | Evidence |
|---|---|---|
| Golden Master source/reference package exists | **PARTIAL** | Present and substantial (tokens, components, patterns, interactions, source HTML, 6 pages × 3 widths) but missing 12 of 12 mandatory-surface screenshots and 2 of 5 mandatory widths everywhere — `03_GOLDEN_MASTER_PARITY_MATRIX.md`, `04_RESPONSIVE_TEST_MATRIX.md` |
| Founder-approved content package/build matrix exists, or affected page state is explicitly approved/pre-pilot | **NOT MET** | Home is DRAFT only; 12 of 13 pages not started — `08_CONTENT_AND_CLAIM_GATE_MAP.md` §1 |
| No unresolved source-of-truth conflict blocks implementation | **PARTIALLY MET** | Two conflicts found; both resolved *in this package* with a stated decision (mobile-rail override wins; `--tk-signal-green` assumed pending confirmation) rather than left open — but neither has founder sign-off yet, and one pattern (`Impact/Update teaser`) has no resolution at all, only a flagged open question |

**Net result: gate NOT satisfied.** The content gate alone is a hard NOT MET with no partial-credit reading available — "explicitly approved/pre-pilot" would require the founder to have signed off on Home (still DRAFT) or explicitly told this session to proceed on placeholder/pre-pilot copy for all pages, which has not happened.

## 2. GO / HOLD — **HOLD**

Per the execution prompt: *"If the final implementation gate is HOLD, stop after the documentation phase instead of guessing."* This plan is written in full (so no time is lost once gates clear) but **Iteration 1 has not been started and no theme code has been written in this session.**

### What would flip this to GO
1. Founder approves Home content (or explicitly authorizes proceeding on pre-pilot placeholder copy sitewide).
2. Founder resolves, or explicitly delegates to this session's judgment, the three open decisions in `01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md` §3.4 (mobile-rail override, Leaf-vs-signal-green, Impact/Update teaser pattern).
3. Ideally, but not strictly blocking Iteration 1: the missing Golden Master screenshots (drawer, bag, shop, PDP, checkout, my account, isolated header/rail, 1024/480 widths) are supplied, since Iteration 1–3 can proceed against the written component spec but Iteration 4's final visual-regression pass needs the imagery to be a real overlay comparison rather than a spec-conformance check.

## 3. The four iterations (ready to execute once GO)

### Iteration 1 — Architecture + Golden Master shell fidelity
**Scope:** design tokens as `theme.json`/global CSS custom properties (`05...md` is commerce-specific; tokens themselves come straight from `TOKENS.md`); header (desktop+mobile, full utility cluster); left drawer (2026-09-07 IA, close-on-navigate — an explicit improvement over the frozen Artifact, see `03...md` row 5); single Woo-backed bag drawer (no nested Mini-Cart); shared button/form/card primitives.
**Exit test:** Home page shell (header, drawer, bag, base cards/buttons) renders and behaves correctly at 1440 and 390 at minimum; drawer closes on link tap even though the reference Artifact doesn't do this yet; no second cart UI ever appears.
**Produces:** `ITERATION_01_REVIEW.md` with defect list/severity/fixes/retest, screenshots at the widths actually tested.

### Iteration 2 — Responsive + WooCommerce functional fidelity
**Scope:** full 5-width responsive pass; mobile one-card rail behavior (override, not frozen CSS); Shop landing → Merch/Products architecture; product gallery; Bag AJAX (all 8 behaviors in `05...md` §4); checkout; My Account.
**Exit test:** every row in `04_RESPONSIVE_TEST_MATRIX.md`'s Iteration-2 scope has a WordPress screenshot at all 5 widths; cart quantity/remove/count-refresh has explicit test evidence, not a visual check alone; Shop exposes only Merch/Products, nothing else.
**Produces:** `ITERATION_02_REVIEW.md`, explicitly noting regression-tested against Iteration 1 (i.e., re-verify Iteration 1's shell still works after this iteration's changes, not just new surfaces).

### Iteration 3 — Content + editability + accessibility/performance
**Scope:** approved page content (only pages actually cleared per `08...md` §1 at the time this iteration runs — if content approval is still incomplete, this iteration ships placeholder-content pages using `.tk-gate-tag`, not invented copy); Gutenberg pattern registration for all 8 patterns (7 buildable + the Impact/Update teaser only if the founder has resolved that gap by this point); Work With Us + Keep Updated surfaces (functional form architecture; copy per `08...md` gates); keyboard/focus/reduced-motion; WordPress editor usability test (a non-technical test: build one throwaway page from only registered patterns); obvious performance/plugin-leakage check.
**Exit test:** a non-developer can create a new, visually-congruent page using only registered patterns; every rendered page's copy is either founder-approved or an honest `.tk-gate-tag`-style placeholder — never invented; reduced-motion setting actually collapses all durations to 0ms as the token contract requires.
**Produces:** `ITERATION_03_REVIEW.md`.

### Iteration 4 — Final regression + polish
**Scope:** full Golden-Master-vs-WordPress screenshot comparison at all 12 mandatory surfaces × 5 widths (to the extent Golden Master imagery exists by this point — flag any surface still spec-only rather than silently skipping it); cross-page visual harmony; typography/spacing/detail pass; full functional smoke test; stale/demo content removal (confirm no legacy apparel/Manguangua/Timbrao/placeholder-test data ships); final plugin recommendations (`07...md`, now populated if the list arrived); installability + content-editability re-verification.
**Exit test:** no known P0/P1 defect remains. This is the candidate handed to the founder for staging review — **not auto-approved, not auto-promoted to production.**
**Produces:** `ITERATION_04_REVIEW.md` — the most detailed of the four, since it's the founder-facing evidence pack.

## 4. `ITERATION_0X_REVIEW.md` required structure (all four iterations)

```
# ITERATION_0X_REVIEW

Commit/build tested: <sha>
Environment: <staging URL / local>
Viewports tested: <list>
Surfaces tested: <list, cross-ref 04_RESPONSIVE_TEST_MATRIX.md>

## Evidence
<screenshots, paths or embedded>

## Defects found
| # | Defect | Surface | Severity (P0-P3) | Fix commit | Retest result |

## Comparison to previous iteration
<specifically: what regressed, what improved, why this iteration is measurably better>

## Unresolved issues
<carried forward with severity, or "none">

## Result: PASS / HOLD
```

## 5. Founder staging gate (after Iteration 4, unconditionally)

Regardless of how clean Iteration 4's result is, the delivery package (source, installable theme ZIP, WXR/seed, PLUGIN_AUDIT, README_INSTALL, CHANGELOG, IMPLEMENTATION_STATUS, all 4 iteration reviews, breakpoint screenshots, Golden Master comparisons, Bag AJAX/language/editability/mobile-rail/Shop-hierarchy test evidence, unresolved P2/P3 list) does **not** get promoted to production. Founder manual staging approval is required — this is stated in four separate source documents and is treated here as non-negotiable, not a formality to streamline.

## 6. Status of this plan as of this document's commit

**Iterations 1–4: NOT STARTED.** This document is the plan only. See §2 for the GO/HOLD call and what changes it.

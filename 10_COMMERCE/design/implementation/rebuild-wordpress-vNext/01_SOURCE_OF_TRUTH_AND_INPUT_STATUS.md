# 01_SOURCE_OF_TRUTH_AND_INPUT_STATUS

**Status:** PRIVATE_WORKING
**Prepared:** 2026-09-07, Claude Code (Lane 2), `gondelles/tropik-os`, branch `claude/home-copy-audit-fixes-j1ja9g`
**Purpose:** record exactly what was read, what exists, what is missing, and what conflicts remain, before any implementation code is written. Nothing in this document is guessed; every "missing" line means the input was searched for and not found in this repository as of this commit.

---

## 1. Files read before writing this package (in the order the execution prompt requires)

| # | File | Found? | Notes |
|---|---|---|---|
| 1 | `10_COMMERCE/context/COM_WEB_CURRENT_STATE_2026-09-07.md` | YES | current execution state, source-authority hierarchy, lane map |
| 2 | `10_COMMERCE/brand/COM_09_CURRENT_CREATIVE_APPROVAL_OVERRIDE_2026-09-07.md` | YES | Manguangua/Timbrao backlog override |
| 3 | `10_COMMERCE/brand/COM_08_DESIGN_SYSTEM_v0.1.md` | YES | general Commerce brand tokens — background only, superseded for Re:Build by the Golden Master |
| 4 | `40_REBUILD/README.md` | YES | canonical Re:Build strategic-decision index |
| 5 | `40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.2.md` | YES | current execution/QA contract, supersedes v0.1 |
| 6 | `40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md` | YES | underlying detailed brief; v0.2 explicitly extends rather than replaces it, both read |
| 7 | `40_REBUILD/digital/RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md` | YES | current drawer IA, rail rule, Shop IA, editability rule — overrides older states |
| 8 | `40_REBUILD/digital/RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` | YES | plugin classification rule + repo privacy gate |
| 9 | `40_REBUILD/digital/RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1.md` | YES | three-lane control, v2 theme rejection record, current content-branch pointer |
| 10 | `40_REBUILD/digital/RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md` | YES | IA/object model for materials, merch, evidence, refined sitemap |
| 11 | `40_REBUILD/digital/RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1.md` | YES | 10-route intake architecture, form field contracts |
| 12 | `40_REBUILD/digital/RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1.md` | YES | Needs/Impact/Transparency data + publication rules |
| 13 | `40_REBUILD/products/RB_MVP_MATERIALS_CATALOG_v0.1.md` | YES | 4 launch SKUs + statuses, 1 selective-hold SKU |
| 14 | `10_COMMERCE/design/reference/rebuild-page-system-golden-master/README.md` | YES (existing file was the gate spec; the frozen package's own README now also lives here — see §3) | |
| 15 | `90_AI_SYSTEM/handoffs/COM_TROPIK_COMMERCE_PROJECT_CONTEXT_PACK_2026-09-07.txt` | YES | current synchronized project context, supersedes older packs |

Also read, not in the numbered list but directly relevant and cross-referenced by #9 and #14:

- `90_AI_SYSTEM/handoffs/RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt` — the detailed Lane-2 execution prompt this package answers.
- `90_AI_SYSTEM/handoffs/RB_CLAUDE_COWORK_GOLDEN_MASTER_FREEZE_NO_GITHUB_PROMPT_2026-09-07.txt` — the prompt that produced the Golden Master export now committed under this repo.
- `40_REBUILD/governance/RB_DECISION_LOG_v0.1.md` — RB-D-035 through RB-D-038 are the binding decisions for this build.
- `10_COMMERCE/brand/COM_09_3_DROP_01_PRODUCT_CONCEPTS_v0.1.md` — checked for the 2026-09-07 override banner on Manguangua/Timbrao (confirmed present).

**Not read / not required by the execution prompt:** `RB_WEBSITE_SITEMAP_v0.1.md`, `RB_CLAUDE_COWORK_WEBSITE_HANDOFF_v0.1.md` (listed in the older fidelity-prompt read order but not in this session's explicit 15-file list; their content is superseded by the WooCommerce architecture doc's "Refined Re:Build sitemap" table and the 2026-09-07 navigation override, both of which were read).

---

## 2. Content-package status — **NOT SATISFIED**

Per `RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1.md`: *"Claude branch currently contains the Home proposal at commit `bac9ada`... it remains DRAFT/pending founder approval until explicitly accepted/merged."*

Confirmed current state on this branch:

| Page (approval order) | Status |
|---|---|
| 1. Home `/rebuild/` | **DRAFT** — proposed copy delivered (commit `bac9ada`), **not yet founder-approved** |
| 2. Recovery | NOT STARTED |
| 3. How It Works / Process | NOT STARTED |
| 4. Materials landing + detail framework | NOT STARTED |
| 5. Rebuilding / applications-trials | NOT STARTED |
| 6. Impact | NOT STARTED |
| 7. Needs / Support | NOT STARTED |
| 8. Work With Us | NOT STARTED |
| 9. Transparency | NOT STARTED |
| 10. About | NOT STARTED |
| 11. FAQ | NOT STARTED |
| 12. Contact | NOT STARTED |
| 13. Updates framework | NOT STARTED |

The Lane 1 exit gate ("all required public pages have founder-approved copy/status") is **not met**. This alone is sufficient to block final implementation regardless of Golden Master completeness — see `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` §1 for the gate this drives.

---

## 3. Golden Master status — **PRESENT, WITH DOCUMENTED GAPS**

Before this session, `10_COMMERCE/design/reference/rebuild-page-system-golden-master/` contained only the requirements/gate document (status `WAITING_FOR_COWORK_EXPORT`). The founder supplied the actual Cowork export as `rebuildpagesystemgoldenmaster.zip` in this conversation; it has been committed to this path (commit `262bed1`) as:

- `README.md` — the frozen package's own manifest (source: Artifact `6cab347c-e8b7-4baf-b864-601894782c25`, approval chain DEC-025→026→027→028→031)
- `TOKENS.md` — verbatim `:root` custom properties, including the confirmed Coral (`--tk-signal-coral: #F25B66`)
- `COMPONENT_INVENTORY.md` — every `.tk-*` class actually defined, grouped by function
- `PATTERN_MAP.md` — the 8 founder-required Gutenberg patterns mapped to real markup
- `INTERACTIONS.md` — every JS-driven behavior with its selector contract
- `ARTIFACT_SOURCE.html` — full multi-route Artifact HTML (verified byte-identical to the live Artifact read directly in this session's earlier Home-content work — see §3.1)
- `screenshots/` — 18 PNGs: `rebuild-home`, `rebuild-process`, `rebuild-material`, `faq`, `contact`, `terms`, each at 390/768/1440px only

The prior gate/requirements document is preserved at `GOLDEN_MASTER_GATE_SPEC_v0.1.md` for audit-trail reference — it defines the PASS/FAIL checklist this export is measured against below.

### 3.1 Independent verification performed

`ARTIFACT_SOURCE.html`'s md5 hash is identical to the artifact HTML this session already read directly from the live published Artifact (`6cab347c-...`) while preparing the Home content proposal. This means the previously-confirmed, source-level Home audit findings from that earlier work still hold against this frozen export without re-verification:

- Shop carries a `Live` badge (drawer + footer) while Home copy says merch is "coming soon."
- Demo bag/cart data includes an unrelated "Smell-Proof Container — Herb Keeper Jar" item.
- Account page headline reads "Your Tropik." while router/nav labels call it "My account."
- Drawer nav links do not close the panel on tap (`TkPanel` only wires the backdrop and the explicit close button).
- The frozen drawer still shows the **DEC-026** group structure (`Explore Re:Build`, `Support`, `Project`, `Your Tropik`, `Design reference`) — **not** the 2026-09-07 synchronized IA (no `Project`, `Support` absorbing About/Updates/FAQ/Contact/Transparency/Work With Us/legal pages, `Shop` as its own heading with `Merch`/`Products`, `My Account` naming). The package's own `README.md` explicitly flags this and instructs Lane 2 to build nav against the current context pack's IA, not the screenshots' literal link list — this instruction is treated as binding in `03_GOLDEN_MASTER_PARITY_MATRIX.md`.

### 3.2 Gaps against `GOLDEN_MASTER_GATE_SPEC_v0.1.md`'s PASS checklist

| Requirement | Status |
|---|---|
| Header — desktop + mobile | Present only as part of the Home/Process/etc. full-page screenshots; no isolated header capture |
| Left drawer — open state | **MISSING** — no drawer-open screenshot at any width |
| Bag drawer — populated + empty | **MISSING** — no cart/bag screenshot at any width |
| Home | Present, 390/768/1440 |
| One rail/carousel — desktop + mobile one-card state | Only implied inside the Home screenshot; no isolated rail capture showing the required mobile one-card state |
| Shop landing (Merch/Products architecture) | **MISSING** — no `shop.html` screenshot |
| Product detail/gallery | **MISSING** — no `product.html` screenshot (only the Re:Build *material* detail page, `rebuild-material`, which is a different template) |
| Checkout | **MISSING** |
| My Account | **MISSING** |
| One long editorial page showing accent/rhythm | Partially covered by `terms`/`faq`/`contact`, though these are policy/FAQ templates rather than a long narrative Re:Build page (e.g. `our-story.html`/`what-we-build.html`, which use the "narrative zone" pattern per `PATTERN_MAP.md` #3) |
| Breakpoints | Only 390/768/1440 captured. The binding responsive contract in `RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.2.md` §"Responsive QA" and the fidelity prompt both require **1440/1024/768/480/390** — **1024 and 480 are missing entirely, at every surface** |
| `REFERENCE_NOTES.md` as a distinct file | Not delivered as a separate file; its required content (deltas, fonts, tokens/dimensions, desktop/mobile differences, preview-chrome exclusion) is distributed across `README.md` + `TOKENS.md` + `COMPONENT_INVENTORY.md`, which covers most of the spec's required content except the explicit preview-chrome exclusion statement (see 3.3) |

### 3.3 Preview-chrome exclusion — not explicitly confirmed, but implied

The package's `README.md` states screenshots were "captured from the live published URL after the DEC-028 PII scrub" — a published Artifact URL does not render the Claude editor's "Artifact by you" / "Todas las páginas / Viendo: ..." chrome (that chrome is specific to the in-app editing view, which is what appears in the founder's own annotated phone screenshots from the earlier content-review session). This is a reasonable basis for treating preview chrome as excluded, but it was not independently re-verified pixel-by-pixel against the PNGs in this session. Treat as **LIKELY RESOLVED, not independently confirmed**.

### 3.4 Explicit open items the Golden Master package itself flags (not invented here — restated verbatim from source)

1. **GAP:** no dedicated "Impact/Update teaser" pattern exists anywhere in the Artifact (`PATTERN_MAP.md` #7). Two options exist (reuse `.tk-media-card`, or build a new component) — founder decision required before Lane 2 builds one.
2. **CONFLICT:** the Artifact's `.tk-carousel__btn` rule hides rail arrows entirely `≤640px` (`INTERACTIONS.md` #4, `PATTERN_MAP.md` #4), while the 2026-09-07 founder override requires visible, vertically-centered arrows on mobile narrative rails, advancing exactly one card. These are contradictory as written — Lane 2 must implement the **founder override**, not the frozen CSS rule, and this document records that decision so it is not silently made mid-build.
3. **OPEN QUESTION:** `--tk-leaf` (`#0F5A46`) exists as a token but is not wired to any live component; the Artifact currently uses `--tk-signal-green` (`#2FB98F`) for the "recovery/material/process" semantic role. `TOKENS.md` flags this explicitly and recommends founder confirmation of which token is intended before Lane 2 wires the semantic-accent system. **Default assumed by this package pending that confirmation: `--tk-signal-green`, because it is the value actually used in shipping markup today** — this default is stated here so it is visible and reversible, not buried in code.

---

## 4. Current theme baseline — **NO CODE PRESENT IN THIS REPOSITORY**

`gondelles/tropik-os` was searched (`find . -iname "*.php"`, `find . -iname "style.css" -o -iname "functions.php"`, `find . -iname "*theme*"`, `find . -iname "*.zip"`) and contains **zero** PHP files, theme files, or the `tropik-rebuild-theme-v2.zip` referenced by RB-D-037. The only trace of that theme in this repository is:

- SHA-256 `d8626bb2e2f1aa8013489f8228b32f27db7955df2e286f9f81507e98554b2e11`, internal version `2.0.0` (recorded in `RB_WEB_CONTENT_TO_WORDPRESS_EXECUTION_CONTROL_v0.1.md`)
- A bullet list of confirmed defects from a prior inspection session that had the zip (header missing Search/Account, Polylang flags instead of the ES/EN pill, nested Woo Mini-Cart, mobile arrows hidden ≤640px, drawer not closing on link tap, generic `wp_nav_menu()` flattening the drawer, general Woo/staging visual drift)
- RB-D-037/038 in the decision log, recording the same findings as governance decisions

**This means `02_THEME_CODE_GAP_AUDIT.md` cannot perform an independent line-by-line code diff in this session.** It is built entirely from the documented findings above, clearly labeled as such. If a code-level audit is wanted before Iteration 1 begins, the v2 zip (or its extracted source) needs to be committed to this repository or handed directly to the Lane-2 build session.

---

## 5. Plugin inventory — **NOT SUPPLIED**

`RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` itself ends with: *"Export the current WordPress `Plugins` screen (name/version/active status) or paste the list into the Claude Code session so the plugin audit can be completed plugin-by-plugin instead of by category."* That export has not happened. `07_PLUGIN_AUDIT.md` therefore ships as a classification framework with zero populated rows, not a guessed plugin list.

---

## 6. Repository privacy gate — **STILL OPEN, unchanged this session**

`gondelles/tropik-os` remains temporarily public per the existing gate. Nothing committed in this session (Golden Master export, these 10 documents) contains secrets, private authority evidence, personal workforce data, or confidential buyer terms — all source material was already `PRIVATE_WORKING` strategy documentation already present in this public-window repository. The trigger conditions in `RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` §6 are unaffected by this session's work; the founder still owns the decision to return the repository to private.

---

## 7. Blockers and conflicts summary (feeds the GO/HOLD call)

| # | Blocker | Severity | Owner |
|---|---|---|---|
| B1 | Content approval incomplete — only Home is drafted (unapproved); 12 pages not started | **P0 — blocks final implementation** | Founder (Lane 1) |
| B2 | Golden Master missing required breakpoints (1024, 480) at every surface | P1 — blocks full responsive parity QA | Lane 1 / Cowork re-export |
| B3 | Golden Master missing required surfaces (drawer open, bag populated/empty, shop landing, PDP, checkout, my account, isolated header, isolated rail mobile-state) | P1 — blocks parity verification for those surfaces specifically | Lane 1 / Cowork re-export |
| B4 | Mobile rail arrow rule conflict (frozen CSS hides ≤640px vs. founder override requires visible) | P1 — must be resolved as a build decision, not silently guessed | Resolved in this package as "build the override" (§3.4.2) — founder should confirm |
| B5 | `--tk-leaf` vs `--tk-signal-green` semantic ambiguity | P2 — cosmetic-only, does not block structural work | Resolved in this package with a stated default (§3.4.3) — founder should confirm |
| B6 | No v2 theme source in repo for independent code audit | P2 — narrows `02`'s confidence to documented findings only | Founder / prior session owner |
| B7 | No plugin inventory | P2 — blocks `07_PLUGIN_AUDIT.md` from being populated | Founder |
| B8 | Impact/Update teaser pattern has no existing markup | P2 — blocks Iteration 3 content-pattern work for that one pattern only | Founder decision (reuse `.tk-media-card` vs. new component) |

**B1 alone is a P0 that blocks final implementation.** See `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` for how this translates into the GO/HOLD gate.

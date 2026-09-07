# 08_CONTENT_AND_CLAIM_GATE_MAP

**Status:** PRIVATE_WORKING
**Purpose:** name exactly what copy is approved-to-ship, what must render as an honest pre-pilot placeholder, and what may never be published, so Lane 2 never has to guess a claim boundary mid-build.

## 1. Page-by-page approval status

| Page | Content status | What Lane 2 may ship today |
|---|---|---|
| Home | **DRAFT, not founder-approved** (branch commit `bac9ada`) | Nothing — wait for explicit approval. If approval lands mid-build, use the approved version, not the draft, and note the approval commit in the iteration review that consumes it |
| Recovery | NOT STARTED | Placeholder page only, gated per §5 |
| How It Works / Process | NOT STARTED | Placeholder |
| Materials landing + detail framework | NOT STARTED (product *data* exists in `RB_MVP_MATERIALS_CATALOG_v0.1.md`, but page *copy/framing* does not) | Product data model can be built (`05_WOOCOMMERCE_COMPONENT_CONTRACT.md` §2); marketing framing copy cannot |
| Rebuilding / applications-trials | NOT STARTED | Placeholder |
| Impact | NOT STARTED | Placeholder |
| Needs / Support | NOT STARTED | Placeholder |
| Work With Us | NOT STARTED (routes/fields architecture exists in `RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1.md`, page copy does not) | Form field architecture can be built; page copy cannot |
| Transparency | NOT STARTED | Placeholder, and gated further — see §6 |
| About | NOT STARTED | Placeholder |
| FAQ | NOT STARTED | Placeholder |
| Contact | NOT STARTED | Routing/field architecture can follow `RB_WORK_WITH_US...` pattern; final copy cannot |
| Updates | NOT STARTED | Placeholder |

**No page in this list is cleared for final marketing copy.** This is the single largest reason the GO/HOLD call in `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` is HOLD.

## 2. What Lane 2 CAN build now without content approval

Structure, patterns, data models, and functional wiring are not "content" in the sense this gate restricts — they don't assert facts. Safe to build ahead of content approval:

- Design tokens, header/drawer/bag shell, card/button/form primitives (Iteration 1 scope)
- WooCommerce product data model for the 4 Products SKUs (statuses only, no marketing prose)
- Gutenberg pattern registration (empty/placeholder content inside each pattern)
- Work With Us form field architecture (the fields themselves are not claims)
- Page skeletons using `.tk-gate-tag` "content pending approval" placeholders, exactly as the Artifact already does for unsupplied legal copy

## 3. Merch creative backlog — binding rule

`Qué Manguangua` (P04/C3) and `Estás todo timbrao` (P14) are **CREATIVE BACKLOG — REQUIRES NEW FOUNDER APPROVAL** as of 2026-09-07 (`10_COMMERCE/brand/COM_09_CURRENT_CREATIVE_APPROVAL_OVERRIDE_2026-09-07.md`).

- Do not seed either as a WooCommerce product, draft or published.
- Do not use their prior mockups/artwork as seed imagery, placeholder imagery, or "coming soon" teaser imagery.
- Historical approval language in `COM_09_3_DROP_01_PRODUCT_CONCEPTS_v0.1.md` (C3 concept-development approval dated 2026-08-29, P14 future-concept approval dated 2026-08-29) is preserved as an archival record only — confirmed present in that file's current-state override banner, added 2026-09-07 — and must not be read as current authorization.
- If any WXR/seed script needs a Merch placeholder product for demonstration purposes, use a generic, clearly-fake placeholder (e.g. "Sample Support Tee — placeholder, not for sale") rather than either backlogged design.
- Confirmed: neither design's name/text appears anywhere in the Golden Master `ARTIFACT_SOURCE.html` (checked this session) — there is no accidental seed risk from the Artifact itself.

## 4. Re:Build Products — status truth table (must render honestly, not just correctly)

| SKU | Status label that MUST appear | Prohibited framing |
|---|---|---|
| Road Base 0–40 | `FIELD TRIAL / local engineering specification TBD` | "Available," "Tested," "COVENIN-approved," any commercial-availability language |
| Mineral Fill | `FIELD TRIAL / local engineering specification TBD` | Same |
| Masonry Aggregate 0–25 | `FIELD TRIAL / YELLOW until source variability proven` | Must not read as tested/available "beyond its current evidence status" — explicit instruction from `RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md` §5 |
| Ferrous Scrap | `BUYER VALIDATION` | Commercial-availability language |
| Verified Reuse Components | `SELECTIVE HOLD / case-by-case` — **and excluded from the primary Products collection entirely** | Must not appear as a 5th live catalog item |

## 5. Prohibited claims — sitewide, every page, verbatim from the context pack

Do NOT publish as achieved fact unless supported by current source-of-truth evidence:
- Santa authorization / confirmed Re:Build polygon
- current Re:Build processing tonnage
- achieved recovery/diversion percentages
- generic COVENIN approval
- jobs generated without paid-work evidence
- carbon/CO2/environmental-benefit percentages
- unsecured donations/funding/equipment presented as committed
- pledged resources presented as received/deployed
- material sales presented as self-funding
- tax-deductible donation claims

**Approved pre-pilot substitute language (safe to seed as placeholder copy anywhere a real number would otherwise be needed):**
- "Measurement begins with the pilot."
- "We are validating the first operating site."
- "We are mapping the exact gaps before asking anyone to fill them."
- "One goal of the pilot is to create verified paid local work."

## 6. Needs / Impact / Transparency — additional publication gates

Beyond §5, these three page types carry their own stricter rules from `RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1.md`:

- A Need card is public-ready only when: still required = YES, host/public-works provision has been checked, a validated quantity/spec exists, an owner/date exists, a public-safe description exists, status evidence is current, and no financial CTA is attached unless separately approved. Homepage may show only 4–8 such cards; do not seed placeholder Need cards with invented quantities.
- Impact KPI cards must show value, unit, reporting period, updated date, and a methodology link — never a bare number. Before real measurement exists, use "Measurement begins with the pilot," never a `0`.
- Transparency page: cash receipt ≠ pledge; in-kind value needs an approved valuation basis; no named worker/payroll detail publicly; corrections are versioned, never silently overwritten.
- No item may ever appear as `PLEDGED / FULFILLED / DEPLOYED` without source evidence — this applies to any seed/demo data Lane 2 creates for staging as much as to real content; label demo data unambiguously as `TEST` if it must exist for layout QA.

## 7. Donation / funding gate — commerce and content both

`RED until specialist/founder approval`: public donation checkout, restricted salary donations, tax-deductibility claims, charitable receipts, donor-to-named-worker payments, beneficiary percentages, guaranteed worker/job outcomes, public pricing of "worker-day"/"crew-week" support units. `Work With Us` route #9 (Funding/institutional partnership) is an **inquiry form**, not a payment page, until this gate clears.

## 8. Work With Us — submission semantics (content implication)

Every route's copy must make clear a submission is `INTEREST / OFFER RECEIVED`, not employment, a donation, a vendor award, a buyer commitment, an authorization, or automatic Need fulfillment. This applies to whatever placeholder or final copy ships on that page — even pre-approval placeholder text must not accidentally promise more than "we received this and will review it."

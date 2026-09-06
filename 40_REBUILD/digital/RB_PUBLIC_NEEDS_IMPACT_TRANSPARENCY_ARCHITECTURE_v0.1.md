# RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06 — RB-03C

# 1. Purpose

Define the minimum data/product requirements for future public participation pages without launching fundraising or publishing unverified operational claims.

The public layer must answer:
1. What is Re:Build doing now?
2. What resources are genuinely needed now?
3. How can a person/company offer an item, equipment, service or professional support against a specific `NEED-ID`?
4. What measured impact has actually occurred?
5. How are cash/in-kind/restricted resources accounted for?
6. How could local work eventually be supported through an approved restricted Workforce Fund?

This document does **not** authorize public fundraising, donation claims, tax-deductibility, beneficiary percentages, public payroll data or payment collection.

---

# 2. Strategic principles

- **STRATEGIC DECISION:** a public `Re:Build Needs Registry` must be directly reachable from `/rebuild/`.
- **STRATEGIC DECISION:** needs are grouped by project use, not as an unstructured wishlist.
- **STRATEGIC DECISION:** an internal planning need does not become a public ask until host/public-works/contractor availability is checked.
- **STRATEGIC DECISION:** every public need shows Need ID, purpose, quantity/unit, priority, status and last-updated date.
- **STRATEGIC DECISION:** `I can help with this` captures an offer; it does not automatically accept a donation or commitment.
- **STRATEGIC DECISION:** public impact metrics show only measured/approved values with reporting period and methodology.
- **STRATEGIC DECISION:** workforce support should use a restricted `Re:Build Workforce Fund` / worker-day / crew-week model rather than donor-to-named-worker payments by default.
- **STRATEGIC DECISION:** accounting, payroll, HSE, load/batch, QA, funding and contribution master records remain outside WooCommerce/WordPress; the site displays approved summaries.
- **PROHIBITED CLAIM:** no item may appear as `PLEDGED / FULFILLED / DEPLOYED`, no wage as paid, and no KPI as achieved without source evidence.
- **PROHIBITED CLAIM:** no `jobs generated in impacted local communities` until the geography/eligibility definition, privacy rule and paid-work evidence are approved.

---

# 3. Canonical internal sources

- Needs: `40_REBUILD/procurement/RB_NEEDS_REGISTER_v0.1.md`
- Data schema: `40_REBUILD/data/RB_03C_MINIMUM_DATA_MODEL_v0.1.md`
- KPI formulas: `40_REBUILD/data/RB_KPI_DICTIONARY_v0.1.md`
- Workforce/funding model: `40_REBUILD/people/RB_WORKFORCE_PARTNER_AND_FUNDING_MODEL_v0.1.md`
- WordPress/WooCommerce architecture: `40_REBUILD/digital/RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1.md`

WordPress receives only a controlled approved export/view from these sources.

---

# 4. `/rebuild/` — homepage product requirements

## Objective
Give a first-time visitor a truthful current-state view and one clear path to participate.

## Required blocks

### A. Current project status
Fields:
- stage/status label;
- current pilot geography only if public-safe/approved;
- one-sentence current activity;
- last updated;
- link to latest update/evidence.

Do not show an assumed Santa cell as an authorized operating site.

### B. KPI strip — 4–6 metrics only
Preferred order once approved data exists:
1. incoming or processed tonnes — boundary explicitly named;
2. product/recovered tonnes released by approved stream;
3. worker-days;
4. local payroll/labor paid after accounting approval;
5. technical trials completed / projects supplied;
6. equipment-hours received or Needs deployed.

Every KPI card includes value, unit, reporting period, updated date and methodology link.

If measurement has not started, use `Measurement begins with the pilot` rather than turning targets/assumptions into `0` impact.

### C. `What we need right now`
Show 4–8 highest-priority **public-ready** needs only.

Card fields:
- Need ID;
- short public title;
- project use;
- quantity/unit still needed;
- priority;
- status;
- needed-by window;
- last updated;
- CTA `I can help with this`.

No estimated price is required on the homepage. Do not expose sensitive security/site/procurement details.

### D. Workforce Fund teaser
**YELLOW / PREPARE ONLY.**

Before approval, the block may explain that Re:Build is designing a transparent way to support verified local work, but must not collect money or show worker-day prices.

After legal/accounting/labor/payment approval, potential CTA: `Support local work`.

### E. Current material / trial status
Show only current lifecycle/status such as `FIELD TRIAL / HOLD / TESTED / AVAILABLE` tied to evidence. No generic compliance claim.

### F. Latest update
Date, headline, 2–3 sentence summary, link.

### G. Primary CTAs
- `See all needs`
- `Offer equipment/material`
- `View impact`
- `Partner with Re:Build`
- future `Support local work` only after gate.

## Approved criterion
Homepage can render only approved source values and public-ready Needs; no estimate is visually indistinguishable from achieved impact.

---

# 5. `/rebuild/needs/` — public Needs Registry

## Grouping by project use

1. Site Setup & Safety
2. Intake, Weighing & Traceability
3. Sorting & Material Recovery
4. Heavy Equipment & Processing
5. Water / Runoff / Environmental Controls
6. Quality Control / Laboratory / Engineering
7. Logistics / Maintenance / Operating Inputs
8. Workforce & Technical People
9. Professional / Institutional Support

## Public Need record

`need_id, public_title, category, subcategory, use, unit, qty_needed, qty_pledged, qty_received, qty_deployed, priority, status, needed_by, public_spec, acceptable_equivalent, last_updated, public_notes`

Internal-only fields remain hidden:
- vendor negotiations;
- sensitive site/security information;
- contributor personal data;
- internal quote documents;
- worker identities/payroll;
- unresolved legal notes.

## Public statuses

`NEEDED -> OFFER RECEIVED -> UNDER REVIEW -> PLEDGED -> PARTIALLY FULFILLED -> FULFILLED -> DEPLOYED -> CLOSED`

Additional: `PAUSED / NO LONGER NEEDED`.

An offer is not a donation; a pledge is not receipt; receipt is not deployment.

## Filter requirements

- category;
- priority;
- status;
- contribution type: equipment / material / service / professional / workforce-related;
- needed-by window where useful.

Do not build complex marketplace logic in MVP.

---

# 6. `I can help with this` — Contribution Offer product requirements

Form fields:
- name;
- organization;
- email/phone;
- Need ID auto-filled;
- what is offered;
- quantity/unit;
- make/model/spec if equipment;
- condition;
- dates/availability;
- transport/mobilization included?;
- operator included?;
- fuel included?;
- restrictions/notes;
- estimated value optional;
- permission to contact;
- public acknowledgement permission optional.

Data writes to Contribution Offer Register with status `RECEIVED/UNDER REVIEW`; it never updates Need fulfillment automatically.

Review flow:

`FORM -> OFFER RECEIVED -> TECHNICAL/LEGAL/OPS REVIEW -> ACCEPT/DECLINE -> PLEDGED -> RECEIPT EVIDENCE -> FULFILLED -> DEPLOYMENT EVIDENCE -> DEPLOYED`

No automated donor acknowledgement until permissions/data QA are proven.

---

# 7. `/rebuild/impact/` — public dashboard

Canonical KPI definitions: `RB_KPI_DICTIONARY_v0.1.md`.

## Operations
- incoming tonnes;
- loads received;
- processed tonnes;
- recovered tonnes by approved stream;
- residual tonnes;
- suspect/quarantined tonnes;
- product tonnes released;
- product tonnes redeployed/supplied;
- batches tested/released;
- mass-balance closure/error where methodology is useful to show.

## Jobs / Community
Public-first metrics:
- workers paid;
- worker-days;
- FTE-equivalent only after methodology/legal review;
- local payroll/labor paid after accounting approval;
- training hours.

**RED until definition/privacy gate:** workers/jobs from `impacted local communities`.

## Reconstruction / Offtake
- technical trials started/completed;
- trial tonnes;
- projects supplied;
- repeat offtake events/tonnes.

## Funding / Resources
After legal/accounting approval:
- cash support received;
- in-kind value received under approved valuation method;
- equipment-hours received;
- Needs fulfilled/deployed;
- Workforce Fund received/deployed only after the mechanism is approved;
- verified payroll/labor funded at aggregate level.

## HSE / Environment
- incidents at approved aggregation/classification;
- near misses where useful and safe;
- rejected/quarantined loads;
- suspect-material tonnes with correct wording;
- measured water use where useful.

**RED:** carbon avoided, CO2 reduction, landfill-diversion %, coastal pollution avoided, circularity % or other environmental-benefit % until a specialist-approved baseline/methodology exists.

---

# 8. `/rebuild/transparency/`

## Objective
Reconcile what was received, restricted, deployed and reported without turning the website into the accounting ledger.

## Future sections

1. reporting period/current status;
2. cash received by approved support category;
3. restricted vs unrestricted funds;
4. in-kind resources received and valuation methodology;
5. deployed resources by approved category;
6. Workforce Fund summary only after approval;
7. reconciliation/report downloads or approved summaries;
8. correction/version notes;
9. methodology and governance links.

## Required controls

- cash receipt ≠ pledge;
- invoice/estimated reference value ≠ fair-value accounting automatically;
- in-kind value must have an approved valuation basis;
- restrictions must follow funds into deployment records;
- unused restricted balances require approved treatment;
- no named worker/payroll detail publicly;
- corrections are versioned, not silently overwritten.

---

# 9. `/rebuild/support/`

## Before fundraising approval — allowed

- explain non-financial partnership categories;
- link to Needs Registry;
- accept `I can help with this` in-kind/service offers;
- accept `Partner with Re:Build` contact requests;
- explain that approved financial support mechanisms are in preparation without implying tax deductibility.

## RED until specialist/founder approval

- public donation checkout;
- restricted salary donations;
- tax-deductibility claims;
- charitable receipts;
- donor-to-named-worker payments;
- beneficiary percentages;
- guaranteed worker/job outcomes;
- public pricing of worker-day/crew-week support units.

---

# 10. Workforce Fund public architecture — PREPARE ONLY

Provisionally named `Re:Build Workforce Fund`.

Potential future support units:
- one sorting worker-day;
- one crew-day;
- one crew-week;
- one equipment-operator day;
- one HSE day;
- local engineering hours;
- worker PPE/training support.

**Do not define amounts yet.** Unit prices require real workforce intakes/rates plus Venezuelan labor/legal, tax/accounting, HSE and payment-mechanism approval.

Data flow:
`approved receipt -> restriction -> eligible workforce cost -> payroll/service evidence -> deployment -> reconciliation -> approved aggregate KPI`.

---

# 11. Public data architecture

## Needs Register
`need_id, category, subcategory, title, use, unit, qty_needed, qty_pledged, qty_received, qty_deployed, priority, status, reference_value, quote/evidence, owner, needed_by, last_updated`

## Contribution Offer Register
`offer_id, need_id, contributor, organization, offer, qty, condition, availability, transport, operator, fuel, restrictions, review_status, received_date`

## Workforce Partner Register
`workforce_id, organization/person, crew_size, roles, rate_basis, expected_rate, availability, HSE, legal/contractor_status, references, status`

## Workforce Funding Register
`fund_id, category, amount_received, restriction, eligible_cost, amount_deployed, payroll_reference, balance`

## KPI Register
`metric_id, name, definition, unit, formula, source, period, value, methodology_version, approved_by, publish_status`

Expanded canonical schemas live in `RB_03C_MINIMUM_DATA_MODEL_v0.1.md`.

---

# 12. Publication workflow

`MASTER RECORD -> PERIOD/STATUS CLOSE -> DATA QA -> SPECIALIST APPROVAL IF REQUIRED -> FOUNDER/PUBLICATION APPROVAL -> PUBLIC EXPORT -> WORDPRESS DISPLAY`

Do not connect raw operational tables directly to a live public dashboard during MVP.

---

# 13. Top future homepage Needs — source rule

Candidate shortlist is maintained in `RB_NEEDS_REGISTER_v0.1.md` Section K. It is **not** public-ready merely because it appears there.

Homepage can show a candidate only when:
- still required = YES;
- host/public-works provision checked;
- validated quantity/spec exists;
- owner/date exists;
- public-safe description exists;
- status evidence is current;
- financial CTA absent unless separately approved.

---

# 14. GREEN / YELLOW / RED

## GREEN — execute now
- maintain internal Needs Register;
- validate host/contractor availability;
- build Contribution Offer form as draft/unpublished;
- create KPI Register and formulas;
- create public-page wireframes/drafts with placeholder states;
- define Workforce Fund legal/accounting questions;
- record interested engineers/crews as workforce partners, not employees;
- test manual data-to-approved-summary workflow.

## YELLOW — prepare/validate
- public Needs Registry;
- public Impact Dashboard;
- public transparency reports;
- donor/partner acknowledgement;
- Workforce Fund public pages;
- restricted-fund reporting;
- read-only semi-automated approved exports after manual QA is stable.

## RED — do not launch
- public financial fundraising/payment collection before approval;
- salary donation collection;
- tax-deductibility/charitable receipt claims;
- donor-to-named-worker salary model;
- unverified KPI publication;
- public payroll/PII;
- live raw-data dashboard;
- displaying pledged resources as received/deployed;
- carbon/diversion/environmental benefit claims without methodology.

---

# 15. Major implementation block

**Objective:** make public participation transparent and useful without publishing assumptions or creating accounting/HSE risk.  
**Expected result:** approved data contract for `/rebuild/`, `/needs/`, `/impact/`, `/transparency/` and `/support/`, ready for later WordPress implementation.  
**Recommended tools:** current WordPress stack; simple forms; Google Sheets/simple database; manual approved export; no paid plugin required yet.  
**Concrete steps:** validate top Needs -> create internal registers -> calculate KPI test records -> create unpublished page wireframes -> test `I can help with this` review flow -> obtain legal/accounting/workforce gates -> only then expose financial support.  
**Validation checklist:** every Need has owner/evidence/status; every KPI has formula/source/period; offer does not auto-fulfill; workforce PII hidden; cash/in-kind/restrictions reconcile; publication owner approves.  
**Approved:** a random public card/KPI can be traced to an approved internal record without manual inference.  
**Not approved:** targets appear as impact, Needs are sourced before host check, payment is enabled before legal/accounting approval, or raw operational data is public.  
**Risks/common errors:** wishlist publishing; status inflation; duplicate data stores; donor-value inflation; public wage detail; mixing pledges/receipts; live automation before QA.  
**Delegation:** data owner; accountant/tax; labor/legal counsel; HSE; WordPress implementer only after data/publication rules are stable.  
**Exact next action:** build the internal spreadsheet registers and one unpublished homepage/Needs/Impact data mock using **dummy values clearly labeled TEST**, then confirm every displayed field maps to a source column before any real values are exposed.

# RB_PUBLIC_NEEDS_IMPACT_TRANSPARENCY_ARCHITECTURE_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06 — post RB-03B founder direction

## 1. Purpose

Define the minimum public architecture for Re:Build to show, from the public website/homepage:

1. what physical materials, equipment, services and labor support the project currently needs;
2. what has been pledged, funded, delivered and deployed;
3. how an interested person/company can offer an in-kind contribution or approved financial support;
4. how verified project KPIs are progressing;
5. how workforce/payroll support can be transparently funded without misleading donors or exposing workers.

This document does **not** authorize public fundraising, donation claims, tax-deductibility claims, beneficiary promises or payment collection.

---

## 2. Strategic principles

- **STRATEGIC DECISION:** a public `Re:Build Needs Registry` must be directly reachable from the Re:Build homepage.
- **STRATEGIC DECISION:** needs are grouped by project use, not as an unstructured wishlist.
- **STRATEGIC DECISION:** every public need must show quantity/unit, priority, current status, intended use and last-updated date.
- **STRATEGIC DECISION:** in-kind interest uses a simple contact/offer workflow before any commitment is accepted.
- **STRATEGIC DECISION:** public impact metrics may show only measured/approved values with methodology and reporting period.
- **STRATEGIC DECISION:** workforce support should be structured as a restricted `Re:Build Workforce Fund` / worker-day / crew-week support layer rather than donor-to-individual payments by default.
- **STRATEGIC DECISION:** operational, HSE, payroll, accounting and donor master records remain outside WooCommerce; the website displays approved summaries.
- **PROHIBITED CLAIM:** no item shown as `FUNDED`, `DONATED`, `DEPLOYED`, no salary shown as `PAID`, and no KPI shown as achieved without a supporting record.

---

## 3. Public Needs Registry

### 3.1 Needs taxonomy

#### A. Site Setup & Safety
- barriers / traffic cones / signs;
- PPE;
- hard hats / boots / gloves / eye and hearing protection;
- respirator/RPE equipment as specified by HSE;
- first-aid / eyewash / emergency equipment;
- spill kits / extinguishers;
- lighting;
- toilets / changing / wash facilities;
- office and welfare containers;
- shade / hydration;
- fencing / security equipment.

#### B. Intake, Weighing & Traceability
- weighbridge access;
- portable axle scales;
- tablets / phones;
- cameras;
- printers / labels;
- radios / communications;
- power banks / UPS;
- data connectivity.

#### C. Sorting & Material Recovery
- skips / bins;
- sorting tables;
- pallets / racks;
- hand tools;
- grapples / attachments;
- metal collection containers;
- magnets / magnetic-separation support.

#### D. Heavy Equipment & Processing
- wheel loader;
- excavator;
- hydraulic breaker;
- jaw crusher;
- screen;
- magnetic separator;
- conveyors only where justified;
- skid steer;
- water bowser;
- mist/dust suppression;
- generator;
- trucks / low-bed mobilization.

**MVP preference:** access, rental, operated equipment, campaign use or in-kind support before purchase.

#### E. Quality Control & Laboratory
- sieves / scales / moisture tools;
- sampling containers / bags / tags;
- laboratory testing;
- field density / compaction testing;
- materials/pavement engineering review;
- sample transport.

#### F. Logistics, Maintenance & Operating Inputs
- fuel;
- truck hours / haulage;
- water;
- lubricants / filters / hoses / wear parts;
- maintenance labor;
- authorized residual disposal;
- hazardous-material specialist services;
- security;
- communications.

#### G. Workforce & Technical People
- sorting crew worker-days;
- crew-weeks;
- equipment operator-days;
- site supervisor time;
- HSE specialist time;
- materials/QC technician time;
- local civil/materials engineer hours;
- mechanic hours;
- training hours;
- PPE allocation for workers.

#### H. Professional / Institutional Support
- Venezuelan legal review;
- environmental review;
- accounting/tax support;
- procurement/equipment support;
- grant/funding support;
- communications/documentation support.

### 3.2 Need record — minimum fields

`NEED-ID`  
Public title  
Category / subcategory  
Project use  
Priority: CRITICAL / HIGH / MEDIUM / LATER  
Unit  
Quantity needed  
Quantity pledged  
Quantity received  
Quantity deployed  
Estimated reference value  
Cash / in-kind / service  
Location/site if public-safe  
Needed-by date/window  
Status  
Technical requirement/spec  
Acceptable equivalent?  
Evidence/quote basis  
Last updated  
Public notes  
Internal owner  

### 3.3 Public statuses

`NEEDED -> OFFER RECEIVED -> UNDER REVIEW -> PLEDGED -> PARTIALLY FULFILLED -> FULFILLED -> DEPLOYED -> CLOSED`

Additional: `PAUSED / NO LONGER NEEDED`.

An offer is not a donation until formally accepted and received.

### 3.4 Public CTA

Each need should have one primary CTA:

**`I can help with this`**

Form captures:
- name / organization;
- email / phone;
- NEED-ID;
- what is being offered;
- quantity;
- make/model/condition if equipment;
- dates/availability;
- transport/mobilization included?;
- operator/fuel included?;
- estimated value optional;
- restrictions/notes;
- permission to contact.

No automatic acceptance or public donor acknowledgement without review.

---

## 4. Workforce Support Architecture

### Preferred model

Create a restricted support category named provisionally:

**`Re:Build Workforce Fund`**

Purpose: finance verified payroll and worker-support costs required for approved Re:Build operations.

Public support units may include, after legal/accounting approval:
- `Support 1 sorting worker-day`;
- `Support 1 crew-week`;
- `Support 1 equipment operator-day`;
- `Support HSE supervision`;
- `Support materials/testing staff`;
- `Support local engineering hours`.

The website must not imply that a donor directly employs, controls or pays a named worker unless a legally structured mechanism specifically permits that.

### Workforce transparency KPIs

Only after payroll/HR verification:
- worker-days funded;
- worker-days worked;
- FTE-equivalent jobs;
- number of paid workers;
- percentage/count from defined impacted local communities only where collection methodology and privacy rules are approved;
- gross payroll paid;
- training hours;
- PPE/training coverage.

**PROHIBITED CLAIM:** `jobs generated for impacted communities` without a documented definition of `impacted community`, worker consent/privacy controls where applicable, and auditable payroll/work records.

### Mandatory specialist gate

Before collecting restricted salary donations/funding publicly validate:
- legal entity receiving funds;
- employment/payroll responsibility;
- Venezuelan labor-law treatment;
- tax/accounting treatment;
- donor restrictions;
- payment processor rules;
- restricted-fund accounting;
- refunds/unused restricted funds;
- privacy and public reporting rules;
- whether receipts can legally be described as donations and whether any tax deductibility exists.

---

## 5. Public Impact Dashboard

### 5.1 Homepage KPI strip — first version

Show only 4–6 top metrics:
1. **Tonnes of debris received / processed**;
2. **Tonnes recovered / released by material stream**;
3. **Worker-days / FTE-equivalent jobs paid**;
4. **Local payroll paid**;
5. **Reconstruction/material trials or projects supplied**;
6. **In-kind resources received / deployed**.

Every metric includes:
- reporting period;
- last updated date;
- measurement boundary;
- link to methodology.

### 5.2 Full dashboard

#### Materials / Operations
- incoming tonnes;
- loads received;
- concrete/mineral tonnes;
- masonry tonnes;
- ferrous/non-ferrous recovered;
- reuse components released;
- suspect/quarantine tonnes;
- residual tonnes;
- saleable/redeployed tonnes;
- mass-balance closure;
- product batches created/tested/released;
- processing machine hours and downtime where useful.

#### People / Livelihoods
- workers paid;
- worker-days;
- FTE-equivalent;
- payroll paid;
- training hours;
- local/impacted-community employment only under approved definition/methodology.

#### Reconstruction / Offtake
- buyer trials;
- trial tonnes;
- projects supplied;
- material tonnes redeployed;
- repeat buyers/offtakers when public-safe.

#### Funding / Resource Transparency
- cash received by approved support category;
- in-kind fair-value received;
- needs fully/partially funded;
- workforce support received;
- payroll actually paid;
- testing/HSE/equipment support spent;
- restricted vs unrestricted funds;
- remaining approved funding need.

#### HSE / Environmental
- working hours;
- incidents / near misses / corrective actions at an approved aggregation level;
- rejected/quarantined loads;
- water used for dust control if measured;
- no carbon/diversion/environmental-benefit percentage until methodology is approved.

---

## 6. Website information architecture

### Homepage `/rebuild/`
Recommended blocks:
1. Re:Build mission/current status;
2. live/approved KPI strip;
3. `What we need right now` — 4–8 highest-priority needs;
4. `Help fund local work` — Workforce Fund teaser only after legal/accounting gate;
5. current material/output status;
6. recent project update;
7. CTAs: `See all needs`, `Offer equipment/material`, `View impact`, `Partner with Re:Build`.

### Dedicated routes
- `/rebuild/needs/` — full Needs Registry;
- `/rebuild/needs/equipment/`;
- `/rebuild/needs/site-safety/`;
- `/rebuild/needs/operations/`;
- `/rebuild/needs/testing-engineering/`;
- `/rebuild/needs/workforce/`;
- `/rebuild/impact/` — public dashboard;
- `/rebuild/methodology/`;
- `/rebuild/transparency/`;
- `/rebuild/support/` — approved support routes;
- `/rebuild/partners/`.

### Data architecture

MVP source of truth should be spreadsheet/simple database first:

`Needs Register -> Contribution/Offer Register -> Donation/Funding Register -> Deployment/Expense records -> approved public summary`

`Load/Batch/Payroll/Trials -> KPI calculation sheet -> approved public dashboard`

WordPress displays approved data; it is not the accounting, payroll or HSE master database.

---

## 7. Minimal dashboard/needs data tables

### Needs Register
`need_id, category, subcategory, title, use, unit, qty_needed, qty_pledged, qty_received, qty_deployed, priority, status, reference_value, evidence_id, needed_by, owner, last_updated, public_notes`

### Contribution Offer Register
`offer_id, need_id, contributor, organization, contact, offer_type, qty, make_model, condition, availability, transport, operator, fuel, restrictions, review_status, accepted_by, received_date`

### Workforce Funding Register
`workforce_fund_id, support_category, amount_received, restrictions, reporting_period, payroll_cost_eligible, amount_deployed, balance, accounting_reference`

### KPI Register
`metric_id, metric_name, unit, period_start, period_end, value, source_table, methodology_version, evidence_reference, approved_by, publish_status, published_at`

---

## 8. GREEN / YELLOW / RED

### GREEN — execute now
- design Needs Register;
- maintain equipment/material/service/workforce needs internally;
- add unpublished homepage/needs/dashboard wireframe requirements;
- create in-kind interest form;
- define KPI formulas and source records;
- prepare Workforce Fund accounting/legal questions;
- record existing interested engineers/crews as potential workforce suppliers/partners, not employees until contracted.

### YELLOW — prepare/validate
- public Needs Registry;
- public KPI dashboard;
- donor acknowledgement;
- workforce-funding public pages;
- restricted-fund reporting.

### RED — do not launch yet
- collect public donations without approved legal/accounting/payment route;
- tax-deductibility claims;
- donor-to-named-worker direct salary claims;
- guaranteed job/beneficiary promises;
- public payroll/personally identifiable worker data;
- publishing KPI values from estimates/targets;
- displaying pledged items as received/deployed;
- automated live dashboard before data QA is reliable.

---

## 9. Approval criterion

This architecture becomes public-launch ready only when:
1. legal/accounting support mechanism is approved;
2. privacy/workforce reporting rules are approved;
3. Needs Registry statuses and owner workflow are working manually;
4. KPI source tables and formulas are tested;
5. every public metric has methodology/date/source;
6. contribution offers can be reviewed before acceptance;
7. financial/in-kind/restricted-fund records reconcile.

## 10. Exact next action

During RB-03C, create the first internal `NEEDS REGISTER v0.1` using the Santa-only pilot as the planning case and populate it with all physical, equipment, HSE, testing, logistics, workforce and professional-support requirements needed to execute the first 90-day pilot. Do not publish or collect funds yet.

# RB_WORKFORCE_PARTNER_AND_FUNDING_MODEL_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Session:** RB-03C  
**Updated:** 2026-09-06

## Founder context

**VERIFIED FOUNDER-PROVIDED CONTEXT:** local engineer groups and worker crews have expressed interest in participating and need financial support.

**Classification:** `INTEREST IDENTIFIED`. This is not employment, a contractor award, a wage promise, an approved workforce budget or secured funding.

> ⚠️ **WORKING HYPOTHESIS — FIELD VALIDATION REQUIRED:** workforce roles, crew sizes, rates, payroll burden, contractor treatment, PPE/transport obligations and fund unit costs remain unknown. **DO NOT USE AS PUBLIC FACT OR CAPITAL COMMITMENT UNTIL VALIDATED.**

---

# 1. Objective

Convert informal workforce interest into comparable, safe and legally reviewable partner records and establish a restricted-funding architecture that can later support verified local work without donor-to-named-worker direct-payment claims.

## Expected result

- every interested engineering group/crew/operator has one structured intake record;
- rates are comparable by day/week/month/hour and inclusions;
- HSE, transport, PPE, equipment and invoicing capabilities are known;
- legal/contractor/employment treatment is flagged for specialist review;
- actual workforce cost evidence can replace RB-03B payroll ROM;
- Workforce Fund support units remain unpriced until validation;
- public fundraising remains RED.

## Recommended tools

Google Form/Sheet; Workforce Partner Register; document-upload folder; structured interview; rate normalization sheet; counsel/accountant review; HSE competency matrix.

---

# 2. Workforce Partner Intake — common header

`WORKFORCE-ID: WF-###`

- Organization/person name:
- Primary contact:
- Phone/email:
- Address/base location:
- Organization/legal form if applicable:
- Registration/tax/invoicing capability:
- Referral/source:
- Date contacted:
- Geographic availability:
- Availability start/end:
- Willing to support a 90-day pilot? `YES / NO / CONDITIONAL`
- Current status: `IDENTIFIED / INTERVIEWED / DOCS REQUESTED / UNDER REVIEW / QUALIFIED / CONDITIONAL / NOT QUALIFIED / CONTRACTING GATE / ACTIVE / CLOSED`

---

# 3. Engineering group intake

## Team / expertise

- number of professionals available;
- civil/site engineers;
- materials/pavement engineers;
- environmental engineers/specialists;
- HSE professionals;
- survey/GIS capability;
- QA/lab coordination capability;
- equipment/process experience;
- waste/C&D/disaster-recovery experience;
- relevant projects/references.

## Services available

- site polygon/survey/traffic review;
- drainage/runoff/environment screening;
- material specification review;
- feedstock sampling design;
- laboratory request/spec interpretation;
- trial placement/field acceptance;
- HSE risk assessment/SOP review;
- daily/part-time site engineering coverage.

## Commercial data

- expected hourly rate by role;
- expected day rate;
- weekly/monthly retainer if offered;
- minimum engagement;
- travel/transport included?;
- per diem/accommodation if any;
- equipment/software/survey tools included?;
- taxes/withholding/invoicing assumptions;
- payment terms;
- pro-bono/in-kind hours offered, if any;
- quote validity.

---

# 4. Cuadrilla intake

## Crew composition

- crew size available;
- crew leader/foreman;
- sorters/laborers;
- riggers/spotters;
- operators;
- mechanic/helper;
- drivers if any;
- skilled trades;
- replacement/absence policy.

## Experience

- debris handling;
- construction/demolition environment;
- material sorting;
- loading/stockpiles;
- traffic/spotting;
- crusher/screen support;
- public works/earthworks;
- references and prior client contacts.

## Availability

- days/week;
- hours/day;
- shifts;
- earliest start;
- minimum crew mobilization;
- 90-day availability/constraints.

## Rate data

- rate basis: worker-day / crew-day / crew-week / monthly / task;
- gross expected rate;
- overtime/holiday/night assumptions;
- crew leader premium;
- transportation included?;
- meals/hydration included?;
- PPE supplied by crew or Re:Build?;
- tools supplied?;
- insurance/occupational coverage?;
- invoicing capability?;
- payment frequency/terms;
- taxes/withholding assumptions.

---

# 5. Individual operator/specialist intake

- role/trade;
- equipment make/class competence;
- license/certification/competency evidence;
- years/relevant experience;
- equipment owner or labor-only?;
- hourly/day/campaign rate;
- minimum hours/day;
- overtime;
- transport;
- PPE;
- fuel/maintenance if equipment included;
- insurance/contractor status;
- invoicing/payment capability;
- references;
- 90-day availability.

---

# 6. HSE / competency intake — all workforce types

Capture:
- induction history;
- mobile-plant interaction training;
- traffic/spotter competence;
- silica/dust/RPE training where relevant;
- manual-handling/cut hazard training;
- first-aid certification;
- hot-work competence if relevant;
- lockout/energy-isolation awareness for operators/maintenance;
- incident history declaration where legally appropriate;
- medical/fitness requirements only as legally/HSE justified and privacy-controlled;
- required training before deployment;
- PPE matrix by role.

**STRATEGIC DECISION:** interest and low price never override HSE qualification.

---

# 7. Document request

For organizations/crews/operators as applicable:
- identity/organization registration;
- tax/invoicing details;
- quote/rate sheet;
- team roster by role, not for public display;
- operator licenses/competency evidence;
- insurance/coverage evidence if available/required;
- HSE procedures/training evidence;
- references;
- equipment ownership/authorization if offering equipment;
- equipment inspection/service evidence;
- bank/payment details only after contracting gate and under controlled privacy.

---

# 8. Rate normalization

Convert all workforce offers to comparable internal units without changing legal classification:

`effective worker-day cost = total payable crew/service cost / verified worker-days delivered`

`crew-day = one defined crew composition for one defined shift`

`crew-week = defined crew-day × agreed working days, plus only documented included costs`

`operator-day = operator labor + clearly separated equipment/fuel/transport if bundled`

`engineering hour = professional fee + explicitly separated travel/field extras`

Never compare a cash wage to a fully-loaded contractor rate without marking inclusions.

---

# 9. Workforce cost validation table

For each role capture:

`role_id, workforce_id, role, qty_people, rate_basis, quoted_rate, shift_hours, days_week, transport_included, PPE_included, tools_included, insurance_included, taxes_withholding_basis, invoice_capable, overtime_rule, expected_monthly_equivalent, evidence_ref, quote_date, validity, legal_review_status`

Replace RB-03B payroll ROM only after multiple comparable quotes/intakes and legal/accounting treatment are understood.

---

# 10. Preliminary Re:Build Workforce Fund architecture

## STRATEGIC DECISION

Provisionally structure a restricted category:

**`Re:Build Workforce Fund`**

Purpose: support verified eligible workforce/payroll/professional costs for approved Re:Build operations, subject to legal/accounting/fundraising approval.

## Potential future support units — UNPRICED

- one sorting worker-day;
- one crew-day;
- one crew-week;
- one equipment operator-day;
- one HSE supervision day;
- local engineering hours;
- worker PPE/training allocation.

**PROHIBITED CLAIM:** no public amount may be attached to these units until actual cost, legal treatment, accounting allocation and payment mechanism are approved.

## Fund data flow

`APPROVED SUPPORT RECEIPT -> restriction/category -> eligible workforce cost -> approved payroll/service reference -> deployment -> reconciliation -> approved public aggregate`

No donor is represented as directly employing, controlling or paying a named worker by default.

---

# 11. Workforce Funding Register

`fund_id, receipt_date, support_category, amount_received, currency, source_type, donor/contributor_internal_ref, restriction, eligible_cost_rule, amount_deployed, payroll/service_reference, deployment_date, balance, accounting_reference, approval_status, publish_status`

Public reporting uses aggregates only unless explicit permission/law/accounting policy allows otherwise.

---

# 12. Eligible-cost design — PRELIMINARY ONLY

Possible eligible categories after review:
- gross wages/contractor labor for approved shifts;
- statutory employer/payroll costs if applicable;
- approved operator/service labor;
- HSE supervision;
- local engineering hours;
- mandatory PPE/training tied to deployed workers;
- worker transport only if included in approved workforce support policy.

**Not approved until review:** administrative overhead percentage, unrestricted founder compensation, donor-specific named-worker payments, cash handouts, beneficiary promises.

---

# 13. Specialist approval gates

## Venezuelan labor/legal counsel must approve

- employee vs independent contractor vs crew-company classification;
- contracting entity and authority;
- minimum labor protections/benefits;
- working hours/overtime/rest;
- occupational-risk/insurance responsibilities;
- termination/engagement terms;
- liability/indemnity;
- whether restricted workforce support creates additional obligations;
- privacy/consent for workforce reporting;
- fundraising/donor language affecting workers.

## Accountant/tax must approve

- payroll/tax/withholding treatment;
- contractor invoice treatment;
- restricted-fund accounting;
- currency conversion policy;
- in-kind labor valuation;
- recognition of contributions/grants/donations;
- unused restricted funds/refunds/reallocation;
- public reporting and reconciliation;
- any receipt/tax-deductibility language.

## HSE must approve

- role competency matrix;
- site induction/training;
- PPE/RPE requirements;
- operator/spotter competence;
- work/rest/heat/hydration rules;
- emergency/incident responsibilities;
- fitness/medical requirements only where justified.

## Payment/fundraising mechanism must approve/validate

- entity/account receiving funds;
- payment processor eligibility;
- prohibited activities/regions/currencies;
- chargebacks/refunds;
- restricted-purpose communication;
- KYC/AML/sanctions requirements where applicable;
- donor data/privacy;
- payout timing and fees.

---

# 14. Public workforce reporting rule

Potential aggregate KPIs after verification:
- workers paid;
- worker-days worked/paid;
- FTE-equivalent for reporting period;
- gross local payroll/service labor paid where approved;
- training hours;
- PPE/training coverage;
- local/impacted-community worker count only under a documented geography/eligibility definition and privacy rule.

**PROHIBITED CLAIM:** `jobs generated in impacted local communities` without an approved definition, auditable work/pay records and privacy-compliant locality evidence.

---

# 15. Validation checklist

- [ ] every interested workforce group has `WF-ID`;
- [ ] crew size/roles/availability captured;
- [ ] quote/rate basis captured;
- [ ] transport/PPE/tools/insurance inclusions explicit;
- [ ] HSE competence/training gaps recorded;
- [ ] references captured;
- [ ] legal/contractor status known or flagged;
- [ ] invoice/payment capability known;
- [ ] 90-day willingness known;
- [ ] no wage/funding promise made;
- [ ] fund units remain unpriced until approvals.

---

# 16. Approved / Not approved criterion

### APPROVED FOR PILOT CONTRACTING PREPARATION
Workforce provider has documented capacity, availability, rate, inclusions, HSE competence/gap plan and legal/accounting contracting path; founder approves any binding engagement.

### NOT APPROVED
Interest only, unclear legal status, no HSE path, unverifiable rates/crew, public salary-support ask before fund approval, or any promise of wages without secured/authorized funding.

---

# 17. Risks and common errors

- equating volunteer interest with operational availability;
- quoting “worker-day” before determining employer costs;
- comparing informal cash rate with contractor-inclusive rate;
- publishing individual wage/payroll data;
- donor-to-worker direct-payment framing;
- ignoring transport/PPE/insurance;
- using employment impact claims before work is actually paid/performed;
- locking a 90-day crew before site authority/funding/offtake gates.

---

# 18. Recommended delegation

- Founder/operations lead: interview and capability validation.
- Venezuelan labor/legal counsel: engagement structure.
- Accountant/tax: cost/fund treatment.
- HSE lead: competency/training/PPE gate.
- Data/admin lead: Workforce/Funding Registers and privacy controls.

---

# 19. Exact next action

Send the same **Workforce Partner Intake** to the already-interested engineering groups and cuadrillas and request one non-binding rate/capability response per group. Record responses as `INTERVIEWED / UNDER REVIEW`; do not negotiate or promise compensation until site/funding/legal gates are clearer.

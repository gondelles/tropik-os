# RB_03C_MINIMUM_DATA_MODEL_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Session:** RB-03C  
**Updated:** 2026-09-06

## Strategic decision

Use spreadsheet/simple database first. No ERP. WordPress/WooCommerce displays approved summaries only; it is not the master system for HSE, payroll, accounting, load/batch, QA, contribution or KPI evidence.

# 1. Objective

Create the smallest linked data model that can answer: what came in, where it came from, what happened to it, what product was created, who accepted it, what resource/workforce was used, what was funded, and which public KPI can be proven.

## Expected result

Every material/resource/public metric can be traced to a unique record/evidence chain without duplicate manual “truths.”

## Recommended tools

Google Sheets or equivalent workbook with protected ID/formula columns; Drive folders for tickets/photos/reports; simple forms for intake; later migrate only after manual workflows stabilize.

---

# 2. Core operational tables

## Site Register
`site_id, name, gps, polygon_ref, gross_area_m2, usable_area_m2, authority_status, authority_evidence, operating_hours, hse_status, environmental_status, hazardous_path_status, residual_path_status, scale_status, equipment_status, security_status, owner`

## Source Register
`source_id, name, location, coordinates, source_type, stratum, contractor, recovery_stage, source_separation, routing_authority, confidence, notes`

## Load Register
`load_id, date_time, site_id, source_id, truck_id, gross_t, tare_t, net_t, weigh_method, scale_id, calibration_ref, contamination_score, acceptance_status, tip_zone, photo_ref, suspect_event_id, notes`

## Characterization
`char_id, load_id, stream_code, stream_t, weigh_method, measured_or_estimated, evidence_ref, quality_flag, notes`

## Mass Balance
`load_or_batch_id, input_t, output_t, unaccounted_t, closure_pct, error_pct, qa_status, reviewer`

## Batch Register
`batch_id, sku, source_load_ids, source_strata, process_date, input_t, output_t, equipment_ids, settings, sample_ids, qa_status, stockpile_location, buyer_spec_ref, release_evidence`

## Product QA
`qa_id, batch_id, sample_id, test, method, result, unit, limit, disposition, lab_report_ref, engineer_approval_ref, date`

## Lab Results
`lab_id, sample_id, lab, competence_ref, method, result, unit, report_ref, report_date`

## Dispatch
`dispatch_id, batch_id/stream_id, date, destination, project/buyer_id, truck_id, outbound_t, weigh_ref, use, release_ref, transport_responsibility`

## Offtake Trials
`trial_id, buyer_id, project_id, batch_id, spec_ref, trial_t, placement_date, field_test_refs, disposition, approver, repeat_path, evidence_ref`

---

# 3. Commercial / quote tables

## Buyer Register
`buyer_id, organization, archetype, project, location, use, current_material, supplier, spec_ref, recycled_allowed_status, technical_approver, economic_buyer, volume_t, ex_yard_price, delivered_price, haul_responsibility, one_way_km, tests_required, trial_min_t, procurement_lead_days, payment_terms, status, evidence_refs, next_action`

## Quote Register
`quote_id, vendor, category, item, qty, unit, rate, currency, inclusions, exclusions, fuel, operator, transport, maintenance, wear, taxes, payment_terms, validity, availability, evidence_ref, normalized_cost`

## Equipment Register
`equipment_id, owner, make_model, serial_ref, capacity, condition, meter_hours, fuel_power, operator_included, maintenance_responsibility, availability, rate_basis, rate, mobilization, status, evidence_ref`

---

# 4. Needs Register

`need_id, category, subcategory, title, use, unit, qty_needed, qty_pledged, qty_received, qty_deployed, priority, status, reference_value, quote/evidence, owner, needed_by, last_updated`

Recommended additional internal fields:
`site_specific, host_available, public_works_available, contractor_available, donor_partner_possible, campaign_or_permanent, make_spec, public_ready, public_notes, validation_owner`

Allowed status:
`NEEDED -> OFFER RECEIVED -> UNDER REVIEW -> PLEDGED -> PARTIALLY FULFILLED -> FULFILLED -> DEPLOYED -> CLOSED`

Additional: `PAUSED / NO LONGER NEEDED`.

---

# 5. Contribution Offer Register

`offer_id, need_id, contributor, organization, offer, qty, condition, availability, transport, operator, fuel, restrictions, review_status, received_date`

Recommended additions:
`contact_ref, make_model, evidence_ref, accepted_by, pledged_date, deployed_date, valuation_basis, public_ack_permission`

Rule: an offer does not change Need status to FULFILLED/DEPLOYED until receipt/deployment evidence exists.

---

# 6. Workforce Partner Register

`workforce_id, organization/person, crew_size, roles, rate_basis, expected_rate, availability, HSE, legal/contractor_status, references, status`

Recommended additions:
`transport_included, ppe_included, equipment_capability, insurance_status, invoicing_capability, taxes_withholding_basis, quote_ref, 90_day_willingness, training_gaps, owner, last_updated`

---

# 7. Workforce Funding Register

`fund_id, category, amount_received, restriction, eligible_cost, amount_deployed, payroll_reference, balance`

Recommended additions:
`receipt_date, currency, contributor_internal_ref, accounting_reference, approval_status, deployment_date, publish_status`

No public workforce-funding value until legal/accounting/payment mechanism is approved.

---

# 8. KPI Register

`metric_id, name, definition, unit, formula, source, period, value, methodology_version, approved_by, publish_status`

Recommended additions:
`period_start, period_end, source_snapshot_ref, validation_rule, calculated_at, published_at, correction_note`

Canonical metric definitions: `40_REBUILD/data/RB_KPI_DICTIONARY_v0.1.md`.

---

# 9. Evidence / governance tables

## Evidence Register
`evidence_id, claim/question, source/person, source_type, date, geography, evidence_ref, confidence, limitations, replaces_assumption_id, owner`

## Assumptions Register
`assumption_id, assumption, classification, criticality, working_value, validation_method, evidence_required, owner, due, status, superseded_by`

## Decision Log
`decision_id, decision, classification, date, evidence_basis, status, founder_gate, supersedes`

---

# 10. Relationships / traceability

### Material evidence chain
`SOURCE -> LOAD -> CHARACTERIZATION -> BATCH -> SAMPLE -> LAB/QA -> RELEASE -> DISPATCH -> TRIAL/PROJECT`

### Need/contribution chain
`NEED -> OFFER -> REVIEW/ACCEPTANCE -> RECEIPT -> DEPLOYMENT -> KPI/public summary`

### Workforce chain
`WORKFORCE PARTNER -> CONTRACT/APPROVAL -> TIMESHEET/WORK RECORD -> PAYROLL/SERVICE PAYMENT -> FUND ALLOCATION -> KPI`

### Funding chain
`RECEIPT -> RESTRICTION -> ELIGIBLE COST -> PAYMENT EVIDENCE -> BALANCE -> PUBLIC AGGREGATE`

No public metric should bypass its source chain.

---

# 11. Folder/evidence reference pattern

Suggested simple structure:

- `/RB_DATA/sites/SITE-###/`
- `/RB_DATA/loads/YYYY-MM-DD/LOAD-.../`
- `/RB_DATA/batches/BATCH-.../`
- `/RB_DATA/labs/LAB-.../`
- `/RB_DATA/buyers/BUY-.../`
- `/RB_DATA/quotes/Q-.../`
- `/RB_DATA/needs/NEED-.../`
- `/RB_DATA/workforce/WF-.../`
- `/RB_DATA/kpi/YYYY-MM/`

Store file references/URLs in registers; do not embed large files in the workbook.

---

# 12. Access / privacy

- Public: only approved exports/summaries.
- Founder/ops: operational registers.
- HSE restricted: incident/suspect details.
- HR/accounting restricted: worker identity, payroll, payment/bank/tax data.
- Technical: lab/QA/spec evidence.
- Website: read-only approved KPI/Needs/public content layer.

---

# 13. Validation checklist

- [ ] unique IDs enforced;
- [ ] mandatory fields defined;
- [ ] status enums controlled;
- [ ] no duplicate public/internal master record;
- [ ] evidence links resolve;
- [ ] weights distinguish measured vs estimated;
- [ ] cash/pledge/in-kind separated;
- [ ] workforce PII restricted;
- [ ] KPI publication status controlled;
- [ ] backup/export tested.

# 14. Approved / Not approved criterion

**APPROVED:** a random public KPI/need/trial can be traced backward to source records and evidence without manual guesswork.

**NOT APPROVED:** WordPress/WooCommerce becomes the only master source, IDs are reused, estimates are indistinguishable from measurements, or payroll/HSE sensitive data is exposed.

# 15. Risks and common errors

Spreadsheet sprawl; same KPI calculated in multiple tabs; free-text statuses; duplicate Load IDs; broken evidence links; editing published metrics without correction record; excessive custom automation before manual QA is proven.

# 16. Recommended delegation

Data owner designs workbook and permissions; operations/QC owns material source records; accounting owns funding/payment; HSE owns restricted safety data; founder approves public views.

# 17. Exact next action

Create one workbook with tabs matching Sections 2–9, freeze the schemas, and test one dummy evidence chain `SOURCE -> LOAD -> BATCH -> QA -> TRIAL` plus one `NEED -> OFFER -> DEPLOYMENT -> KPI` before field use.

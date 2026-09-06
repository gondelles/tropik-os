# RB_03C_ECONOMICS_INPUT_VALIDATION_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Session:** RB-03C  
**Updated:** 2026-09-06

> ⚠️ **WORKING HYPOTHESIS — FIELD VALIDATION REQUIRED:** RB-03B financial values remain ROM. RB-03C does not replace them with new estimates; it defines the evidence that must replace them. **DO NOT USE AS PUBLIC FACT OR CAPITAL COMMITMENT UNTIL VALIDATED.**

# 1. Objective

Rebuild the pilot economics from the minimum set of field, buyer, quote and workforce inputs that dominate the 90-day cash/resource requirement.

## Expected result

A quote/data-backed C-case and 25 -> 50 -> 75 t/day commissioning model with:
- cash vs in-kind separated;
- source/input yields measured;
- product price tied to buyer/use;
- delivered/ex-yard economics separated;
- workforce costs based on actual engagement structure;
- service/funding gap explicit;
- no heavy equipment purchase.

---

# 2. Current RB-03B baseline retained for comparison only

**WORKING HYPOTHESIS:** current formal C case remains approximately 65 incoming t/day, 1,560 t/month, cash OPEX ~$78.9k/month, material+ferrous revenue ~$17.7k/month and gap ~$61.1k/month / ~$39 incoming t before secured support. These are not quotes or forecasts.

**STRATEGIC DECISION:** do not change these planning values merely because a new estimate is available. Replace them only with evidence categories below.

---

# 3. Highest-value input replacements

| Priority | Input | Current status | RB-03C evidence | Economics effect |
|---:|---|---|---|---|
|1|Host/site cost and operating responsibility|UNKNOWN|authority/site agreement evidence|cash site/admin/security cost; risk allocation|
|2|Existing weighbridge/equipment/utilities|UNKNOWN|host inventory + access terms|avoids portable CAPEX/rental/water/power costs|
|3|Loader/excavator access|ROM|host commitment or normalized quotes|largest continuous handling cost|
|4|Crusher/screen campaign access|global/local ROM|campaign/shared quote with mobilization/operator/fuel/wear|determines whether low-throughput processing is viable|
|5|Inbound debris haul responsibility|UNKNOWN|routing plan + truck provider/rate/route|can materially change service cost/t|
|6|Outbound product haul|planning formula|buyer/project route + 3 truck quotes|determines delivered margin/radius|
|7|Residual + suspect pathway|regional comparator|authorized provider/destination + fee + haul|affects every non-recovered tonne|
|8|Measured feedstock composition/yield|scenario assumption|30-load characterization|changes mineral/scrap/residual tonnes|
|9|Saleable/released product conversion|scenario assumption|trial batches + QA release|changes revenue and stock dwell|
|10|Road Base/Fill buyer price|planning range|actual buyer current substitute + trial/accepted price logic|changes mineral revenue/t|
|11|Ferrous price/yield|public reference|3 recycler grade/price quotes + trial|changes salvage revenue|
|12|Lab testing|regional ROM|3 local lab quotes|QA cost/batch + trial timing|
|13|Workforce|RB-03B payroll ROM|Workforce Partner Intakes + legal/accounting treatment|changes payroll/service cost and Fund unit basis|
|14|Water/dust/security/fuel|ROM|host availability + quote/metered actual|site-specific OPEX|
|15|Service/gate fee / institutional payer|UNSECURED|written payer authority/eligible support path|closes residual operating gap|

---

# 4. Input table for the next model

## Throughput / calendar
`operating_days_month, incoming_t_day, loads_day, avg_payload_t, processing_campaign_days_month`

## Feedstock
`mineral_share, masonry_share, ferrous_share, nonferrous_share, reuse_share, other_recyclable_share, suspect_share, residual_share`

Source: measured Characterization dataset only; retain strata/range, not just one average.

## Product conversion
`mineral_input_t, roadbase_released_t, fill_released_t, other_mineral_released_t, unreleased_t, ferrous_saleable_t`

Source: Batch/Product QA/Dispatch.

## Prices
`roadbase_exyard, fill_exyard, ferrous_by_grade, buyer_freight_contribution, service_fee_t, other_verified_support`

Source: written buyer/recycler/payer evidence.

## Equipment
For each machine:
`rate_basis, rate, minimum_hours, scheduled_hours, operator, fuel, maintenance, wear, mobilization, demobilization, taxes, in_kind_value, cash_paid`

## Logistics
For each route:
`origin, destination, one_way_km, round_trip_km, load_t, travel_h, queue_h, rate_load, rate_km, rate_h, payer, cash_cost_t`

## Residual/suspect
`residual_t, suspect_t, disposal_or_specialist_rate_t/load/callout, outbound_haul, documentation_fee, payer`

## Workforce
`role, people, shift_h, workdays, rate_basis, gross_rate, payroll_or_contractor_burden, transport, PPE, insurance, overtime, cash_cost, in_kind_value`

## Utilities/HSE/site
`water_m3, water_cost_m3, fuel_l, fuel_cost_l, power, security, toilets/welfare, HSE specialist, environmental controls, site_fee`

## QA
`tests_per_batch, cost_test/package, samples, sample_transport, engineering_review_hours, batches_month`

---

# 5. Core outputs

Calculate at minimum:
- cash OPEX/month;
- cash OPEX/incoming t;
- total resource value/month including approved in-kind;
- saleable/released mineral t per incoming t;
- material+scrap revenue/incoming t;
- delivered contribution by buyer/project;
- residual/suspect cost/incoming t;
- equipment cost/incoming t and per processing campaign;
- labor cost/incoming t;
- service/funding gap/month and per incoming t;
- working-capital need by payment terms;
- 90-day commissioning cash need by actual 25 -> 50 -> 75 ramp.

---

# 6. Decision checks

## Equipment
Campaign/shared arrangement PASS if it supplies the required trial/commissioning hours with lower cash burden and acceptable availability than dedicated monthly rental.

## Buyer
A product path is economically credible only if `buyer delivered substitute price - Re:Build delivered cost` and/or approved public/service value supports the intended transaction; do not evaluate only ex-yard price.

## Funding
**APPROVED FOR 90-DAY PILOT:** cash + documented eligible in-kind + documented payer/support path covers the approved commissioning resource requirement and working-capital exposure with contingency.

**NOT APPROVED:** gap relies on unawarded grants, unapproved fundraising, assumed free equipment/transport, or material price/yield not supported by buyer/field evidence.

---

# 7. Sensitivities after evidence replacement

Re-run:
- incoming tonnes -20%;
- mineral fraction -20%;
- released-product conversion -20%;
- buyer price -25%;
- equipment +30%;
- diesel/trucking +30%;
- residual share +20 percentage points;
- product dwell 2×;
- downtime 20%;
- in-kind support 50% lower than expected;
- no service fee;
- no institutional support;
- mineral trial rejected.

Do not treat sensitivity scenarios as predictions.

---

# 8. Major implementation block

**Objective:** replace financial ROM with quote/measurement-backed inputs.  
**Expected result:** founder can see the true 90-day cash/resource gap and what external support/payer is required.  
**Recommended tools:** simple spreadsheet, Quote Register, Load/Batch data, Buyer Register, Workforce Register.  
**Concrete steps:** authority/host inventory -> quotes -> characterization -> buyer/lab validation -> workforce intakes -> route costing -> rebuild model -> stress test.  
**Validation checklist:** every material input has source/date/unit; cash/in-kind separated; no double counting; freight responsibility explicit; payroll/legal basis explicit; funding marked secured/unsecured.  
**Approved:** model can be audited from input cell to evidence reference.  
**Not approved:** current ROM is presented as a budget or fundraising target.  
**Risks/common errors:** overvalued in-kind, assuming full truck payload, free inbound/outbound haul, unpriced wear, missing mobilization, assuming grant receipt, using buyer interest as price.  
**Delegation:** accountant/tax; procurement/equipment; operations/data; materials/commercial; labor/legal.  
**Exact next action:** collect the first ten site/quote answers listed in `RB_NEEDS_REGISTER_v0.1.md` and enter them into a Quote/Host Resource Register before changing any 90-day funding ask.

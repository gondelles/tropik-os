# RB_KPI_DICTIONARY_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Session:** RB-03C  
**Updated:** 2026-09-06

## Core publication rule

**STRATEGIC DECISION:** public impact metrics show only measured/approved values for a defined reporting period with source, formula/methodology version and approval status.

**PROHIBITED CLAIM:** estimates, targets, scenario values, donor pledges, intended jobs, assumed recovery rates or modeled carbon/environmental benefits may not render as achieved public impact.

> **No carbon/CO2/diversion/environmental-benefit percentage until an approved methodology, boundary and data source exist.**

---

# 1. Objective

Create a single metric dictionary that lets operations, workforce, funding and website reporting calculate the same KPI the same way and makes misuse visible before publication.

## Expected result

- every public KPI has a unique ID, formula, source table, reporting period and owner;
- homepage shows only 4–6 high-signal metrics;
- full dashboard can expand without exposing personal/payroll/HSE-sensitive data;
- no metric can be published without source reconciliation and approval;
- `jobs generated in impacted local communities` is replaced by auditable component metrics until a defensible locality/employment definition exists.

## Recommended tools

Spreadsheet/simple database; protected formula columns; source-table links; month/weekly close checklist; KPI Register; publication approval field; WordPress reads only approved summary/export.

---

# 2. Common KPI fields

Every KPI row in the KPI Register must contain:

`metric_id, name, definition, unit, formula, numerator, denominator, source_table, source_field/query, collection_frequency, period_start, period_end, owner, methodology_version, validation_rule, approved_by, publish_status, published_at, notes`

Publish status:
`DRAFT -> CALCULATED -> QA REVIEW -> APPROVED INTERNAL -> APPROVED PUBLIC -> PUBLISHED -> CORRECTED/RETRACTED`

---

# 3. Operations KPI Dictionary

| KPI ID | Name | Definition / unit | Formula / numerator / denominator | Source | Frequency | Owner | Validation rule | Publication rule | Possible misuse | Status |
|---|---|---|---|---|---|---|---|---|---|---|
|OPS-001|Incoming tonnes|Net mass of accepted incoming loads during period; t|Σ accepted `net_t`|Load Register|daily|Intake/Data|unique Load ID; calibrated/approved weight method; no duplicates|publish after period close|calling estimated volume measured tonnes|READY-DEFINITION|
|OPS-002|Incoming loads|Count of accepted incoming loads|count unique accepted Load IDs|Load Register|daily|Intake/Data|unique IDs; rejected loads separate|publish with period|using truck count as tonnes|READY-DEFINITION|
|OPS-003|Processed tonnes|Mass of material that entered defined processing/sorting operation; t|Σ batch/process input t|Batch/Process Register|daily|Operations/QC|batch IDs + input weight evidence|publish only with boundary definition|equating received with processed|READY-DEFINITION|
|OPS-004|Recovered tonnes — mineral|Measured tonnes separated/released into mineral recovery streams before final product status; t|Σ defined mineral stream t|Characterization/Batch|daily/weekly|QC|stream code controlled; avoid double count|public only if measured method disclosed|calling all mineral saleable|READY-DEFINITION|
|OPS-005|Recovered tonnes — ferrous|Measured ferrous stream tonnes recovered; t|Σ ferrous t|Characterization/Dispatch|daily/weekly|QC|source/batch + scale evidence|public aggregate|confusing recovered with sold|READY-DEFINITION|
|OPS-006|Recovered tonnes — other streams|Measured tonnes by approved stream category|Σ stream t by code|Characterization|weekly|QC|mutually exclusive stream codes|public only for sufficiently reliable measured categories|aggregating estimated streams as measured|READY-DEFINITION|
|OPS-007|Residual tonnes|Mass classified non-recoverable and routed to authorized residual pathway; t|Σ residual dispatched/held t|Characterization/Residual Register|daily/weekly|Ops/HSE|weighed or flagged estimate; destination status|publish after reconciliation|claiming disposal completed while still onsite|READY-DEFINITION|
|OPS-008|Suspect/quarantined tonnes|Mass placed on suspect/quarantine pathway; t|Σ quarantine t|Suspect Register|event/daily|HSE|event ID + disposition status|publish aggregate only|implying material is hazardous before specialist determination|READY-DEFINITION|
|OPS-009|Product tonnes released|Mass of batches formally QA-released for stated use; t|Σ released batch t|Batch + Product QA|per release|QC/Engineer|PASS/CONDITIONAL + evidence|public by product/use after approval|calling produced tonnes approved tonnes|READY-DEFINITION|
|OPS-010|Product tonnes redeployed/supplied|Released tonnes with outbound ticket and named/approved destination/use; t|Σ outbound released t|Dispatch/Trial|per dispatch|Logistics/QC|Batch ID + destination + weight|public if project permission allows; otherwise aggregate|equating dispatch with successful performance|READY-DEFINITION|
|OPS-011|Batches tested|Count unique batches with completed required laboratory/field test set|count Batch IDs with test complete|Product QA/Lab|weekly/monthly|QC|test package completion rule|publish count, not implied PASS|calling tested = passed|READY-DEFINITION|
|OPS-012|Batches released|Count unique batches with formal release status PASS/approved conditional use|count released Batch IDs|Product QA|weekly/monthly|QC/Engineer|release signed/approved|public aggregate/product|ignoring conditional limits|READY-DEFINITION|
|OPS-013|Mass-balance closure|Degree outputs reconcile to measured input; %|`Σ output t / input t ×100`; also report error|Load/Batch Mass Balance|daily/weekly|QC/Data|method-quality flag; unexplained loss retained|publish methodology/range, not cherry-picked value|presenting closure as recovery rate|READY-DEFINITION|
|OPS-014|Median mass-balance error|Median absolute load/batch closure error; %|median `abs(error_pct)`|Mass Balance|weekly|QC/Data|exclude only with documented reason|internal first; public methodology metric optional|hiding failed records|READY-DEFINITION|
|OPS-015|Processing equipment hours|Actual operating hours by equipment class|Σ verified operating meter/log hours|Equipment Logs|daily|Operations|meter/operator log cross-check|usually internal; public if useful|confusing available with used hours|READY-DEFINITION|
|OPS-016|Equipment downtime hours|Unplanned unavailable hours during scheduled duty|Σ downtime h|Equipment Logs|daily|Operations|scheduled duty basis defined|internal/partner reporting|inflating uptime by shrinking schedule|READY-DEFINITION|

---

# 4. Jobs / Community KPI Dictionary

## Defensible principle

Do **not** use one umbrella metric `jobs generated in impacted local communities` until three things exist:

1. an approved definition of `impacted local community` (geographic/eligibility boundary);
2. a privacy-compliant way to verify worker locality/eligibility;
3. auditable paid work records tied to the reporting period.

Until then, publish simpler facts such as workers paid, worker-days and payroll paid.

| KPI ID | Name | Definition / unit | Formula / numerator / denominator | Source | Frequency | Owner | Validation rule | Publication rule | Possible misuse | Status |
|---|---|---|---|---|---|---|---|---|---|---|
|PEO-001|Workers paid|Unique individuals with verified eligible wage/service labor payment for work performed in period; people|count unique anonymized worker IDs with approved payment/work record|Payroll/Service Register|pay cycle/monthly|HR/Accounting|work record + payment reference; exclude unpaid interested people|publish aggregate only|calling applicants/interested crew employed|READY-DEFINITION|
|PEO-002|Worker-days|Sum of verified worker shifts normalized to approved standard workday; worker-days|Σ paid/verified work hours ÷ approved standard-day hours|Timesheet/Payroll|daily/monthly|Ops/HR|hours approved; standard-day methodology version|publish aggregate|counting planned shifts|READY-DEFINITION|
|PEO-003|FTE-equivalent jobs|Labor effort expressed as equivalent full-time positions for reporting period; FTE-eq|Σ verified paid work hours ÷ `H_std_period`|Timesheet/Payroll|monthly/quarterly|HR/Accounting|`H_std_period` defined by approved workforce methodology/legal review|publish with methodology and period|calling FTE-equivalent permanent jobs|LEGAL/METHOD GATE|
|PEO-004|Local payroll/labor paid|Gross approved worker labor compensation actually paid for period; currency|Σ verified gross eligible labor payments|Payroll/Accounting|pay cycle/monthly|Accounting|reconcile payment references; currency policy|publish aggregate only after accountant approval|mixing gross/net/contractor costs|ACCOUNTING GATE|
|PEO-005|Training hours|Verified participant-hours of approved Re:Build training|Σ training duration h × attendees completing session|Training Register|per session/monthly|HSE/HR|attendance + topic + trainer|public aggregate|counting informal toolbox chat as certified training|READY-DEFINITION|
|PEO-006|PPE-covered active workers|Active workers issued required PPE matrix for task; people/%|count compliant active worker IDs; optional / active workers|PPE/Workforce Register|daily/weekly|HSE|task-specific PPE matrix; issue/inspection record|mostly internal; public aggregate if useful|implying PPE alone = safe work|HSE GATE|
|PEO-007|Paid worker-days from defined impacted area|Worker-days performed by workers meeting approved locality/eligibility definition|Σ qualifying verified worker-days|Workforce+Timesheet|monthly|HR/Data|approved geography/eligibility + privacy-safe evidence|public only after legal/privacy approval|labeling all local workers disaster-affected|RED UNTIL DEFINITION|
|PEO-008|Workers from defined impacted area|Unique paid workers meeting approved definition; people|count qualifying unique worker IDs|Workforce+Payroll|monthly|HR/Data|same as PEO-007|aggregate only|exposing residence/identity|RED UNTIL DEFINITION|

### Recommended public wording before PEO-007/008 approval

Use: `workers paid`, `worker-days`, `training hours`, `local payroll/labor paid` — not `jobs generated for impacted communities`.

---

# 5. Reconstruction / Offtake KPI Dictionary

| KPI ID | Name | Definition / unit | Formula | Source | Frequency | Owner | Validation | Publication | Misuse | Status |
|---|---|---|---|---|---|---|---|---|---|---|
|REC-001|Technical trials started|Count of unique bounded material trials with Trial ID and agreed test plan|count Trial IDs started|Offtake Trials|per event|Commercial/QC|spec + approver + batch|public aggregate/project permission|counting samples/interviews as trials|READY-DEFINITION|
|REC-002|Technical trials completed|Trials reaching written buyer/engineer disposition|count Trial IDs with final disposition|Offtake Trials|per event|Commercial/QC|disposition evidence|public aggregate|counting abandoned trial as completed|READY-DEFINITION|
|REC-003|Trial tonnes|Released tonnes actually placed/delivered into trial|Σ trial outbound t|Dispatch/Trials|per trial|Logistics/QC|Batch+truck+destination|public if approved|using produced tonnes|READY-DEFINITION|
|REC-004|Projects supplied|Unique projects receiving released material under approved use|count unique Project IDs|Dispatch/Projects|monthly|Commercial|outbound evidence + approved use|public if permission; otherwise aggregate|calling inquiry a supplied project|READY-DEFINITION|
|REC-005|Repeat offtake events|Subsequent accepted purchase/redeployment after first trial|count qualifying repeat orders/deployments|Orders/Trials|monthly|Commercial|must occur after accepted first trial|public aggregate|calling second free test repeat demand|READY-DEFINITION|
|REC-006|Repeat offtake tonnes|Released tonnes in qualifying repeat events|Σ repeat t|Dispatch/Orders|monthly|Commercial|same gate|public aggregate|mixing trial and repeat|READY-DEFINITION|

---

# 6. Funding / Resources KPI Dictionary

| KPI ID | Name | Definition / unit | Formula | Source | Frequency | Owner | Validation | Publication | Misuse | Status |
|---|---|---|---|---|---|---|---|---|---|---|
|FND-001|Cash support received|Cash actually received into approved support/funding route; currency|Σ cleared eligible receipts|Accounting/Funding|monthly|Accounting|bank/payment reconciliation; restrictions coded|public aggregate after approval|counting pledges as cash|LEGAL/ACCOUNTING GATE|
|FND-002|In-kind value received|Approved fair/reference value of resources physically/services actually received|Σ approved valuation|Contribution/Accounting|monthly|Accounting/Procurement|receipt evidence + valuation policy|public aggregate with methodology|using donor claimed value without review|ACCOUNTING GATE|
|FND-003|Equipment-hours received|Verified equipment operating/available support hours received under accepted contribution|Σ approved equipment h|Equipment/Contribution|daily/monthly|Operations|equipment ID + accepted offer + logs|public aggregate|valuing idle pledged machine as deployed|READY-DEFINITION|
|FND-004|Needs fulfilled|Count of NEED-IDs reaching FULFILLED|count NEED-IDs status FULFILLED|Needs Register|weekly/monthly|Needs Owner|qty_received >= approved qty_needed; evidence|public by safe Need IDs|counting pledged|READY-DEFINITION|
|FND-005|Needs deployed|Count of NEED-IDs with received resource actually deployed|count NEED-IDs status DEPLOYED|Needs Register|weekly/monthly|Needs Owner|deployment evidence|public|calling warehouse receipt deployed|READY-DEFINITION|
|FND-006|Needs fulfillment ratio|Approved quantity received / quantity currently needed for comparable units|Σ normalized received / Σ needed only within same comparable category; or report per Need ID|Needs Register|weekly|Data/Needs|do not aggregate unlike units blindly|prefer per category/Need ID|one headline % mixing dollars, units, hours|CAUTION|
|FND-007|Workforce Fund received|Cleared receipts restricted to approved workforce category|Σ receipts|Workforce Funding|monthly|Accounting|legal mechanism + reconciliation|RED until mechanism approved|publicly collecting before approval|RED UNTIL GATE|
|FND-008|Workforce Fund deployed|Approved eligible workforce costs paid from restricted fund|Σ eligible deployed amounts|Workforce Funding/Payroll|monthly|Accounting|payroll/service refs + restriction match|RED until mechanism approved|equating allocated budget with paid labor|RED UNTIL GATE|
|FND-009|Verified payroll/labor funded|Eligible verified labor payments funded by approved restricted support|Σ matched payroll/service refs|Funding+Payroll|monthly|Accounting|one-to-one/approved allocation trace|aggregate only|donor-to-named-worker implication|RED UNTIL GATE|

---

# 7. HSE / Environment KPI Dictionary

| KPI ID | Name | Definition / unit | Formula | Source | Frequency | Owner | Validation | Publication | Misuse | Status |
|---|---|---|---|---|---|---|---|---|---|---|
|HSE-001|Recordable incidents|Count per approved incident classification|count incident IDs meeting class|HSE Incident Register|event/monthly|HSE|HSE classification review|public aggregate only when approved|hiding severity or comparing without hours|HSE GATE|
|HSE-002|Near misses reported|Count unique reviewed near-miss events|count IDs|HSE Register|event/monthly|HSE|deduplicate/review|usually internal; aggregate public if useful|using low count as proof of safety|HSE GATE|
|HSE-003|Rejected/quarantined loads|Count loads rejected/quarantined by safety/environment gate|count unique Load IDs|Load/Suspect Register|daily/monthly|HSE|reason + disposition|public aggregate|calling all rejected loads hazardous|READY-DEFINITION|
|HSE-004|Suspect material tonnes|Measured/estimated mass routed to suspect pathway|Σ suspect t by quality flag|Suspect Register|daily/monthly|HSE/QC|method flag + disposition|aggregate with caveat|stating confirmed hazardous mass|READY-DEFINITION|
|HSE-005|Measured water use|Metered/verified water used for defined operations; m³|Σ meter/delivery verified m³|Utilities/Operations|daily/monthly|Operations|meter/ticket + use boundary|public only if useful/method clear|turning water use into environmental benefit claim|READY-DEFINITION|
|HSE-006|Corrective actions closed|Approved HSE corrective actions closed in period|count closed action IDs|HSE CAPA|weekly/monthly|HSE|closure evidence|internal/public aggregate optional|using closure count without open backlog|READY-DEFINITION|

### Not yet approved metrics

- carbon/CO2 avoided;
- emissions reductions;
- landfill diversion rate;
- coastal pollution avoided;
- circularity percentage;
- virgin aggregate displacement;
- environmental benefit percentage.

These require explicit boundaries, counterfactual/baseline, source quality and specialist methodology.

---

# 8. Homepage KPI set

Show **4–6** only, and only once values are measured/approved:

1. `OPS-001 Incoming tonnes` **or** `OPS-003 Processed tonnes` — label boundary precisely; do not combine ambiguously.
2. `OPS-009 Product tonnes released` or grouped recovered/released tonnes by stream.
3. `PEO-002 Worker-days`.
4. `PEO-004 Local payroll/labor paid` — only after accounting approval.
5. `REC-002 Technical trials completed` / `REC-004 Projects supplied`.
6. `FND-003 Equipment-hours received` or `FND-005 Needs deployed`, whichever is more informative and data-ready.

### Homepage display requirements

Every KPI card must show:
- value + unit;
- reporting period;
- `updated [date]`;
- short definition/tool-tip;
- methodology link;
- no target displayed in the same visual style as achieved value.

If no approved data exists, show `Measurement begins with pilot` rather than `0` if zero would misleadingly imply a completed measurement period.

---

# 9. Full public dashboard set

## Operations
OPS-001, 002, 003, 004–010, 011–014 where data quality supports them.

## Jobs / Community
PEO-001–005 first. PEO-007/008 only after locality/privacy approval.

## Reconstruction
REC-001–006, with project names only where permission exists.

## Funding / Resources
FND-001–005 once legal/accounting publication gates pass. FND-007–009 only after Workforce Fund approval.

## HSE / Environment
HSE-001–006 only at safe aggregation and with HSE approval; no personal/medical incident detail.

---

# 10. KPI publication QA

Before `APPROVED PUBLIC`:

- period closed;
- source tables locked/snapshotted;
- duplicate IDs checked;
- weight-quality flags reviewed;
- cash vs pledge vs in-kind separated;
- payroll personal data excluded;
- methodology version recorded;
- formula recalculated independently or checked;
- relevant owner approves;
- accountant/HSE/legal approval where required;
- WordPress value matches approved KPI Register row.

Corrections must preserve an audit note; do not silently overwrite previously published numbers.

---

# 11. Approved / Not approved criterion

### APPROVED
Metric has unique definition, measured source, formula, reporting period, owner, QA rule, approved methodology version and publication approval.

### NOT APPROVED
Value is an estimate/target; denominator changes silently; source is incomplete; pledge is counted as receipt; produced material is counted as released; or personal/sensitive data would be exposed.

---

# 12. Risks and common errors

- treating `recovered`, `processed`, `released`, `sold` and `redeployed` as synonyms;
- using mass-balance closure as recovery rate;
- counting crew interest as jobs;
- using FTE-equivalent as permanent jobs;
- counting pledged equipment as received/deployed;
- summing unlike Needs units into one meaningless percent;
- showing cash support without restrictions/accounting context;
- publishing incident data without HSE/privacy review;
- making environmental benefit claims from material tonnage alone.

---

# 13. Recommended delegation

- Data owner: KPI formulas/register/QA.
- Operations/QC: tonnage/batch source integrity.
- HR/accounting: worker/payroll and funding metrics.
- HSE: incident/suspect/environment metrics.
- Materials/commercial: trial/project/offtake metrics.
- Founder/publication owner: public release gate.

---

# 14. Exact next action

Create the spreadsheet `KPI Register` with the fields in Section 2 and preload all IDs in this dictionary with `publish_status = DRAFT`. Do not enter targets as KPI values; the first public-ready values should come only from reconciled pilot records.

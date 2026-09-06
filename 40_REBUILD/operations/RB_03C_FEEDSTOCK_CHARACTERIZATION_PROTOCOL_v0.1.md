# RB_03C_FEEDSTOCK_CHARACTERIZATION_PROTOCOL_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Session:** RB-03C  
**Updated:** 2026-09-06

> ⚠️ **WORKING HYPOTHESIS — FIELD VALIDATION REQUIRED:** The 30-load / ~600 t campaign is a practical pilot characterization target, not proof of statistical representativeness for La Guaira. **DO NOT USE AS PUBLIC FACT OR CAPITAL COMMITMENT UNTIL VALIDATED.**

# 1. Objective

Generate traceable source-stratified evidence on what actually arrives, what can be safely separated, how much each stream weighs, what contamination occurs, and what variability must be designed around before Re:Build fixes product yields, economics or public recovery claims.

## Expected result

A closed dataset linking `SOURCE -> LOAD -> PHOTOS -> WEIGHT -> CHARACTERIZATION -> STREAM MASS -> SAMPLE/BATCH -> QA`, with enough source diversity to replace RB-A-031/032 planning composition with measured pilot evidence while preserving limitations.

## Recommended tools

Calibrated weighbridge or portable axle scale; paper fallback load sheet; phone camera/GPS; weather note; labeled ground/bins/skips; loader/excavator; sample bags/tags; bench scale; PPE/RPE per HSE plan; Google Sheets/simple forms; daily backup folder.

---

# 2. Campaign target and source-stratification logic

**TARGET:** 30 incoming loads / approximately 600 t using 20-t-equivalent planning payload, across at least **5 materially different source strata** where routing allows.

**TARGET:** ≥6 loads/stratum when five strata are available. If loads are smaller/larger, prioritize load count + source diversity over forcing exactly 600 t.

## A stratum is materially different when at least one is different

- geographic source/sector;
- building/use type;
- demolition/collapse/recovery stage;
- source-separation quality;
- apparent material family;
- contractor/loading method;
- age/construction system where reliably known;
- stockpiled vs directly sourced material.

## Preferred first five strata — only if actually available

1. concrete-rich structural debris;
2. masonry/block/ceramic-rich debris;
3. mixed residential/building debris with finishes/wood/plastic;
4. comparatively source-separated mineral load;
5. materially different location/project/contractor source likely to test geographic/operational variability.

**Do not fabricate strata labels after the fact merely to reach five.**

### Minimum useful source diversity

- **Preferred:** 5+ materially different strata.
- **Acceptable pilot evidence:** 3–4 strata, clearly downgraded.
- **Weak/convenience evidence:** 1–2 strata; useful for process design at those sources only.

---

# 3. Campaign scheduling

## Pre-campaign

1. Obtain written authority for characterization, photos, weighing, tipping, sorting and sampling.
2. Confirm STOP/REJECT pathway and emergency contacts.
3. Confirm scale method/calibration or fallback.
4. Build Source Register with planned strata and dispatch contact.
5. Allocate safe tipping/characterization cell that prevents mixing.
6. Label stream bays/containers.
7. Train intake, HSE/spotter, operator, characterization lead and data recorder.
8. Test one dry-run load from gate through closure.

## Scheduling rule

Create a 30-slot matrix by source stratum. Do not accept all early convenience loads from one source if that blocks later source diversity. Track planned vs actual slots daily.

Suggested campaign cadence: 3–6 characterization loads/day depending safe separation capacity. Never increase load count at the expense of safe tipping or mass-accounting quality.

---

# 4. Load ID and source ID

### Source ID
`SRC-[ZONE/PROJECT]-###`

Minimum Source fields:
- source_id;
- source location/coordinates or defined zone;
- source/project/building label;
- source type/stratum;
- loading contractor;
- demolition/recovery stage if known;
- source-separation practices;
- source authority/contact;
- evidence/confidence.

### Load ID
`LOAD-YYYYMMDD-####`

Load ID must be created **before tipping** and shown in arrival photographs.

No load may be included in formal composition without a unique Load ID.

---

# 5. Weigh-ticket workflow

## Preferred calibrated workflow

1. inbound gross weight;
2. timestamp + truck ID + Load ID + Source ID;
3. photo of load and weight evidence;
4. tipping/characterization;
5. outbound tare weight for same vehicle when practical;
6. net incoming tonnes = gross - tare;
7. record scale ID, calibration/verification reference and operator;
8. attach ticket/photo to Load ID.

If a truck tare is reused from a verified recent empty weight, mark method and age of tare explicitly.

### QA rule

Any handwritten/transcribed weight receives second-person check against ticket/photo before daily close.

---

# 6. Photo protocol

Minimum photos per load:

1. source/dispatch evidence where permitted;
2. truck side/rear with Load ID board before tipping;
3. load surface/visible material before tipping;
4. spread/tipped load wide view;
5. close-ups of key material/contamination features;
6. suspect material if safe and permitted — from exclusion boundary;
7. separated stream piles/containers before weighing;
8. final residual/suspect streams;
9. weight tickets/scale display where permitted.

Photo filename: `[LOAD-ID]_[stage]_[sequence].jpg`.

No people/identifying personal effects should be publicly exposed from operational photos without permission/privacy review.

---

# 7. Visual contamination score

Retain RB-03B 0–4 scale:

- `0` — source-separated clean mineral;
- `1` — minor removable contamination;
- `2` — mixed but practically sortable;
- `3` — high contamination requiring slow segregation/quarantine;
- `4` — suspected hazardous/unacceptable: STOP/REJECT pending HSE.

Record **pre-tip score** and, if meaningfully different, **post-spread score**. The higher safe-evidence score governs operational treatment.

Do not turn the score into a public “quality grade” until methodology is validated.

---

# 8. Safe tipping and suspect-load rule

Before tipping:
- HSE visual gate completed;
- tipping zone clear;
- spotter assigned;
- exclusion zone active;
- wind/dust conditions acceptable;
- quarantine path available.

If suspect material appears:

`STOP -> isolate truck/load -> no hand sorting -> HSE review -> photograph from safe boundary -> quarantine or reject -> authorized specialist pathway -> record disposition.`

Suspect mass is recorded separately and never blended into ordinary mineral streams.

---

# 9. Full-load stream separation

Where safe and practical, mass-account each full characterization load into:

1. concrete/mineral;
2. masonry/brick/block/ceramic;
3. ferrous;
4. non-ferrous;
5. wood/fiber;
6. plastic/other recyclable;
7. reusable components;
8. fines/soil-like fraction where separable;
9. suspect/quarantine;
10. non-recoverable residual.

If finer separation is impossible, record the combined category and reason; do not invent percentages.

### Separation method

Machine-spread load into a controlled thin working layer where geometry/HSE permit. Use machine-assisted segregation first. Manual sorting occurs only after HSE clearance and outside mobile-plant exclusion zones.

---

# 10. Stream weighing methodology

Preferred hierarchy:

1. direct weighbridge/scale weights by outbound/stream vehicle/container;
2. calibrated portable scale/axle pad;
3. calibrated container/bin scale or other documented scale;
4. known container tare + weighed gross;
5. **last-resort volumetric estimate** with measured volume and documented bulk-density assumption — not equivalent to measured mass.

Every stream record stores `weigh_method` and `quality_flag`.

No percentage from estimated-only mass may be presented as equally reliable to calibrated measured mass.

---

# 11. Sample sublots

For mineral streams likely to enter a product trial:

- create sublot/sample ID after gross separation;
- record parent Load IDs;
- sample across multiple points/depths rather than a single convenient scoop;
- record sample mass and method;
- seal/tag retained and lab samples;
- photograph sample and seal;
- chain-of-custody to storage/lab.

Sample ID: `SAMP-YYYY-####`.

Characterization samples inform variability; product-release samples remain tied to a defined processed Batch ID.

---

# 12. Mass-balance closure

For each load:

`closure % = (sum measured/estimated output stream masses / incoming net mass) × 100`

`closure error % = ((sum output masses - incoming net mass) / incoming net mass) × 100`

**TARGET:** calibrated campaign closure generally within ±3–5% per load/batch after method stabilization.

### QA flags

- `PASS`: |error| ≤5% with evidence-grade weighing;
- `REVIEW`: >5% to 10% or mixed measured/estimated methods;
- `FAIL/REWORK`: >10% unexplained, lost traceability or unsafe/mixed material.

Do not force closure mathematically by allocating unexplained tonnes to residual. Record an `UNACCOUNTED / MEASUREMENT DIFFERENCE` field and investigate.

---

# 13. Daily QA checks

At end of each campaign day:

- all planned loads reconciled against actual arrivals;
- every load has Source ID and Load ID;
- net incoming weight verified;
- photos present;
- contamination score present;
- suspect disposition closed or open with owner;
- stream masses sum checked;
- mass-balance error calculated;
- scale method/calibration reference present;
- sample IDs linked;
- duplicate/missing IDs checked;
- no load silently merged with another;
- data backed up to a second location.

Daily data approver initials the summary.

---

# 14. Daily summary

`CHAR-DAY-YYYYMMDD`

Fields:
- loads received/characterized;
- incoming net tonnes;
- tonnes by source stratum;
- tonnes/% by stream;
- contamination-score distribution;
- accepted/rejected/quarantined loads;
- suspect tonnes;
- residual tonnes;
- mean/median/range closure error;
- scale/equipment downtime;
- handling time/load;
- samples collected;
- HSE incidents/near misses/nonconformities;
- data-quality flags;
- next-day sampling gaps.

Do not publish daily composition before campaign QA and approval.

---

# 15. Dataset structure

## Source Register
`source_id, source_name, location, coordinates, source_type, stratum, contractor, recovery_stage, separation_practice, authority_contact, confidence, notes`

## Load Register
`load_id, date_time, source_id, truck_id, driver/hauler_ref, gross_t, tare_t, net_t, weigh_method, scale_id, calibration_ref, weather, pre_contam_score, post_contam_score, acceptance_status, tip_zone, photo_folder, processing_start, processing_end, notes`

## Characterization
`char_id, load_id, stream_code, stream_t, weigh_method, measured_or_estimated, container/ticket_ref, quality_flag, notes`

## Load Mass Balance
`load_id, incoming_net_t, outputs_sum_t, unaccounted_t, closure_pct, error_pct, qa_status, reviewer`

## Sample Register
`sample_id, load_id/batch_id, material, sampling_method, sample_mass, date_time, sampler, seal_id, retained_location, lab_destination, chain_of_custody_status`

## Suspect/Rejected Load Register
`event_id, load_id, trigger, material, action, quarantine_location, specialist, disposition, weight, evidence_ref, closed_by, closed_date`

---

# 16. Reduced-sample contingencies

## Only 20 loads available

**Classification:** downgraded pilot characterization, not target completion.

- maximize source diversity; target 4–5 strata if available;
- prefer ~4–5 loads/stratum over 20 loads from one source;
- fully mass-account as many as safely possible, ideally all 20;
- report source-level distributions and uncertainty;
- retain open action to complete additional loads before regional/long-term yield assumptions are fixed.

## Only 10 loads available

**Classification:** reconnaissance dataset.

- prioritize 3+ materially different strata if available;
- full detailed mass accounting on all 10;
- do not use aggregated percentage as regional planning fact;
- use results to refine equipment, HSE, sorting time, product candidate and next sampling design;
- keep RB-A-031/032 open.

## Loads come from one source only

- characterize 10–30 loads if possible to learn within-source variability;
- label results `SOURCE-SPECIFIC`;
- do not generalize to La Guaira or whole pilot feed;
- request a second/third source before fixing recovery yield or financial mass balance;
- still use data for operating-time, contamination and product-test design for that source.

## Weighing unavailable

### Preferred response
Pause formal mass-characterization until calibrated weighing is available if safe/logistical conditions allow.

### If operations cannot pause
- use truck manufacturer/legal payload only as a temporary **estimate**, never as measured weight;
- weigh subsamples/streams on smaller calibrated scales where possible;
- record measured volumes and bulk-density assumptions separately;
- flag all load/stream tonnes `ESTIMATED — NOT CALIBRATED`;
- do not calculate decision-grade economics/recovery percentages from estimated-only totals;
- schedule a bridge/axle-scale validation subset as soon as possible to calibrate assumptions.

## Existing debris already stockpiled/mixed

Treat stockpile as a **separate sampling frame**, not incoming-load characterization.

1. assign `STOCK-###` ID;
2. survey pile geometry/known historical tickets if available;
3. map visible source mixing and pile history;
4. create spatial sampling grid/sections;
5. machine-extract representative sublots from multiple faces/depths under geotechnical/HSE controls;
6. weigh separated sublots;
7. report `STOCKPILE CHARACTERIZATION`, not source-load distribution;
8. never infer original source composition if provenance is lost.

---

# 17. Analysis and reporting rule

Report by stratum first:
- load count;
- incoming tonnes;
- mean/median/range stream shares;
- contamination distribution;
- residual/suspect share;
- closure quality;
- processing time/load.

Only then show overall aggregate, clearly weighted by actual load mass and actual sampling distribution.

Do not use the word `representative` unless a qualified reviewer approves the sampling frame, source coverage and variability evidence.

---

# 18. Approved / Not approved criterion

### APPROVED — characterization evidence usable for pilot redesign
- authority for campaign documented;
- unique source/load traceability;
- safe tipping and suspect pathway working;
- weighing method evidence documented;
- source diversity recorded honestly;
- mass balance closure quality acceptable or explained;
- dataset reviewed and backed up;
- limitations explicit.

### NOT APPROVED
- mixed loads without IDs;
- unsafe manual sorting;
- missing scale method;
- percentages reverse-engineered from assumptions;
- source geography lost;
- unexplained mass-balance gaps hidden;
- convenience sample presented as La Guaira-wide composition.

---

# 19. Risks and common errors

- taking 30 loads from the easiest source and calling it five-stratum evidence;
- sorting after loads have been mixed;
- using nominal truck capacity as actual mass;
- inconsistent stream definitions between days;
- failing to weigh residual/suspect material;
- operator selecting only “good-looking” mineral material;
- sample taken from top of pile only;
- losing linkage between Load ID, Sample ID and Batch ID;
- prioritizing tonnage target over HSE.

---

# 20. Recommended delegation

- HSE lead: load acceptance/stop-work and safe tipping.
- Operations/site lead: dispatch/tipping/separation flow.
- QC/materials technician: stream definitions, sampling, chain-of-custody, QA.
- Civil/materials engineer: sampling-frame and product-use review.
- Data coordinator: IDs, forms, ticket/photo reconciliation and daily QA.
- Scale owner/operator: calibration/weight evidence.

---

# 21. Exact next action

Prepare a **30-row Load Scheduling Matrix** with provisional Source IDs and five empty source strata, then ask the debris-routing authority which actual sources can populate each slot without disrupting current public recovery operations. Do not lock strata until that answer exists.

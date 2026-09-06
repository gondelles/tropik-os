# RB_03D_EVIDENCE_COLLECTION_ROUTER_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06  
**Current RB-03D decision:** HOLD pending real evidence.

## Purpose

Stop Re:Build from creating one AI conversation per unknown. The missing evidence is collected from real people / field activity, then ingested into the existing RB-03D evidence-reconstruction workflow.

**CORE RULE:** AI may prepare forms, questionnaires, matrices and summaries. AI-generated text is not evidence of site authority, field conditions, buyer demand, lab competence, workforce availability or operating economics.

## One evidence inbox

All new decision-grade evidence should be routed to the **same RB-03D evidence-ingestion conversation** and then registered in GitHub. Do not create RB-03E merely because one interview or quote arrives.

For each incoming item record:

`date -> source/person -> organization -> evidence type -> raw file/note -> assumptions/gates affected -> verification status -> next action`

## The seven requested evidence packages

| # | Evidence package | Who must produce / supply it | Re:Build owner | Use existing instrument | Minimum acceptable evidence | Where it goes |
|---:|---|---|---|---|---|---|
|1|Authority meeting result|Actual Santa site/public-works/operating authorities and valid decision makers; founder/commercial lead records meeting|Founder / authority lead|`operations/RB_03C_AUTHORITY_VALIDATION_PACK_v0.1.md`|dated meeting record; names/roles; explicit answers; documents promised/received; signer/authority path; unresolved questions|RB-03D evidence inbox -> Evidence Register|
|2|Document/status matrix|This is an internal control document, not something an external party should author|RB-03D / project lead|Authority pack document request + Evidence Register|each required document listed with owner/source/status/requested date/received date/review status/gate affected|RB-03D; maintained in GitHub|
|3|Santa field polygon/site findings|Qualified civil/site engineer and/or authorized host representative during field visit; GPS/survey data where possible|Site/civil lead|`RB_03B_FIELD_VALIDATION_MODEL` + site/zone models|usable polygon; exclusions; photos; truck access/turning; drainage/flood/receptors; surface/bearing observations; utilities/security; safety constraints; reviewer identity|RB-03D evidence inbox -> site evidence record|
|4|Initial host-resource answers|Santa host/operator, public works/contractors and actual equipment/resource owners|Ops/procurement lead|Needs Register + Equipment RFQ pack + Authority pack|weighbridge, loader, excavator, crusher/screen, trucks, water, power, security, residual/hazardous pathways: available? owner? terms? dates? limits? evidence?|RB-03D -> Needs/Equipment/Economics updates|
|5|≥3 buyer interviews/specs|Real technical/economic buyers: road/earthworks/public-works contractors, private civil/logistics users; buyer engineer/procurement|Commercial lead + materials engineer|`commercial/RB_BUYER_OFFTAKE_VALIDATION_PACK_v0.1.md` + `RB_03C_FIRST_OFFTAKE_SPRINT_v0.1.md`|exact project/use; specification file/reference; technical approver; required tests; trial quantity; current substitute/price; route/freight; procurement/payment path|RB-03D -> Buyer Register / product-trial decision|
|6A|Initial lab responses|Actual local laboratories|QA/materials lead|Product standards / lab request fields|written quote; methods; sample requirement; competence/accreditation statement; turnaround; report format; validity|RB-03D -> QA/economics|
|6B|Initial recycler responses|Actual ferrous recyclers/processors|Commercial/procurement lead|Buyer Offtake pack ferrous lane|written grade rules; contamination/size rules; scale basis; current price; pickup/delivery; minimum lot; payment/title requirements|RB-03D -> ferrous lane|
|6C|Initial workforce responses|Already-contacted engineering groups, cuadrillas, operators/specialists|People/ops lead|`people/RB_WORKFORCE_PARTNER_AND_FUNDING_MODEL_v0.1.md`|completed intake; roles/crew size; availability; rates and inclusions; transport/PPE/tools; HSE experience; legal/invoicing status|RB-03D -> Workforce Partner Register / economics|
|7|First characterization loads|Authorized field team only after site/HSE/weighing permission exists|Site/HSE + QC/data lead|`operations/RB_03C_FEEDSTOCK_CHARACTERIZATION_PROTOCOL_v0.1.md`|Load IDs; source; calibrated or classified weight method; tickets/photos; suspect gate; stream weights; mass-balance closure; Sample IDs|RB-03D -> Load/Characterization datasets|

## What NOT to ask Claude/ChatGPT to generate as if it were evidence

- an authority meeting “result” before the meeting happens;
- a Santa polygon from desk assumptions;
- host equipment availability without owner confirmation;
- buyer specifications invented from standards;
- buyer demand/price without interview/quote evidence;
- laboratory or recycler quotes without actual replies;
- workforce prices without actual intakes;
- characterization tonnes without weighed field records.

## External outreach batching

Do not run seven independent outreach campaigns. Use four practical batches:

### Batch A — Santa authority + field + host resources
One coordinated authority/host meeting and site visit should attempt to collect packages **1, 3 and 4**, plus documents feeding package 2.

### Batch B — Buyer/offtake
Run ≥3 buyer technical interviews in parallel for package **5**.

### Batch C — Market/service responses
In parallel request lab, recycler and workforce responses for package **6A/6B/6C**.

### Batch D — Characterization
Only after authority/HSE/weighing clearance, execute package **7**.

## Website / Work With Us role

`/rebuild/work-with-us/` may support future acquisition by routing self-reported offers into the correct registers. Useful lanes include:

- authority/site referral;
- equipment/resource offer;
- lab/engineering/HSE support;
- crew/operator interest;
- material buyer/trial interest;
- recycler interest;
- funding/institutional partnership.

A web submission remains `INTEREST / OFFER RECEIVED` until reviewed. It does not close a gate automatically.

## Approval criterion

RB-03D can move beyond HOLD only when one or more fatal gates are replaced by decision-grade evidence and the change is recorded in Assumptions/Evidence/Decision/financial/site registers.

## Exact next action

Schedule one Santa authority/host meeting using `RB_03C_AUTHORITY_VALIDATION_PACK_v0.1.md`, with a request for a site walk immediately before/after if authorized. Treat that single event as the first attempt to collect packages 1, 2-inputs, 3 and 4 together.
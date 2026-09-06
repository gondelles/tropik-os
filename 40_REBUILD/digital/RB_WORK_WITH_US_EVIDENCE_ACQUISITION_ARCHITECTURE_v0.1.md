# RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06

## Purpose

Turn public participation into a controlled way to discover people, organizations, equipment, specifications, feedstock, buyer demand and professional support that can close the open RB-03C evidence gaps.

This is not a public job board, procurement award, donation checkout or automatic acceptance mechanism.

---

# 1. Strategic rule

`PUBLIC INTEREST -> STRUCTURED INTAKE -> INTERNAL REGISTER -> REVIEW -> EVIDENCE REQUEST -> QUALIFIED OPPORTUNITY -> DECISION`

Every submission remains `INTEREST / OFFER RECEIVED` until reviewed.

No submission automatically creates:
- employment;
- vendor award;
- donation acceptance;
- material approval;
- buyer commitment;
- government/site authorization;
- public acknowledgement.

---

# 2. Main route

Recommended public route:
`/rebuild/work-with-us/`

Homepage CTA:
`I can help with something`

Secondary entry points can deep-link to a preselected route from Needs, Materials, Support, Contact and Updates.

---

# 3. Entry choices

The landing page should ask:

**`What can you bring to the rebuild?`**

Cards:

1. **Equipment / vehicles / site resources**
   - loader, excavator, crusher, screen, trucks, scale, water, generator, skips, workshop/support resources.

2. **Materials / operating inputs**
   - PPE, barriers, containers, sampling materials, water, fuel, maintenance parts, welfare/site items.

3. **Engineering / laboratory / HSE expertise**
   - civil/site, pavement/materials, environmental, HSE, laboratory testing, surveying.

4. **Crew / operator / skilled workforce**
   - cuadrillas, equipment operators, mechanics, QC/data, supervisors and other specialists.

5. **I can use or test recovered material**
   - contractors, developers, logistics yards, aggregate users/distributors, public works/reconstruction projects.

6. **I buy/recycle recovered material**
   - ferrous/non-ferrous recyclers and other validated output users.

7. **I can help with a debris source or routing**
   - authorized public/private actors, contractors, property/project representatives with material routing information.

8. **I can help with site/authority/regulatory access**
   - authorized officials/operators/advisers who can identify the correct decision maker or required document. The form must never imply the respondent can authorize something unless evidence confirms it.

9. **Funding / institutional partnership**
   - grant, recovery, corporate or philanthropic partner inquiry only. No payment collection until approved.

10. **Other / volunteer / communications**
   - catch-all route, lower evidence priority.

---

# 4. Common intake fields

Every submission:
- `submission_id`
- date/time
- name
- organization
- email
- phone optional
- role/title
- location/geography
- preferred language
- category/route
- related `NEED-ID` if any
- short description
- availability/timing
- permission to contact
- privacy/consent version
- source URL
- campaign/UTM where available
- internal review status
- internal owner

Assign a durable `supporter/contact_id` after deduplication.

Do not require a WordPress login account merely to submit.

---

# 5. Equipment / resource form

Additional fields:
- resource type
- make/model
- year optional
- condition
- quantity
- location
- ownership/authority to offer
- dates available
- hours/days available
- operator included
- transport/mobilization included
- fuel included
- maintenance included
- insurance/HSE documents available
- rate/cost if not in-kind
- restrictions
- photos/documents optional

Writes primarily to:
`Contribution Offer Register` and, after review, `Equipment Register / Quote Register` where relevant.

---

# 6. Engineer / laboratory / HSE form

Additional fields:
- discipline
- organization/lab
- relevant experience
- services/tests available
- standards/methods supported
- accreditation/competence evidence where applicable
- geographic availability
- turnaround
- rate basis / expected rate
- pro-bono/in-kind/paid preference
- availability for 90-day pilot
- references

Writes to:
`Workforce Partner Register`, `Lab Register/Quote Register`, or professional-support Need records.

---

# 7. Crew / operator form

Additional fields:
- organization/person
- crew size
- roles/trades
- equipment capability
- experience
- availability
- day/week/month rate basis
- transport
- PPE available
- HSE training
- insurance/employment/contractor status
- invoicing/payment capability
- references
- geographic availability
- willingness to support 90-day pilot

Writes to:
`Workforce Partner Register`.

Public form should not ask for sensitive payroll/identity documentation. Collect deeper documents privately after qualification.

---

# 8. Buyer / material trial form

Additional fields:
- company/project
- project location
- current material used
- intended application
- tonnes/m³ required
- current supplier optional
- exact specification/drawing/owner requirement upload
- whether recycled C&D is allowed/conditional/prohibited if known
- technical approver name/role
- economic buyer/procurement role
- trial willingness
- minimum useful trial quantity
- required tests
- desired date
- pickup/delivery
- current delivered/ex-yard price optional
- payment/procurement notes

Writes to:
`Buyer Register` and, after qualification, `Offtake Trial Register`.

Primary CTA language:
`I can test or use this material`

Do not call this an offtake commitment.

---

# 9. Recycler form

Additional fields:
- material/grade purchased
- accepted contamination
- piece/size limits
- concrete attachment tolerance
- minimum lot
- scale/weighing method
- current price basis
- pickup/delivery
- payment terms
- title/origin requirements
- trial-lot willingness

Writes to:
`Buyer/Recycler Register` and Quote Register.

---

# 10. Feedstock/source/routing form

Additional fields:
- organization/project/source
- location
- source type
- approximate material type/quantity if known
- who currently controls routing
- current destination
- truck/loading arrangement
- whether source is separated or mixed
- known suspect/hazardous concerns
- contact with legal/operational authority
- documents available

**Guardrail:** quantities submitted here remain `SELF-REPORTED / UNVERIFIED` until weigh tickets/authority evidence exist.

Writes to:
`Source Register / Evidence acquisition queue`.

---

# 11. Authority/referral form

Purpose is to identify the correct authority and evidence, not crowdsource legal conclusions.

Additional fields:
- organization/public body/site operator
- respondent role
- authority area they believe they cover
- person/office they recommend Re:Build contact
- document/permit/approval name
- link/reference if public
- whether respondent can provide an introduction

All claims remain unverified until official evidence is obtained.

---

# 12. Funding / institutional partnership form

Before fundraising approval this is an **inquiry**, not a payment page.

Capture:
- organization/fund
- contact
- type: grant / recovery program / CSR / philanthropy / in-kind / other
- geography/eligibility
- funding/resource category
- approximate range optional
- restrictions
- application cycle/deadline
- documentation required
- contact permission

Writes to a Funding Opportunity Register, not to cash receipts.

---

# 13. Need-specific intake

Every public Need card should pre-fill:
- `NEED-ID`
- public Need title
- category

CTA:
`I can help with this`

The person then chooses:
- provide item/equipment;
- provide service/professional hours;
- provide crew/operator;
- introduce a provider/authority;
- discuss institutional funding.

No automatic status change in the Needs Register.

---

# 14. Weekly updates / supporter identity

Homepage/footer/signup route:
`Keep me updated`

Minimum subscriber fields:
- `supporter_id`
- email
- name optional
- language
- consent timestamp
- consent/privacy version
- source
- interest tags
- subscription status
- ESP/list ID/sync status
- unsubscribe timestamp/status
- optional `wp_user_id` only if an account later exists

Suggested tags:
- general updates
- needs/in-kind
- engineering/technical
- workforce
- buyer/materials
- funding/partners
- merch

Weekly email promise should be realistic:
`One short update on what changed, what was verified, what moved forward and what still needs help.`

Do not promise weekly messages until the communication workflow is actually staffed/configured; before launch use wording such as `Get project updates`.

---

# 15. Data routing

MVP can use WordPress forms/CPTs as intake only, with controlled export/sync into the external master registers.

Recommended mappings:

`Equipment/material/service offer -> Contribution Offer Register`

`Engineer/crew/operator -> Workforce Partner Register`

`Buyer/recycler -> Buyer Register / Quote Register / Offtake Trial Register`

`Feedstock/source -> Source Register`

`Authority referral -> Evidence acquisition queue`

`Funding partner -> Funding Opportunity Register`

`Newsletter -> Supporter/Subscriber Register + approved ESP/list`

WordPress is not the master HSE/payroll/accounting/authority system.

---

# 16. Triage score

Every incoming opportunity can be internally scored:

- closes fatal gate: +5
- closes high-priority Need: +4
- documented authority/spec/capability attached: +3
- available within 30 days: +2
- local/short-haul relevance: +2
- requires capital commitment before validation: -3
- unclear authority/ownership: -2

Use score for follow-up priority, never as automatic acceptance.

---

# 17. GREEN / YELLOW / RED

## GREEN
- publish Work With Us routes/forms after privacy/security review;
- collect non-binding interest/offers;
- collect specs/capabilities/referrals;
- newsletter/update opt-in with valid consent;
- route submissions into internal review.

## YELLOW
- accept physical in-kind contributions;
- publish supporter/partner names;
- formal workforce engagement;
- trials/material offers;
- institutional funding applications.

Requires appropriate internal/technical/legal review.

## RED
- public cash donation checkout before approval;
- salary donations;
- tax-deductibility claims;
- automatic vendor/worker acceptance;
- automatic Need fulfillment from form submission;
- publishing submitted quantities/capabilities as verified facts;
- collecting sensitive worker documents publicly.

---

# 18. Major implementation block

**Objective:** turn public traffic into structured evidence and qualified resources that can close Re:Build's open pilot gates.  
**Expected result:** one `Work With Us` hub with 8–10 clear routes and data mappings into RB registers.  
**Recommended tools:** existing WordPress stack, native/free forms first, supporter/contact ID, external spreadsheet/simple database, optional ESP connector after workflow validation.  
**Concrete steps:** build route selector -> build dynamic forms -> create consent/privacy fields -> map each route to master register -> create internal triage queue -> test with dummy submissions -> publish only after privacy/security check.  
**Validation checklist:** every form has owner; every field maps to a use; no submission auto-accepts anything; supporter identity deduplicates; sensitive worker data excluded; funding remains inquiry-only.  
**Approved:** a useful submission can be traced from public form to the exact register/evidence request it helps resolve.  
**Not approved:** generic contact inbox, duplicated data with no owner, or public fundraising sneaks in through a form.  
**Risks/common errors:** collecting too much data, pretending self-reported claims are verified, spam, PII exposure, missed follow-up, duplicate contacts.  
**Delegation:** WordPress implementer; data owner; privacy/legal review; commercial/ops owners for triage.  
**Exact next action:** build the route selector and the first three forms in this order: `Equipment/resource`, `Engineer/crew`, `Buyer/material trial`, then test their record mapping with dummy data.

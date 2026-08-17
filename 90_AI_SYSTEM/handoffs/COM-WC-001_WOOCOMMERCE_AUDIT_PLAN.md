# COM-WC-001 — WooCommerce Audit Plan

Status: READY  
Venture: Tropik Commerce  
Source: ChatGPT / Tropik Compass  
Destination: Claude — 10 Tropik Commerce  
Reviewer: ChatGPT / Tropik Compass

## OBJECTIVE

Design the minimum evidence-driven audit needed to understand the current WooCommerce store and convert findings into a prioritized relaunch backlog.

## WHY NOW

Tropik Commerce is GREEN/ACTIVE. The current store exists, but its technical/business state is still unknown. Relauch work should not begin from assumptions.

## CANONICAL SOURCES

- `10_COMMERCE/context/COM_00_READ_ME_FIRST.md`
- `10_COMMERCE/context/COM_01_VENTURE_BRIEF.md`
- `10_COMMERCE/context/COM_02_CURRENT_STATE.md`
- `00_HQ/priorities/04_CURRENT_STATE_AND_PRIORITIES.md`
- `00_HQ/decisions/05_STRATEGIC_DECISIONS_LOG.md`
- `00_HQ/governance/07_SECURITY_AND_APPROVAL_POLICY.md`
- `90_AI_SYSTEM/prompts/claude/10_COMMERCE_PROJECT_INSTRUCTIONS.md`

## LOCKED DECISIONS

- Tropik Goods = umbrella.
- Tropik = Commerce/merch brand.
- WooCommerce relaunch comes before scaling additional channels.
- LATAM limited-stock and USA POD are separate operating tracks.
- Amazon is future, not immediate execution.
- No additional domain purchase is currently required solely for venture separation.
- Private canonical information remains private.

## KNOWN CURRENT STATE

- Existing WooCommerce site exists on Hostinger infrastructure.
- Current known domain: `tropikgoods.com`.
- Detailed technical state has not yet been canonically audited.

## TASK

Create a founder-executable WooCommerce audit plan that can be completed primarily through screenshots/exports/read-only inspection, without giving Claude or ChatGPT credentials.

The plan must:
1. define audit sections in the correct order;
2. specify exactly what evidence the founder should collect for each section;
3. distinguish safe read-only checks from actions requiring caution/approval;
4. create the proposed structure for `COM_03_WOOCOMMERCE_TECHNICAL_INVENTORY`;
5. create the proposed structure for `COM_04_WOOCOMMERCE_RELAUNCH_BACKLOG`;
6. define severity/priority scoring;
7. identify the first 5–10 checks with the highest information value;
8. minimize founder effort and avoid exhaustive low-value inspection;
9. state what should NOT be changed while gathering evidence;
10. define when the audit is complete enough to begin remediation.

## EXPECTED ARTIFACT

A concise operational audit blueprint, followed by ready-to-copy table schemas for Inventory and Backlog.

Do not populate findings that have not been observed.

## CONSTRAINTS

- No passwords, API keys, tokens or private credentials.
- No paid tool recommendation unless current free/native capability is insufficient and the reason is explicit.
- No destructive/live changes during audit evidence collection.
- No broad redesign recommendations before blockers and purchase path are understood.
- Keep initial founder evidence-gathering session to roughly 30–45 minutes if possible.

## HUMAN APPROVAL GATES

Stop and flag before:
- installing/removing/updating plugins/themes on production;
- changing PHP/server/database configuration;
- modifying payments, taxes, shipping or live checkout behavior;
- changing prices/policies;
- purchasing software/services;
- exposing credentials;
- deleting data or products.

## ACCEPTANCE CRITERIA

Approved if:
- founder can begin the audit without additional strategic clarification;
- first evidence collection session is clearly ordered;
- every check has a reason and expected evidence;
- unknown/not-checked states are supported;
- outputs map directly into Inventory + Backlog;
- launch blockers can be separated from optimizations;
- no sensitive access must be handed to either AI.

## RETURN FORMAT

Return:
1. Audit Blueprint.
2. First 30–45 Minute Evidence Session.
3. Inventory Schema.
4. Backlog Schema.
5. Severity/Priority Model.
6. Do-Not-Change-During-Audit list.
7. Audit Completion Gate.
8. Assumptions/unknowns.
9. Proposed canonical file updates.
10. One exact next action for the founder.

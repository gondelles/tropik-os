# COM_03_WOOCOMMERCE_TECHNICAL_INVENTORY

Status: PRIVATE_CANONICAL — TEMPLATE, no findings populated yet
Version: 0.1 (seed)
Venture: Tropik Commerce
Created: 2026-08-17
Source: COM-WC-001 Audit Blueprint

## How to use this file

- One row per meaningful finding.
- Never mark an area healthy without evidence — leave `NOT CHECKED` until it's actually inspected.
- Never write a password, API key, or credential into this file, in any column.
- FACT = directly observed. ASSUMPTION = inferred/not directly verified — label it as such.

## Columns

| Column | Meaning |
|---|---|
| Area | Which audit phase/section this belongs to |
| Observation | What was found |
| Evidence/Source | Screenshot, export, page checked, date |
| Fact/Assumption | FACT or ASSUMPTION |
| Business Impact | Effect on customer ability to browse/buy, or business/legal/security risk |
| Urgency | Low / Medium / High |
| Effort | Low / Medium / High |
| Launch Blocker? | Yes / No |
| Recommended Action | What should happen next |
| Owner/Delegation | Founder / ChatGPT / Claude / Developer / Specialist |
| Human Gate | Yes/No — what approval is needed, if any |

---

## Inventory

*Template row — delete once first real finding is added:*

| Area | Observation | Evidence/Source | Fact/Assumption | Business Impact | Urgency | Effort | Launch Blocker? | Recommended Action | Owner/Delegation | Human Gate |
|---|---|---|---|---|---|---|---|---|---|---|
| `<phase — e.g. Core Commerce Path>` | `<what was observed>` | `<screenshot/export + date>` | `<FACT or ASSUMPTION>` | `<impact description>` | `<L/M/H>` | `<L/M/H>` | `<Yes/No>` | `<action>` | `<owner>` | `<Yes/No + what>` |

---

## Area Skeleton (pre-listed, status defaults to NOT CHECKED)

| Area | Status | Notes |
|---|---|---|
| Phase 0 — Infra & Access Baseline (WP/WC/PHP versions) | NOT CHECKED | |
| Phase 0 — Backup/staging readiness | NOT CHECKED | |
| Phase 1 — Cart/checkout health | NOT CHECKED | |
| Phase 1 — Payment methods & testability | NOT CHECKED | |
| Phase 2 — Shipping/zones/tax configuration | NOT CHECKED | |
| Phase 2 — LATAM vs USA catalog/fulfillment separation | NOT CHECKED | |
| Phase 2 — Print-on-demand integration readiness (USA) | NOT CHECKED | |
| Phase 3 — Transactional email behavior | NOT CHECKED | |
| Phase 4 — Theme/page-builder architecture | NOT CHECKED | |
| Phase 4 — Active/inactive plugins & dependencies | NOT CHECKED | |
| Phase 5 — Product/catalog quality and configuration | NOT CHECKED | |
| Phase 6 — Mobile usability and performance | NOT CHECKED | |
| Phase 7 — Analytics/tracking state | NOT CHECKED | |
| Phase 8 — Security/basic operational risks | NOT CHECKED | |
| Phase 9 — SEO/indexing basics | NOT CHECKED | |
| Phase 10 — Legal/policy pages | NOT CHECKED — route to specialist, do not resolve here | |

Update each row's Status to `FACT` or `UNKNOWN — could not verify` as evidence comes in, and add a full row above in the Inventory table with detail.

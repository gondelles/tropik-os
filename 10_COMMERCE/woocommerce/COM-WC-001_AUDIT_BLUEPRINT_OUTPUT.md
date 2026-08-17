# COM-WC-001 — WooCommerce Audit Blueprint (Output)

Status: PRIVATE_WORKING — awaiting founder execution and human review
Venture: Tropik Commerce
Produced by: Claude — 10 Tropik Commerce
For: ChatGPT / Tropik Compass (orchestrator) + Founder
Version: 1.0
Date: 2026-08-17

No findings are populated in this document. It is a blueprint only. Zero evidence has been collected yet — that is a stated ASSUMPTION going in.

## 1. Audit Blueprint — Ordered Sections

Ordered by business risk and dependency:

0. Infra & Access Baseline — WP/WC/PHP versions, backup/staging readiness.
1. Core Commerce Path — cart/checkout health, payment methods & testability.
2. Fulfillment Logic — shipping/zones/tax, LATAM vs USA separation, POD readiness.
3. Transactional Communication — transactional email behavior.
4. Technical Foundation — theme/page builder, plugins & dependencies.
5. Product & Catalog Quality.
6. Mobile & Performance.
7. Analytics/Measurement.
8. Security & Operational Risk.
9. SEO/Indexing.
10. Legal/Policy Pages — flag only, specialist/human route.

**PROPOSED DECISION (not locked):** treat Phases 0–2 as launch-blocker territory and Phases 3–10 as backlog territory unless a specific later-phase finding is itself a blocker.

## 2. First Evidence Session

Read-only/self-inspection only. No credentials shared.

1. Site Health → Status.
2. Front-end live check.
3. WP / WooCommerce / PHP versions.
4. Active theme + page builder.
5. Plugin inventory.
6. Backup presence.
7. Product catalog snapshot.
8. Full checkout path, stopping before real payment unless a safe sandbox/test path is confirmed.
9. Payment gateways configured.
10. Shipping zones/methods.

## 3. Inventory & Backlog

Delivered separately:
- `COM_03_WOOCOMMERCE_TECHNICAL_INVENTORY.md`
- `COM_04_WOOCOMMERCE_RELAUNCH_BACKLOG.md`

## 4. Priority model

GREEN / YELLOW / RED based on impact, urgency, effort and blocker status.

- Launch blocker = GREEN.
- High impact + Low/Medium effort = GREEN.
- Medium impact, or High impact + High effort without blocker = YELLOW.
- Low impact = RED.

Overrides:
- payments, tax, shipping or legal are never below YELLOW and require a human gate before remediation;
- failed/incomplete test checkout = automatic blocker;
- inventory scale, paid tools or ads = RED by default until validation;
- Amazon findings = RED by default.

## 5. Do-not-change during audit

- no plugin/theme installs/removals/updates on production;
- no PHP/server/database changes;
- no payment/tax/shipping/live checkout changes;
- no price/policy changes;
- no purchases/subscriptions/ads;
- no data deletion;
- no credential sharing;
- real-money testing only if explicitly approved and no safe sandbox alternative exists.

## 6. Audit completion gate

Enough to begin remediation planning when:
- Phases 0–2 are FACT or explicit dated UNKNOWN;
- findings have impact/urgency/effort;
- launch blockers are separated;
- findings have GREEN/YELLOW/RED;
- sensitive findings have human gates;
- no secrets appear;
- next 3–5 execution priorities are obvious.

## 7. Assumptions / unknowns

ASSUMPTIONS, not verified:
- founder has wp-admin and Hostinger access;
- prior real-order history is unknown/out of scope until confirmed;
- at least one payment gateway may exist, but state is unverified.

New key unknown:
- whether configured gateway(s) support safe test/sandbox mode.

## 8. Canonical update proposal

- Create technical inventory template — delivered.
- Create relaunch backlog template — delivered.
- Update current state only after evidence exists.
- No changes proposed to venture brief/read-me.

## 9. Next action proposed by Claude

Open wp-admin → Tools → Site Health → Status → capture evidence and report it back.

## Orchestrator note

This file is stored as PRIVATE_WORKING. Its proposed decisions are not locked until explicitly approved through Tropik governance.

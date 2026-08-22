# COM_04_WOOCOMMERCE_RELAUNCH_BACKLOG

Status: PRIVATE_CANONICAL — LIVE BACKLOG
Version: 0.2
Venture: Tropik Commerce
Updated: 2026-08-17
Source: COM-WC-001 Audit Blueprint + Inventory findings WC-F001 to WC-F009

## Rules

- Every item traces to an Inventory finding.
- GREEN = execute now / before relaunch.
- YELLOW = prepare, validate or monitor.
- RED = defer.
- Payments, tax, shipping and legal always carry a human gate.
- Do not remediate production before backup/staging readiness is confirmed.

## Backlog

| ID | Title | Source Finding | Track | Priority | Impact | Urgency | Effort | Launch Blocker? | Proposed Action | Human Approval Required? | Status | Notes |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| BL-001 | Confirm Hostinger backup + create/use staging before changes | WC-F001, WC-F009 | Both | GREEN | High | High | Low | Yes for safe remediation | Verify latest restorable backup and staging capability; perform build/audit changes in staging, not live production. | Yes — before any production change | Not started | First action before redesign/updates. |
| BL-002 | Capture current visual system before redesign | WC-F004, WC-F009 | Both | GREEN | High | High | Low | No | Document active theme, Divi setup, typography, colors, layouts, header/footer, product-card patterns, reusable modules and old-design references before altering them. | No for documentation; Yes before production changes | Not started | Preserve what already works aesthetically. |
| BL-003 | Inventory themes and plugins with dependencies | WC-F003, WC-F004, WC-F008 | Both | GREEN | High | High | Medium | Potentially | Capture active/inactive themes and plugins, versions, function and business criticality. Remove/update nothing yet. | Yes before removal/update | Not started | Needed to understand legacy stack and reduce risk. |
| BL-004 | Define store information architecture/navigation | WC-F009 | Both | GREEN | High | High | Medium | Yes for usable relaunch | Define minimal navigation for LATAM vs USA without confusing customers; map Home → Shop/region/product → Cart → Checkout and supporting pages. | Human approval of navigation/brand structure | Not started | Design before building pages. |
| BL-005 | Verify real ecommerce analytics baseline | WC-F006 | Both | GREEN | High | Medium | Medium | No, but required pre-relaunch | Identify current analytics stack and verify view_item/add_to_cart/begin_checkout/purchase measurement before launch. | Yes before paid tooling or live integration changes | Not started | Diagnostic currently reports ecommerce tracking absent. |
| BL-006 | Measure performance before cache changes | WC-F005 | Both | YELLOW | Medium | Low | Medium | No | Establish real mobile/page performance baseline, then decide whether cache/object-cache changes are justified. | Yes before server/cache config change | Not started | Do not optimize from Site Health recommendation alone. |
| BL-007 | Review automatic-update policy after staging exists | WC-F008 | Both | YELLOW | Medium | Low | Medium | No | Determine which updates are disabled and define controlled update policy with backup/staging. | Yes | Not started | Avoid enabling blanket auto-updates on unknown stack. |
| BL-008 | Connect/verify Search Console after architecture stabilizes | WC-F007 | Both | YELLOW | Low | Low | Low | No | Verify Search Console ownership/indexing closer to relaunch. | Yes if account connection/access required | Not started | Not a current relaunch blocker. |
| BL-009 | Maintain public maintenance mode until launch gate passes | WC-F009 | Both | GREEN | High | High | Low | Yes for public relaunch | Keep maintenance page while staging/audit/build occurs; remove only after checkout, fulfillment, analytics and content QA pass. | Yes — going live | In progress | Current public state is intentionally non-shopping. |

## Snapshot summary

- Total items: 9
- GREEN: 6
- YELLOW: 3
- RED: 0
- Launch blockers/open safe-build prerequisites: BL-001, BL-004, BL-009
- Items with an open human gate: BL-001, BL-003, BL-004, BL-005, BL-006, BL-007, BL-008, BL-009

## Current top 3

1. BL-001 — backup + staging.
2. BL-002 — preserve current/legacy visual design system.
3. BL-003 — theme/plugin dependency inventory.

Do not start a production redesign before these three are complete enough to support safe work.

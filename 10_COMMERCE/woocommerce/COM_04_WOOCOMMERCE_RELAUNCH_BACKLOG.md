# COM_04_WOOCOMMERCE_RELAUNCH_BACKLOG

Status: PRIVATE_CANONICAL — LIVE BACKLOG
Version: 0.3
Venture: Tropik Commerce
Updated: 2026-08-22
Source: COM-WC-001 Audit Blueprint + founder evidence batches

## Rules

- Every item traces to an Inventory finding/evidence.
- GREEN = execute now / before relaunch.
- YELLOW = prepare, validate or monitor.
- RED = defer.
- Payments, tax, shipping and legal always carry a human gate.
- Production changes require explicit approval even when staging tests have passed.

## Backlog

| ID | Title | Track | Priority | Impact | Urgency | Effort | Launch Blocker? | Proposed Action | Human Approval Required? | Status | Notes |
|---|---|---|---|---|---|---|---|---|---|---|---|
| BL-001 | Confirm Hostinger backup + staging before changes | Both | GREEN | High | High | Low | Yes for safe remediation | Use staging for build/audit. Latest Hostinger backup observed 2026-08-22 14:58; automated backups shown as Daily; staging `staging.tropikgoods.com` status Completed. | Yes before production push/restore | Done | Safe-build prerequisite satisfied for staging work. |
| BL-002 | Capture current visual system before redesign | Both | GREEN | High | High | Low | No | Preserve centered prominent logo, clean white/black/yellow palette, large imagery, rounded components, side drawer and cart drawer; document useful legacy patterns. | No for documentation; Yes before production changes | In progress | Founder explicitly wants to retain these visual traits. |
| BL-003 | Inventory themes and plugins with dependencies | Both | GREEN | High | High | Medium | Potentially | Theme/plugin inventory captured; next map checkout, payment and tracking ownership before updating/removing anything. | Yes before removal/update | In progress | Divi active; 35 plugins observed, with several functional overlaps. |
| BL-004 | Define store information architecture/navigation | Both | GREEN | High | High | Medium | Yes for usable relaunch | Product-first navigation with centered Tropik logo and off-canvas drawer; avoid exposing fulfillment model more than needed; USA additionally exposes Travel. | Human approval of final labels/taxonomy | In progress | Direction approved; final taxonomy to be based on pilot catalog + keyword validation. |
| BL-005 | Verify real ecommerce analytics baseline | Both | GREEN | High | Medium | Medium | No, but required pre-relaunch | Audit analytics stack and verify view_item/add_to_cart/begin_checkout/purchase events before launch. | Yes before paid tooling/live integration changes | Not started | Several analytics plugins overlap while Site Health reports ecommerce tracking absent. |
| BL-006 | Measure performance before cache changes | Both | YELLOW | Medium | Low | Medium | No | Measure real mobile/page performance, then decide cache/object-cache changes. | Yes before server/cache config change | Not started | Do not optimize from Site Health recommendation alone. |
| BL-007 | Review automatic-update policy after staging exists | Both | YELLOW | Medium | Low | Medium | No | Define controlled update sequence in staging before any production update policy. | Yes | Not started | 29 updates observed; no blanket updating. |
| BL-008 | Connect/verify Search Console after architecture stabilizes | Both | YELLOW | Low | Low | Low | No | Verify Search Console closer to relaunch. | Yes if account connection/access required | Not started | Not a launch blocker now. |
| BL-009 | Maintain public maintenance mode until launch gate passes | Both | GREEN | High | High | Low | Yes for public relaunch | Keep maintenance page while staging/audit/build occurs. | Yes — going live | In progress | Current live site intentionally non-shopping. |
| BL-010 | Run builder/theme replacement proof-of-concept in staging | Both | GREEN | High | High | Medium | No | Recreate header/drawer/home/product-card shell using native WordPress block theme + WooCommerce blocks and compare against Divi on maintainability, visual fidelity, speed and dependency count. | Yes before changing production theme | Not started | Recommendation: test native block stack first; do not migrate production yet. |
| BL-011 | Define Month-1 POD catalog by region | Both | GREEN | High | High | Medium | Yes for launch | LATAM: T-shirts, Hoodies, Caps. USA: T-shirts, Hoodies, Sweatshirts, Posters. Validate POD supplier availability/economics before final SKUs. | Yes before publishing products/prices | In progress | Private-label Travel remains post-textile launch. |
| BL-012 | Build USA private-label candidate scorecard | USA | YELLOW | High | Medium | Medium | No | Re-screen old research + new ideas against demand, competition, margin, size/weight, fragility, compliance, IP, returns, differentiation and Amazon fit. Pick one product only after current research. | Yes before samples/inventory spend | Not started | Old 2024 spreadsheet is historical evidence, not current market validation. |

## Current top 4

1. BL-002 — visual legacy system.
2. BL-003 — dependency mapping.
3. BL-004 — final navigation/taxonomy.
4. BL-010 — native block-theme proof-of-concept in staging.

Do not update 29 plugins or migrate production theme before dependency mapping and staging proof-of-concept.

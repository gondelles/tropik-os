# COM_03_WOOCOMMERCE_TECHNICAL_INVENTORY

Status: PRIVATE_CANONICAL — LIVE INVENTORY
Version: 0.2
Venture: Tropik Commerce
Updated: 2026-08-17
Source: COM-WC-001 Audit Blueprint + founder evidence batch #1

## How to use this file

- One row per meaningful finding.
- Never mark an area healthy without evidence — leave `NOT CHECKED` until actually inspected.
- Never write a password, API key, token, or credential into this file.
- FACT = directly observed. ASSUMPTION = inferred/not directly verified.

## Inventory

| ID | Area | Observation | Evidence/Source | Fact/Assumption | Business Impact | Urgency | Effort | Launch Blocker? | Recommended Action | Owner/Delegation | Human Gate |
|---|---|---|---|---|---|---|---|---|---|---|---|
| WC-F001 | Phase 0 — Infra & Access Baseline | WordPress version 7.0.4; WooCommerce 10.6.0; environment type `production`; WordPress memory limit 2 GB; server reports LiteSpeed; external object cache not present. | WooCommerce → Status screenshot, 2026-08-17 | FACT | Establishes current production baseline; version recency/compatibility still needs verification before any updates. | Medium | Low | No | Preserve as baseline; do not update yet. Capture full system report and staging/backup state next. | Founder + ChatGPT | Yes before production updates |
| WC-F002 | Phase 8 — Security/basic operational risks | Site Health shows 8 recommended improvements in the captured view; no critical-issue panel is visible in the screenshot. | Tools → Site Health → Status screenshot, 2026-08-17 | FACT limited to captured view | Indicates maintenance/security/performance housekeeping remains; does not by itself prove the site is unhealthy or launch-ready. | Medium | Low | No | Inspect/record each recommendation; do not auto-fix during audit. | Founder + ChatGPT | No for read-only inspection |
| WC-F003 | Phase 4 — Active/inactive plugins & dependencies | Site Health recommends removing inactive plugins. | Site Health screenshot, 2026-08-17 | FACT | Inactive components can increase maintenance/security surface, but exact plugins and dependencies are not yet known. | Medium | Medium | No | Inventory active/inactive plugins first; remove nothing until dependencies and backup/staging are confirmed. | Founder + Developer if needed | Yes before removal on production |
| WC-F004 | Phase 4 — Theme/page-builder architecture | Site Health recommends removing inactive themes. WordPress admin sidebar visibly includes Divi and Divi Engine, but the active theme has not yet been verified. | Site Health + wp-admin screenshot, 2026-08-17 | FACT for recommendation/menu presence; active-theme status UNKNOWN | Existing visual design may depend on Divi/theme components; changes could affect layout. | High | Low | Potentially | Capture Appearance → Themes and theme/system-report data before redesign or cleanup. | Founder + ChatGPT | Yes before theme removal/change |
| WC-F005 | Phase 6 — Mobile usability and performance | Site Health recommends a persistent object cache and reports inability to detect page cache. WooCommerce status shows no external object cache. | Site Health + WooCommerce Status screenshots, 2026-08-17 | FACT | Possible performance opportunity; not enough evidence yet to diagnose actual speed problems. | Low | Medium | No | Defer remediation until after baseline/staging; later measure real page performance before adding/changing cache layers. | ChatGPT + Developer if needed | Yes before cache/server config changes |
| WC-F006 | Phase 7 — Analytics/tracking state | Site Health/MonsterInsights reports that eCommerce data is not being tracked. | Site Health screenshot, 2026-08-17 | FACT as reported by installed diagnostic | Relaunch experiments could not be measured correctly if this remains true. | High | Medium | No — but pre-relaunch requirement | Verify analytics stack and actual ecommerce events before relaunch. Do not buy/enable tooling yet. | Founder + ChatGPT | Yes before paid tooling or live tracking changes |
| WC-F007 | Phase 9 — SEO/indexing basics | Site Health/AIOSEO recommends connecting Google Search Console. | Site Health screenshot, 2026-08-17 | FACT as recommendation | Low immediate impact while the store is under maintenance; relevant later for indexing/organic growth. | Low | Low | No | Keep YELLOW; revisit after store architecture and launch readiness. | Founder + ChatGPT | Yes before external-account connections if sensitive access is involved |
| WC-F008 | Phase 8 — Security/basic operational risks | MonsterInsights recommendation says automatic updates are disabled. Exact scope (plugin/theme/core) is not yet verified. | Site Health screenshot, 2026-08-17 | FACT for recommendation; scope UNKNOWN | Update policy may affect security/maintenance, but enabling automatic updates on an unreviewed commerce stack could also introduce compatibility risk. | Medium | Medium | No | Verify update configuration; do not enable auto-updates globally during audit. | Founder + Developer if needed | Yes before production update-policy change |
| WC-F009 | Phase 0 / Public state | Public homepage currently displays a maintenance page: “Website is under maintenance”; support email shown. | Incognito front-end screenshot, 2026-08-17 | FACT | Public customers cannot currently browse/shop; intentional during rebuild is acceptable, but maintenance must remain controlled and later be removed for launch. | High | Low | Yes for public relaunch, not for current audit | Keep maintenance active while auditing/building; do not disable production maintenance until staging QA and launch checklist pass. | Founder | Yes before going live |

## Area Status

| Area | Status | Notes |
|---|---|---|
| Phase 0 — Infra & Access Baseline (WP/WC/PHP versions) | PARTIAL FACT | WP 7.0.4, WC 10.6.0, production, 2 GB memory, LiteSpeed captured. PHP version not visible in supplied screenshot. |
| Phase 0 — Backup/staging readiness | NOT CHECKED | Next highest-priority evidence. |
| Phase 1 — Cart/checkout health | NOT CHECKED | Public site is under maintenance; test later in staging first. |
| Phase 1 — Payment methods & testability | NOT CHECKED | |
| Phase 2 — Shipping/zones/tax configuration | NOT CHECKED | |
| Phase 2 — LATAM vs USA catalog/fulfillment separation | NOT CHECKED | |
| Phase 2 — Print-on-demand integration readiness (USA) | NOT CHECKED | |
| Phase 3 — Transactional email behavior | NOT CHECKED | |
| Phase 4 — Theme/page-builder architecture | PARTIAL FACT | Divi / Divi Engine visible in admin; active theme still unverified. |
| Phase 4 — Active/inactive plugins & dependencies | PARTIAL FACT | Inactive plugin cleanup recommended; exact inventory pending. |
| Phase 5 — Product/catalog quality and configuration | NOT CHECKED | |
| Phase 6 — Mobile usability and performance | PARTIAL FACT | Cache recommendations captured; no measured performance baseline yet. |
| Phase 7 — Analytics/tracking state | PARTIAL FACT | Diagnostic reports ecommerce tracking absent. |
| Phase 8 — Security/basic operational risks | PARTIAL FACT | Recommended improvements captured; no full security audit. |
| Phase 9 — SEO/indexing basics | PARTIAL FACT | Search Console connection recommended. |
| Phase 10 — Legal/policy pages | NOT CHECKED — route to specialist | |

## Next evidence required

1. Hostinger backup status and staging availability.
2. Appearance → Themes (active theme + inactive themes).
3. Full WooCommerce System Status report or remaining environment/theme/plugin sections, sanitized before sharing.
4. Installed Plugins inventory (active/inactive + versions; no license keys).
5. Product catalog snapshot.

No remediation is authorized by this inventory update.

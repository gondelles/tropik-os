# TROPIK AI HANDOFF — COM-WEB-002

Status: READY
Venture: Tropik Commerce
Source: ChatGPT / Tropik Compass
Destination: Claude — `10 – Tropik Commerce`
Reviewer: ChatGPT / Tropik Compass + Founder

## OBJECTIVE

Synchronize Claude with the latest Tropik Commerce decisions, brand-system work and WordPress block-theme POC incident. Produce an independent architecture/QA review before further implementation.

## CURRENT STATE

1. Production remains protected by maintenance mode.
2. Hostinger staging exists and is completed at `staging.tropikgoods.com`.
3. Hostinger backup is confirmed; automated backups are daily.
4. Production legacy stack uses Divi plus multiple Divi/customization plugins.
5. Twenty Twenty-Five was successfully activated in staging before the custom child-theme experiment.
6. A generated child-theme ZIP `tropik-block-child-v0.1` installed successfully but the founder observed a generic WordPress critical-error screen during the subsequent workflow.
7. WordPress admin remained accessible; the founder successfully created a draft page named `Tropik POC` via another admin route.
8. The custom patterns expected from the child theme (`Tropik Hero — Editorial`, `Tropik Category Cards`) did not appear in the pattern inserter search.
9. Therefore v0.1 is considered FAILED/UNVERIFIED and must not be promoted or used in production.
10. No production changes are authorized.

## LOCKED BUSINESS DECISIONS

- Tropik Goods = umbrella; Tropik = commerce brand.
- Apparel launches as POD in LATAM and USA.
- LATAM pilot product types: T-Shirts, Hoodies, Caps.
- USA pilot product types: T-Shirts, Hoodies, Caps, Posters.
- Travel/private-label products are USA-only initially.
- Month 1 focuses on POD textiles; then one validated USA private-label product for Tropik + Amazon USA.
- Future USA research may include Outdoor Kitchen / Camp Utility.
- Future subscriptions are allowed architecturally but are not Phase-1 functionality.
- UX must preserve centered prominent Tropik logo, off-canvas/drawer navigation and product-first clarity.
- Speed, responsive behavior, low maintenance burden and conversion clarity are non-negotiable.

## CANONICAL / WORKING SOURCES TO REVIEW

If connected to GitHub, review:
- `00_HQ/decisions/05_STRATEGIC_DECISIONS_LOG.md`
- `10_COMMERCE/design/COM_05_STORE_UX_PERFORMANCE_REQUIREMENTS.md`
- `10_COMMERCE/brand/COM_06_BRAND_FOUNDATIONS_v0.1.md`
- `10_COMMERCE/brand/COM_07_CREATIVE_ASSET_SYSTEM_v0.1.md`
- `10_COMMERCE/woocommerce/COM_03B_PLUGIN_THEME_INVENTORY.md`

If GitHub is unavailable, rely on the current Project Context plus this handoff and explicitly say which sources are missing.

## TASK

A. Independently assess the likely failure modes of the child-theme v0.1 based on the evidence above. Do NOT assert a root cause without logs.

B. Recommend the safest next POC implementation approach. Evaluate at least:
1. child block theme with minimal/no PHP;
2. standalone minimal block theme;
3. staying on Twenty Twenty-Five and using Site Editor/global styles only for the first POC.

C. Optimize for:
- fastest recovery;
- lowest fatal-error surface;
- native WooCommerce compatibility;
- responsive performance;
- maintainability;
- future AI-assisted versioning through GitHub.

D. Review `COM_06_BRAND_FOUNDATIONS_v0.1.md` as a challenger. Identify:
- what is strong;
- what is generic;
- what is contradictory;
- the 3–5 founder decisions that would most improve differentiation.
Do not rewrite it into generic corporate language.

E. Recommend a minimal `Tropik Design System v0.1` artifact structure that can later drive theme.json, image prompts, product pages and marketing.

## DO NOT

- Do not recommend production changes.
- Do not recommend buying a premium theme/builder/plugin yet.
- Do not ask for passwords, API keys or credentials.
- Do not assume the child ZIP caused the critical error as a verified fact.
- Do not start Amazon/private-label research in this task.
- Do not create more than 5 active work items.

## EXPECTED RETURN

1. Executive diagnosis.
2. Root-cause hypotheses ranked by confidence, with what evidence would confirm each.
3. Recommended POC architecture and why.
4. Exact next 5 technical steps in staging.
5. Brand Foundations challenge/review.
6. Proposed Design System artifact map.
7. Human decisions required.
8. Canonical files Claude recommends updating.
9. GREEN / YELLOW / RED classification.

No live implementation. Return to ChatGPT/Tropik Compass for integration.

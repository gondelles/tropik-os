# COM_03B_PLUGIN_THEME_INVENTORY

Status: PRIVATE_CANONICAL — EVIDENCE INVENTORY
Version: 0.1
Venture: Tropik Commerce
Updated: 2026-08-22
Source: Founder screenshots of production WordPress admin + Hostinger staging

## Environment facts

- Hostinger staging exists at `staging.tropikgoods.com` and shows status `Completed` (created 2026-08-22).
- Current Hostinger WordPress Tools screen reports WordPress `7.1` and PHP `8.3.30` on the Live site.
- Earlier WooCommerce Status evidence from 2026-08-17 showed WordPress `7.0.4`; treat `7.1` as the newer observed state, but do not infer how/when the version changed without evidence.
- Active theme: **Divi**.
- Inactive themes observed: Flatsome, Flatsome Child, Twenty Twenty-Five, Twenty Twenty-Four, Twenty Twenty-One, Twenty Twenty-Three, Twenty Twenty-Two.
- Plugin screen shows **35 total / 28 active / 7 inactive / 29 updates available / 35 auto-updates disabled**.
- Divi Machine admin notice indicates its update/license state requires attention; no purchase or license action is authorized yet.

## Active plugins observed (28)

1. Advanced Custom Fields
2. All in One SEO
3. Code Snippets
4. Divi BodyCommerce
5. Divi Machine
6. Duplicate Page
7. Google Analytics for WooCommerce
8. Google Analytics for WordPress by MonsterInsights
9. Google for WooCommerce
10. Hostinger Tools
11. HubSpot All-In-One Marketing - Forms, Popups, Live Chat
12. Image optimisation service by Optimole
13. Jetpack
14. LightStart - Maintenance Mode, Coming Soon and Landing Page Builder
15. LiteSpeed Cache
16. MailPoet
17. OptinMonster
18. Otter – Page Builder Blocks & Extensions for Gutenberg
19. Payment Plugins for Stripe WooCommerce
20. Pixel Manager for WooCommerce
21. Polylang
22. WooCommerce
23. WooCommerce Checkout Manager
24. WooCommerce Direct Checkout
25. WooCommerce Stripe Gateway
26. WooCommerce Tax (previously WooCommerce Shipping & Tax)
27. WPCode Lite
28. WPForms Lite

## Inactive plugins observed (7)

1. Age Verification
2. Bank of America for WooCommerce
3. Pledged Plugins Secure Gateway for Authorize.net and WooCommerce
4. WooCommerce Amazon Fulfillment
5. WP Rocket
6. WP Super Cache
7. Yoast SEO

## Dependency / overlap flags to investigate — no remediation authorized

### P1 — Payment gateway overlap
Two Stripe-related plugins are active:
- Payment Plugins for Stripe WooCommerce
- WooCommerce Stripe Gateway

Risk: duplicate/confusing gateway presentation, duplicated configuration, or maintenance complexity. Verify actual WooCommerce → Payments configuration before disabling anything.

### P1 — Checkout customization overlap
Multiple active plugins can alter checkout behavior:
- Divi BodyCommerce
- WooCommerce Checkout Manager
- WooCommerce Direct Checkout

Risk: unclear ownership of checkout fields/redirects/templates and compatibility during updates. Map current behavior in staging before changing or updating.

### P1 — Analytics/tracking overlap
Several active plugins may inject or manage ecommerce/marketing tracking:
- Google Analytics for WooCommerce
- MonsterInsights
- Pixel Manager for WooCommerce
- Google for WooCommerce
- HubSpot may also add marketing tracking depending on configuration

Risk: duplicate tags/events or conflicting measurement. This is particularly important because Site Health reports ecommerce data is not being tracked.

### P2 — Custom-code / design dependencies
Preserve until mapped:
- Advanced Custom Fields
- Code Snippets
- WPCode Lite
- Divi Machine
- Divi BodyCommerce

Risk: removing/updating one of these may break custom fields, templates, snippets or layouts.

### P2 — Performance stack overlap
Active:
- LiteSpeed Cache
- Optimole
- Jetpack

Inactive legacy cache plugins:
- WP Rocket
- WP Super Cache

Risk: performance features may overlap. Measure first; do not activate multiple cache plugins.

### P2 — Marketing/email overlap
Active:
- HubSpot
- MailPoet
- OptinMonster

Risk: overlapping forms, popups, list capture and scripts. Audit actual use before simplifying.

### P2 — SEO residue
- All in One SEO active
- Yoast SEO inactive

Likely simplification candidate later, but remove only after confirming no required migration/data dependency.

### P2 — Maintenance stack
- Hostinger Tools indicates maintenance mode is active.
- LightStart maintenance plugin is also active.

Verify which component actually owns the public maintenance page before changing either.

## Current rule

No theme/plugin removal, update, activation, license purchase or production configuration change is approved by this inventory. Staging is the test environment.

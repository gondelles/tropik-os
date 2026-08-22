# COM_05_STORE_UX_PERFORMANCE_REQUIREMENTS

Status: PRIVATE_CANONICAL
Version: 1.0
Updated: 2026-08-22
Venture: Tropik Commerce

## Purpose

Define non-negotiable UX, performance and conversion requirements for the Tropik relaunch.

## Core experience principles

1. Mobile-first and highly responsive.
2. Fast perceived and measured performance.
3. Simple product-first navigation.
4. Centered, prominent Tropik logo.
5. Off-canvas/drawer navigation as a deliberate brand pattern.
6. Clear path from discovery → product → cart → checkout.
7. Regional operational complexity should be hidden from the shopper where practical.
8. Keep visual identity: clean white/neutral space, black typography, Tropik accent yellow/orange, large editorial imagery, rounded cards/containers.
9. Avoid plugin-heavy interaction when WordPress/WooCommerce native blocks can provide the capability.
10. Every added script, plugin or visual effect must justify its performance/conversion cost.

## Launch catalog navigation

### LATAM — POD apparel
- T-Shirts
- Hoodies
- Caps

### USA — POD apparel
- T-Shirts
- Hoodies
- Caps
- Posters

### USA — future private-label travel
Do not display empty categories at launch. Add only after a real product exists.
Candidate territories for research:
- Travel Essentials
- Outdoor Kitchen / Camp Utility
- Pack & Organize
- Everyday Carry
- Travel Tech & Power (later; higher compliance/returns risk)

## Header target

Desktop:
`[☰ SHOP]        [TROPIK LOGO]        [Search] [Account] [Cart]`

Mobile:
`[☰]             [TROPIK]             [Cart]`

Search/account may be placed inside the drawer on very small screens if that improves clarity.

## Drawer target

### SHOP
- New
- T-Shirts
- Hoodies
- Caps
- Posters (USA only)
- Shop All

### COLLECTIONS
Only collections with live products.

### DISCOVER
- Our Story
- Materials & Care
- FAQ
- Shipping & Returns

### TRAVEL — USA only
Hidden until first validated private-label product is ready.

## Taxonomy rules

Separate:
- Product Type: T-Shirt / Hoodie / Cap / Poster / etc.
- Collection: brand/story drop.
- Attributes: size / color / fit / material / region availability.
- Fulfillment: operational metadata, not primary customer navigation.

Navigation labels stay concise. SEO/keyword depth belongs in category H1s, copy, metadata and product content, not in bloated menu labels.

## Performance requirements

Before launch, measure on mobile and desktop using representative Home, category, product and checkout pages.

Targets for the POC / relaunch:
- no unnecessary slider/carousel libraries above the fold;
- optimized responsive images and explicit dimensions;
- avoid autoplay video in initial viewport unless evidence supports it;
- minimize third-party scripts;
- one primary cache strategy, not multiple competing cache plugins;
- global styles/theme.json preferred over scattered page-level CSS;
- native WooCommerce blocks preferred for cart/checkout unless a proven requirement cannot be met;
- defer non-essential marketing scripts until measurement/consent design is clear.

Performance acceptance will use Core Web Vitals and real/device testing; numeric targets are validated during the POC rather than assumed from theme marketing claims.

## Conversion / engagement requirements

- primary CTA visible without ambiguity;
- product cards expose image, product name, price and clear destination/action;
- no forced account creation unless justified;
- cart state always visible and understandable;
- shipping/returns expectations easy to find before checkout;
- minimize checkout field count;
- avoid popups that interrupt first-session shopping until tested;
- use related products/bundles only when relevant, not as clutter;
- future subscriptions must be optional and value-based, never designed as a dark pattern.

## Future subscription readiness — YELLOW

Do not implement subscriptions in Phase 1.

Architecture should not prevent a future recurring-products model for genuinely replenishable/basic-need products. Future evaluation must confirm:
- natural replenishment cadence;
- repeat purchase evidence;
- subscription-specific unit economics;
- cancellation/pause UX;
- fulfillment reliability;
- legal/tax/payment implications;
- customer value beyond a forced discount.

No paid subscription plugin is approved at this stage.

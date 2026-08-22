# COM_08_DESIGN_SYSTEM_v0.1

Status: PRIVATE_WORKING
Version: 0.1
Updated: 2026-08-22
Venture: Tropik Commerce

## Purpose
Translate Tropik Brand Foundations into reusable design tokens, ecommerce components, image-generation rules and campaign surfaces.

## 1. Brand Core
Source: `COM_06_BRAND_FOUNDATIONS_v0.1.md`.
Mission, vision, values, palette and naming remain working until founder approval.

## 2. Working Design Tokens

### Color
- Ink `#171717`
- Ivory `#F6F2E8`
- Sun `#F6B218`
- Leaf `#0F5A46`
- White `#FFFFFF`
- Mist `#ECEBE7`

Semantic mapping — EXPERIMENT:
- text-primary → Ink
- surface-main → Ivory
- accent-primary → Sun
- accent-secondary → Leaf
- surface-card → White
- surface-muted → Mist

### Typography — FOUNDER PREFERRED POC DIRECTION
**Direction C — Expressive Optimist** from Tropik Typography Exploration v0.1:
- Display: Bricolage Grotesque 700/800
- Body/UI: Lexend 300/400/500
- Yellow/Sun details used selectively as accent, never as low-contrast body text.

Rationale from exploration: most ownable and optimistic of the tested directions; Lexend offers strong small-size readability, while Bricolage Grotesque should remain primarily a display face because it can become overly playful at small sizes.

Status: APPROVED FOR POC / NOT YET FINAL CANONICAL TYPOGRAPHY.

Implementation requirements:
- self-host or WordPress Font Library where practical;
- `font-display: swap`;
- system-ui fallbacks;
- prices use tabular numerals where supported;
- mobile readability takes priority over decorative display treatment.

### Radius — EXPERIMENT
- card: 24px
- image: 24px
- button/pill: 999px

### Spacing
Use a small consistent scale rather than arbitrary page-level spacing.
Working steps: XS / S / M / L / XL / 2XL.

## 3. Core Ecommerce Components

P0 POC:
- Header
- Off-canvas navigation
- Hero
- Category cards
- Footer

P1 Commerce:
- Product card
- Product collection/grid
- Product detail template
- Mini-cart/cart drawer
- Cart
- Checkout
- Notices/forms/buttons/badges

For every component document:
- purpose;
- responsive behavior;
- accessibility;
- interaction states;
- Woo/WordPress mapping;
- performance cost.

## 4. Asset Generation Guidelines
Every generated asset brief should specify:
- use case;
- aspect ratio;
- subject;
- environment;
- lighting;
- visual mood;
- negative-space requirement;
- required/prohibited product details;
- text embedded? default NO;
- variants requested.

## 5. Campaign Templates — LATER
Only after core store visual language stabilizes:
- social frame;
- email banner/header;
- launch banner;
- collection/drop creative.

## 6. Governance
- Brand-core changes require founder approval.
- Design-token changes are versioned.
- AI output remains PRIVATE_WORKING until accepted.
- Visual polish cannot override performance/accessibility/commerce clarity.
- Product truth overrides generated aesthetics.

## Approval gate for v0.1
Do not promote this Design System to PRIVATE_CANONICAL until:
- founder reviews brand foundations;
- palette contrast/accessibility is tested;
- POC demonstrates tokens on real layouts;
- typography direction is tested in the real WooCommerce UI;
- mobile behavior is reviewed.

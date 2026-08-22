# COM_05_VISUAL_LEGACY_AND_NAVIGATION_PROPOSAL

Status: PRIVATE_WORKING — founder review required
Version: 0.1
Venture: Tropik Commerce
Updated: 2026-08-22

## Visual legacy — preserve

Based on founder screenshots and stated preference:

### KEEP
- Centered, prominent Tropik/Tropik Goods logo treatment in the header.
- Clean white navigation shell contrasted with bold imagery/content.
- Orange/amber accent as a recognizable brand cue.
- Large visual hero sections.
- Rounded card/button language, modernized and made more consistent.
- Drawer / off-canvas interaction for secondary navigation and mobile.
- Strong product search discoverability.
- Editorial / educational content as a supporting brand layer, not the primary shopping path.

### REFINE
- Current header has too many simultaneous navigation layers (left drawer + centered search + category row + account/language controls).
- Product/category labels should be simpler and based on how customers shop, not internal catalog history.
- Cart drawer is useful but product titles are too long/noisy and visually dominate the drawer.
- Typography/hierarchy should be modernized and standardized.
- Region logic (LATAM vs USA) should be explicit in fulfillment/catalog behavior without forcing users to understand backend complexity.

### REMOVE / AVOID
- Duplicate primary navigation systems competing for attention.
- Keyword stuffing in visible menu labels.
- Very long product names inside navigation/cart UI.
- Empty or thin categories created only for SEO.
- Mixing legacy gardening categories with new merch if those products are no longer part of the active Tropik proposition.

## Recommended navigation model — v0.1

### Desktop header

Row 1 (primary):

`[Menu/Shop drawer]      [TROPIK logo centered]      [Search] [Account] [Cart]`

Row 2 (optional, only if catalog size justifies it):

`New | T-Shirts | Hoodies & Sweatshirts | Accessories | Collections`

Do not show a second row until there are enough live products/categories to make it useful.

### Main drawer

SHOP
- New Arrivals
- Best Sellers (only after real sales data exists)
- T-Shirts
- Hoodies & Sweatshirts
- Accessories
- Shop All

COLLECTIONS
- Only validated named collections with enough products to deserve a landing page.

DISCOVER
- Our Story
- Materials & Care
- Journal / Learn (only if actively maintained)
- FAQ / Shipping & Returns

REGION
- Ship to / Shop for: LATAM or USA
- Region selector should change availability/shipping context rather than exist as duplicate top-level stores when technically feasible.

### Mobile

Single hamburger → full-height off-canvas drawer.
Logo remains centered/prominent.
Search and cart remain one tap away.
No hover-dependent navigation.

## Taxonomy principle

Use three distinct layers:

1. **Product type** — what the customer wants to buy.
   Example: T-Shirts, Hoodies, Caps, Tote Bags.

2. **Collection** — creative/theme/story grouping.
   Example: Tropik Essentials, [future validated collection names].

3. **Attributes/filters** — how the product differs.
   Example: color, size, fit, material, availability, region.

Do not turn every attribute into a top-level category.

## Naming / SEO rule

Visible menu labels must prioritize comprehension and speed.
Use concise descriptive anchors such as `T-Shirts`, not keyword-stuffed labels such as `Sustainable Tropical Graphic T-Shirts for Men & Women`.

Use keyword opportunity in:
- category page H1/title;
- collection description;
- SEO title/meta description;
- supporting copy;
- product names/descriptions;
- internal links;
- URLs where appropriate.

A navigation label can be short while its destination page targets a richer search intent.

Example:

Menu label: `T-Shirts`
URL: `/shop/t-shirts/`
H1: `Graphic T-Shirts by Tropik`
SEO title candidate: `Graphic T-Shirts | Tropik`
Category intro: naturally incorporate validated niche/high-demand terms once keyword research is completed.

## Initial sitemap — minimum viable

- Home
- Shop All
- T-Shirts
- Hoodies & Sweatshirts (only if pilot catalog contains them)
- Accessories (only if pilot catalog contains them)
- Collections (only after at least one real collection exists)
- Our Story
- FAQ / Shipping & Returns
- Account
- Cart
- Checkout
- Contact
- Privacy / Terms / Returns (specialist/human-reviewed)

Optional later:
- Journal / Learn
- Best Sellers
- Gift Guide
- Sustainability / Materials

## LATAM vs USA

Recommended UX principle:
- Do not make `LATAM` and `USA` the primary way users browse products unless catalog differences are extreme.
- Prefer one product taxonomy and a region selector/context layer that controls availability, currency/shipping messaging, and fulfillment.
- If the catalogs become materially different, create region-specific landing pages or routing without duplicating the entire navigation unnecessarily.

## Header design direction

- Prominent centered logo.
- Header height compact enough not to steal viewport.
- White/off-white background.
- Black/dark typography.
- Tropik amber/orange accent reserved for selected states, CTAs and brand moments.
- Rounded controls with one consistent radius system.
- Search should be obvious but not occupy most of the header unless catalog size justifies it.
- Sticky header after initial scroll, with reduced height.

## Next design artifact

Before building pages, create:
1. approved sitemap/navigation;
2. pilot catalog taxonomy;
3. low-fidelity header + Home wireframe;
4. component tokens: colors, type, radius, spacing, buttons.

Then implement in staging.

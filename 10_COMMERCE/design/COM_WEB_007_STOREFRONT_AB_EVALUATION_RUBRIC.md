# Tropik Storefront A/B Evaluation Rubric v0.1

Status: PRIVATE_WORKING  
Updated: 2026-08-30  
Purpose: compare two independently built staging themes without favoring the author or tool.

## Controlled-test rule
Evaluate both themes against the same WordPress/WooCommerce database snapshot, same two Printify-linked pilot products, same plugins, same staging server, same browser/device and same cache state.

Do not show Theme A to the author of Theme B before Theme B is finished. Rename packages internally as Theme A and Theme B during founder review if practical.

## Hard-fail gates
A theme cannot win regardless of visual score if any of these is true:
- real product price/title/options are hard-coded rather than rendered from WooCommerce;
- variable product size/color selection is broken;
- Add to Cart is broken;
- Cart or Checkout bypasses/breaks native Woo page content;
- obvious invented shipping/returns/material/payment/sustainability claims appear;
- legacy grow/gardening categories dominate primary relaunch navigation;
- Travel/private-label navigation is exposed before a validated product exists;
- a paid plugin or page builder is required for the theme to work;
- 390px viewport has persistent horizontal overflow;
- a third-party brand's art/trade dress is copied;
- theme causes a fatal/critical WordPress error.

## Scoring
Score every criterion 1–5. Weighted score = `(score / 5) × weight`.

| Area | Weight | What to judge |
|---|---:|---|
| Shopping-path clarity & conversion UX | 20 | Home→PDP→variant→cart→checkout is obvious; CTAs, cart state, errors, hierarchy |
| Mobile experience | 15 | 390px layout, drawer, thumb targets, typography, PDP variations, cart/checkout |
| WooCommerce correctness | 15 | dynamic products/prices/options, native templates, My Account, notices, search |
| Tropik brand coherence | 15 | dark-first Tropik identity, Sun/Leaf restraint, centered identity, rounded language, no legacy-grow feel |
| Visual craft & desirability | 10 | hierarchy, spacing, proportion, polish, memorable details, product presentation |
| Content / trust architecture | 8 | Our Story, FAQ, Shipping, Terms shell, Contact, content/SEO template feel deliberate and findable |
| Accessibility | 7 | contrast, focus, keyboard, semantic hierarchy, target sizes, reduced motion |
| Performance / maintainability | 7 | block-theme discipline, low JS, no builder dependency, clean CSS/theme.json, upgrade resilience |
| Truth & governance | 3 | no invented claims; founder gates and unresolved policy facts are respected |
| **TOTAL** | **100** | |

## Objective measurements
For each theme run the same desktop and mobile task:
1. Start at Home.
2. Open one pilot product.
3. Select a valid color.
4. Select a valid size.
5. Add to cart.
6. Open cart.
7. Continue to checkout.
8. Stop before real payment.

Record completion, elapsed time, confusion points and dead/broken clicks.

Browser QA: 1440px desktop, 1024px tablet, 390px mobile, and 320px narrow mobile if time permits. Record horizontal overflow, clipping, overlapping controls, inaccessible menus and missing variation controls.

On the same staging/cache conditions compare Lighthouse/PageSpeed for Home, representative PDP and Checkout. Capture Performance, Accessibility, LCP, CLS and INP/TBT equivalent available in the test. Compare themes rather than over-indexing on an absolute score because server/plugins affect both.

## Founder qualitative test
Without looking at code, answer:
1. Which Home makes Tropik feel more legitimate?
2. Which PDP makes you more willing to buy?
3. Which mobile navigation feels most intuitive?
4. Which theme feels most like Tropik rather than a generic Woo store?
5. Which one communicates more clearly with fewer words?
6. Which feels closer to the craft level admired in Kurzgesagt without imitating Kurzgesagt?
7. Which would you send a real customer to after policy/checkout validation?

## Decision rule
- **GO:** ≥82/100, no hard fail, shopping task passes desktop + mobile.
- **MODIFY:** 70–81/100, no hard fail, fixable P1s.
- **REJECT:** <70/100 or any hard fail affecting commerce/truth.

If scores are within 3 points, prefer in order: Shopping-path score, Mobile score, Woo correctness, then lower maintenance/performance cost.

## Final comparison record
| Metric | Theme A | Theme B |
|---|---:|---:|
| Weighted score /100 | | |
| Desktop task time | | |
| Mobile task time | | |
| Hard fails | | |
| Lighthouse Home | | |
| Lighthouse PDP | | |
| Accessibility | | |
| Founder preference | | |
| Decision | | |

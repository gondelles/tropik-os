# Tropik Re:Build theme — Iteration 1 — install notes

**Version:** 0.1.0-iteration1
**Scope:** architecture + Golden Master shell fidelity only (design tokens, header, left drawer, single WooCommerce-backed bag drawer, shared card/button/form primitives, 7 of 8 registered content patterns). No final page copy. See `ITERATION_01_NOTES.md` in this folder for exactly what is and isn't included, and why.

## Requirements

- WordPress 6.4+
- **WooCommerce active** (the theme calls `WC()` — install/activate WooCommerce first, then this theme)
- PHP 8.0+
- Polylang, optional — the ES/EN language pill only renders if Polylang is active with real translated content; it stays hidden otherwise (never a fake/non-functional toggle)

## Install

1. Appearance → Themes → Add New → Upload Theme.
2. Upload `tropik-rebuild-theme-iteration1.zip` as-is — do not re-zip or rename the folder inside it.
3. Activate.

If you see "the theme is missing the style.css stylesheet" on upload: the zip's top level must contain the `tropik-rebuild` folder directly (not double-nested inside another folder). Re-download the exact file this session sent you, not a manual re-zip of an extracted copy.

## After activating

1. **WooCommerce**: if not already installed, install and activate it, then run through the WooCommerce setup wizard (store address, currency, payment/shipping can stay minimal for staging).
2. **Menus**: Appearance → Menus. Create and assign four menus to the four new locations this theme registers:
   - `Explore Re:Build` — Recovery, How It Works, Materials, Rebuilding, Impact
   - `Support` — Support Re:Build, Work With Us, Transparency, About Us, Updates, FAQ, Contact Us, Shipping, Terms & Conditions, Privacy Policy, Return Policy
   - `Shop` — Merch, Products (these can point at WooCommerce category archive pages once created)
   - `My Account` — My Account, Orders, Bag
   
   To mark any item "coming soon" (matching the Golden Master's own `.tk-drawer__soon` treatment — used on Rebuilding in the source), enable **Screen Options → CSS Classes** on the menu editor and add the class `tk-soon` to that specific item.
3. **Front page**: Settings → Reading → set "Your homepage displays" to "A static page," create a Page (any title), and select it as the homepage. Until that page has real content, the theme shows one honest placeholder hero — not invented Home copy.
4. **Pages**: create the pages named in the four menus above, and build each one in the block editor using the patterns registered under the **Tropik Re:Build** category in the block inserter (search for "Re:Build" when adding a block).

## What this is NOT yet

- No Merch/Products WooCommerce categories or the 4 Re:Build Products SKUs are seeded (Iteration 2 scope — see `05_WOOCOMMERCE_COMPONENT_CONTRACT.md`).
- No product gallery, cart page, checkout, or My Account template overrides beyond WooCommerce's own defaults styled by the token overrides in `style.css` (Iteration 2 scope).
- No real page copy anywhere — every page you create will show the neutral pattern placeholder text (e.g. "Add your headline") until you replace it in the editor with founder-approved copy.
- Not tested against a live WordPress/WooCommerce/MySQL install in this session (no such environment is available here) — every PHP file passed `php -l` (zero syntax errors, PHP 8.4) and every class/selector was checked against the Golden Master's actual CSS/markup, but this has not been visually verified in a browser. Please screenshot the result on your staging site so Iteration 1's review can compare it against the Golden Master screenshots per `04_RESPONSIVE_TEST_MATRIX.md`.

## Known gaps carried over from the Golden Master itself (not this theme's doing)

- Coral vs. Leaf-vs-signal-green semantic ambiguity — see `01_SOURCE_OF_TRUTH_AND_INPUT_STATUS.md` §3.4.3 (this build uses `--tk-signal-green`, the value actually wired in source).
- Impact/Update teaser has no registered pattern — no equivalent markup exists in the Golden Master to build it from (§3.4.1).

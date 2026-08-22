# COM_WEB_005_THEME_ASSET_PIPELINE_FIX

Status: PRIVATE_WORKING
Version: 1.0
Date: 2026-08-23
Venture: Tropik Commerce

## Objective
Document the v0.3 visual failure and the architecture correction used in v0.4.

## Evidence
- `Tropik Home POC v0.3` template rendered its HTML content in staging.
- `theme.json` styling was partially visible (Ivory background / template registration).
- Custom `.tropik-*` component styling did not apply; the page rendered mostly as plain text.
- Therefore the template itself was loading, while the custom stylesheet asset pipeline was not.

## Finding
High-confidence diagnosis: the v0.3 component CSS existed in `style.css` but was not reliably enqueued on the frontend for this block-theme setup.

This is different from the earlier v0.1 critical-error incident. Do not merge those incidents without evidence.

## Decision
v0.4 introduces **minimal custom PHP solely for asset loading**.

Architecture:
- `theme.json` → global tokens and custom-template registration.
- `assets/css/tropik.css` → component/responsive styling.
- `functions.php` → enqueue the versioned stylesheet + temporary POC web fonts in frontend and block editor.
- `parts/` → header/footer.
- `templates/` → page templates.

## PHP boundary
Approved for POC:
- enqueue styles/fonts;
- cache-bust local assets with `filemtime()`;
- editor/frontend style parity.

Not approved by this decision:
- WooCommerce business logic;
- checkout customization;
- product logic;
- tracking code;
- API integrations;
- production secrets;
- custom database behavior.

## Scalability rule
Do not put all future UI into one giant stylesheet/template. After v0.4 visual validation, progressively split stable UI into reusable patterns/components and keep design tokens in `theme.json`.

## Typography
Direction C remains POC-only:
- Bricolage Grotesque for display.
- Lexend for UI/body.

Google Fonts is allowed only for staging-speed during this POC. Production target is WordPress Font Library or optimized self-hosted WOFF2 after final typography approval.

## Acceptance criteria
PASS if v0.4 preview shows:
- component typography/styles;
- aligned header;
- rounded editorial hero placeholder;
- consistent category-card family;
- product grid;
- story/reassurance/footer styling;
- responsive behavior without horizontal overflow.

FAIL if template content remains plain/unstyled or the asset file fails to load.

## Next action
Install `tropik-block-poc-v0.4.zip` in staging, assign `Tropik Home POC v0.4`, hard-refresh preview, and complete desktop/mobile design review before generating final imagery.

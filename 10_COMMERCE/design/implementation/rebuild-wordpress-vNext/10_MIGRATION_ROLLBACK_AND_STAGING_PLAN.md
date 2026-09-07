# 10_MIGRATION_ROLLBACK_AND_STAGING_PLAN

**Status:** PRIVATE_WORKING

## 1. Backup, before anything touches staging

1. Full staging database export + `wp-content` file export, timestamped, stored outside the live staging environment.
2. Capture the current live `Plugins` screen state (name/version/active) as a point-in-time record — this doubles as the missing input for `07_PLUGIN_AUDIT.md` if it hasn't been supplied by then.
3. Export any content in the current staging site that isn't already tracked in this repository (e.g. any real pages/posts/products a human created directly in WP admin) before it can be overwritten.
4. Confirm the backup is restorable (not just taken) before proceeding — an untested backup is not a rollback plan.

## 2. Divi / legacy dependency migration

Per `RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` §3:

1. Identify every page containing `et_pb_` shortcodes/classes/meta or other Divi-library references.
2. For each, confirm it is being replaced by a new Re:Build/Gutenberg-pattern page (per `06_WORDPRESS_EDITABILITY_AND_PATTERN_MAP.md`) or is genuinely out of scope (legacy apparel content, explicitly not part of this build).
3. Export/save any content that would become unreadable once Divi is deactivated, before deactivating.
4. Deactivate Divi on staging (not production) and smoke-test: Home, drawer, Shop, product, Bag, checkout, account, any remaining forms, admin editing.
5. Only recommend removal once no current-build page depends on it. Do not renew a Divi license solely to preserve the abandoned design — this is an explicit founder decision already made, not open for reinterpretation mid-build.

## 3. General plugin migration sequence (applies once `07_PLUGIN_AUDIT.md` is populated)

Backup → capture active list → verify no critical page/form/checkout dependency → deactivate one plugin/group at a time → smoke-test the same surface list as step 4 above → check logs/console → hold in deactivated state for a short validation window → remove once no dependency remains. Never mass-deactivate or mass-delete in one action.

## 4. Staging deployment sequence for the new theme

1. Deploy to a **staging environment distinct from the live public site** — never push directly to production.
2. Activate the new theme alongside existing content (do not delete old content on activation; the old apparel-demo content and any real existing orders/customers must survive the switch).
3. Run the WXR/deterministic seed script for the approved Re:Build pages and the 4 Products SKUs (per `05_WOOCOMMERCE_COMPONENT_CONTRACT.md` §2) — seed data must be clearly real-approved-content or explicitly labeled `TEST`, never invented content presented as real (per `08_CONTENT_AND_CLAIM_GATE_MAP.md` §6).
4. Run the full Iteration 4 responsive/functional smoke test (`04_RESPONSIVE_TEST_MATRIX.md`, `09_IMPLEMENTATION_PLAN_4_ITERATIONS.md` §3) against staging, not local.
5. Confirm legacy apparel-demo content is either clearly isolated from the Re:Build experience or explicitly approved to stay reachable — do not let it bleed into the Re:Build navigation/branding (a defect already flagged once in the earlier Home-content audit this session references).

## 5. Rollback plan

- Theme rollback: staging must be able to revert to the previous active theme in one action (standard WP theme switch) without data loss, since content lives in the database/WXR, not the theme files.
- Database rollback: restore from the pre-migration backup (§1) if a migration step corrupts content or orders.
- Plugin rollback: each deactivation in §3 is individually reversible during its validation window; nothing is deleted until that window closes clean.
- No step in this plan is destructive-by-default; every deletion (plugin removal, Divi removal) happens only after its corresponding smoke test passes and the validation window closes.

## 6. No automatic production promotion

Explicit, repeated instruction across every source document read for this package: staging is the final candidate, not the destination. Production promotion requires the founder's manual approval after reviewing the Iteration 4 evidence pack. This session will not flip that switch even if every automated check passes.

## 7. Repository privacy gate — reminder, not new work

`gondelles/tropik-os` is temporarily public per `RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` §6. This migration/staging plan does not itself require the repo to stay public any longer than it already needs to be for Claude tool access. Trigger conditions to return it to private (Golden Master handoff secured — **now true as of this session's commit**; private GitHub access restored; sanitized local handoff available; before any sensitive RB-03D evidence is committed) remain the founder's call, restated here so it isn't lost track of once implementation work starts.

# 07_PLUGIN_AUDIT

**Status:** PRIVATE_WORKING — **0 plugins audited. Input not yet supplied.**

## 0. Why this is empty

`RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md` ends with an explicit outstanding action: *"Export the current WordPress `Plugins` screen (name/version/active status) or paste the list into the Claude Code session so the plugin audit can be completed plugin-by-plugin instead of by category."* That export has not happened in this or any prior session that left a record in this repository. Nothing in this repo lists the actual installed plugins on the founder's WordPress instance.

**Per the task's own "do not guess missing Golden Master inputs" instruction, this document does not populate rows with plausible-sounding plugins (e.g. "probably has Yoast, probably has WPForms").** That would be exactly the kind of invention the founder's instructions prohibit. This document ships as the classification framework and rule set only, ready to fill in the moment the plugin list is supplied.

## 1. Required columns (fill per plugin once the list is supplied)

| Plugin | Version | Active? | Purpose today | Dependency/page using it | Classification | Risk of removal | Native/replacement alternative | Founder action required? |
|---|---|---|---|---|---|---|---|---|
| *(no rows — awaiting input)* | | | | | | | | |

## 2. Classification rule (from source doc, restated for use during the actual audit)

- **KEEP — required now:** WooCommerce core; the selected translation layer (Polylang, if real ES/EN routes exist); the selected forms plugin actually used by approved Re:Build forms; security/backup tooling actually configured; cache/performance tooling proven compatible; SEO tooling if actively configured and not duplicated.
- **KEEP TEMPORARILY:** Divi/Divi Builder or other legacy plugins needed only to render old pages during migration; import/migration utilities. Must carry an explicit removal condition/date.
- **DEACTIVATE + TEST:** no current approved use, overlapping functionality, or old-builder dependency. Sequence: backup staging → capture active plugin list/version → verify no critical page/form/checkout depends on it → deactivate one at a time → smoke-test Home, drawer, Shop, product, Bag, checkout, account, forms, admin editing → inspect logs/console → hold deactivated for a validation window → remove once no dependency remains.
- **REMOVE:** inactive, unused, unsupported, duplicate of another plugin's function, or supports only an abandoned design with no content/data dependency.

## 3. Divi-specific rule (applies regardless of when the plugin list arrives)

The Re:Build build must not depend on Divi. Before removing Divi/Divi Builder: identify any page containing `et_pb_` shortcodes/classes/meta, confirm those pages are being replaced/migrated, export/save content that would become unreadable after removal, then test staging after deactivation. A missing Divi license key is not a reason to renew it for this build.

## 4. Minimum-plugin target baseline (aspirational, to compare the real list against once supplied)

WordPress core + WooCommerce + Polylang (only if real translated routes exist) + one forms solution + at most one SEO plugin + at most one caching/performance layer + one backup/security approach as required + **no page builder**.

## 5. Exact next action (unchanged from source doc, repeated here as the literal blocker)

Export the current WordPress `Plugins` screen (Plugins → Installed Plugins, with name/version/active-status visible) as a screenshot, CSV, or pasted list, and provide it to the Lane-2 Claude Code session. Until then this document cannot move past §0–§4.

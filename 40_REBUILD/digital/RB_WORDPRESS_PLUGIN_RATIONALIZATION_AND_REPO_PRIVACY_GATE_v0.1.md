# RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1

**Status:** PRIVATE_WORKING  
**Updated:** 2026-09-07  
**Scope:** staging WordPress plugin cleanup + temporary GitHub visibility control.

---

# 1. Executive decision

## WordPress plugins
Do **not** keep plugins merely because an older Divi-based design used them.

The new Re:Build implementation should minimize plugin surface area and use native WordPress/Gutenberg + WooCommerce first.

However, do **not** mass-delete plugins before a dependency audit and staging backup. Some legacy pages may still contain Divi shortcodes/metadata or other plugin-owned content.

## Repository visibility
`gondelles/tropik-os` is temporarily PUBLIC for Claude access. This is a temporary access workaround, not an approved long-term state.

**PRIVACY GATE:** return the repository to PRIVATE as soon as the current Golden Master / Claude Code handoff no longer requires public access, and in all cases **before** uploading decision-grade authority documents, buyer specifications with confidential terms, workforce personal information, contracts, credentials, API keys, private financial data or other sensitive evidence.

---

# 2. Plugin rationalization rule

Classify every installed plugin into one of four states:

### KEEP — required now
Typical examples if actually used:
- WooCommerce core;
- Polylang or the selected translation layer;
- the selected forms plugin used by approved Re:Build forms;
- security/backup tooling that is actually configured and useful;
- cache/performance tooling proven compatible with staging/production;
- SEO tooling if actively configured and not duplicated.

### KEEP TEMPORARILY — migration dependency
Examples:
- Divi/Divi Builder or legacy plugins needed only to render old pages while content is being migrated;
- import/migration utilities needed during transition.

These should have an explicit removal condition/date.

### DEACTIVATE + TEST
Plugins with no current approved use, overlapping functionality or old-builder dependencies.

Sequence:
1. backup staging;
2. capture active plugin list/version;
3. verify no critical page/form/checkout depends on plugin;
4. deactivate one plugin/group at a time;
5. smoke-test Home, drawer, Shop, product, Bag, checkout, account, forms and admin editing;
6. inspect logs/browser console;
7. keep deactivated for a short validation window;
8. remove once no dependency remains.

### REMOVE
Plugins that are inactive, unused, unsupported, duplicate another function or only support an abandoned design and have no data/content dependency.

---

# 3. Divi-specific decision

The Re:Build theme must **not depend on Divi**.

A missing Divi license key is not a reason to renew Divi for this implementation if the approved architecture is native Gutenberg/custom theme.

Before removing Divi/Divi Builder:
- identify pages containing `et_pb_` shortcodes/classes/meta or Divi library references;
- confirm those pages are being replaced or migrated;
- save/export any content that would become unreadable after removal;
- test staging after deactivation.

If no current production-relevant page depends on it, remove Divi-related plugin dependencies after the smoke test.

Do not build the new Re:Build page system around Divi simply to preserve an obsolete dependency.

---

# 4. Minimum-plugin bias for Re:Build

Preferred baseline:
- WordPress core;
- WooCommerce;
- Polylang only if/when real translated routes exist;
- one forms solution;
- one SEO solution at most;
- one caching/performance layer at most;
- one backup/security approach as required;
- no page builder required.

Avoid:
- duplicate form plugins;
- multiple SEO plugins;
- multiple cache/minification plugins;
- abandoned builder add-ons;
- plugin suites retained for one unused widget;
- paid plugin purchases before a validated requirement exists.

---

# 5. Plugin audit deliverable required from Claude Code

Before final theme delivery, Claude Code must produce:

`PLUGIN_AUDIT.md`

with columns:
- Plugin
- Version
- Active?
- Purpose today
- Dependency/page using it
- KEEP / KEEP TEMP / DEACTIVATE / REMOVE
- Risk of removal
- Replacement/native alternative
- Founder action required?

No plugin may be declared required merely because the old staging site had it installed.

---

# 6. Repository privacy control

Current temporary public access is accepted only as a short bridge.

### Public-window rules
While repository is public:
- do not commit passwords, secrets, API keys or `.env` values;
- do not commit private authority/partner/workforce evidence;
- avoid personal data;
- assume every PRIVATE_WORKING strategy/business document in the repository is publicly readable during this window.

### Trigger to return PRIVATE
Return repository to PRIVATE when any one of these is true:
1. Cowork Golden Master package has been exported/committed and Claude Code has the required context;
2. Claude GitHub access is restored for the private repo;
3. a sanitized local/file handoff can replace public access;
4. before any sensitive RB-03D evidence is added — whichever happens first.

### Better long-term alternative
If a future external AI session cannot access the private main repository, use one of:
- exported `.txt`/ZIP context packs;
- a sanitized temporary handoff repository containing only required web files;
- a private connector/app installation with least privilege.

Do not make the full Tropik OS repository public merely to solve a recurring context problem.

---

# 7. Approval / no-approval

## Approved now
- prepare plugin inventory and dependency audit;
- deactivate clearly unused plugins on staging after backup/testing;
- migrate away from Divi dependencies;
- generate sanitized Claude context packs;
- restore repository privacy as soon as the current access bridge is finished.

## Requires founder approval
- deleting a plugin that owns data/content not yet migrated;
- changing payment/security/backup infrastructure;
- buying a replacement paid plugin;
- changing production repository visibility/access model.

## Next action
Export the current WordPress `Plugins` screen (name/version/active status) or paste the list into the Claude Code session so the plugin audit can be completed plugin-by-plugin instead of by category.

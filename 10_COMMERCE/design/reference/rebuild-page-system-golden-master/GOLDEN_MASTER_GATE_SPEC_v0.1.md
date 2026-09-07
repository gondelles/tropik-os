# Re:Build Page System — Golden Master Reference

**Status:** WAITING_FOR_COWORK_EXPORT  
**Updated:** 2026-09-07  
**Purpose:** freeze the founder-approved Claude Re:Build Artifact/Page System under version control so Claude Code can reconstruct WordPress without visual drift.

## Governing rule

This folder is the **visual/interaction reference**, not the source of operational facts.

- Visual geometry/components/interactions: this Golden Master / founder-approved Artifact.
- Re:Build facts/claims/statuses: `40_REBUILD/`.
- WordPress implementation contract: `40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`.
- Founder UX/navigation/mobile/editability override: `40_REBUILD/digital/RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md`.

Where the current Artifact still shows an older navigation grouping or unresolved behavior that conflicts with the founder override, export the source faithfully **and document the required founder-approved delta** in `REFERENCE_NOTES.md`; do not silently preserve the stale behavior as canonical.

## Cowork action required

From the Claude Cowork conversation that can access the approved Artifact, export/commit as much of the actual source as the Artifact environment permits.

Preferred contents:

```text
rebuild-page-system-golden-master/
  README.md
  REFERENCE_NOTES.md
  source/
    index-or-router.*
    styles-or-tokens.*
    components-or-rendered-html/*
    interactions.*
    assets/*
  screenshots/
    1440-home.png
    1440-drawer.png
    1440-bag-populated.png
    1440-shop.png
    1440-checkout.png
    1440-account.png
    1024-*.png
    768-*.png
    480-*.png
    390-*.png
```

Exact filenames may differ according to the Artifact technology. Preserve the underlying source rather than translating it into a different framework merely for this export.

## Mandatory reference surfaces

- Header — desktop + mobile
- Left drawer — open state, with grouping hierarchy visible
- Bag drawer — populated + empty
- Home
- One horizontal rail/carousel — desktop + mobile one-card state
- Shop landing showing the Merch / Products collection architecture if implemented in Artifact
- Product detail/gallery if present in approved Artifact
- Checkout
- My Account
- One long editorial/Re:Build content page showing section accent/rhythm behavior

## Founder-approved deltas that REFERENCE_NOTES must preserve

The Golden Master package must explicitly identify these current founder rules even if the Artifact source still needs a small polish pass to reflect them:

1. `PROJECT` drawer group is removed.
2. `SHOP` is a group heading at the same hierarchy level as `EXPLORE RE:BUILD` and `SUPPORT`, with `Merch` and `Products` below it.
3. `SUPPORT` contains Support Re:Build, Work With Us, Transparency as readiness permits, About Us, Updates, FAQ, Contact Us, Shipping, Terms & Conditions, Privacy Policy and Return Policy.
4. Mobile narrative rails show one primary card at a time, with visible left/right arrows vertically centered on rail edges; card 2/3/4 are not stacked vertically on landing pages.
5. Dedicated collection pages may use normal vertical catalog scrolling.
6. Primary content pages use at least four intentional narrative/content zones where scope permits, with semantic accents from approved Sun / Leaf / Coral / Ivory-White tokens rather than arbitrary rainbow cards.
7. Shop has two current first-level collections: Merch and Products.
8. Current Re:Build Products web collection is limited to Road Base, Mineral Fill, Ferrous Scrap and Masonry Aggregate, with truthful lifecycle/status labels. Verified Reuse Components remains outside the primary Products collection until separately approved.
9. New/editable WordPress pages must later be reproducible with Gutenberg patterns; no Divi dependency is part of the Golden Master contract.

## REFERENCE_NOTES must also identify

- Artifact route/version/date;
- fonts actually rendered;
- core color tokens, including the exact Golden Master Coral token if present;
- container/header/drawer/bag dimensions where available;
- desktop/mobile behavior differences;
- section accent semantic usage;
- rail/card width and mobile snap behavior;
- anything visible that belongs to Claude preview chrome and MUST NOT ship, including `Artifact by you` and `Todas las páginas / Viendo: ...` style preview controls;
- known founder-approved exceptions or unresolved items.

## PASS for Golden Master freeze

- Cowork confirms source/screenshots correspond to the current founder-approved Artifact state;
- founder confirms no outdated/cached version was exported;
- screenshots cover required breakpoints/surfaces;
- founder UX deltas above are either reflected in the Artifact or explicitly documented as required deltas;
- Code can inspect the source without needing access to the private Claude session.

## FAIL

- only screenshots with no source even though Cowork can access source;
- screenshots from an older Artifact state;
- WordPress theme v2 copied into this folder and mislabeled as Artifact reference;
- Claude preview chrome treated as production UI;
- stale `PROJECT` navigation retained without being flagged;
- mobile card sections exported as vertically stacked behavior when the founder-approved target is one-card horizontal rails.

## Next handoff

Once populated/frozen, start Claude Code with:

`90_AI_SYSTEM/handoffs/RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt`

and require compliance with:

- `40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`
- `40_REBUILD/digital/RB_WEB_UX_NAVIGATION_COLLECTIONS_EDITABILITY_OVERRIDES_v0.1.md`
- `40_REBUILD/digital/RB_WORDPRESS_PLUGIN_RATIONALIZATION_AND_REPO_PRIVACY_GATE_v0.1.md`

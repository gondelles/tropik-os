# Re:Build Page System — Golden Master Reference

**Status:** WAITING_FOR_COWORK_EXPORT  
**Updated:** 2026-09-07  
**Purpose:** freeze the founder-approved Claude Re:Build Artifact/Page System under version control so Claude Code can reconstruct WordPress without visual drift.

## Governing rule

This folder is the **visual/interaction reference**, not the source of operational facts.

- Visual geometry/components/interactions: this Golden Master / founder-approved Artifact.
- Re:Build facts/claims/statuses: `40_REBUILD/`.
- WordPress implementation contract: `40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`.

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
- Left drawer — open state
- Bag drawer — populated + empty
- Home
- One horizontal rail/carousel
- Shop/archive
- Product detail/gallery if present in approved Artifact
- Checkout
- My Account
- One long editorial/Re:Build content page

## REFERENCE_NOTES must identify

- Artifact route/version/date;
- fonts actually rendered;
- core color tokens;
- container/header/drawer/bag dimensions where available;
- desktop/mobile behavior differences;
- anything visible that belongs to Claude preview chrome and MUST NOT ship, including `Artifact by you` and `Todas las páginas / Viendo: ...` style preview controls;
- known founder-approved exceptions or unresolved items.

## PASS for Golden Master freeze

- Cowork confirms source/screenshots correspond to the current founder-approved Artifact state;
- founder confirms no outdated/cached version was exported;
- screenshots cover required breakpoints/surfaces;
- Code can inspect the source without needing access to the private Claude session.

## FAIL

- only screenshots with no source even though Cowork can access source;
- screenshots from an older Artifact state;
- WordPress theme v2 copied into this folder and mislabeled as Artifact reference;
- Claude preview chrome treated as production UI.

## Next handoff

Once populated/frozen, start Claude Code with:

`90_AI_SYSTEM/handoffs/RB_CLAUDE_CODE_WORDPRESS_FIDELITY_PROMPT_2026-09-07.txt`

and require compliance with:

`40_REBUILD/digital/RB_WORDPRESS_ARTIFACT_FIDELITY_REBUILD_BRIEF_v0.1.md`.
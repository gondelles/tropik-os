# Re:Build Page System — Golden Master

Status: FROZEN REFERENCE — visual/interaction authority for the Lane 2 (Claude Code) WordPress rebuild.
Frozen: 2026-09-07
Source: "Tropik Design System" Artifact — https://claude.ai/code/artifact/6cab347c-e8b7-4baf-b864-601894782c25
Founder approval chain: DEC-025 (design tokens/typography/header-drawer-cart shell) → DEC-026 (IA +
component system v1, same artifact) → DEC-027 (mobile QA fixes) → DEC-028 (PII scrub) → DEC-031
(explicitly supersedes the DEC-029 `tropik-rebuild-theme-v2.zip` as the visual-fidelity baseline — this
package is the real one).

## What this package is

A frozen, read-only snapshot of the founder-approved Artifact's actual source: exact CSS custom
properties (design tokens), the real component/class inventory, an explicit mapping of the 8 minimum
reusable patterns the founder's context pack requires (Hero/intro, evidence/stat, narrative zone, card
rail, CTA band, Need/Work With Us teaser, Impact/Update teaser, editorial/policy section) to the actual
markup that already exists in the Artifact, documented interaction behavior (drawer/cart, carousels,
accordion, checkout collapse steps, gallery, search), and breakpoint screenshots at the widths this
project has used for QA since DEC-025/027 (390 / 768 / 1440px).

## What this package is NOT

- Not a redesign. Every token, class and pattern below is copied verbatim from the live Artifact HTML
  as of this freeze — nothing here was invented or improved.
- Not a WordPress build. No PHP, no theme.json, no Gutenberg block registration. That is Lane 2
  (Claude Code)'s job, using this package as its ground truth.
- Not the `tropik-rebuild-theme-v2.zip` (DEC-029). That zip is an earlier, narrower chrome-only port
  built directly to PHP without this intermediate freeze step, and the founder's 2026-09-07
  synchronized context pack explicitly rejects it as the final visual-fidelity baseline. This package
  supersedes it as the reference Lane 2 should build against.

## Files in this package

- `TOKENS.md` — every CSS custom property in the Artifact's `:root`, verbatim, with the exact hex/value
  and its semantic role (per the founder's Sun/Leaf/Coral/Ivory accent rule). **Coral is
  `--tk-signal-coral: #F25B66`** — already frozen since DEC-025, re-confirmed unchanged in this pass.
- `COMPONENT_INVENTORY.md` — every reusable `.tk-*` component class found in the Artifact's CSS, grouped
  by function (buttons, header/drawer/cart, cards, forms, accordion/collapse, carousels, tables,
  modal/toast, page-level layout classes).
- `PATTERN_MAP.md` — the founder's required 8 minimum patterns, each mapped to real existing markup in
  the Artifact (which route, which classes), or explicitly flagged as a gap if no equivalent exists yet.
  One gap found: **Impact/Update teaser** has no dedicated pattern in the Artifact today — flagged, not
  invented.
- `INTERACTIONS.md` — every JS-driven behavior in the Artifact (panel open/close, carousels, accordion,
  checkout step collapse, quantity stepper, variant selection, gallery, search overlay, scroll-spy TOC,
  back-to-top), described in plain language with the exact trigger/selector contract Lane 2 needs to
  reproduce it.
- `screenshots/` — full-page screenshots of the Artifact's current Re:Build routes at 390px, 768px and
  1440px, captured from the live published URL after the DEC-028 PII scrub.

## Known gap between these screenshots and the 2026-09-07 IA (DEC-031)

The Artifact's footer/drawer nav frozen in these screenshots still reflects DEC-026's structure
(Explore Re:Build cluster missing "Rebuilding," a standalone "Project" group with About/FAQ/Contact,
and a "Legal" group with only Terms/Privacy) — it has **not** been updated to the founder's 2026-09-07
synchronized-context IA (Explore Re:Build without Support, a single Support mega-group absorbing
About/FAQ/Contact/Updates/Transparency/Work With Us plus the new Shipping/Terms/Privacy/Return-Policy
pages, "Project" removed). This freeze intentionally did not edit the Artifact to match — the task was
to capture what's approved and live, not to redesign it. **Lane 2 should build nav against the IA in
`90_AI_SYSTEM/handoffs/COM_TROPIK_COMMERCE_PROJECT_CONTEXT_PACK_2026-09-07.txt` (the current authority
per DEC-031), using the structural nav *patterns* (drawer, footer groups, mega-group styling) frozen
here, not the specific link list shown in the screenshots.**

## How Lane 2 (Claude Code) should use this

Read this package before writing any theme code. Reproduce the tokens as CSS custom properties in
`theme.json`/global styles exactly as listed in `TOKENS.md` — do not re-derive or approximate any hex
value, especially Coral. Build the 8 required Gutenberg patterns against `PATTERN_MAP.md`'s real markup,
not from imagination. Use `INTERACTIONS.md` as the contract for what each interactive component must do
before calling it done. Compare rendered output against `screenshots/` at the same three widths as part
of the Golden Master Parity Matrix (Claude Code's own required doc #3).

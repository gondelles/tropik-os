# Golden Master — Design Tokens

Verbatim from the Artifact's `:root` block (tokens.css layer), frozen 2026-09-07. Every hex value below
is copied character-for-character from the live source — none derived, approximated or re-guessed.

## Core brand colors (approved, DEC-025)

| Token | Value | Role |
|---|---|---|
| `--tk-ink` | `#171717` | Deepest near-black; CTA text color |
| `--tk-ivory` | `#F6F2E8` | Primary light/on-dark text color |
| `--tk-sun` | `#F6B218` | **Sun/Yellow — action/progress/CTA** (founder's semantic rule) |
| `--tk-leaf` | `#0F5A46` | Deep green reference (see also `--tk-signal-green`) — **Leaf/Green = recovery/material/process** |
| `--tk-white` | `#FFFFFF` | Pure white |
| `--tk-mist` | `#ECEBE7` | Light neutral, used for photo-canvas placeholders |

## Neutral ramp (dark-mode system, DEC-025)

| Token | Value | Role |
|---|---|---|
| `--tk-night` | `#1D201F` | Page background (`--tk-bg-page`) |
| `--tk-graphite` | `#272B29` | Alt page background, header bg base (`--tk-bg-page-alt`) |
| `--tk-charcoal` | `#323735` | Card/surface background (`--tk-bg-surface`) |
| `--tk-soft-graphite` | `#3C423F` | Alt surface (`--tk-bg-surface-alt`) |
| `--tk-fog` | `#D9DAD6` | Light neutral, also `--tk-status-concept` |

## Tertiary accents (DEC-025) — **the exact Coral is here**

| Token | Value | Role |
|---|---|---|
| `--tk-signal-green` | `#2FB98F` | Green accent — recovery/material/process, "verified" claim color |
| `--tk-signal-coral` | `#F25B66` | **CORAL — people/work/support/participation** (founder's semantic rule). Also drives `--tk-error` and `--tk-claim-prohibited`. **This is the exact, only Coral hex in the system — do not substitute or re-derive.** |

## Re:Build status & claim tokens (added DEC-026)

| Token | Value / reference |
|---|---|
| `--tk-status-concept` | `var(--tk-fog)` |
| `--tk-status-rd` | `#7FA7FF` |
| `--tk-status-prototype` | `var(--tk-sun)` |
| `--tk-status-trial` | `#C99BFF` |
| `--tk-status-tested` | `var(--tk-signal-green)` |
| `--tk-status-commercial` | `var(--tk-signal-green)` |
| `--tk-claim-verified` | `var(--tk-signal-green)` |
| `--tk-claim-decision` | `var(--tk-sun)` |
| `--tk-claim-hypothesis` | `#7FA7FF` |
| `--tk-claim-target` | `#C99BFF` |
| `--tk-claim-aspiration` | `var(--tk-text-on-dark-faint)` |
| `--tk-claim-prohibited` | `var(--tk-signal-coral)` |

## Surface roles

| Token | Value / reference |
|---|---|
| `--tk-bg-page` | `var(--tk-night)` |
| `--tk-bg-page-alt` | `var(--tk-graphite)` |
| `--tk-bg-surface` | `var(--tk-charcoal)` |
| `--tk-bg-surface-alt` | `var(--tk-soft-graphite)` |
| `--tk-bg-deep` | `var(--tk-ink)` |
| `--tk-bg-light` | `var(--tk-ivory)` |
| `--tk-bg-light-alt` | `var(--tk-mist)` |
| `--tk-bg-field` | `var(--tk-mist)` (legacy value — superseded in practice by `--tk-field-bg` below, per DEC-027) |
| `--tk-text-on-dark` | `var(--tk-ivory)` |
| `--tk-text-on-dark-muted` | `rgba(246,242,232,.66)` |
| `--tk-text-on-dark-faint` | `rgba(246,242,232,.42)` |
| `--tk-text-on-light` | `var(--tk-ink)` |
| `--tk-text-on-light-muted` | `rgba(23,23,23,.62)` |
| `--tk-border-on-dark` | `rgba(246,242,232,.14)` |
| `--tk-border-on-dark-strong` | `rgba(246,242,232,.26)` |
| `--tk-border-on-light` | `rgba(23,23,23,.14)` |
| `--tk-focus` | `var(--tk-sun)` |
| `--tk-cta-bg` | `var(--tk-sun)` |
| `--tk-cta-text` | `var(--tk-ink)` |
| `--tk-error` | `var(--tk-signal-coral)` |
| `--tk-success` | `var(--tk-signal-green)` |

## Field colors (DEC-027 fix — dark-theme-consistent form fields)

| Token | Value / reference |
|---|---|
| `--tk-field-bg` | `#3B413E` |
| `--tk-field-text` | `var(--tk-text-on-dark)` |
| `--tk-field-border` | `var(--tk-border-on-dark-strong)` |
| `--tk-field-focus` | `var(--tk-sun)` |
| `--tk-field-placeholder` | `rgba(246,242,232,.4)` |

**Lane 2 note:** WooCommerce's own checkout/cart form fields must use this same set (per DEC-029's
finding that Woo ships unstyled/white by default) — do not let native Woo markup fall back to browser
defaults.

## Typography

| Token | Value |
|---|---|
| `--tk-font-display` | `"Plus Jakarta Sans", system-ui, -apple-system, "Segoe UI", sans-serif` |
| `--tk-font-body` | `"Plus Jakarta Sans", system-ui, -apple-system, "Segoe UI", sans-serif` |
| `--tk-fs-display-xl` | `clamp(2.4rem, 3.2vw + 1.4rem, 4.6rem)` |
| `--tk-fs-display-lg` | `clamp(2rem, 2.2vw + 1.2rem, 3.4rem)` |
| `--tk-fs-display-md` | `clamp(1.5rem, 1.2vw + 1rem, 2.2rem)` |
| `--tk-fs-display-sm` | `clamp(1.2rem, .6vw + 1rem, 1.5rem)` |
| `--tk-fs-body-lg` | `1.125rem` |
| `--tk-fs-body` | `1rem` |
| `--tk-fs-body-sm` | `.875rem` |
| `--tk-fs-eyebrow` | `.8125rem` |
| `--tk-lh-tight` | `1.08` |
| `--tk-lh-heading` | `1.18` |
| `--tk-lh-body` | `1.6` |
| `--tk-tracking-tight` | `-0.02em` |
| `--tk-tracking-eyebrow` | `.08em` |

Font is loaded via a real Google Fonts `<link>` — **required**, not optional: DEC-026's own root-cause
note is that an earlier build declared Manrope/Space Grotesk in CSS but never actually loaded them,
silently falling back to system-ui. Lane 2 must actually enqueue Plus Jakarta Sans in WordPress
(`wp_enqueue_style` to Google Fonts, or a local self-hosted copy — do not just reference it in CSS).

## Spacing scale (harmonic rhythm)

| Token | Value |
|---|---|
| `--tk-space-1` … `--tk-space-9` | `.25rem, .5rem, .75rem, 1rem, 1.5rem, 2rem, 2.5rem, 3rem, 4rem` |
| `--tk-section-gap` | `clamp(2.75rem, 4vw + 1rem, 5rem)` — drives all section vertical rhythm site-wide |
| `--tk-section-gap-tight` | `clamp(1.75rem, 2vw + .75rem, 3rem)` |
| `--tk-block-gap` | `clamp(1.25rem, 1.4vw + .6rem, 2rem)` |
| `--tk-container-max` | `1280px` |
| `--tk-content-max` | `760px` |
| `--tk-gutter` | `clamp(1rem, 3vw, 2.5rem)` |

## Radius, elevation, motion

| Token | Value |
|---|---|
| `--tk-radius-xs/sm/md/lg/xl` | `8px / 12px / 16px / 22px / 30px` |
| `--tk-radius-pill` | `999px` |
| `--tk-shadow-sm` | `0 1px 2px rgba(0,0,0,.24)` |
| `--tk-shadow-md` | `0 8px 24px rgba(0,0,0,.28)` |
| `--tk-shadow-lg` | `0 20px 60px rgba(0,0,0,.38)` |
| `--tk-ease` | `cubic-bezier(.4,0,.2,1)` |
| `--tk-dur-fast/base/slow` | `140ms / 220ms / 360ms` (all forced to `0ms` under `prefers-reduced-motion: reduce`) |

## Header & layers

| Token | Value |
|---|---|
| `--tk-header-h` | `72px` (desktop) |
| `--tk-header-h-mobile` | `60px` |
| `--tk-z-header` | `100` |
| `--tk-z-drawer` | `200` |
| `--tk-z-cart` | `210` |
| `--tk-z-modal` | `300` |
| `--tk-z-toast` | `400` |

## Founder's semantic accent rule (context pack, 2026-09-07) mapped to tokens

| Semantic role | Token to use |
|---|---|
| Action / progress / CTA | `--tk-sun` (`#F6B218`) |
| Recovery / material / process | `--tk-signal-green` (`#2FB98F`) or `--tk-leaf` (`#0F5A46`) — the Artifact's live pages currently use `--tk-signal-green` for this role; `--tk-leaf` exists as a token but is not yet wired to any component — **flag for founder**: confirm which of the two is intended before Lane 2 builds against it. |
| People / work / support / participation | `--tk-signal-coral` (`#F25B66`) |
| Evidence / methodology / transparency / policy | `--tk-ivory` (`#F6F2E8`) / `--tk-mist` (`#ECEBE7`) neutral surfaces |

**Status: all four hex values above are confirmed present and unchanged in the live Artifact as of this
freeze — none needed to be invented.** The one open question is Leaf vs. signal-green for the
"recovery/material/process" role, flagged above rather than guessed.

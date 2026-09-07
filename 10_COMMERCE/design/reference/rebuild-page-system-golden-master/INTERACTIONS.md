# Golden Master — Interaction Contract

Every JS-driven behavior in the Artifact, read directly from its script blocks. Plain-language
description + the exact selector contract, so Lane 2 can reproduce behavior, not just appearance.

## 1. Drawer / Cart panels (`TkPanel` factory — one shared implementation for both)
- Trigger: any element matching the panel's open-selector (header hamburger / bag icon) toggles it via
  a shared `TkPanel(panelId, backdropId, openSelector, closeSelector)` factory — drawer and cart panel
  are two instances of the *same* logic, not two separate implementations. **Founder's IA rule
  (2026-09-07): keep this — one custom Bag drawer only, never nest the WooCommerce Mini-Cart block
  inside a second custom drawer.**
- Open: panel + backdrop get an `is-open` class; all matching trigger buttons get `aria-expanded="true"`;
  a `keydown` listener is attached (capture phase) for Escape-to-close and focus trap.
- Close: triggered by the explicit close button, by clicking the backdrop, or by Escape. Removes
  `is-open`, resets `aria-expanded`.
- Focus trap: computed from a `focusablesIn()` helper scanning the open panel for focusable elements;
  Tab/Shift+Tab cycle within it while open.
- Width contract (DEC-027): `min(92vw, 400px)` on both drawer and cart panel — never `100vw` — so a
  tappable backdrop sliver always remains on phones.

## 2. Product gallery (`initGallery`)
- Thumbnail click or prev/next button navigates `go(i)`, which updates the visible slide and re-renders
  thumbnail `aria-current` state.
- Keyboard: arrow keys navigate while the gallery root has focus.
- Touch: `touchstart`/`touchend` compare X delta to swipe left/right (passive listeners).

## 3. Hero carousel (`initHeroCarousel`)
- Autoplay via `setInterval` at a fixed `AUTOPLAY_MS`, advancing `go(index + 1)`.
- Pauses on `mouseenter`/`focusin`, resumes on `mouseleave`/`focusout` — autoplay never fights a user
  actively interacting with it.
- Dots (`aria-current`) and arrow buttons both call `go(i)` then restart the autoplay timer.

## 4. Card rail / general carousel (`initCarousel`)
- `scrollByPage(dir)` scrolls the track by one viewport-width "page" per button click (not by one card).
- `updateButtons()` runs on the track's native `scroll` event (throttled via `requestAnimationFrame`) to
  disable the prev button at the start and next button at the end (`.is-disabled`).
- No JS-driven touch handling needed — relies on native CSS `scroll-snap-type: x proximity` for swipe.
- **Current width rule to re-examine per the founder's 2026-09-07 mobile-rail requirement (see
  `PATTERN_MAP.md` #4):** buttons are hidden entirely `≤640px` today. The founder now wants visible,
  vertically-centered arrows on mobile narrative rails advancing one card at a time — this JS's
  `scrollByPage` logic (page-width scroll) would need to become a one-card-width scroll on mobile, and
  the `≤640px { display:none }` CSS rule on `.tk-carousel__btn` would need to be dropped for that
  context. Flagged here as an implementation-contract change Lane 2 needs to make, not a silent
  reproduction of the current behavior.

## 5. Accordion (`initAccordion`)
- Click on a trigger toggles `aria-expanded` and animates the panel's `height` (measured via
  `scrollHeight`, not a CSS-only solution).
- Within one `.tk-accordion` root, opening one item closes any other open item in the same root
  (single-open behavior) — confirmed by the `root.querySelectorAll('[aria-expanded="true"]')` sibling
  reset before opening the clicked one.

## 6. Checkout step collapse (`initCollapseGroup`) — distinct from the FAQ accordion
- Purpose-built for the single-page fast-checkout flow (DECISION, not the general accordion pattern).
- `openOnly(target)` ensures exactly one `.tk-collapse` section is expanded at a time.
- Each section's head click opens it; a dedicated "Edit" button (separate from the head) also opens it
  without needing the head click; a "Continue" button in the body advances to `openOnly()` on the next
  section in sequence — i.e. this drives a linear step-through, not free toggling.

## 7. Billing address toggle (`initBillingToggle`)
- A single checkbox ("same as shipping") shows/hides a billing-address panel via `sync()`, called both
  on load and on the checkbox's `change` event.

## 8. Quantity stepper (`initQty`)
- `+`/`-` buttons (`button[data-step]`) increment/decrement the adjacent number input, clamped (exact
  min/max read from the input's own `min`/`max` attributes in the surrounding markup).

## 9. Variant picker (`initVariantGroup`)
- Clicking a `.tk-variant-swatch` sets `aria-pressed="true"` on itself and `"false"` on its siblings in
  the same group — single-select behavior, disabled swatches (`[disabled]`) are inert.

## 10. Tabs (`initTabs`)
- Standard single-open tab panel switching; scoped per `.tk-tabs` root so multiple tab groups on one
  page don't interfere.

## 11. Site-wide utilities
- **Footer year:** `[data-tk-year]` elements get the current year injected on load.
- **Back to top:** `[data-tk-top]` elements smooth-scroll to top on click.
- **Scroll-spy TOC:** an `IntersectionObserver` watches every heading targeted by the page's `.tk-toc`
  anchors and toggles `.is-active` on the matching TOC link as each section enters view — this is what
  powers the editorial/policy pattern's sidebar TOC (`PATTERN_MAP.md` #8).
- **Search overlay:** a dedicated open/close pair (`searchOpenBtn`/`searchCloseBtn`) with its own
  Escape-key handler (`onSearchKeydown`), separate from the drawer/cart `TkPanel` instances. **Header
  search is one of the two regressions DEC-026/027 flagged as still open (My Account + search bar) —
  this JS contract already exists and works in the Artifact; it's the WordPress theme that never wired
  a working search UI to it.**

## Global motion rule
Every duration above (`--tk-dur-fast/base/slow`) collapses to `0ms` under `prefers-reduced-motion:
reduce` — Lane 2 must preserve this, not just the visual transitions.

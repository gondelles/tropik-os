# RB_CLAUDE_COWORK_WEBSITE_HANDOFF_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06  
**Purpose:** exact implementation/content handoff for Claude Cowork / Claude Code so the approved visual system is preserved while the WordPress theme, responsive layout, storytelling, forms and editable content are brought into alignment with the current Re:Build source of truth.

---

# 1. Governing rule

The approved Claude Artifact is a **visual/navigation reference**, not the source of truth for operational claims.

Current artifact reference supplied by founder:
`https://claude.ai/code/artifact/6cab347c-e8b7-4baf-b864-601894782c25`

The source of truth for project facts, claims, statuses, Needs, KPIs, workforce and pilot gates remains the private GitHub repository `gondelles/tropik-os`, especially `40_REBUILD/`.

**Do not redesign the approved brand language merely because content changes.** Preserve the approved dark palette, typography, toucan mark, drawer/cart shell, component language and overall interaction model unless a specific implementation defect requires correction.

---

# 2. Current theme ZIP audit — founder-supplied build

The inspected `tropik-rebuild-theme.zip` contains only:
- `index.php`
- `style.css`
- `functions.php`
- `header.php`
- `footer.php`
- `page.php`
- `assets/js/rebuild.js`
- two toucan image assets
- `screenshot.png`

## Confirmed implementation gaps

### A. Content package missing
`page.php` states page content is imported via `tropik-rebuild-content.xml`, but that file is not present in the ZIP.

**Required correction:** final delivery must include the complete editable page-content package, preferably WXR XML and/or a deterministic WP-CLI/import script plus a content map.

### B. Theme comments reference missing documentation
Theme comments mention files such as `CHANGELOG_REBUILD_V1.md`, `README_INSTALL_PREVIEW.md`, `SITE_ARCHITECTURE.md`, `BRAND_SYSTEM.md`, `TECH_SPEC_WORDPRESS.md` and `IMPLEMENTATION_STATUS.md`, but these are not included in the inspected ZIP.

**Required correction:** either include every referenced document in the delivery package or remove/update misleading references.

### C. Navigation fallback is stale
Current fallback includes older items such as `Myco:Skin`, `Re:Build Hub`, `Community`, `Roadmap`, `Business Model`, `Science & Safety` and `Venezuela` as prominent drawer items.

The approved/current public navigation direction is instead centered on:
- Recovery
- How It Works
- Materials
- Rebuilding
- Impact
- Support Re:Build
- Transparency when public-ready
- Shop
- About
- Updates
- FAQ
- Contact
- Account / Orders / Bag where WooCommerce/account functions are active

Do not expose `Design Reference / Component library` in production navigation.

### D. Footer is stale
Current footer repeats the older Platforms/Project/Community architecture and should be reconciled to the current sitemap and public-readiness gates.

### E. Mobile carousel arrows are explicitly disabled
Current CSS contains:
`@media (max-width: 640px){ .rb-rail__btn{ display: none; } }`

Founder direction is to retain clear previous/next affordances on mobile while also allowing swipe.

**Required correction:** mobile rails keep swipe + visible accessible arrow buttons that do not obscure copy or cards.

### F. Header does not fully match the approved artifact shell
The inspected theme header currently contains hamburger + centered logo + language + Support + bag. The approved artifact reference also shows other shell behaviors depending on page/state (search/account/bag and language treatment).

**Required correction:** reconcile the final shell against the approved artifact. Do not add non-functional controls. Every visible control must work.

### G. Language switch is only conditionally functional
The theme properly falls back to a single EN indicator when Polylang is absent. The artifact preview may visually show ES/EN even where no translated route exists.

**Required correction:** never ship a fake language switch. Display ES/EN only when both routes work. If Polylang is not active/configured, show one current language or hide the switch until ready.

### H. Lead capture does not yet equal email-marketing subscriber management
Current `rb_lead` CPT stores email/source/type but does not provide a complete newsletter lifecycle.

Missing fields/behavior include:
- supporter/contact ID;
- name optional;
- preferred language;
- consent timestamp/version;
- source URL and UTM/source campaign;
- interest tags;
- subscription status;
- ESP/list sync status;
- unsubscribe status;
- privacy-policy version;
- deduplication by normalized email;
- double-opt-in where selected mechanism requires it.

**Architecture decision:** do **not** create a full WordPress login account for every newsletter signup by default. Create a unique `supporter_id/contact_id`. Link to `wp_user_id` only if the person later creates a real account/order/login. This avoids unnecessary account/security burden while still giving every supporter a durable identity.

### I. Generic partner form cannot close RB-03C evidence gaps
Current partner form captures only name, organization, email and free-text message.

It is insufficient for Needs, equipment, workforce, authority referrals, feedstock, labs, buyers and recyclers.

A structured Work With Us system is required; see `RB_WORK_WITH_US_EVIDENCE_ACQUISITION_ARCHITECTURE_v0.1.md`.

### J. Preview chrome is not production UI
The founder screenshots show Claude Artifact UI labels such as `Tropik Design System — Artifact by you` and bottom browser chrome such as `Todas las páginas / Viendo: ...`.

Those are preview/development controls, not WordPress theme components.

**Required correction:** do not recreate them inside the theme. Static/exported/WordPress production output must not contain them.

---

# 3. Responsive/layout contract

## Global
- One canonical `.rb-container` system across all pages.
- No section may have an unexplained horizontal offset relative to adjacent sections.
- Desktop content is visually centered in the viewport via the container while text may remain left-aligned inside the container.
- Section boundaries, eyebrow labels, headings and card grids share a repeatable vertical rhythm.
- Avoid giant dead areas caused by fixed heights, empty grid columns or misplaced absolute elements.
- No decorative line may look like a broken button or stray underline.

## Breakpoints to QA
- 1440 desktop
- 1024 tablet landscape
- 768 tablet/mobile
- 480 mobile
- 390/400 narrow mobile

## Header
- Centered brand mark must remain optically centered regardless of unequal left/right control counts.
- Controls must never collide with logo or each other.
- On narrow mobile, hide lower-priority controls before shrinking the logo into illegibility.
- Search/account/language appear only when functional.

## Drawer
- Full-height, scroll-safe.
- Close control always reachable.
- Footer CTA does not overlap browser viewport or page content.
- Production drawer contains only current public-navigation items.

## Rails/carousels
- Desktop: one horizontal row with visible previous/next buttons.
- Mobile: horizontal swipe + visible previous/next buttons.
- Buttons stay inside safe viewport margins and do not cover body copy.
- Arrow disabled state reflects real scroll state.
- Card widths create a deliberate partial-next-card cue where useful.
- No vertical stacking merely because mobile is narrow unless a specific component is explicitly not a rail.

## Checkout
- Minimal checkout shell is acceptable, but content must use a centered bounded container.
- No unexplained huge blank header areas.
- Logo centered.
- Checkout form/order summary align consistently.
- Responsive one-column fallback must be clean and readable.

## Account
- Quick actions must not split words awkwardly over multiple lines.
- Use 2-column grid or stacked cards on small screens rather than forcing four narrow columns.
- Account information remains readable at 390px.

---

# 4. WordPress editability contract

Marketing/page copy must **not** be hard-coded into PHP templates.

Preferred MVP implementation:
1. Native WordPress pages as the master public copy.
2. Gutenberg/core blocks or registered block patterns using `rb-*` utility/component classes.
3. Theme PHP owns shell/components/shortcodes only.
4. Page copy, headings, links and section order remain editable from WordPress admin.
5. WooCommerce owns commerce/account/order content where appropriate.

Final delivery must include:
- installable theme ZIP;
- complete source folder;
- WXR `tropik-rebuild-content.xml` and/or deterministic content-seed script;
- content/page map showing slug -> title -> template/pattern -> source document;
- installation/configuration README;
- plugin requirements and free alternatives;
- changelog;
- implementation-status document;
- static/browsable QA preview;
- no missing referenced files.

---

# 5. Homepage narrative contract

The homepage is not a technical report. It is a guided emotional-to-practical journey.

Narrative sequence:

`LOSS -> POSSIBILITY -> METHOD -> PROOF DISCIPLINE -> WHAT IS NEEDED -> PEOPLE/WORK -> WAYS TO HELP -> STAY UPDATED`

Every block must answer one question and move the user toward one next action.

## Hero
Eyebrow:
`TROPIK RE:BUILD — LA GUAIRA, VENEZUELA`

H1 preferred working copy:
`What fell can help us build again.`

Short lead — working copy:
`The rubble is not the end of the story. Re:Build is building a safe, traceable way to recover useful material, fund local work and move resources back into reconstruction.`

Primary CTA:
`See what we need now`

Secondary CTA:
`Follow the rebuild`

Optional merch CTA lower in page, not competing in the hero:
`Shop to support the project`

Do not state or imply that the pilot is operating at scale when it remains pre-validation.

## Scale / why this matters
Use verified disaster-scale evidence with methodology/date and a clear distinction from Re:Build operating data.

Suggested heading:
`A recovery challenge measured in millions of tonnes.`

Suggested bridge copy:
`That scale can feel overwhelming. Re:Build starts smaller: one controlled site, one measured stream, one tested use at a time.`

## How Re:Build works
Use 4–5 concise steps:
1. `Receive safely`
2. `Sort what can be recovered`
3. `Process and test`
4. `Put useful material back to work`
5. `Publish what actually happened`

Suggested heading:
`From debris to something useful — with proof at every step.`

## Current needs / evidence acquisition
Suggested heading:
`The next breakthrough may already exist.`

Suggested copy:
`A weighbridge. A loader. Lab time. A contractor willing to test a batch. An engineer with the right specification. A crew ready to work. Re:Build is mapping the exact gaps before asking anyone to fill them.`

CTA:
`See what Re:Build needs`

Secondary:
`I can help with something`

Only show actual Need cards once each need passes the public-ready rule.

## Work / community
Suggested heading:
`Recovery should create work where the damage happened.`

Suggested copy:
`One goal of the pilot is to turn recovery activity into verified paid local work — from sorting and equipment operation to engineering, testing and site support. We will publish worker-days and payroll only when the records support the claim.`

CTA:
`Work with Re:Build`

Do not claim jobs already created unless verified.

## Transparency / impact
Suggested heading:
`No vanity counters.`

Suggested copy:
`When the pilot begins, we will report the numbers we can defend: tonnes received, material released, trials completed, worker-days paid, resources received and where they were deployed.`

CTA:
`See how impact will be measured`

## Ways to participate
Suggested heading:
`Pick the way you can move the rebuild forward.`

Cards:
1. `Offer equipment or materials`
2. `Bring technical expertise`
3. `Work with the pilot`
4. `Test or use recovered material`
5. `Shop Re:Build merch`
6. `Explore funding partnership` — inquiry only until fundraising/legal gate passes

Do not provide a public donation checkout until approved by legal/accounting/founder gates.

## Weekly update signup
Suggested heading:
`Follow the rebuild, week by week.`

Suggested copy:
`One short email with what changed: evidence collected, needs closed, trials run, what moved forward and what still needs help.`

CTA:
`Keep me updated`

Subscriber record should capture a unique supporter/contact ID, email, language, consent and interests. A WordPress login account is optional and separate.

## Final CTA
Suggested heading:
`There is more than one way to help rebuild.`

Suggested copy:
`Bring a machine. Share a specification. Offer a crew. Test a material. Buy something that carries the story. Or simply stay close enough to help when the right need appears.`

Primary:
`Find my way to help`

Secondary:
`Keep me updated`

---

# 6. Page-content direction

Every page should be concise, human and action-oriented, while preserving evidence labels and source links where claims matter.

## Recovery
Emotion -> verified context -> what Re:Build does/does not control -> current status -> CTA to process or help.

## How It Works
Simple material journey -> safety/traceability -> QA -> dispatch/use -> CTA to materials/evidence.

## Materials
What may become usable -> trial-only status -> exact uses/prohibited uses -> buyer inquiry CTA.

## Rebuilding
Show bounded use cases/projects/trials, not generic sustainability promises. CTA for contractors/engineers/buyers.

## Impact
Measured values only. Before pilot: explain the methodology and what will be published.

## Needs
Public-ready verified gaps only. Each card links to a Need-specific offer form.

## Work With Us
Structured routes to close operational and evidence gaps. See separate architecture file.

## Support
Before fundraising approval, route to in-kind, partnership, merch and update signup. Financial support remains inquiry/preparation unless specialist gate is approved.

## Transparency
Explain statuses, methodology, resource recognition and reporting boundaries.

## Updates
Short dated field/commercial progress entries. Each update says what changed, what evidence was added and what remains open.

## About
Why Tropik created Re:Build, scope boundary, principles, no founder-hero narrative that overwhelms the recovery mission.

## FAQ
Answer practical questions about safety, materials, support, claims, donations, work and data.

## Contact
Route by intent, not one generic inbox.

---

# 7. Public-claim guardrails

Keep all operational content consistent with:
- VERIFIED FACT
- STRATEGIC DECISION
- WORKING HYPOTHESIS
- TARGET
- ASPIRATION
- PROHIBITED CLAIM

Never publish as achieved fact:
- assumed Santa site allocation/area;
- unmeasured recovery/diversion %;
- generic COVENIN product approval;
- jobs generated without payroll/work evidence;
- CO2/carbon/environmental benefit %;
- donor/funding commitments not received;
- donated/deployed resources without evidence;
- material sales as self-funding;
- tax-deductible donation language before specialist approval.

---

# 8. Acceptance gate for Claude delivery

A delivery is NOT complete merely because the artifact preview looks good.

PASS requires:
1. visual system matches approved artifact;
2. all screenshots' alignment/responsive defects resolved;
3. navigation/footer match current sitemap;
4. every visible control works;
5. mobile rails support arrows + swipe;
6. page content is editable in WordPress;
7. content import/seed package is included;
8. theme ZIP is complete and installable;
9. Work With Us forms are structured and map to internal registers;
10. weekly-update signup has durable supporter/contact identity + consent lifecycle;
11. financial donation checkout remains disabled until approved;
12. no Claude Artifact preview chrome appears in production assets;
13. 1440/1024/768/480/390 QA screenshots are supplied for Home, drawer, one rail page, cart, checkout and My Account;
14. no stale old-navigation references remain unless deliberately retained in the current approved sitemap;
15. theme/content delivery includes README, changelog and implementation status.


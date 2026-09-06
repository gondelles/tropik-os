# RB_HOME_CONTENT_PROPOSAL_2026-09-06_v0.1

**Status:** DRAFT — pending founder approval
**Venture:** Tropik Re:Build
**Stage:** Lane 1 (Content), per `RB_CLAUDE_COMMERCE_CONTEXT_PACK_2026-09-06`
**Scope:** Home (`/rebuild/`) only. Do not proceed to Recovery until this is approved.
**Source verified against:** live Artifact `6cab347c-e8b7-4baf-b864-601894782c25` (route `rebuild-home.html`), read directly — not screenshots — on 2026-09-06.

---

## 0. What this covers

Per the content-stage instructions: (1) proposed final Home copy by section, (2) the existing Artifact copy each item replaces, (3) fields that must stay PRE-PILOT/TBD, (4) Artifact-level UI fixes required specifically for Home. No WordPress/PHP/backend work is included.

Narrative order used: **LOSS → POSSIBILITY → METHOD → PROOF → WHAT WE NEED → LOCAL WORK → WAYS TO HELP → STAY UPDATED**.

---

## 1. Proposed Home copy, section by section

### LOSS — Hero

**Existing (verbatim from Artifact):**
- Eyebrow: `Tropik Re:Build`
- H1: `What fell can help us build again.`
- Lede: `On June 24, 2026, two major earthquakes struck Venezuela. Homes, schools and livelihoods were destroyed. What they also left behind — enormous volumes of debris — is something we're learning to see differently: Re:Build is a circular recovery system in development that assesses, sorts and routes safely recoverable material into new products, paid local work, and a repeatable path back to reconstruction.`
- CTAs: `See how Re:Build works` (primary → rebuild-process.html) / `Support Re:Build` (secondary → #support)

**Proposed:**
- Eyebrow: `TROPIK RE:BUILD — LA GUAIRA, VENEZUELA`
- H1: `What fell can help us build again.` — **unchanged**, it's strong and already reads approved.
- Lede: `The rubble is not the end of the story. Re:Build is building a safe, traceable way to recover useful material, fund local work and move resources back into reconstruction.`
- Primary CTA: `See what we need now` → new #needs section on Home
- Secondary CTA: `Follow the rebuild` → new #updates section on Home

**Open flag:** the new lede drops the specific "June 24, 2026, two earthquakes" sentence. That's a factual, dated claim, not something invented — recommend keeping a short version of it for grounding (e.g. folding one clause into the eyebrow or lede) rather than dropping the concrete event entirely. Your call — flagging, not deciding for you.

---

### POSSIBILITY — Scale

**Existing (verbatim):**
- Stat: `2.1M`
- Copy: `tonnes of debris estimated remaining across the hardest-hit areas — roughly 105,000 truckloads of 20 tonnes each.`
- Evidence block: `Verified fact` badge · `UNDP, published 2026-07-24, re-verified 2026-09-05` · `Not live Tropik operating data — a working estimate of the disaster's scale. See sources & methodology.`

**Proposed:** Keep the verified stat block exactly as-is — it already satisfies the sourcing/disclaimer rule. **Add** the missing bridge line beneath it (currently absent):
> `That scale can feel overwhelming. Re:Build starts smaller: one controlled site, one measured stream, one tested use at a time.`

This is a pure addition — no change to the sourced UNDP claim.

---

### METHOD — How It Works
*(merges the current "Recovery" section + "Process" section into one)*

**Existing, section A (id="recovery"):**
- Eyebrow: `Recovery`
- H2: `Debris needs management. People need work. Reconstruction needs materials.`
- Lede: `Today those three problems are almost always solved separately — or not at all. What if part of the problem could become part of the recovery?`
- Flow badges: `Assess (done) → Sort (done) → Recover (current) → Make → Rebuild`, tagged `Working hypothesis`

**Existing, section B (id="process"):**
- Eyebrow: `How it works`
- H2: `From debris to usable material, in ten traceable stages.`
- CTA: `See the full process` → rebuild-process.html
- 4 stage cards: `01 · Authorized source`, `04 · Safety screening`, `05 · Sorting`, `08 · Testing & quality`

**Proposed (one merged section):**
- Eyebrow: `How It Works`
- H2: `From debris to something useful — with proof at every step.`
- Intro (carried over from the current Recovery lede — it's good scene-setting copy): `Debris needs management. People need work. Reconstruction needs materials. Today those three problems are almost always solved separately — or not at all.`
- Steps: `Receive safely` → `Sort what can be recovered` → `Process and test` → `Put useful material back to work` → `Publish what actually happened`
- Support line: `If we can't trace it, test it or defend the claim, we don't publish it.`
- CTA: `See the full process` → rebuild-process.html (kept)

**Open flags:**
- This drops the specific "ten traceable stages" claim from Home and the 5-step Assess/Sort/Recover/Make/Rebuild flow badges, replacing both with one simpler 5-step list. Recommend the exact stage count live only on the Process detail page (rebuild-process.html), so Home doesn't go stale if the operational stage count changes.
- The two sections currently sit at anchors `#recovery` and `#process`. Merging them means picking one canonical anchor (recommend `#how-it-works`) and updating the drawer nav's "Recovery" link and the Hero's old CTA target accordingly. Flagging as an IA follow-up, not deciding it here since "Recovery" is also planned as its own full page later (approval-order item 2).

---

### PROOF — Impact

**Existing (verbatim):**
- Eyebrow: `Impact`
- H2: `What measurable outcome is Re:Build trying to create?`
- 3 cards: `Target — Paid local roles in sorting, safety and skilled production.` / `Working hypothesis — Suitable mineral and fiber streams recovered instead of dumped.` / `Working hypothesis — Recovered material feeds real reconstruction and commercial use.`

**Proposed:**
- Eyebrow: `Impact`
- H2: `No vanity counters.`
- Copy: `When the pilot begins, we'll report the numbers we can defend: tonnes received, material released, trials completed, worker-days paid, resources received and where they were deployed.`
- CTA: `See how impact will be measured` → future Impact/Transparency page
- Required pre-pilot line: `Measurement begins with the pilot.`

**Open flag:** this replaces the "what outcome are we targeting" framing with a "how we'll prove it" framing. The current "Paid local roles..." card is a better fit under the new **LOCAL WORK** section below — recommend moving it there rather than deleting it. The two material-recovery hypothesis lines either fold into POSSIBILITY/METHOD copy or get cut from Home as redundant with the Materials rail's own status badges — your call.

---

### WHAT WE NEED — Current Needs *(new section — does not exist on Home today)*

**Existing:** none.

**Proposed:**
- H2: `The next breakthrough may already exist.`
- Copy: `A weighbridge. A loader. Lab time. A contractor willing to test a batch. An engineer with the right specification. A crew ready to work. Re:Build is mapping the exact gaps before asking anyone to fill them.`
- CTAs: `See what Re:Build needs` / `I can help with something`

**PRE-PILOT/TBD:** no individual Need cards (specific asks) go live yet — general framing only, until the Needs Registry has public-ready entries.

---

### LOCAL WORK *(new section — absorbs the current Impact "Target" card)*

**Existing:** none as a standalone section (closest fragment: Impact's `Target — Paid local roles in sorting, safety and skilled production.`).

**Proposed:**
- H2: `Recovery should create work where the damage happened.`
- Copy: `One goal of the pilot is to turn recovery activity into verified paid local work — from sorting and equipment operation to engineering, testing and site support.`
- CTA: `Work with Re:Build` → future `/rebuild/work-with-us/`

**PRE-PILOT/TBD:** no jobs-created counts, headcounts or wage figures until paid-work evidence exists. Copy stays "one goal of the pilot is to..." — intent, not an accomplished fact.

---

### WAYS TO HELP — Support *(expands the current 3-card Support section to 6 routes)*

**Existing (verbatim):**
- Eyebrow: `Support`
- H2: `Three ways to help — kept separate on purpose.`
- `Donate` — `Coming soon — we don't have a donation entity or payment processor set up yet. We'd rather wait than improvise one.`
- `Shop` — `Tropik Re:Build merch — currently coming soon.` CTA `See the shop` → shop.html
- `Partner` — `Municipalities, contractors, NGOs and researchers — reach out.` CTA `Partner with us` → contact.html

**Proposed:**
- H2: `Pick the way you can move the rebuild forward.`
- Routes: `Offer equipment or materials` / `Bring technical expertise` / `Work with the pilot` / `Test recovered material` / `Shop Re:Build merch` / `Explore a funding partnership`

**Open flags:**
1. The new 6-route list has no explicit "Donate" tile — the current build does show one, honestly marked "coming soon." Recommend keeping a "Donate — coming soon" tile too (not a live checkout) so visitors looking specifically to donate aren't left wondering, rather than folding it silently into "funding partnership." Flagging for your decision, not dropping it unilaterally.
2. I'd keep the current headline's honesty framing — `"kept separate on purpose"` explains *why* Donate/Shop/Partner aren't mixed, which the new headline doesn't say. Your call on which headline you prefer.
3. **Do NOT enable financial donation checkout yet** — hard gate, unchanged either way.
4. Shop tile stays "coming soon" in copy — ties to UI fix #2 below (no "Live" badge anywhere on Home while this is true).

---

### STAY UPDATED — Keep Updated *(new section)*

**Existing:** none.

**Proposed:**
- H2: `Follow the rebuild, week by week.`
- Copy: `One short email with what changed: evidence collected, needs closed, trials run, what moved forward and what still needs help.`
- CTA: `Keep me updated`

**PRE-PILOT/TBD:** no WordPress account created per signup (durable supporter/contact record instead, per architecture doc). Only the section copy + CTA label are approved at this stage — consent wording, success/error states and preference fields are separate content items, not blocking Home.

---

### Not part of the 8-beat narrative: the Materials rail

The current Home also has a Materials rail (`Recycled Concrete Road Base` / `Recovered Steel` / `Re:Grow Biocomposite`, with Prototype/Concept/R&D status badges) that isn't one of the 8 named beats. Materials gets its own dedicated content pass later (approval-order item 4: "Materials landing + detail-page framework"). Recommend leaving its copy untouched on Home for now — it already reads honestly (status badges match reality) — and revisiting it when we do the Materials page.

---

## 2. Fields that must stay PRE-PILOT / TBD (consolidated)

- Any specific Need card (equipment/lab/crew ask) — general framing only until the Needs Registry is public-ready.
- Any worker/job count, wage, or "jobs created" figure — Local Work stays pilot-goal language only.
- Any tonnage/diversion/recovery % beyond the cited external UNDP scale figure — Proof section says "Measurement begins with the pilot," nothing invented.
- Santa Eduvigis/Urimare site status — not stated as authorized/allocated anywhere (confirmed not present today — keep it that way).
- Donation checkout — no live payment collection.
- Merch — "coming soon," no "Live" badge.
- Funding partnership — inquiry-only, not a live investment mechanism.
- Carbon/environmental-benefit percentages — not present today, must not be added.

---

## 3. Artifact-level UI fixes required specifically for Home

Verified directly against the Artifact's saved HTML/CSS/JS (not just screenshots) unless flagged otherwise.

1. **[Confirmed in source]** Drawer nav links (`.tk-drawer__list a`) don't carry `data-tk-drawer-close`; the panel only closes via the backdrop or the X button (`TkPanel` wiring). **Fix:** close the drawer/mini-cart on any in-panel link tap too.
2. **[Confirmed in source]** "Shop" carries a `Live` badge in two places rendered from Home's own drawer/footer, while Home's Support card says merch is "coming soon." **Fix:** drop the badge (or swap to "Coming Soon") until there's a real seed catalog.
3. **[Confirmed in source]** Demo bag data includes `Smell-Proof Container — Herb Keeper Jar`, an unrelated item, surfacing in the Home header's bag badge and the bag drawer opened from Home. **Fix:** replace with a Tropik/Re:Build-appropriate placeholder or an empty demo bag.
4. **[Confirmed in source]** The Materials rail's prev/next buttons live in the section header row (`.tk-hub-head__controls`) instead of being centered on the rail's left/right edges the way the reusable `.tk-carousel__btn` component already does elsewhere on the site. **Fix:** reuse that centered-arrow pattern here.
5. **[Confirmed in source]** The Home drawer's account group is labeled `Your Tropik`, while the router/nav elsewhere already calls it `My Account`. **Fix:** rename the drawer group to `My Account` (the account page's own headline "Your Tropik." needs the matching fix too — tracked as related, not Home-specific).
6. **[Confirmed in source]** Drawer and mini-cart panels render on a fully opaque background with no blur, unlike the header (which already uses translucency + backdrop blur). **Fix:** apply the same treatment to both panels — this is the panel Home visitors open most.
7. **[From screenshots — verify against current build]** Section-to-section spacing on Home (eyebrow→heading, Impact→Support, badge→heading) read tight in your screenshots. A shared spacing token already drives section gaps sitewide, so this may be partly stale — worth a fresh screenshot pass before treating it as still open.
8. **[From screenshots — verify]** Card-edge crop on the Materials/Impact rails — confirm intentional "peek" vs. accidental clip once the arrows are recentered (item 4), since that fix may resolve the crop too.
9. **[Not reproducible from current source]** Teal/pink Support-card accents — the live token file only defines green/coral/yellow; no teal or pink exists anywhere in the CSS. What you saw looks like an older cached view — today's cards already use only approved tokens. Worth a fresh look before treating this as open.
10. **[Not verifiable here]** "Cart" wording — no instance of the word "Cart" found anywhere in this Artifact's user-facing copy (bag panel, page, nav all say "Bag" consistently). If you're still seeing "Cart," it's most likely on the WordPress staging site rather than in this Artifact — point me to the exact screen and it'll go on the right punch list.

### Scope note on the staging-site (WordPress) feedback

The additional issues you flagged from `staging.tropikgoods.com` — mobile stacking/alignment, section indentation across the whole site, a background crack-texture pattern, a roadmap section background image/GIF, general "dynamism," desktop/tablet layout — are WordPress-theme observations, not Artifact content. Per the stage gate, those go on the Lane 2 (Claude Code, post-Content-approval) punch list rather than being actioned here. Items 1, 2, 3, 5 and 6 above *are* Artifact-level and Home-relevant, so they're already folded into this list; everything else from that note is logged for the WordPress pass once Content is fully approved.

---

**Waiting for your Home approval before moving to Recovery**, per the stage gate.

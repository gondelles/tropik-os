# RB_WORDPRESS_WOOCOMMERCE_ARCHITECTURE_v0.1

**Status:** PRIVATE_WORKING  
**Venture:** Tropik Re:Build  
**Updated:** 2026-09-06

## Principle

Use the existing Tropik WordPress/WooCommerce stack where it reduces duplicate systems. Do not force technical/project evidence into WooCommerce when a structured WordPress content type or external operational record is cleaner.

**STRATEGIC DECISION:** mobile-first management is a design requirement, but not every technical/HSE workflow should be executed inside WooCommerce.

## Minimum information architecture

| Need | Recommended object | Why |
|---|---|---|
|Recovered materials catalog|WooCommerce Products, **catalog/quote mode** initially|SKU, photos, availability, attributes, buyer inquiry, mobile product editing|
|Materials grouping|WooCommerce Category: `Re:Build Materials` + subcategories|simple merchandising and filtering|
|Support merch|WooCommerce Products|normal ecommerce/order/stock/POD flow|
|Merch grouping|WooCommerce Category: `Re:Build Support Merch`|separate from recovered materials|
|Donations/support|Normal page + external/approved payment mechanism or Woo product only after legal/accounting approval|avoid confusing commerce with charitable donation|
|Project updates|WordPress Posts category or Custom Post Type `Re:Build Updates`|chronological reporting|
|Impact metrics|Normal page fed from approved dashboard/report|public summary should show methodology/date/source|
|Funding transparency|Normal page + downloadable/linked reports|not a product/order object|
|B2B material quote requests|Product-linked form|materials are inquiry/quote-led until availability/spec/pricing stabilizes|
|Product inquiries|form attached to material product|captures intended use, quantity, location, project, required spec|
|Inventory/availability|WooCommerce stock status + custom status field|mobile-friendly `Available / Trial batch / Hold / Out / By request`|
|Order management|WooCommerce Orders|native workflow for merch and future approved material orders|
|Technical evidence|Custom Post Type `Re:Build Evidence` or controlled GitHub/source register; public pages link to reviewed evidence|traceability without cluttering product descriptions|
|Processes|Custom Post Type `Re:Build Process`|each process page links inputs, outputs, risks and evidence|
|Projects / deployments|Custom Post Type `Re:Build Projects`|field trials, reconstruction deployments, outcomes|
|Operational intake/mass balance|External spreadsheet/database/form during MVP|do not make WooCommerce the safety-critical plant log|

## Recommended free/simple tooling first

- WooCommerce core.
- WooCommerce mobile app for products/orders/basic inventory.
- Existing WordPress editor/pages/posts.
- **Pods** or **Custom Post Type UI** only if structured process/evidence/project content cannot be managed cleanly with normal pages/posts. Prefer one, not both.
- Simple form plugin already trusted in the Tropik stack; otherwise evaluate a free form tool before buying quote extensions.
- Google Sheets / simple database for operational intake, batch, QA and mass balance during pilot.

**RED:** complex ERP, custom mobile app, automated plant telemetry, multi-system CRM stack or paid quote workflow before the manual B2B flow is proven.

## Material product model

Each Re:Build Materials WooCommerce product should contain:

- product name;
- functional subtitle;
- product lifecycle status;
- SKU;
- nominal gradation/size;
- source material;
- intended applications;
- prohibited uses;
- current availability status;
- batch/lot availability note;
- QA/tests required;
- local engineering specification status;
- evidence/methodology links;
- minimum inquiry quantity if established;
- service area / pickup-delivery rule;
- inquiry CTA, not default Add to Cart until commercial rules stabilize.

### Material quote form fields
- company / organization;
- contact;
- product;
- intended use;
- quantity t or m³;
- required gradation/specification;
- project location;
- requested date;
- pickup vs delivered;
- engineer/specification attachment optional;
- notes.

## Support merch product model

Normal WooCommerce product with price, variants, stock/POD status, shipping, returns and fulfillment. Merch financial reporting remains separate from grants/donations and material revenue.

## Donations/support gate

**YELLOW:** public support page may explain ways to support.  
**RED until specialist approval:** calling WooCommerce checkout a tax-deductible donation, promising beneficiary percentages, issuing charitable receipts, or mixing restricted grant/donation funds with normal merch revenue.

Validate legal entity, tax/accounting treatment, beneficiary restrictions, payment processor rules and Venezuelan/international fundraising compliance first.

## Mobile-first operating model

### Manageable from WooCommerce mobile app
- view/search/filter orders;
- update order status;
- create/edit orders where appropriate;
- view/edit products;
- update product images/descriptions;
- price and stock status;
- categories;
- variations for merch;
- basic sales/store stats.

### Mobile web admin / WordPress-responsive admin
- publish project updates;
- edit transparency/impact pages;
- update structured process/evidence/project fields;
- review forms/quote requests depending plugin.

### Keep outside WooCommerce app
- HSE incident records;
- hazardous-material chain-of-custody;
- calibrated weigh tickets as master records;
- laboratory result master files;
- mass-balance workbook;
- grant accounting;
- engineering approvals.

WooCommerce can surface approved summaries/availability but should not become the system of record for safety-critical evidence.

---

# Refined Re:Build sitemap

| URL | Primary question | Main blocks | Primary CTA | Previous -> Next | Evidence/data needed |
|---|---|---|---|---|---|
|`/rebuild/`|What is Re:Build and what is it doing?|problem, scope, process summary, current status, metrics preview|See how it works|Tropik -> Process|verified project status|
|`/rebuild/how-it-works/`|How does debris become usable material?|authorized source, intake, sort, process, QA, dispatch|Explore materials|Home -> Materials|process SOP/evidence|
|`/rebuild/materials/`|What recovered materials may be available?|catalog cards, statuses, uses, QA disclaimer|View a material|Process -> Product|product specs, availability|
|`/rebuild/materials/road-base-0-40/`|Can this batch be used for road base?|spec, use, prohibited use, tests, availability, inquiry|Request material quote|Materials -> Evidence|lab/buyer spec|
|`/rebuild/materials/mineral-fill/`|Is this material appropriate for fill/backfill?|same pattern|Request quote|Materials -> Evidence|local fill spec|
|`/rebuild/materials/masonry-aggregate/`|Where can masonry aggregate be used safely?|same|Request quote|Materials -> Evidence|variability tests|
|`/rebuild/materials/ferrous-scrap/`|What steel scrap is available?|grade/contamination/lot/weight|Buyer inquiry|Materials -> Impact|recycler requirements|
|`/rebuild/reuse/`|What reusable components are available and how are they released?|inventory approach, safety gate, chain-of-custody|Inquire about reuse|Materials -> Process|item records|
|`/rebuild/process/intake-sorting/`|How are loads accepted and separated?|traceability, safety gates, streams|See processing|How it works -> Crushing/QA|SOP + HSE|
|`/rebuild/process/crushing-screening/`|How are mineral products made?|feed, crusher, magnet, screen, dust controls|See resulting products|Sorting -> QA|equipment/process data|
|`/rebuild/process/quality-testing/`|How is a batch approved?|sampling, tests, holds, release|View evidence|Crushing -> Evidence|methods/results|
|`/rebuild/impact/`|What has Re:Build actually measured?|tonnes in/out, jobs, wages, redeployment, methodology|Read methodology|Materials -> Methodology|audited/verified metrics|
|`/rebuild/methodology/`|How are impact numbers calculated?|definitions, weighing, boundaries, uncertainty|View evidence|Impact -> Evidence|metric definitions|
|`/rebuild/evidence/`|What supports the technical claims?|public evidence, lab reports, field validation, version/date|Open evidence|Methodology -> Updates|reviewed sources|
|`/rebuild/projects/`|Where has material been tested/redeployed?|field trials, buyers/projects, results|View project|Evidence -> Updates|permissions + results|
|`/rebuild/updates/`|What changed recently?|chronological updates|Follow/support|Projects -> Support|dated project updates|
|`/rebuild/support/`|How can an individual/company support responsibly?|needs, in-kind ask, merch, approved funding routes|Support / shop|Updates -> Transparency|legal fundraising route|
|`/rebuild/support/merch/`|What support merch is available?|Woo category|Shop merch|Support -> Transparency|product economics|
|`/rebuild/transparency/`|How are funds/resources used?|funding categories, in-kind values, reports, restrictions|View latest report|Support -> Contact|accounting-approved data|
|`/rebuild/partners/`|What partnership is Re:Build seeking?|government/site, equipment, labs, buyers, funders|Partner inquiry|Transparency -> Contact|approved asks|
|`/rebuild/contact/`|Who should contact Re:Build and for what?|material inquiry, equipment, funding, press/general routes|Submit inquiry|Partners -> —|routing rules|

## Navigation rule

Every material links to its creating process and QA/evidence. Every process links to resulting materials. Every impact number links to methodology. Every funding statement links to transparency. Do not publish giant technical walls of text; use summary -> details -> evidence.

## Quote/order lifecycle

### Materials
`Product page -> inquiry form -> manual qualification -> availability/spec check -> quote -> founder/commercial approval -> customer acceptance -> manual Woo order if useful -> dispatch -> closeout.`

### Merch
`Product -> cart -> checkout -> POD/local fulfillment -> order status -> customer service.`

### Donations/support
`Support page -> legally approved mechanism -> separate accounting/reporting.`

## Major implementation block

**Objective:** make the public ecosystem manageable without building a new platform.  
**Expected result:** clean separation of materials, merch, project evidence and support flows inside existing Tropik infrastructure.  
**Recommended tools:** WordPress + WooCommerce + mobile app + one free structured-content plugin only if required + simple form + spreadsheet.  
**Concrete steps:** create categories; create five draft material products in quote/catalog mode; create process/evidence page structure; build one material inquiry form; test Woo mobile editing; keep operational mass balance external.  
**Validation checklist:** materials cannot accidentally be purchased without approval; merch checkout works; inquiry reaches owner; stock/status editable on phone; evidence links work; donation language absent until approved.  
**Approved criterion:** founder can update material availability and merch orders from phone, while technical master records remain traceable outside WooCommerce.  
**Not approved:** duplicate data stores, paid extensions before workflow proof, public claims without evidence links, or safety-critical records living only in WooCommerce.  
**Risks/common errors:** treating material catalog like consumer ecommerce; forcing quote workflow too early; mixing revenue/support categories; plugin sprawl; mobile admin becoming unusable.  
**Delegation:** WordPress implementer after IA approval; accountant/legal for support/donation flow; operations lead owns availability; materials engineer owns technical release language.  
**Exact next action:** create draft Woo categories `Re:Build Materials` and `Re:Build Support Merch`, then one unpublished material product using the Road Base schema and test the entire inquiry workflow on mobile before adding plugins.

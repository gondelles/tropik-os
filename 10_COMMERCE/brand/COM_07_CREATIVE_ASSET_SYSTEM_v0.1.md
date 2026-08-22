# COM_07_CREATIVE_ASSET_SYSTEM_v0.1

Status: PRIVATE_WORKING
Version: 0.1
Updated: 2026-08-22

## Purpose

Define how Tropik creates, reviews and reuses product, editorial and campaign visuals across ChatGPT image generation, Claude-supported creative direction, photography, mockups and future design tools.

## Source-of-truth rule

No generated image becomes an approved brand asset automatically.

Asset lifecycle:
`BRIEF → GENERATED/DRAFT → REVIEW → RETOUCH/REGENERATE → APPROVED_INTERNAL → APPROVED_PUBLIC → PUBLISHED`

## Required creative brief fields

- Asset ID
- Venture / market
- Use case: hero / category / product / social / Amazon / editorial
- Product(s) represented
- Aspect ratio / target dimensions
- Brand mood
- Environment
- Human subjects? yes/no
- Required colors/materials/details
- Prohibited visual claims
- Text embedded in image? default NO
- Reference assets
- Output variants required

## Image generation principles

1. Product truth overrides aesthetics. Never invent a feature, material, certification or accessory.
2. Use image generation heavily for moodboards, editorial concepts, backgrounds and pre-launch creative exploration.
3. For final product-detail images, use real product photography or accurate renders/mockups whenever factual fidelity matters.
4. Keep text/logo placement separate from generated imagery where possible so typography remains editable and accessible.
5. Generate variants intentionally rather than accepting the first attractive result.
6. Store final prompt/brief alongside approved asset metadata so the visual system is reproducible.
7. Human review required before public use.

## Tropik image direction — working

- natural light;
- tactile materials;
- movement;
- travel / coast / warm-weather cues without clichés;
- premium-accessible styling;
- clean negative space for web copy;
- warm-neutral surfaces;
- yellow/orange and deep green used selectively;
- rounded / soft architectural forms when relevant;
- believable utility and human behavior.

## Avoid

- obvious generative artifacts;
- oversaturated palm-tree clichés;
- fake product labels/specifications;
- fantasy functionality;
- unreadable text generated inside images;
- unsafe product use;
- visual representations that could create compliance or return-risk expectations.

## Tool routing

### ChatGPT image generation
Best for:
- original hero/editorial concepts;
- campaign imagery;
- visual variations;
- edits/style transformations to supplied assets;
- moodboards.

### Claude
Use primarily for:
- creative brief challenge;
- narrative/storyboard;
- consistency review against Brand Foundations;
- prompt critique;
- asset taxonomy and content-system documentation.

### Real photography / accurate renders
Required or preferred for:
- final Amazon main images;
- dimensions/specification imagery;
- material/detail claims;
- features whose physical accuracy affects purchase decisions.

## Storage

Internal approved asset metadata belongs under Tropik OS; large media binaries should live in an appropriate media/Drive/GitHub LFS-style store rather than bloating the canonical documentation repository.

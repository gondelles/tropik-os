# INC-001 — Block Theme POC v0.1

Status: PRIVATE_WORKING / OPEN
Date: 2026-08-22
Environment: Hostinger staging only

## Summary

A generated theme package `tropik-block-child-v0.1.zip` installed successfully in WordPress staging. During the subsequent activation/page-creation workflow, the founder observed a generic WordPress critical-error screen. WordPress admin remained accessible afterward, and a draft page `Tropik POC` could be created through another route.

The expected custom patterns `Tropik Hero — Editorial` and `Tropik Category Cards` did not appear in the pattern inserter search.

## Facts

- Staging existed and was healthy before this experiment.
- Twenty Twenty-Five had been activated successfully in staging.
- ZIP installation reported successful and parent Twenty Twenty-Five installed.
- A generic WordPress critical-error screen was observed afterward.
- Admin remained accessible.
- `Tropik POC` draft page was created successfully afterward.
- Expected custom child-theme patterns were not visible/searchable.

## Unknowns

- Whether the child theme remained active after the error.
- Exact fatal PHP error/message/stack trace.
- Whether the error was caused by theme activation, a plugin interaction, Site Editor route, or another request.
- Whether pattern registration failed because the child theme was inactive or because of a theme/pattern issue.

## Safety decision

- Treat v0.1 as FAILED/UNVERIFIED.
- Do not use in production.
- Do not infer root cause without logs.
- Prefer a lower-risk v0.2 experiment with minimal/no PHP and a reversible staging-only workflow.

## Evidence to capture only if needed

- Appearance → Themes showing active theme.
- WordPress Recovery Mode/admin email fatal error details, sanitized.
- Hostinger/PHP error log around the incident timestamp, sanitized.

No credentials or sensitive paths should be added to this incident file.

# 06_AI_COLLABORATION_PROTOCOL

Status: PRIVATE_CANONICAL  
Version: 1.1

## Default roles

**Human founder:** final owner of strategy, capital, brand and sensitive approval gates.

**ChatGPT / Tropik Compass:** default orchestrator — prioritization, sequencing, handoff preparation, consolidation, decision framing and canonical-update proposals.

**Claude:** Architect / Builder / Challenger — deep synthesis, artifact development, large-context analysis, alternative architecture, red-team/QA and implementation support.

Roles may change per task, but the handoff must name owner/reviewer.

## Standard flow

```text
Human
  ↓
ChatGPT / Tropik Compass
  ↓ structured handoff
Claude
  ↓ artifact + return handoff
ChatGPT review/integration
  ↓
Human gate where required
  ↓
Canonical update
```

AI output is not automatically truth.

Promotion status:
- ACCEPTED
- EXPERIMENT
- REJECTED
- NEEDS_REVISION

## Red-team rule

Use build/review separation for meaningful launches, architecture and high-impact changes when the extra review adds value. Do not create review bureaucracy for trivial work.

## Canonical update rule

A return handoff should identify:
1. artifact/outcome;
2. key findings;
3. evidence;
4. assumptions;
5. risks/contradictions;
6. proposed decisions;
7. human approvals required;
8. canonical files to update;
9. next action.

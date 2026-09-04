# Posta Studio autonomous rebrand loop

## Goal
Rebrand the existing TryPost-derived application to Posta Studio with AdPanel as the primary page-by-page visual bar while preserving the existing application behavior, routes, publishing flows, calendar mechanics, automations, and backend architecture.

## Operating rules

### Unlazy
Every phase starts with explicit acceptance gates. A phase is not complete because code was written; it is complete only when the diff proves the requested scope and the available checks support it.

### Ponytail
Use the smallest existing mechanism that can produce the result:
1. skip unnecessary work;
2. reuse code already present;
3. prefer native platform behavior;
4. prefer installed dependencies;
5. only then add the minimum code required.

### Ralphy
One bounded task per branch. Finish, review, merge, then start the next task from the new `main`.

### Gauntlet
Primary visual bar: https://www.adpanel.io/
Functional behavior bar: https://trypost.it/en
Density/hierarchy bar: Linear
Interaction craft bar: Emil Kowalski design-engineering principles

A phase passes only when Posta preserves the proven behavior while becoming more intentional visually. Do not use a vague numeric score as the exit condition.

### Humanizer
Apply only to copy phases. Preserve facts and meaning. Remove generic AI language, filler, inflated claims, formulaic triads, and vague sales language.

## Atomic rollback contract

One phase = one branch = one PR = one merge commit or squash commit.

Git history is the code rollback mechanism. Deployment images should remain immutable where available. Beads may track task state and dependencies, but task state is not a substitute for source rollback.

## Never touch unless a phase explicitly requires it
- database schema or migrations
- routes
- authentication behavior
- publishing behavior
- calendar drag/drop behavior
- composer logic
- queue/Horizon behavior
- Redis/Postgres topology
- MCP protocol identifiers
- Reverb behavior
- upstream/legal attribution

## 12 phases
1. Visible brand name — complete
2. Global color tokens — complete
3. Borders and shadows
4. Logo system
5. Favicon/app identity assets
6. Typography system
7. Buttons and controls
8. Cards, panels, and surfaces
9. Sidebar and navigation skin
10. Toasts, drawers, dialogs, and micro-interactions
11. Login and key-page presentation
12. Copy, positioning, and final page-by-page gauntlet

## Phase gate template
For each phase:
1. branch from current `main`;
2. declare exact files in scope;
3. make the smallest change;
4. compare branch to `main`;
5. reject unintended files or behavior changes;
6. inspect existing CI/status signals;
7. treat known unrelated infrastructure failures as recorded blockers, not reasons to pollute the phase;
8. merge only when the phase scope is clean;
9. continue from updated `main`.

## Final review
After Phase 12, review the cumulative diff from the Phase 1 baseline, list every merged phase, record blockers and workarounds, identify remaining debt, and state what changed visually versus what was deliberately preserved.
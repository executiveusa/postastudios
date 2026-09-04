# Posta Studio rebrand review

## Outcome
The 12-phase rebrand converted the visible TryPost-derived product into Posta Studio while preserving the application’s existing Laravel/Inertia architecture and core behavior.

Primary visual bar: AdPanel.
Functional behavior bar: TryPost.
Density/hierarchy reference: Linear.
Interaction reference: Emil Kowalski design-engineering principles.

Operating methods:
- Unlazy: acceptance evidence before completion claims.
- Ponytail: reuse existing primitives and dependencies before adding code.
- Ralphy: one bounded task per branch/PR.
- Gauntlet: compare against named, fetchable bars rather than vague scores.
- Humanizer: tighten copy without inventing facts or capabilities.

## Phases
1. Visible brand name: replaced user-facing TryPost/TryPost.it references with Posta Studio while preserving internal/protocol identifiers and upstream/legal attribution.
2. Global color tokens: replaced the warm cream/black/violet palette with a neutral canvas, restrained violet accent, softer semantic colors, and neutral sidebar/chart tokens.
3. Borders and shadows: replaced hard offset shadows with quiet elevation tokens.
4. Logo system: added a reusable Posta Studio SVG wordmark and applied it to public/onboarding shells.
5. Browser/app identity: replaced favicon SVG, favicon ICO, and Apple touch icon with Posta identity assets.
6. Typography: moved the global sans/display stack toward a tighter modern grotesk system with restrained editorial tracking.
7. Buttons and controls: reduced heavy borders, tightened transitions, and added subtle press feedback using the existing primitives.
8. Cards and surfaces: changed the shared Card primitive from heavy structural borders to neutral hairlines and restrained elevation.
9. Sidebar/navigation skin: quieted menu weight and selected/hover states without changing destinations, permissions, or collapse behavior.
10. Interaction chrome: refined existing Sonner, Vaul, and Reka toast/dialog/drawer surfaces without changing interaction logic.
11. Login presentation: reworked the auth shell presentation while preserving auth submission, OAuth, carousel timing/state, and routes.
12. Copy and positioning: removed the remaining visible TryPost auth flash, tightened login/register language, and reframed feature slides around content operations using only existing capabilities.

## Preserved behavior
The rebrand deliberately did not modify:
- database schema or migrations
- authentication behavior
- publishing behavior
- calendar drag/drop mechanics
- composer logic
- queue/Horizon behavior
- Redis/Postgres topology
- Reverb behavior
- MCP protocol identifiers
- internal database/container/session identifiers
- upstream/legal URLs where no Posta replacement exists

## Blockers and fixes

### Blade escaping regression
The first name-only slice accidentally wrote literal escaping into nine Blade `date('Y')` expressions. The issue was caught during review, fixed in a dedicated correction commit, and all nine mail templates were rendered successfully before the name slice was accepted.

### Vercel native build
The linked Vercel project treats the repository as a Node/Vite application. Laravel Wayfinder executes `php artisan wayfinder:generate --with-form` during the Vite build, but the standard Vercel builder has no PHP binary. The resulting failure is infrastructure-specific and is not caused by the rebrand. The existing VPS architecture remains the correct proven runtime unless a PHP/container-capable Vercel deployment path is intentionally designed later.

### GitHub self-review
GitHub does not allow a pull-request author to approve their own PR. Phase reviews therefore used explicit scope/diff checks and merge guards rather than a self-approval review event.

### Legal/upstream URLs
The application still contains upstream TryPost legal/documentation/community URLs where no approved Posta Studio replacement exists. Those references were preserved rather than inventing destinations or silently breaking legal/support links.

### Visual gauntlet limitation
The named visual bars guided the design decisions, but the available GitHub/Vercel connector path did not provide a reliable authenticated full-app screenshot harness for every phase. The phase gates therefore proved atomic source scope and preserved behavior at the code level. A final browser screenshot pass against AdPanel should be run after the latest `main` is deployed to the VPS.

## Remaining debt
- Build and deploy the final `main` commit to the VPS as a new immutable image, then verify `/up`, login, Reverb, Supervisor, and key authenticated pages.
- Capture desktop/mobile screenshots of login, dashboard, calendar, composer, assets, analytics, automations, accounts, team/approval, and MCP/agent surfaces for a true page-by-page AdPanel gauntlet.
- Replace remaining upstream legal/docs/community links only after Posta-owned destinations exist.
- Audit remaining legacy TryPost image assets and remove only those no longer required by email templates or compatibility surfaces.
- Treat a dedicated marketing-site redesign as separate work if the live marketing site is not served from this application repository.

## Rollback model
Each visual phase was isolated to its own branch/PR and merged as a bounded commit. Git history is the source rollback mechanism. Deployment images should remain immutable so production can be rolled back independently of task-state tooling.

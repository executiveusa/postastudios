# Posta Studio

**MACS Digital Media's in-house social media scheduler and publishing system.**

Posta Studio is the internal social media operating system used by **MACS Digital Media** to plan, create, review, schedule, publish, and manage content across multiple brands and client workspaces.

It is built for one job: give the MACS team a single place to run social media without depending on a stack of disconnected subscription tools.

> Internal product · Built Here by MACS Digital Media

---

## What Posta Studio does

Posta Studio brings the core social media workflow into one system:

- **Visual publishing calendar** — plan content by month, week, or day and reschedule with drag-and-drop.
- **Multi-platform publishing** — prepare and publish content across supported social networks from one workflow.
- **Brand workspaces** — keep each MACS brand, client, or project separated with its own content, assets, settings, and team access.
- **Content composer** — create one post and adapt it for different networks.
- **AI-assisted drafting** — generate captions, hooks, drafts, and carousel content using the active brand profile.
- **Brand profiles** — preserve tone, language, colors, and voice across generated content.
- **Approval and collaboration** — roles, comments, mentions, and review steps for team workflows.
- **Asset library** — organize reusable media for campaigns and ongoing publishing.
- **Automations** — use scheduled triggers, RSS, webhooks, conditions, and publishing actions.
- **Analytics** — review reach and engagement from connected accounts.
- **REST API + MCP** — allow MACS agents and internal tools to create, schedule, and manage content programmatically.

## Supported networks

The current codebase includes publishing support for:

- Instagram
- Facebook
- LinkedIn
- X / Twitter
- TikTok
- YouTube
- Pinterest
- Threads
- Bluesky
- Mastodon
- Telegram
- Discord

Actual availability depends on configured platform credentials and API permissions.

---

## How MACS uses it

Posta Studio is not positioned as a public SaaS product in this repository.

It is an **internal MACS production tool** for:

1. Managing MACS Digital Media's own publishing.
2. Operating approved client social media workspaces.
3. Giving internal agents a controlled publishing surface through API and MCP.
4. Reusing brand assets, prompts, approvals, and publishing workflows instead of rebuilding the process for every campaign.
5. Keeping more of the operating stack under MACS control.

The goal is straightforward:

**One calendar. Multiple brands. Human approval where required. Less manual posting.**

---

## Product architecture

Posta Studio is built on a Laravel + Vue stack.

Core pieces currently include:

- Laravel application backend
- Vue / Inertia frontend
- Vite build system
- PostgreSQL or MySQL support
- Redis queues and cache
- Reverb / WebSocket support
- workspace and role management
- social-network integrations
- AI provider support
- REST API
- MCP integration
- automation workflows
- media storage
- analytics and telemetry options

The application is intended to run as a complete system with its PHP/Laravel runtime, database, queue workers, cache, scheduler, and connected platform credentials available.

---

## AI providers

The codebase supports configurable AI providers for text, image, and audio workflows, including provider selection through environment variables.

Current configuration surfaces include support for providers such as:

- OpenAI
- Anthropic
- Gemini
- OpenRouter
- ElevenLabs
- compatible local or self-hosted model endpoints

Provider availability depends on credentials and the capabilities enabled in the deployment.

---

## Deployment

Posta Studio should be deployed as a **full Laravel application**, not treated as a static Vite-only site.

A production environment needs, at minimum:

- PHP
- Composer dependencies
- Node / Vite build tooling
- database
- Redis
- queue worker
- scheduler
- application key and environment configuration
- social platform credentials for enabled networks

The repository may be used with MACS self-hosted infrastructure where the complete application runtime can be controlled.

---

## Configuration

Copy the example environment file and configure only the services required for the target environment:

```bash
cp .env.example .env
```

Important configuration areas include:

- application URL and environment
- database
- Redis
- sessions and queues
- filesystem / object storage
- social platform credentials
- mail
- Reverb
- AI providers
- analytics
- OAuth / Passport keys

Do not commit production secrets to the repository.

---

## Development

Install the PHP and JavaScript dependencies, configure the Laravel environment, then run the application using the project's normal Laravel/Vite development workflow.

Frontend build:

```bash
npm run build
```

The Vite build uses Laravel tooling, including Wayfinder generation, so **PHP and the Laravel application must be available during the build**.

---

## Relationship to TryPost

Posta Studio is based on the open-source **TryPost** project and has been adapted and rebranded for MACS Digital Media's internal workflow.

The upstream foundation remains subject to its original open-source license. MACS-specific branding, configuration, workflows, and product direction live in this repository.

Upstream project:

- https://github.com/trypostit/trypost

---

## License

This repository retains the upstream **GNU Affero General Public License v3.0 (AGPL-3.0)** requirements.

See [LICENSE.md](LICENSE.md) for the applicable license terms.

---

## Status

**Internal MACS Digital Media product.**

Current priorities:

- complete Posta Studio branding cleanup
- remove remaining TryPost-facing identity from internal product surfaces where appropriate
- establish a production Laravel deployment
- verify connected social-platform publishing
- connect MACS agent workflows through API/MCP
- use the product as the source of truth for the Posta Studio entry on the MACS Digital Media website

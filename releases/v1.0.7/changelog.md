## What's Changed
* chore(release): v1.0.6 changelog + customer email artifacts by @paulocastellano in https://github.com/executiveusa/postastudios/pull/189
* feat(release): render a branded changelog thumbnail in the release ritual by @paulocastellano in https://github.com/executiveusa/postastudios/pull/190
* fix: allow unicode filenames in chunked asset uploads by @paulocastellano in https://github.com/executiveusa/postastudios/pull/198
* fix: raise YouTube Shorts max duration to 3 minutes by @paulocastellano in https://github.com/executiveusa/postastudios/pull/199
* feat: wire Laravel Boost for Cursor (Sail + skills) by @paulocastellano in https://github.com/executiveusa/postastudios/pull/201
* fix(x): send JSON body on chunked media upload finalize by @paulocastellano in https://github.com/executiveusa/postastudios/pull/202
* Track post creation origin with created_via by @paulocastellano in https://github.com/executiveusa/postastudios/pull/203
* Fix MCP upload rate limits and Instagram Reel duration caps by @paulocastellano in https://github.com/executiveusa/postastudios/pull/205
* Upgrade Pest PHP from v4 to v5 by @paulocastellano in https://github.com/executiveusa/postastudios/pull/215
* Allow account owners to delete workspaces by @paulocastellano in https://github.com/executiveusa/postastudios/pull/208
* fix: keep post drafts unscheduled by default by @drbelt27 in https://github.com/executiveusa/postastudios/pull/209
* fix: skip removed social accounts when duplicating posts by @paulocastellano in https://github.com/executiveusa/postastudios/pull/226
* Update GitHub funding username by @paulocastellano in https://github.com/executiveusa/postastudios/pull/227
* Remove Star History section from README by @paulocastellano in https://github.com/executiveusa/postastudios/pull/231
* Add optional Pinterest pin title and destination link by @paulocastellano in https://github.com/executiveusa/postastudios/pull/232
* fix(tiktok): send an empty JSON object to creator_info, not an empty array by @Goo6i in https://github.com/executiveusa/postastudios/pull/224
* Add Ukrainian as a supported platform language by @axies20 in https://github.com/executiveusa/postastudios/pull/219
* Localize calendar date pickers to the active UI locale by @paulocastellano in https://github.com/executiveusa/postastudios/pull/234
* Unify sidebar workspace and account menus by @paulocastellano in https://github.com/executiveusa/postastudios/pull/240
* MCP: workspace settings, viewer read access, and token access by @paulocastellano in https://github.com/executiveusa/postastudios/pull/241
* Bump Inertia to laravel 3.3.1 and vue3 3.6.1 by @paulocastellano in https://github.com/executiveusa/postastudios/pull/242
* Welcome: pre-subscription funnel and member subscription-required screen by @paulocastellano in https://github.com/executiveusa/postastudios/pull/243
* fix: Pinterest video processing timeout — longer poll + retry by @paulocastellano in https://github.com/executiveusa/postastudios/pull/246
* Scope MCP OAuth tokens to user + workspace (#222) by @paulocastellano in https://github.com/executiveusa/postastudios/pull/245
* Activation checklist + MCP OAuth authorize UX (#239) by @paulocastellano in https://github.com/executiveusa/postastudios/pull/250
* Make Stripe Checkout configurable via billing env knobs by @paulocastellano in https://github.com/executiveusa/postastudios/pull/252
* Fix Facebook Page connect pagination (#212) by @paulocastellano in https://github.com/executiveusa/postastudios/pull/253
* fix: detect dead Threads/Instagram/Facebook tokens reported under non-190 codes by @paulocastellano in https://github.com/executiveusa/postastudios/pull/254
* feat: proactive connection check for at-risk posts + SocialAccount name centralization by @paulocastellano in https://github.com/executiveusa/postastudios/pull/256
* fix: replace hardcoded platform URLs in ConnectionVerifierTest with config() by @paulocastellano in https://github.com/executiveusa/postastudios/pull/258
* fix: eager-load workspace.account in SocialAccountObserver to prevent lazy loading crash by @paulocastellano in https://github.com/executiveusa/postastudios/pull/259
* fix: guard ContentTypeMatchesPlatform against non-uuid social_account_id by @paulocastellano in https://github.com/executiveusa/postastudios/pull/260
* fix: stop reporting client-error OAuth exceptions to Nightwatch by @paulocastellano in https://github.com/executiveusa/postastudios/pull/261
* ci: local TIA test runs; simplify e2e (drop sharding + e2e-gate) by @paulocastellano in https://github.com/executiveusa/postastudios/pull/262
* fix: chunked upload session collision + workspace name i18n by @paulocastellano in https://github.com/executiveusa/postastudios/pull/263
* fix: sanitize invalid UTF-8 bytes in uploaded filenames by @paulocastellano in https://github.com/executiveusa/postastudios/pull/265

## New Contributors
* @drbelt27 made their first contribution in https://github.com/executiveusa/postastudios/pull/209
* @Goo6i made their first contribution in https://github.com/executiveusa/postastudios/pull/224
* @axies20 made their first contribution in https://github.com/executiveusa/postastudios/pull/219

**Full Changelog**: https://github.com/executiveusa/postastudios/compare/v1.0.6...v1.0.7

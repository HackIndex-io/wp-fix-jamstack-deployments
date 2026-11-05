=== JAMstack Deployments (HackIndex Patched) ===
Contributors: crgeary, joshuavanderpoll
Tags: jamstack, netlify, webhook
Tested up to: 7.1
Stable tag: 1.1.2
Requires PHP: 5.6
License: GPL-3.0
License URI: https://github.com/crgeary/wp-jamstack-deployments/blob/master/LICENSE

A WordPress plugin for JAMstack deployments on Netlify (and other platforms). (HackIndex Patched)

== Description ==

= HackIndex Patched fork =
This is an unofficial fork of JAMstack Deployments by Christopher Geary. The original plugin is no longer maintained and its latest release (1.1.1) has a [known vulnerability](https://www.wordfence.com/threat-intel/vulnerabilities/id/c5f12e55-3608-415a-82ce-34781994111c). HackIndex maintains this fork for security fixes only.

* We fix security issues and keep the plugin working on current WordPress and PHP versions. We do not add features or change how the plugin works.
* It is a drop-in replacement: same plugin folder, settings, actions and filters, so your build hook and deployment settings keep working.
* HackIndex is not affiliated with or endorsed by Christopher Geary. Please do not contact the original author for support with this fork, open an issue on the fork instead.
* Original plugin: [WordPress.org](https://wordpress.org/plugins/wp-jamstack-deployments/) and [GitHub](https://github.com/crgeary/wp-jamstack-deployments) by Christopher Geary.
* HackIndex fork and issues: [github.com/HackIndex-io/wp-jamstack-deployments](https://github.com/HackIndex-io/wp-jamstack-deployments)
* Licensed under the GPL-3.0, like the original, and provided without any warranty.

Please refer to the Github repository [crgeary/wp-jamstack-deployments](https://github.com/crgeary/wp-jamstack-deployments) for usage instructions, and for support.

== Screenshots ==
1. Admin settings on the Settings -> Deployments screen

== Changelog ==

= 1.1.2 =
* Security: fixed Missing Authorization ([CVE-2026-25409](https://www.cve.org/CVERecord?id=CVE-2026-25409), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/c5f12e55-3608-415a-82ce-34781994111c)) that let any logged in user, including subscribers, trigger a deployment through the admin bar AJAX action. The "Deploy Website" button and its AJAX action now require the `publish_posts` capability (authors and up), and the "Test Deployment" link on the settings page requires `manage_options`.
* Security: escaped the badge image URL in the admin bar, so an administrator without `unfiltered_html` can no longer store a script in it
* Security: escaped the post type, taxonomy and status labels and the page title on the settings screen
* Fixed PHP warnings when a term is saved before the settings were saved, and a PHP 8.1+ deprecation on the settings screen
* Tested with WordPress 7.1 and PHP 8.0 to 8.5

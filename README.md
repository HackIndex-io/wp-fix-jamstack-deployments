# JAMstack Deployments (HackIndex Patched)

> [!IMPORTANT]
> This is an unofficial fork of [JAMstack Deployments](https://wordpress.org/plugins/wp-jamstack-deployments/) by [Christopher Geary](https://github.com/crgeary/wp-jamstack-deployments). HackIndex is not affiliated with or endorsed by the original author.

The original plugin is no longer maintained and its latest release (1.1.1) has a [known vulnerability](https://www.wordfence.com/threat-intel/vulnerabilities/id/c5f12e55-3608-415a-82ce-34781994111c). HackIndex maintains this fork for security fixes only:

- We fix security issues and keep the plugin working on current WordPress and PHP versions.
- We do not add features or change how the plugin works.
- It is a drop-in replacement: same plugin folder, option name, actions and filters, so your build hook and deployment settings keep working.

Need help with this fork? [Open an issue](https://github.com/HackIndex-io/wp-jamstack-deployments/issues) here, please don't contact the original author about it.

## What it does

Fires a request to a build hook (Netlify, Vercel and other JAMstack hosts) when posts, terms or ACF options pages are created, updated or deleted, and adds a "Deploy Website" button and an optional status badge to the admin bar. Settings are under **Settings > Deployments**. The actions and filters are documented in the [original README](https://github.com/crgeary/wp-jamstack-deployments/blob/master/README.md) and work the same in this fork.

![Settings Screen](.wordpress-org/screenshot-1.png)

## Security fixes

### 1.1.2

- Missing Authorization ([CVE-2026-25409](https://www.cve.org/CVERecord?id=CVE-2026-25409), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/c5f12e55-3608-415a-82ce-34781994111c)): the nonce for the "Deploy Website" AJAX action was printed for every logged in user and the action had no capability check, so any subscriber could trigger deployments (and use up build minutes) as often as they liked. The button and its AJAX action now require the `publish_posts` capability (authors and up, who already trigger a deployment when they publish), and the "Test Deployment" link on the settings page requires `manage_options`. Subscribers and contributors no longer see the button.
- The badge image URL is escaped in the admin bar, so an administrator without `unfiltered_html` (multisite, or `DISALLOW_UNFILTERED_HTML`) can no longer store a script in it that runs for every user with the admin bar
- The post type, taxonomy and status labels and the page title on the settings screen are escaped
- Fixed PHP warnings when a term is saved before the settings were saved, and a PHP 8.1+ deprecation on the settings screen
- Tested with WordPress 7.1 and PHP 8.0 to 8.5

## Install

1. Download `wp-jamstack-deployments.zip` from the [latest release](https://github.com/HackIndex-io/wp-jamstack-deployments/releases/latest).
2. Upload the zip in **Plugins > Add New > Upload Plugin** and choose **Replace current with uploaded**. Your settings are kept.
3. Don't delete the original plugin first: deleting a plugin can run its uninstall and remove its settings.

WordPress does not update this fork automatically. Watch this repo's releases to get new security fixes.

## License

GPL-3.0, like the original. See [LICENSE](LICENSE). Provided without any warranty.

All credit for the plugin goes to [Christopher Geary](https://github.com/crgeary/wp-jamstack-deployments). The full upstream history is kept in this repository.

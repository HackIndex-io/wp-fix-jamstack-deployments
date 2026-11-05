## 1.1.2

- Security: fixed Missing Authorization ([CVE-2026-25409](https://www.cve.org/CVERecord?id=CVE-2026-25409), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/c5f12e55-3608-415a-82ce-34781994111c)) that let any logged in user, including subscribers, trigger a deployment through the admin bar AJAX action. The "Deploy Website" button and its AJAX action now require the `publish_posts` capability (authors and up), and the "Test Deployment" link on the settings page requires `manage_options`.
- Security: escaped the badge image URL in the admin bar, so an administrator without `unfiltered_html` can no longer store a script in it
- Security: escaped the post type, taxonomy and status labels and the page title on the settings screen
- Fixed PHP warnings when a term is saved before the settings were saved, and a PHP 8.1+ deprecation on the settings screen
- Tested with WordPress 7.1 and PHP 8.0 to 8.5

## 1.1.1

- Add width/height to admin bar SVG to fix FOUC

## 1.1.0

- Add settings to allow user to specify "post statuses" that trigger deployments
- Add support for deploying when ACF options pages are updated

## 1.0.0

- No longer uses `save_post` and `transition_post_status` to detect updates. Only uses `transition_post_status`
- Fix undefined offset error when options not yet saved

## 0.4.1

- No longer uses `sanitize_text_field()` on webhook url

## 0.4.0

- Add support for `transition_post_status` to better handle post changes

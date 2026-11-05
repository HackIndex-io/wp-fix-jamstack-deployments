<?php

/**
 * Plugin Name: JAMstack Deployments (HackIndex Patched)
 * Plugin URI: https://github.com/crgeary/wp-jamstack-deployments
 * Description: A WordPress plugin for JAMstack deployments on Netlify (and other platforms). (HackIndex Patched)
 * Author: Christopher Geary
 * Author URI: https://crgeary.com
 * Version: 1.1.2
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * Modified by HackIndex on 2026-11-05: security fixes. Fork of https://github.com/crgeary/wp-jamstack-deployments
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CRGEARY_JAMSTACK_DEPLOYMENTS_FILE', __FILE__);
define('CRGEARY_JAMSTACK_DEPLOYMENTS_PATH', untrailingslashit(plugin_dir_path(__FILE__)));
define('CRGEARY_JAMSTACK_DEPLOYMENTS_URL', untrailingslashit(plugin_dir_url(__FILE__)));

require_once(CRGEARY_JAMSTACK_DEPLOYMENTS_PATH . '/src/App.php');

Crgeary\JAMstackDeployments\App::instance();

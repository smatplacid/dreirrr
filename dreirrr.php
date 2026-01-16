<?php

/*
 * Plugin Name:       3RRR
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           01.2026
 * Requires at least: 5.2
 * Requires PHP:      8.0
 * Author:            Roman Hanzlik
 * Author URI:        https://author.example.com/
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       alpha-projekt
 * Domain Path:       /languages
 * Update Checker:    https://github.com/YahnisElsts/plugin-update-checker
 */

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/smatplacid/dreirrr/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('stable-branch-name');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('your-token-here');
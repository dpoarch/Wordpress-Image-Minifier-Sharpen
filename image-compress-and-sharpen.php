<?php

/**
 * Plugin Name: Wordpress Image Minifier & Enhancement
 * Description: Minifies Images and improve the image quality for both JPG/PNG. Image compression settings under <a href="options-general.php?page=imgcs_theme_options">Settings &rarr; Image Compression</a>.
 * Version: 1.1
 * Author: David Poarch
 * Author URI: https://github.com/dpoarch
 * License: GPL v3
 *
 * Progressive JPG functionality added by David Poarch.
 * https://github.com/dpoarch
 *
 * 	Forked from the Sharpen Resized Images plugin.
 * 	https://github.com/dpoarch
 */

	require_once( dirname( __FILE__) . '/imgcs-options.php' );
	require_once( dirname( __FILE__) . '/imgcs-process.php' );

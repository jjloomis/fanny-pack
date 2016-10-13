<?php
/*
Plugin Name: Fanny Pack
Plugin URI:  https://github.com/jjloomis/fanny-pack
Description: Run Jetpack in Development Mode. No WordPress.com account required.
Version:     1.0.0
Author:      JJ Loomis
Author URI:  https://github.com/jjloomis
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Filter to run Jetpack in Development Mode.
add_filter( 'jetpack_development_mode', '__return_true' );

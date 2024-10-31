<?php
/*
Plugin Name: RoboHash Default Avatar
Plugin URI: https://wordpress.org/plugins/robohash-default-avatar/
Description: Add RoboHash as an option to the default avatars list at Settings -> Discussion -> Default Avatar
Version: 1.0.0
Author: Ilan Firsov
Author URI: https://www.ilanfirsov.me
License: MIT License
License URI: https://opensource.org/licenses/MIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct access!' );
}

add_filter( 'avatar_defaults', 'firsov_agr_avatar_defaults' );
function firsov_agr_avatar_defaults ( $avatar_defaults ) {
	// In the event that WordPress will add Robohash by default at some later point
	// we check to see if it was defined already
	if ( ! isset( $avatar_defaults['robohash'] ) ) {
		// WordPress passes the "key" in Gravatars default avatar URL parameter so we don't neet to do any fancy stuff
		$avatar_defaults['robohash'] = 'RoboHash (Generated)';
	}

	return $avatar_defaults;
}


<?php
/**
 * Plugin Name: Simple User Listing - Demo Avatars
 * Plugin URI: http://www.kathyisawesome.com/489/simple-user-listing/
 * Description: Use Picsum.photos to generate some random random avatars for testing Simple User Listing.
 * Author: Kathy Darling
 * Version: 1.0.0
 * Author URI: http://kathyisawesome.com
 * License: <GPL-3 class="0"></GPL-3>
 * Text Domain: simple-user-listing
 * 
 * Copyright 2024  Kathy Darling                
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * Filter the avatar data to inject our picsum.photos URL
 *
 * @param  array $args
 * @return array
 */
function simple_user_listing_random_avatars( $args )
{
    $args['url'] = 'https://picsum.photos/120?random='. uniqid();
    return $args;
}
add_filter('pre_get_avatar_data', 'simple_user_listing_random_avatars');
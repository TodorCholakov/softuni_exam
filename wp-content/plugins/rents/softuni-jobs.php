<?php
/*
 * Plugin Name:       Rent houses
 * Plugin URI:        https://todorcholakov.com
 * Description:       Our basic plugin for rents
 * Version:           0.1
 * Requires at least: 5
 * Requires PHP:      8.0
 * Author:            SoftUni
 * Author URI:        https://todorcholakov.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       softuni-jobs
 * Domain Path:       /languages
 */

// Load Custom Post Types
require 'cpt-rents.php';

// Load our basic functions
include 'functions.php';

// var_dump( 'Hello, from my plugin' );

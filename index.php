<?php
/**
 *  Title:          TextShowdown - text-based online game framework
 *  Link:           https://github.com/uia/textshowdown
 *  Authors:        Patrick Farnkopf, Gabriel Wanzek
 *  Version:        v0.0.1 (ALPHA) - Using this isn't recommend!
 *  License:        Apache License v2.0 - It's free for use, enjoy!
 *  Requirements:   PHP 5.3 | MySQL-Server
 */

session_start();

$page = isset($_GET['p']) && !isset($_GET['game']) ? $_GET['p'] : '';

require_once 'includes/Content/top.inc.php';

switch ($page) {
    default:
        
        require_once 'includes/Content/home.inc.php';
        

}
require_once 'includes/Content/bottom.inc.php';
?>

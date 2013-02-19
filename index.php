<?php

session_start();

$page = isset($_GET['p']) && !isset($_GET['game']) ? $_GET['p'] : '';

switch ($page) {
    default:
        require_once 'includes/Content/home.inc.php';
}

?>

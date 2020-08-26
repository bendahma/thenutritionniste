<?php 
    // check if session exists if not start one
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // require the database connect information so we can used it in other files
    require_once('database.php');
?>
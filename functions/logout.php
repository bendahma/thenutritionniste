<?php

require_once('init.php');

if(session_destroy()){
    header("location: ../index.php");
}
?>
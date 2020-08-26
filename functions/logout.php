<?php
// require the init file
require_once('init.php');
// end the session then check if session has been destroyed and redirect to the index page of the website
if(session_destroy()){
    header("location: ../index.php");
}
?>
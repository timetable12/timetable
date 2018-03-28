<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:set.html'); die();
    }
?>

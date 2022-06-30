<?php
if (!isset($_SESSION['message'])) {
    session_start();
}


if (isset($_GET['close_session'])) {

    session_unset();
    
    @header('Location: login.php');
}
<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("database.php");
if (isset($_SESSION['userId'])){
    header("Location: welcome.php");
}
else {
    header("Location: login.php");
}
?>

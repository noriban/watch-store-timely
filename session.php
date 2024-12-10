<?php
session_start();

if (isset($_SESSION["userid"]) && $_SESSION["userid"]=== true) {
$_SESSION["login"] = true;
header('location: index.php;');
}



?>
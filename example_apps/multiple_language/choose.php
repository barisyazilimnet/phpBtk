<?php
session_start();
$lang = $_GET["lang"];
$_SESSION["lang"] = $lang;
header("Location:index.php");

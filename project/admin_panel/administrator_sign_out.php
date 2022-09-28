<?php
unset($_SESSION["admin_user"]);
session_destroy();
header("Location: index.php");
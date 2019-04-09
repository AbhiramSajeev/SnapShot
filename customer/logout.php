<?php
session_start();

session_destroy();
header("location:../users/signin.php");
?>
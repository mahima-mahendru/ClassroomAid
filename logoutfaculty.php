<?php
session_start();
unset($_SESSION["fidx"]);
header('Location:index.php');
?>
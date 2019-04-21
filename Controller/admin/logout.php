<?php
session_start();
unset($_SESSION['u_name']);
unset($_SESSION['pass']);
header('Location: ../user/home.php');
 ?>

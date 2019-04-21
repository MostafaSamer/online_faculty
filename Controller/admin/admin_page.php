<?php
session_start();
include_once 'Design.php';
$username = user_name::getInstance();
$user_name = $username->UserName();

// another object
//$username2 = user_name::getInstance();
//$user_name = $username2->UserName();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    //connect to database
    include_once '../../model/connect.php';
    include_once '../faculty/class_faculty.php';
    include_once '../admin/class_admin.php';

    // buttons
    include_once '../../view/html/admin/navbar.html';

    // search admin code
    include_once '../../view/html/admin/search_admin.html';
    // got to search_admin_admin.php

    // search code
    include_once '../../view/html/admin/search.html';
    // go to search_admin_faculty.php

    //footer
    /* in process*/
} else {
  header('Location: ../user/home.php');
}
?>

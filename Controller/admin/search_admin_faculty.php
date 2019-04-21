<?php
session_start();
include_once '../../model/connect.php';
include_once '../faculty/class_faculty.php';
include_once '../admin/class_admin.php';
include_once  '../../view/html/admin/navbar.html';
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    if ((isset($_POST['button']))&& !empty($_POST['admin_search_f'])){
        $db = new Database();
        $fac = new faculty();
        $ser = $_POST['admin_search_f'];
        $arr = $fac->search_faculty("$ser");
        $_SESSION['search_fac'] = $arr;
        header('Location: search_fac.php');
    }
}
?>

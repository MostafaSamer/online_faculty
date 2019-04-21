<?php
session_start();
include_once '../../model/connect.php';
include_once '../faculty/class_faculty.php';
include_once '../admin/class_admin.php';
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    if (isset($_POST['username'])) {
        $db = new Database();
        $adm = new admin();
        $ser = $_POST['username'];
        $arr = $adm->search_admin("$ser");
        $_SESSION['search_admin'] = $arr;
        header('Location: search_admin.php');
    }
}
?>

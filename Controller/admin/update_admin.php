<?php
//navbar
include_once '../../view/html/admin/navbar.html';
session_start();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    //connect to database
    include_once '../../model/connect.php';
    $db = new Database();
    include_once '../admin/class_admin.php';
    $adm = new admin();

    if (isset($_POST['update_admin'])) {
        $id = $_GET['id'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $adm->update_admin($id, $username, $phone);
        echo "Updated";

    }
    if (isset($_POST['delete_admin'])) {
        $db->remove($_GET['id'], 'admin');
        echo "Removed";
    }
} else {
  header('Location: ../user/home.php');
}
?>

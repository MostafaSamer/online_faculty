<?php
session_start();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    /* connect to database*/
    include_once '../../model/connect.php';
    include_once '../admin/class_admin.php';

    //navbar
    include_once '../../view/html/admin/navbar.html';

    //add form
    include_once '../../view/html/admin/add_admin.html';

    if (isset($_POST['Add'])) {
        $username=$_POST['username'];
    	$phone=$_POST['phone'];
    	$pass=md5($_POST['password']);
    	if ($username&&$phone&&$pass) {
            $db = new Database();
            $adm = new admin();
    		$adm->addNewAdmin($username, $phone, $pass);
    	} else {
            echo "Feild is empty";
        }
    }
} else {
  header('Location: ../user/home.php');
}
?>

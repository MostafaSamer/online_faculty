<?php
//navbar
include_once '../../view/html/admin/navbar.html';
session_start();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    //connect to database
    include_once '../../model/connect.php';
    $db = new Database();
    include_once '../faculty/class_faculty.php';
    $fac = new faculty();

    if (isset($_POST['updateFac'])) {
        $id = $_GET['id'];
        $name = $_POST['Name'];
        $dep = $_POST['Department'];
        $course = $_POST['Courses'];
        $area = $_POST['Area_Expertise'];
        $pro = $_POST['Profissional_Interest'];
        $phone = $_POST['Phone'];
        $loc = $_POST['Location'];
        //add img
        $filename=$_FILES['image']['name'];
        $filetmp=$_FILES['image']['tmp_name'];
        $file_basename= basename($_FILES['image']['name']);
        $dir="upload/";
        $final_dir=$dir.$file_basename;
        // to determine type of img
        $allowed =  array('gif','png' ,'jpg','jpeg');
        $filenam = $_FILES['image']['name'];
        $ext = pathinfo($filenam, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed)) {
            echo 'Type of Image Invalid';
        } else {
            move_uploaded_file($filetmp, $final_dir);
            if ($name&&$dep&&$course&&$area&&$pro&&$phone&&$loc&&$final_dir) {
                $fac->update_fac($id, $name, $dep, $course, $area, $pro, $phone, $loc, $final_dir);
            } else {
                echo "feild is empty";
            }
        }
    }
    if (isset($_POST['deleteFac'])) {
        $db->remove($_GET['id'], 'faculty');
        echo "Removed";
    }
} else {
  header('Location: ../user/home.php');
}
?>

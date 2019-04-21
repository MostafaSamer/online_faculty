<?php
session_start();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
    /* connect to database*/
    include_once '../../model/connect.php';
    include_once '../faculty/class_faculty.php';

    //navbar
    include_once '../../view/html/admin/navbar.html';

    //add form
    include_once '../../view/html/admin/add_form.html';

    if (isset($_POST['Submit'])) {

        $name=$_POST['Name'];
        $dep=$_POST['Department'];
        $course=$_POST['Courses'];
        $area=$_POST['Area_Expertise'];
        $pro=$_POST['Profissional_Interest'];
        $phone=$_POST['Phone'];
        $loc=$_POST['Location'];
        //add img
        $filename=$_FILES['file']['name'];
        $filetmp=$_FILES['file']['tmp_name'];
        $file_basename= basename($_FILES['file']['name']);
        $dir="upload/";
        $final_dir=$dir.$file_basename;
        // to determine type of img
        $allowed =  array('gif','png' ,'jpg','jpeg');
        $filenam = $_FILES['file']['name'];
        $ext = pathinfo($filenam, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed)) {
            echo 'Type of Image Invalid';
        } else {
            move_uploaded_file($filetmp, $final_dir);
            if ($name&&$dep&&$course&&$area&&$pro&&$phone&&$loc&&$final_dir) {
                $db = new Database();
                $fac = new faculty();
                $fac->addNewFaculty($name, $dep, $course, $area, $pro, $phone, $loc, $final_dir);
            } else {
                echo "feild is empty";
            }
        }
    }
} else {
  header('Location: ../user/home.php');
}
?>

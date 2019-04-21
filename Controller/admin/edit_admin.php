<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Collage</title>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
            //connect to database
            include_once '../../model/connect.php';
            $db = new Database();
            include_once '../admin/class_admin.php';
            $adm = new admin();
            $fac = array();
            $admin_id = $_GET['id'];
            $fac = $adm->search_admin_by_id($admin_id);
            include_once '../../view/html/admin/navbar.html';
            echo "<br>";
        } else {
            header('Location: ../user/home.php');
        }
        ?>
        <div class="container text-center">
            <div class="text-center">
                <form class="" action="update_admin.php?id=<?php echo $fac->id ?>" method="POST">
                    <label for="">ID: </label>
                    <br><br>
                    <input type="text" name="username" value="<?php echo $fac->username ?>" placeholder="Name" class="form-control">
                    <br><br>
                    <input type="text" name="phone" value="<?php echo $fac->phone ?>" placeholder="Department" class="form-control">
                    <br><br>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" name="delete_admin" class="btn btn-danger">Delete</button>
                        <button type="submit" name="update_admin" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
            <br><br>
        </div>
    </body>
</html>

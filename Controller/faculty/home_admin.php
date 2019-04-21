<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Collage</title>
        <link rel="stylesheet" href="../../view/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
            //connect to database
            //include_once '../../model/connect.php';
            //$db = new Database();
            include_once '../faculty/class_faculty.php';
            $fac1 = new faculty();
            $fac = array();
            $fac = $fac1->search_faculty_by_id($_GET['id']);
            include_once '../../view/html/admin/navbar.html';
            echo "<br>";

        ?>
        <div class="container text-center">
            <div class="text-center">
                <form class="" action="../admin/update_fac.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="Name" value="<?php echo $fac->name ?>" placeholder="Name" class="form-control">
                    <br><br>
                    <input type="text" name="Department" value="<?php echo $fac->department ?>" placeholder="Department" class="form-control">
                    <br><br>
                    <input type="text" name="Courses" value="<?php echo $fac->course ?>" placeholder="Courses" class="form-control">
                    <br><br>
                    <input type="text" name="Area_Expertise" value="<?php echo $fac->area_expertise ?>" placeholder="Area Expertise" class="form-control">
                    <br><br>
                    <input type="text" name="Profissional_Interest" value="<?php echo $fac->professional_interest ?>" placeholder="Profissional Interest" class="form-control">
                    <br><br>
                    <input type="text" name="Phone" value="<?php echo $fac->phone ?>" placeholder="Phone" class="form-control">
                    <br><br>
                    <input type="text" name="Location" value="<?php echo $fac->location ?>" placeholder="Location" class="form-control">
                    <br><br>
                    <input type="file" name="image" class="form-control">
                    <br><br>
                    <div class="text-center">
                        <button type="submit" name="deleteFac" class="btn btn-danger">Delete</button>
                        <button type="submit" name="updateFac" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
            <br><br>
        </div>
        <?php
        } else {
            header('Location: ../user/home.php');
        }
    ?>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

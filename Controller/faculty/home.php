<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Collage</title>
        <link rel="stylesheet" href="../../view/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        //connect to database
        include_once '../../model/connect.php';
        $db = new Database();
        include_once 'class_faculty.php';
        $fac1 = new faculty();
        include_once '../user/class_user.php';
        $fac = array();
        $fac = $fac1->search_faculty_by_id($_GET['id']);
        include_once '../../view/html/user/header.html';
        echo "<br>";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src='../admin/<?php echo $fac->img ?>' height='80' width='160'>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <h1><?php echo "$fac->name"; ?></h1>
                    </div>
                    <br>
                    <div class="row">
                        <h4>Location: <?php echo "$fac->location"; ?></h4>
                    </div> <br>
                    <div class="row">
                        <h5>Courses: <?php echo "$fac->course"; ?></h5>
                    </div> <br>
                    <div class="row">
                        <h5>Area Expertise: <?php echo "$fac->area_expertise"; ?></h5>
                    </div> <br>
                    <div class="row">
                        <h5>Professional Interest: <?php echo "$fac->professional_interest"; ?></h5>
                    </div> <br>
                    <div class="row">
                        <h5>Department: <?php echo "$fac->department"; ?></h5>
                    </div> <br>
                    <div class="row">
                        <h5>Phone: <?php echo "$fac->phone"; ?></h5>
                    </div> <br>
                </div>
            </div>
            <br><br>
            <div class="text-center">
                <form method="POST">
                    <button type="submit" name="button_print" class="btn btn-info">Print a Report</button>
                        <?php
                        $user = new user();
                        $user->report($fac->id)
                        ?>
                </form>
            </div>
        </div>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

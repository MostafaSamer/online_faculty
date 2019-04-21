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
            include_once '../../model/connect.php';
            $db = new Database();

            //navbar
            include_once '../../view/html/admin/navbar.html';
            foreach ($_SESSION['search_fac'] as $key => $value) { ?>
                <br><br>
                <div class="container">
                    <a href="../faculty/home_admin.php?id=<?php echo $value->id; ?>">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src='../admin/<?php echo $value->img ?>' height='80' width='160'>
                            </div>
                            <div class="col-lg-8">
                                <h2><?php echo "$value->name"; ?></h2>
                                <h5><?php echo "Area Expertise: $value->area_expertise"; ?></h5>
                                <h5><?php echo "Location: $value->location"; ?></h5>
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        } else {
            header('Location: ../user/home.php');
        }
        ?>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

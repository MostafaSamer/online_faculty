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
        //connect to database
        include_once '../../model/connect.php';
        $db = new Database();

        //navbar
        include_once '../../view/html/user/header.html';
        foreach ($_SESSION['search_result'] as $key => $value) {?>
            <div class="container">
                <br><br>
                <a href="../faculty/home.php?id=<?php echo $value->id; ?>">
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
        ?>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

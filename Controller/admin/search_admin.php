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
            if ($_SESSION['search_admin'] == null) {
                echo "Not Found";
            } else {
                foreach ($_SESSION['search_admin'] as $key => $value) { ?>
                    <br><br>
                    <div class="container">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>userName</th>
                                    <th>Phone</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $value->username." "; ?></td>
                                    <td><?php echo $value->phone; ?></td>
                                    <td><a href="edit_admin.php?id=<?php echo $value->id ?>"><button class="btn btn-info">Edit</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                }
            }
        } else {
            header('Location: ../user/home.php');
        }
        ?>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

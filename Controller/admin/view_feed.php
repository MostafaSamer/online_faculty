<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Collages</title>
        <link rel="stylesheet" href="../../view/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {
            /* connect to database*/
            include '../../model/connect.php';

            //navbar
            include '../../view/html/admin/navbar.html';
            $DB = new Database();
            $arr = array();
            $arr = $DB->all('feedback');
            $arr = array_reverse($arr);
            echo "<br>";
            foreach ($arr as $key) { ?>
                <div class="container">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $key->mess." "; ?></td>
                                <td><?php echo $key->date_; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                $update_query = "UPDATE feedback SET readed=0 WHERE readed=1";
                mysqli_query($connect, $update_query);
            }
        } else {
            header('Location: ../user/home.php');
        }
        ?>
    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

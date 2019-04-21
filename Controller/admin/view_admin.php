<?php
session_start();
if (isset($_SESSION["u_name"])&&isset($_SESSION["pass"])) {

    /* connect to database*/
    include_once '../../model/connect.php';

    //navbar
    include_once '../../view/html/admin/navbar.html';

    //get admins from database
    $DB = new Database();
    $arr = array();
    $arr = $DB->all('admin');
    echo "<br>";
    foreach ($arr as $key) { ?>
        <div class="container">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $key->id; ?></td>
                        <td><?php echo $key->username ?></td>
                        <td><?php echo $key->phone ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
} else {
  header('Location: ../user/home.php');
}
?>

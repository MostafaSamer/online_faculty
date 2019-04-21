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
        //connect to database
        /* in  process*/
        include_once '../../model/connect.php';

        // login code
        include_once '../../view/html/user/header.html';
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $arr = array();
            $login = new Database();
            $arr = $login->logIn($username,$password);
            if ($arr == "") { ?>
                <script type="text/javascript">
                    alert("Not Found");
                </script>
            <?php
            }else {
              $_SESSION["u_name"]=$username;
              $_SESSION["pass"]=$password;
              header('Location: ../admin/admin_page.php');
            }
        }


        // search code
        include_once '../../view/html/user/search.html';
        if (isset($_POST['fname'])){
            $DB = new Database();
            $ser = $_POST['fname'];
            $arr = $DB->search_faculty("$ser");
            $_SESSION['search_result'] = $arr;
            header('Location: search_result.php');
        }

        //view faculty 10
        /* in process */
        $DB = new Database();
        $arr = array();
        $arr = $DB->all('faculty');
        echo "<br>";
        $i = 0;
        foreach ($arr as $key) {
            if ($i < 10) {
                ?>
                <div class="container">
                    <a href="../faculty/home.php?id=<?php echo $key->id; ?>">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src='../admin/<?php echo $key->img ?>' height='80' width='160'>
                            </div>
                            <div class="col-lg-8">
                                <h2><?php echo $key->name ?></h2>
                                <?php echo "Area Expertise: ".$key->area_expertise ?>
                                <?php echo "<br>" ?>
                                <?php echo "Location: ".$key->location ?>
                            </div>
                        </div>
                    </a>
                    <hr>
                </div>
                <?php
            } else {
                break;
            }

        }

        // feedback code
        include_once '../../view/html/user/send_feedback.html';
        if (isset($_POST['ftext'])) {
            $massage_send=$_POST["ftext"];
            $feedback=new Database();
            $feedback->sendFeedback($massage_send);
        }

        //footer
        /* in process*/
        ?>

    </body>
    <script src="../../view/js/bootstrap.min.js" charset="utf-8"></script>
</html>

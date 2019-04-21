<?php
        class user_name
        {


         public static function getInstance(){
        static $instance=null;
        if(null==$instance){
            $instance=new static();
        }
        else{
            header('Location: ../user/home.php');
        }
        return $instance;
    }
    function UserName()
        {
            return $username=$_SESSION["u_name"];//return to index
        }
        }
        ?>

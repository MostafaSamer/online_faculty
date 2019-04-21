<?php
/**
 *
 */
class user {

    public $message;

    function __construct(){
    }

    public function sendFeedback($message){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->sendFeedback($message);
    }

    public function report($fac_id) {
        if (isset($_POST['button_print']))
        {
           header("Location:../faculty/report_pdf.php?id=$fac_id");
        }
    }

}

?>

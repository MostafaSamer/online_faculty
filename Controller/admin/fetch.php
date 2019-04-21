<?php
//fetch.php;
if(isset($_POST["view"]))
{
$connect = mysqli_connect("localhost", "root", "", "test");

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE feedback SET readed=0 WHERE readed=1";
  mysqli_query($connect, $update_query);
 }

 $output = '';
 $query_1 = "SELECT * FROM feedback WHERE readed=1";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>

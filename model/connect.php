<?php
/**
 *
 */
class Database {

    #####################################
    // Connect Function
    #####################################
    public function connect(){

        $conn = mysqli_connect('localhost' , 'root' , '' , 'test');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
    #####################################
    // Remove Function
    #####################################
    public function remove($id,$table) {
        $conn = $this->connect();
        $sql1 = "DELETE FROM $table WHERE id = '$id'";
        $res1 = mysqli_query($conn,$sql1);
    }
    #####################################
    // List Function
    #####################################
    public function all($table){ // takes table name and returns all the date in that table
        $conn = $this->connect();
        $sql = "SELECT * FROM $table";
        $res = mysqli_query($conn,$sql);
        $val = array();
        $i =0;
        while ($ret = mysqli_fetch_object($res)) {
            $val[$i] = $ret;
            $i++;
        }
        return $val;
    }

    #####################################
    // Add Functions
    #####################################
    public function addNewAdmin($username, $phone, $pass){
        $conn = $this->connect();
        $q = "INSERT INTO admin (username , phone , password) VALUES ('$username' , '$phone', '$pass')";

        $result = mysqli_query($conn,$q);
    }

    public function addNewFaculty($name, $dep, $course, $area, $pro, $phone, $loc, $img){
        $conn = $this->connect();
        $q = "INSERT INTO faculty (name, department, course, area_expertise, professional_interest, phone, location, img) VALUES ('$name', '$dep', '$course', '$area', '$pro', '$phone', '$loc', '$img')";
        $result = mysqli_query($conn,$q);
        echo "$result";
    }

    public function sendFeedback($message){
        $conn = $this->connect();
        $d = mktime(8, 12, 2018);
        $date = date("Y-m-d", $d);
        $q = "INSERT INTO feedback (mess, readed, date_) VALUES ('$message', 1,'$date')";
        mysqli_query($conn , $q);
    }

    #####################################
    // Search Functions
    #####################################
    public function search_admin($name){
        $conn = $this->connect();
        $sql = "SELECT * FROM admin WHERE username = '$name'";
        $res = mysqli_query($conn,$sql);
        $val = array();
        $i =0;
        while ($ret = mysqli_fetch_object($res)) {
            $val[$i] = $ret;
            $i++;
        }
        return $val;
   }

   public function search_admin_by_id($id) {
       $conn = $this->connect();
       $sql = "SELECT * FROM admin WHERE id = '$id'";
       $res = mysqli_query($conn,$sql);
       return mysqli_fetch_object($res);
   }

   public function search_faculty($search_var){
       $conn = $this->connect();
       $sql = "SELECT * FROM faculty
       WHERE name LIKE '%$search_var%'
       OR department LIKE '%$search_var%'
       OR course LIKE '%$search_var%'
       OR area_expertise LIKE '%$search_var%'
       OR professional_interest LIKE '%$search_var%'
       OR location LIKE '%$search_var%'";
       $res = mysqli_query($conn,$sql);
       $val = array();
       $i =0;
       while ($ret = mysqli_fetch_object($res)) {
           $val[$i] = $ret;
           $i++;
       }
       return $val;
   }

   public function search_faculty_by_id($id){
       $conn = $this->connect();
       $sql = "SELECT * FROM faculty WHERE id = '$id'";
       $res = mysqli_query($conn,$sql);
       return mysqli_fetch_object($res);
   }
    #####################################
    // update Functions
    #####################################
    public function update_admin($id, $username, $phone){
        $conn = $this->connect();
        $sql = "UPDATE admin SET username = '$username', phone = '$phone' WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
    }

    public function update_fac($id, $name, $dep, $course, $area, $pro, $phone, $loc, $img) {
        $conn = $this->connect();
        $sql = "UPDATE faculty SET name = '$name', department = '$dep', course = '$course',
                area_expertise = '$area', professional_interest = '$pro', phone = '$phone',
                location = '$loc', img = '$img' WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
    }
    #####################################
    // login Function
    #####################################
    public function logIn($username, $password) {
        $conn = $this->connect();
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        return mysqli_fetch_object($result);
    }
}

?>

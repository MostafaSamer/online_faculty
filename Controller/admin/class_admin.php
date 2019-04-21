<?php
/**
 *
 */
class admin {

    public $name;
    public $phone;
    public $pass;

    function __construct(){

    }

    public function addNewAdmin($username, $phone, $pass){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->addNewAdmin($username, $phone, $pass);
    }

    public function search_admin($name){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->search_admin($name);
   }

   public function search_admin_by_id($id) {
       include_once '../../model/connect.php';
       $db = new Database();
       return $db->search_admin_by_id($id);
   }

   public function update_admin($id, $username, $phone){
       include_once '../../model/connect.php';
       $db = new Database();
       return $db->update_admin($id, $username, $phone);
   }
}

?>

<?php
/**
 *
 */
class faculty {

    public $name;
    public $dep;
    public $course;
    public $area;
    public $pro;
    public $phone;
    public $loc;
    public $img;

    /*function __construct($name, $dep, $course, $area, $pro, $phone, $loc, $img) {
        $this->name = $name;
        $this->dep = $dep;
        $this->course = $course;
        $this->area = $area;
        $this->pro = $pro;
        $this->phone = $phone;
        $this->loc = $loc;
        $this->img = $img;
    }*/

    function __construct() {

    }

    public function addNewFaculty($name, $dep, $course, $area, $pro, $phone, $loc, $img){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->addNewFaculty($name, $dep, $course, $area, $pro, $phone, $loc, $img);
    }

    public function search_faculty($search_var){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->search_faculty($search_var);
    }

    public function search_faculty_by_id($id){
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->search_faculty_by_id($id);
    }

    public function update_fac($id, $name, $dep, $course, $area, $pro, $phone, $loc, $img) {
        include_once '../../model/connect.php';
        $db = new Database();
        return $db->update_fac($id, $name, $dep, $course, $area, $pro, $phone, $loc, $img);
    }

}

?>

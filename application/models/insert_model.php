<?php
class Insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
	
// Inserting in Table(students) of Database(fergusson)
$this->db->insert('students', $data);
echo "Student Successfully Inserted in Database........";

}
}
?>

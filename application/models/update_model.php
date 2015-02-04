<?php
class Update_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_update($eid,$data){
	
// Inserting in Table(students) of Database(fergusson)
	$this->db->where('Student_Email', $eid);
    $this->db->update('student' ,$data);
    echo " Updated $eid Successfully.....";
   
}
}
?>

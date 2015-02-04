<?php
class Delete_model extends CI_Model{
function __construct() {
parent::__construct();
}
function delete_entry($data){
	
// Inserting in Table(students) of Database(fergusson)

      $this->db->where('Student_Email', $data);
      $this->db->delete('students');
      echo " Student Deleted Sucessfully...";

}
}
?>

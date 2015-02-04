
<?php
/* Controller of Insert, Update and Delete. */
class main_controller extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->load->model('insert_model');
$this->load->model('delete_model');
$this->load->model('update_model');

}
function index() {
$this->load->view('form');
}
function getFormData(){	

// Including Validation Library
$this->load->library('form_validation');
// Displaying Errors In Div
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validation For Name Field
$this->form_validation->set_rules('dname', 'Student_Name', 'required|min_length[5]|max_length[25]');
// Validation For Email Field
$this->form_validation->set_rules('demail', 'Student_Email',  'required|valid_email');
// Validation For Contact Field
$this->form_validation->set_rules('dmobile', 'Student_Mobile', 'required|regex_match[/^[0-9]{10}$/]');
// Validation For Address Field
$this->form_validation->set_rules('daddress', 'Student_Address', 'required|min_length[10]|max_length[50]');


	/*$fields['name']	= 'Student_Name';
	$fields['email']	= 'Student_Email';
	$fields['mobile']	= 'Student_Mobile';
	$fields['address']	= 'Student_Address';

	$this->validation->set_fields($fields);*/

if ($this->form_validation->run() == FALSE)
{
$this->load->view('form');

}
else
{
$data = array(
'Student_Name' => $this->input->post('dname'),
'Student_Email' => $this->input->post('demail'),
'Student_Mobile' => $this->input->post('dmobile'),
'Student_Address' => $this->input->post('daddress'));


    $this->insert_model->form_insert($data);
}



}

function delFormData(){

// Including Validation Library
$this->load->library('form_validation');	
// Validation For Email Field
$this->form_validation->set_rules('demail', 'Student_Email',  'required|valid_email|is_unique[students.email]');
	
if ($this->form_validation->run() == FALSE)
{
$this->load->view('form');

}
else
{	
	
	$entry= $this->input->post('ddemail');
	echo $entry;
	
	$this->delete_model->delete_entry($entry);
	
 }
}

function updateFormData(){	


// Including Validation Library
$this->load->library('form_validation');
// Displaying Errors In Div
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validation For Name Field
$this->form_validation->set_rules('uname', 'Student_Name', 'required|min_length[5]|max_length[25]');
// Validation For Email Field
$this->form_validation->set_rules('uemail', 'Student_Email',  'required|valid_email|is_unique[users.email]');
// Validation For Contact Field
$this->form_validation->set_rules('umobile', 'Student_Mobile', 'required|regex_match[/^[0-9]{10}$/]');
// Validation For Address Field
$this->form_validation->set_rules('uaddress', 'Student_Address', 'required|min_length[10]|max_length[50]');


	/*$fields['name']	= 'Student_Name';
	$fields['email']	= 'Student_Email';
	$fields['mobile']	= 'Student_Mobile';
	$fields['address']	= 'Student_Address';

	$this->validation->set_fields($fields);*/

if ($this->form_validation->run() == FALSE)
{
 $this->load->view('form');
}
else
{

$uniqueid= $this->input->post('oemail');
$change = array(
'Student_Name' => $this->input->post('uname'),
'Student_Email' => $this->input->post('uemail'),
'Student_Mobile' => $this->input->post('umobile'),
'Student_Address' => $this->input->post('uaddress'));

    $this->update_model->form_update($uniqueid,$change);
    }
}
}
?>
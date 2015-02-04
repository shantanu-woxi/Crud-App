<!DOCTYPE html>
<html>
<head>
<title>CI Application</title>
</head>
<body>
<div>
<form method="post" action="main_controller/getFormData">

<h4>To Add Student Enter Below:</h4><br>
<?php echo form_error('dname'); ?>
Student Name: 
<input type="text" name="dname" id="dname">
<br><br>
<?php echo form_error('demail'); ?>
Email Id: 
<input type="text" name="demail" id="demail">
<br><br>
<?php echo form_error('dmobile'); ?>
Mobile No.: 
<input type="text" name="dmobile" id="dmobile">
<br><br>
<?php echo form_error('daddress'); ?>
Address: 
<input type="text" name="daddress" id="daddress">
<br><br><br>
<input type="submit" value="Submit">
</form>
</div>
<div>
<form method="post" action="main_controller/viewFormData">
<h4>To Delete Student Enter Below:</h4><br>
<?php echo form_error('ddemail'); ?>
Student Email Id: 
<input type="text" name="ddemail" id="ddemail">
<br><br>
<input type="submit" value="Delete">
</form>
</div>
<div>

<form method="post" action="main_controller/updateFormData">
<h4>To Update Student Enter Below:</h4><br>
<?php echo form_error('oemail'); ?>
Old Email Id: 
<input type="text" name="oemail" id="oemail">
<br><br>
<?php echo form_error('uname'); ?>
Student Name: 
<input type="text" name="uname" id="uname">
<br><br>
<?php echo form_error('uemail'); ?>
Email Id: 
<input type="text" name="uemail" id="uemail">
<br><br>
<?php echo form_error('umobile'); ?>
Mobile No.: 
<input type="text" name="umobile" id="umobile">
<br><br>
<?php echo form_error('uaddress'); ?>
Address: 
<input type="text" name="uaddress" id="uaddress">
<br><br><br>
<input type="submit" value="Update">
</form>
</div>
</body>
</html>
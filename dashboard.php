

<?php include('header.php'); ?>
<?php
$base_url = load_class('Config')->config['base_url'];
?>
<link rel="stylesheet" href="<?php echo $base_url; ?>/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>/bootstrap/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo $base_url; ?>/bootstrap/bootstrap.min.js"></script>
<br><br>
    
   <div class="container">
   	<div class="row">
   		<div class="col-lg-10">
      <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Employee Management
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><?php echo anchor("employee/createEmployee",'Create Employee'); ?></li>
   
    <li><?php echo anchor("employee/employeeAttendance",'Add Attendance'); ?></li>
  </ul>
</div>
</div>
<?php echo form_open("employee/deleteEmployee"); ?>
<div class="col-lg-2">
	<input type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger">
	</div>

</div><br>
<?php if($error=$this->session->flashdata('employee_add')): ?>
    <div class="row">
      <div class="col-lg-6">
     <div class="alert alert-dismissible alert-success">
        <?php echo $error; ?>
    </div>
      </div>
      </div>
    <?php endif; ?>
    <?php if($error=$this->session->flashdata('attendance')): ?>
    <div class="row">
      <div class="col-lg-6">
      <div class="alert alert-dismissible alert-success">
        <?php echo $error; ?>
    </div>
      </div>
      </div>
    <?php endif; ?><br><br>
<div class="row">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Department</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($result)): ?>
      <?php foreach($result as $res): ?>
        <tr>

          <td scope="col"><?php echo form_checkbox(['class'=>'checkbox','value'=>$res->user_id,'name'=>'user_id[]']); ?></td>
          <td scope="col"><?php echo $res->firstname; ?></td>
          <td scope="col"><?php echo $res->lastname; ?></td>
          <td scope="col"><?php echo $res->designation; ?></td>
          <td scope="col"><?php echo $res->department; ?></td>
          <td scope="col"><?php echo $res->location; ?></td>

        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td>No Record Found</td>
      </tr>

    <?php endif; ?>
      
  </tbody>
</table> 
	</div>
  <?php echo form_close(); ?>
 </div>
	
    
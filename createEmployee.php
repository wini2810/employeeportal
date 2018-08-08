<?php include('header.php'); ?>
	<div class="container">
  	  <?php $attributes = array('class'=>'form-horizontal');echo form_open('employee/insertEmployee',$attributes); ?><br>
    <legend>Add Employee</legend><br>
    
    <div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputFirstN
      ame" class="col-lg-2">First Name</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'firstname', 'placeholder'=>'First Name','class'=>'form-control','value'=>set_value('firstname'));
        echo form_input($attributes); ?>
    </div>
  </div>
  </div> 
  <div class="col-lg-4">
      <?php echo form_error('firstname','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputLastName" class="col-lg-2">Last Name</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'lastname', 'placeholder'=>'Last Name','class'=>'form-control','value'=>set_value('lastname'));
        echo form_input($attributes); ?>
    </div>
  </div>
  </div>
    <div class="col-lg-4">
      <?php echo form_error('lastname','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputDesignation" class="col-lg-2">Designation</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'designation', 'placeholder'=>'Designation','class'=>'form-control','value'=>set_value('designation'));
        echo form_input($attributes); ?>
    </div>
  </div>
  </div>
  <div class="col-lg-4">
      <?php echo form_error('designation','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputDepartment" class="col-lg-2">Department</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'department', 'placeholder'=>'Department','class'=>'form-control','value'=>set_value('department'));
        echo form_input($attributes); ?>
    </div>
  </div>
  </div>
  <div class="col-lg-4">
      <?php echo form_error('department','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputLocation" class="col-lg-2">Location</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'location', 'placeholder'=>'Location','class'=>'form-control','value'=>set_value('location'));
        echo form_input($attributes); ?>
    </div>
  </div>
  </div>
  <div class="col-lg-4">
      <?php echo form_error('location','<div class="text-danger">','</div>'); ?>
    </div>
  </div>

   <div class="row">
   	<div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-lg-2">Email</label>
      <div class="col-lg-8">
      <?php  $attributes = array('name'=>'email', 'placeholder'=>'Email','class'=>'form-control','value'=>set_value('email'));
      	echo form_input($attributes); ?>
    </div>
	</div>
	</div>
  <div class="col-lg-4">
      <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
    </div>
	</div>

<div class="row">
   	<div class="col-lg-8">
    <div class="form-group">
      <label for="exampleInputPassword" class="col-lg-2">Password</label>
      <div class="col-lg-8">
      <?php $attributes = array('name'=>'password', 'placeholder'=>'Password','class'=>'form-control',
  'value'=>set_value('password'));
      	echo form_password($attributes); ?>
    </div>
	</div>
	</div>
  <div class="col-lg-4">
      <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
    </div>
	</div>

    <div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
   <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
    <?php echo form_close(); ?>
</div>
</div>
</div>

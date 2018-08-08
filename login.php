<?php 
include('header.php'); ?>
	<div class="container"><br><br>
	  <?php $attributes = array('class'=>'form-horizontal');echo form_open('login/user_login',$attributes); ?>
    <legend>Employee Login</legend>
    <?php if($error=$this->session->flashdata('login_response')): ?>
		<div class="row">
    	<div class="col-lg-6">
    	<div class="alert alert-dismissible alert-danger">
  			<?php echo $error; ?>
		</div>
    	</div>
   		</div>
    <?php endif; ?>
   <div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-lg-2">Email</label>
      <div class="col-lg-12">
      <?php  $attributes = array('name'=>'email', 'placeholder'=>'Email','class'=>'form-control','value'=>set_value('email'));
      	echo form_input($attributes); ?>
    </div>
	</div>
	</div>
    <div>
    	<?php echo form_error('email','<div class="text-danger">','</div>'); ?>
    </div>
	</div>

<div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword" class="col-lg-2">Password</label>
      <div class="col-lg-12">
      <?php $attributes = array('name'=>'password', 'placeholder'=>'Password','class'=>'form-control','value'=>set_value('password'));
      	echo form_password($attributes); ?>
    </div>
	</div>
	</div>
   <div>
    	<?php echo form_error('password','<div class="text-danger">','</div>'); ?>
    </div>
	</div>

    <div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
   <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
</div>
</div>
</div></div></form>

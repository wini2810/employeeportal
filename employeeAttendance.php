<?php include('header.php'); ?><br><br>
<div class="container">
  <legend>Employee Attendance Form</legend><br>

<?php if($error=$this->session->flashdata('attendance')): ?>
    <div class="row">
      <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
        <?php echo $error; ?>
    </div>
      </div>
      </div>
    <?php endif; ?>

<div class="row">
  <div class="col-lg-4">
      <?php echo form_error('attend','<div class="alert alert-danger">','</div>'); ?>
    </div>
	<div class="col-lg-12">
    
        <?php echo form_open('employee/addEmployeeAttendance'); ?>
          <table class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col">Employee_ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee Department</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $emp=$this->db->query("SELECT user_id,firstname,lastname,department FROM `emp_details`");
      $result=$emp->result();
      foreach($result as $row):
        @$sl++;
        $fname=$row->firstname;
        $lname=$row->lastname;
        $name=$fname." ".$lname;
    ?>
    <tr class="table-light">
      <td><?php echo $row->user_id ?>
        <input type="hidden" name="emid[]" value="<?php echo $row->user_id; ?>">
      </td>
      <td><?php echo $name; ?>
      </td>
      <td><?php echo $row->department ?>
      </td>
      <td>
        <input type="radio" value="1" name="<?php echo $sl; ?>">Attend&nbsp; | 
        <input type="radio" value="0" name="<?php echo $sl; ?>">Absent

      </td>
    </tr>
  <?php endforeach; ?>
  <tr>
    <td colspan="4"><div class="text-center"><input type="submit" name="submit" class="btn btn-primary "></div></td>
  </tr>
  </tbody>
</table>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>
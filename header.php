
	<?php
$base_url = load_class('Config')->config['base_url'];
?>
<link rel="stylesheet" href="<?php echo $base_url; ?>/resources/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>/resources/bootstrap.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="col-lg-10"><a class="navbar-brand" href="#">EMPLOYEE MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button></div>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        
      </li>
      
    </ul>
     <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><?php echo anchor("login/logout", "Logout"); ?>
      </button>
    </form>
    
  </div>
</nav>


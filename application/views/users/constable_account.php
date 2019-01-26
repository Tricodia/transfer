<!DOCTYPE html>
<html lang="en">  
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<a class="navbar-brand" href="#">Palakkad Police Transfer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/general">General Transfer</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/request_transfer">Request Transfer</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/vacancy">Available Vacancies</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li> -->
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url();?>index.php/users/logout">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h1 class="display-4">Welcome</h1>
		<p class="lead">This portal is meant for applying transfer requests for police stations under Palakkad SP office.<br/> Please select the type of transfer you require from the above menu</p>
	</div>

	
	<div class="container">

		
		<h3>Profile</h3>
		<div class="account-info">
			<p><b>Name: </b><?php echo $user['name']; ?></p>
			<p><b>Email: </b><?php echo $user['email']; ?></p>
			<p><b>Phone: </b><?php echo $user['phone']; ?></p>
			<p><b>Gender: </b><?php echo $user['gender']; ?></p>
			<p><b>Designation: </b>Police Constable</p>
			<p><b>ID: </b><?php echo $user['id']; ?></p>
		</div>
		<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">Edit</button><br/>

	</div><br/><br/><!-- container end -->
	<!-- Button trigger modal -->

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url();?>index.php/users/update_data" method="post">
						<input type="hidden" name="id" value="<?php echo !empty($user['id'])?$user['id']:''; ?>">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
							<?php echo form_error('name','<span class="help-block">','</span>'); ?>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
							<?php echo form_error('email','<span class="help-block">','</span>'); ?>
						</div>
						<div class="form-group">
							<input type="number" required="" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
						</div>

						<div class="form-group">
							<?php
							if(!empty($user['gender']) && $user['gender'] == 'Female'){
							$fcheck = 'checked="checked"';
							$mcheck = '';
						}else{
						$mcheck = 'checked="checked"';
						$fcheck = '';
					}
					?>
					<div class="radio">
						<label>
							<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
							Male
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
							Female
						</label>
					</div>
				</div>
				<!-- <div class="form-group">
					<input type="submit" name="editSubmit" class="btn-primary" value="Submit"/>
				</div> -->
				


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="editSubmit" class="btn btn-primary" value="Submit">Save changes</button>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

</body>
</html>
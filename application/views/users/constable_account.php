<!DOCTYPE html>
<html lang="en">  
<head>

</head>
<body>
	
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<a class="navbar-brand" href="#">Palakkad Police Transfer System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">General Transfer</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="#">Request Transfer</a>
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
		<p class="lead">This portal is used for applying transfer requests for police stations under Palakkad SP office. Please select the type of transfer you require</p>
	</div>

	
	<div class="container">

		
		<h3>Welcome <?php echo $user['name']; ?></h3>
		<div class="account-info">
			<p><b>Name: </b><?php echo $user['name']; ?></p>
			<p><b>Email: </b><?php echo $user['email']; ?></p>
			<p><b>Phone: </b><?php echo $user['phone']; ?></p>
			<p><b>Designation: </b>Police Constable</p>
		</div>
		<button type="button" class="btn btn-outline-warning">Edit</button>

	</div><!-- container end -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

</body>
</html>
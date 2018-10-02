<!DOCTYPE html>
<html lang="en">  
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' />
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<a class="navbar-brand" href="#">Palakkad Police Transfer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/login">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">General Transfer</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/request">Request Transfer</a>
				</li>
				<li class="nav-item active">
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
	

	
	<div class="container">
		<br/>
		<div class="table-responsive">
			<table id="vacancy_table" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Pos1</th>
						<th>Pos2</th>
						<th>Pos3</th>
						<th>Pos4</th>
						<th>Pos5</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($user->result() as $row)  
					{  ?>
						<tr>  
							<td><?php echo $row->st_id;?></td>  
							<td><?php echo $row->st_name;?></td> 
							<td><?php echo $row->pos1;?></td>  
							<td><?php echo $row->pos2;?></td> 
							<td><?php echo $row->pos3;?></td>  
							<td><?php echo $row->pos4;?></td> 
							<td><?php echo $row->pos5;?></td>  
						</tr>  
					<?php }
					?>
				</tbody>
			</table>



		</div>
	</div>
	<br/><br/><!-- container end -->
	<!-- Button trigger modal -->

	

	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#vacancy_table').DataTable({
				responsive : true
			});
		} );
	</script>

</body>
</html>
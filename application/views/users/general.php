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
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/login">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>index.php/users/request_transfer">General Transfer</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/request_transfer">Request Transfer</a>
				</li>
				<li class="nav-item">
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
		<h1 class="display-4">General Transfer</h1>
		<p class="lead">This portal is meant for applying "general transfer" requests for police stations under Palakkad SP office</p>
	</div>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container">
				<form action="">
					<div id="selection_container">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Select Station 1</label>
							<select class="form-control" id="exampleFormControlSelect1" name="1">
								<option>--Select--</option>
								<?php
								
								foreach ($user->result() as $row)  
								{  ?>

									<option value=<?php echo $row->st_id;?>><?php echo $row->st_name;?></option> 


									<?php }
									?>

								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Select Station 2</label>
								<select class="form-control" id="exampleFormControlSelect2">
									<option>--Select--</option>
									<?php
									foreach ($user->result() as $row)  
									{  ?>

										<option value=<?php echo $row->st_id;?>><?php echo $row->st_name;?></option>  


										<?php }
										?>

									</select>
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect3">Select Station 3</label>
									<select class="form-control" id="exampleFormControlSelect3">
										<option>--Select--</option>
										<?php
										foreach ($user->result() as $row)  
										{  ?>

											<option value=<?php echo $row->st_id;?>><?php echo $row->st_name;?></option>


											<?php }
											?>

										</select>
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect4">Select Station 4</label>
										<select class="form-control" id="exampleFormControlSelect4">
											<option>--Select--</option>
											<?php
											foreach ($user->result() as $row)  
											{  ?>

												<option value=<?php echo $row->st_id;?>><?php echo $row->st_name;?></option>


												<?php }
												?>

											</select>
										</div>
									</div>

									<div class="form-button">
										<button type="submit" class="btn btn-primary ">Submit</button>
									</div>
								</form>
								<br/>
						<!-- <div class="form-button">
								<button  id="more" class="more btn btn-outline-warning">Add station</button>
							</div> -->

						</div>
					</div>
					<div class="col-sm-3"></div></div>
					<br/><br/><!-- container end -->
					<!-- Button trigger modal -->
					<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
					<script type="text/javascript">

						$('#exampleFormControlSelect1').change(function() {
							// console.log("sd");
							// dropdownval = $(this).val();
							// $('.form-control').not(this).find('option[value="' + dropdownval + '"]').remove();
							var index = $('#exampleFormControlSelect1').get(0).selectedIndex;
							$('#exampleFormControlSelect2 option:eq(' + index + ')').remove();
							$('#exampleFormControlSelect3 option:eq(' + index + ')').remove();
							$('#exampleFormControlSelect4 option:eq(' + index + ')').remove();
						});
						$('#exampleFormControlSelect2').change(function() {
							console.log("sd");
							// dropdownval = $(this).val();
							// $('.form-control').not(this).find('option[value="' + dropdownval + '"]').remove();
							var index = $('#exampleFormControlSelect2').get(0).selectedIndex;
							$('#exampleFormControlSelect3 option:eq(' + index + ')').remove();
							$('#exampleFormControlSelect4 option:eq(' + index + ')').remove();
						});
						$('#exampleFormControlSelect3').change(function() {
							console.log("sd");
							// dropdownval = $(this).val();
							// $('.form-control').not(this).find('option[value="' + dropdownval + '"]').remove();
							var index = $('#exampleFormControlSelect3').get(0).selectedIndex;
							$('#exampleFormControlSelect4 option:eq(' + index + ')').remove();
						});

					//Adding new dropdown on button click
					var c = 4;
					$('.more').on('click', function () {
						console.log("hii");
						c++;
						var select_content = '<div class="form-group"><label for="exampleFormControlSelect'+ c+'">Select Station '+ c +'</label><select class="form-control" id="exampleFormControlSelect'+c+'<option>1</option><option>2</option><option>3</option><option>4</option></select></div>';
						$('#selection_container').append(select_content);
					});
				</script>

			</body>
			</html>
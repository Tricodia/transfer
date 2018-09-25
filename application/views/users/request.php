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
					<a class="nav-link" href="#">General Transfer</a>
				</li>
				<li class="nav-item active">
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
		<h1 class="display-4">Welcome</h1>
		<p class="lead">This portal is meant for applying transfer requests for police stations under Palakkad SP office.<br/> Please select the type of transfer you require from the above menu</p>
	</div>

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container">
				<form>
					<div id="selection_container">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Select Station 1</label>
							<select class="form-control" id="exampleFormControlSelect1" name="1">
								<?php
								foreach ($user->result() as $row)  
									{  ?>

										<option><?php echo $row->st_id;?></option>  


									<?php }
									?>

								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Select Station 2</label>
								<select class="form-control" id="exampleFormControlSelect2">
									<?php
									foreach ($user->result() as $row)  
										{  ?>

											<option><?php echo $row->st_id;?></option>  


										<?php }
										?>

									</select>
								</div>
							</div>
							
							<div class="form-button">
								<input type="button" class="more" value="Add">
							</div>
						</form>

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
						});

					var c = 2;
					$('.more').on('click', function () {
						c++;
						var select_content = '<div class="form-group">\n'+
						'<label for="exampleFormControlSelect1">Select Station '+ c +'</label>\n'+
						'<select class="form-control" id="exampleFormControlSelect2">\n'+
						

						'<option>1</option>  \n'+
						'<option>2</option>  \n'+
						'<option>3</option>  \n'+
						'<option>4</option>  \n'+


						

						'</select>\n'+
						'</div>\n';
						$('#selection_container').append(select_content);
					});
				</script>

			</body>
			</html>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>

	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
				<form  method="post" action="<?php echo base_url('Auth/register') ?>">
					<div class="form-group">
						<input type="text" placeholder="Nama Depan..." name="nama_depan" >
					</div>
					<div class="form-group">
						<input type="text" placeholder="Nama Belakang..." name="nama_belakang" >
					</div>
					<div class="form-group">
						<input type="text" placeholder="Umur..." name="umur" >
					</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="Username Address"  >
					</div>
					<div class="form-group">
						<input type="password"  name="password_1" placeholder="Password"  >
					</div>
					<div class="form-group">
						<input type="password" name="password_2" placeholder="Password Confirmation" >
					</div>
					<button type="submit" class="btn btn-primary" >Register</button>
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="<?php echo base_url('welcome'); ?>">Home</a>
				<a href="<?php echo base_url('Auth/login'); ?>">Login</a>
			</div>
		</div>
	</div>
<!-- //register -->

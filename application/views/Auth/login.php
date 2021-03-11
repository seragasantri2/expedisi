
<!-- //breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<?php echo $this->session->flashdata('pesan') ?>
				<form method="post" action="<?php echo base_url('Auth/login') ?>" class="user">
					<div class="form-group">
						<?php echo form_error('username','<div class="text-danger small">','</div>'); ?>
						<input type="text"  placeholder="Masukan Username" name="username"  >
					</div>
					<div class="form-group">
						<?php echo form_error('password','<div class="text-danger small">','</div>'); ?>
						<input type="password" name="password" placeholder="Password"  >
					</div>
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="<?php echo base_url('Auth/register');?>">Register Here</a> (Or) go back to <a href="<?php echo base_url('welcome');?>">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->

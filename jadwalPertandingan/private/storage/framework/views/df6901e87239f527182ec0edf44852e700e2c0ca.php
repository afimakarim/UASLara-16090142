<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pages/login.blade.php */ ?>
<?php $__env->startSection('main'); ?>

<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5" style="width: 24rem;">
			<div class="card-header">LOGIN ADMIN</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="inputEmail" class="form-control" placeholder="Email Adress"
								required="required" autofocus="autofocus">
								<label for="inputEmail">Email Adress</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
								<label for="inputPassword">Password</label>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="remember-me">
									Remember Password
								</label>
							</div>
						</div>
						<a class="btn btn-primary btn-block" href="admin">Login</a>
					</form>
					<div class="text-center">
						<a class="d-block small mt-3" href="register.html">Register an Account</a>
						<a class="d-block small" href="forgot.password.html">Forgot Password</a>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatelogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
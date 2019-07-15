@extends ('templatelogin')
@section ('main')

<div id="login">
	<div class="container-fluid">
		<div class="card card-login mx-auto mt-5" style="width: 24rem;">
			<div class="card-header">LOGIN ADMIN</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-label-group">
								<label for="inputEmail">Username</label>
								<input type="email" id="inputEmail" class="form-control" placeholder="Username"
								required="required" autofocus="autofocus">
								
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<label for="inputPassword">Password</label>
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
								
							</div>
						</div>
						<!-- <div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="remember-me">
									Remember Password
								</label>
							</div>
						</div> -->
						<a class="btn btn-primary btn-block" href="admin">Login</a>
					</form>
					<!-- <div class="text-center">
						<a class="d-block small mt-3" href="register.html">Register an Account</a>
						<a class="d-block small" href="forgot.password.html">Forgot Password</a>
					</div> -->
				</div>
			</div>
			
		</div>
		
	</div>
</div>
@stop

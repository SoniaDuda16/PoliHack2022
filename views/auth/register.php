
<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="public/css/log.css">

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
			</div>
      
			<div class="card-body">
				<form novalidate action = "/index.php?page=register&try=reg" method = "POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Fullname" name="fullname">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Repeat password" name="repassword">
					</div>

          <div class="button-wrapper">
						<div class="form-group">
							<input type="submit" value="Create Account" class="btn float-right login_btn">
						</div>
          </div>
				</form>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Have an account?<a href="login.php">Sign In</a>
				</div>
			</div>
		</div>
	</div>
</div>
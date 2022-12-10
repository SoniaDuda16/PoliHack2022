
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
							<span class="input-group-text"><i class="fas fa-user-tag"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Username" name="username" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-signature"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Fullname" name="fullname" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-unlock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Repeat password" name="repassword" required>
					</div>

        			  <div class="button-wrapper">
						<div class="form-group">
							<input type="submit" value="Create Account" class="btn float-right login_btn">
						</div>
         			  </div>
				</form>
				<div class="error">
					gresit coaie
				</div>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Have an account?<a href="index.php?page=login">Sign In</a>
				</div>
			</div>
		</div>
	</div>
</div>
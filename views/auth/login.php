<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="public/css/log.css">

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>

			<div class="card-body">
				<form novalidate action = "index.php?page=login&try=log" method = "post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-check"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="user_name" name="username" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="pass_word" name="password" required>
					</div>

					<div class="button-wrapper">
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn" >
						</div>
					</div>
				</form>
				<div class="error">
					gresit coaie
				</div>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="index.php?page=register">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

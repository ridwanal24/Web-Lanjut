<?php
include 'layout/header.php';
?>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4 shadow p-4 bg-white">
			<h1 class="text-center">Login Admin</h1>
			<br><br>
			<form action="login_admin_check.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Username" id="username">
					<br>	
					<input type="password" class="form-control" name="password" placeholder="Password" id="password">
				</div>
				<br>
				<center><input type="submit" class="text-center btn btn-primary" name="submit" value="Login"></center>	
			</form>
		</div>
		<div class="col-4"></div>
	</div>
</div>
<br><br><br><br>
<?php
include 'layout/footer.php';
?>
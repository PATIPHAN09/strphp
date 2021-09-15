<?php
session_start();
?>
<!doctype html>
<html class="fixed">
<head>
	<?php include 'head.php'; ?>
</head>
<body>
	
	<section class="body-sign">
		<div class="center-sign">
			<div class="panel-body">
				<form action="loginprocess.php" method="post" enctype="multipart/form-data">
					<h2>Login</h2>
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="user" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control"  name="password" placeholder="password" required="required">
					</div>
			
					<div class="form-group">
						<button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
					</div>
				</form>
			</div>
			<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2021. thank you very good thank tood very mush <a href="https://google.com">Google</a>.</p>
		</div>
	</section>
	<?php include 'foot.php'; ?>
</body>
</html>
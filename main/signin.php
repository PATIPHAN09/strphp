<!doctype html>
<html class="fixed">
	<head>
        <?php include 'head.php';?>      
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo/signinlogo.jpg" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none" style="background-color:red;"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body" style="border-top-color:red">
						<form action="index.html" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
								
								</div>
								<div class="input-group input-group-icon">
									<input name="pwd" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2021. thank you very good  thank tood very mush <a href="https://google.com">Google</a>.</p>
			</div>
		</section>
		<!-- end: page -->
        <?php include 'foot.php';?>      
	</body>
</html>
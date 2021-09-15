<?php
    session_start();
?>
<!doctype html>
<html class="fixed">
	<head>
        <?php include 'head.php';?>      
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> ล็อคอินเข้าสู่ระบบ</h2>
					</div>
					<form action="login.php" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<form action="index.html" method="post">
								<div class="form-group mb-lg">
									<label>Username</label>
									<div class="input-group input-group-icon">
										<input id="user" name="user" type="text" class="form-control input-lg" />
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
										<input id="password" name="password" type="password" class="form-control input-lg" />
										<span class="input-group-addon">
											<span class="icon icon-lg">
												<i class="fa fa-lock"></i>
											</span>
										</span>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-8">
									</div>
									<div class="col-sm-4 text-right">
											<button type="submit" class="btn btn-primary hidden-xs">หลกตง</button>
											<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">หลกตง</button>
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
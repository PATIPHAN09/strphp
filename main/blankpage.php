<!doctype html>
<html class="fixed">
	<head>
        <?php include 'head.php';?>
	</head>
	<body>
		<section class="body">
			<!-- start: header -->
			<header class="header">
                <?php include 'header.php';?>
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
                    <?php include 'slide_left.php';?>   
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
                <?php include 'slide_right.php';?>                                                        
			</aside>
		</section>
        <?php include 'foot.php';?>                                                              
	</body>
</html>
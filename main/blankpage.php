<?php
    include('../backend/database.php');
	session_start();
?>
<!doctype html>
<html class="fixed">
	<head>
        <?php include 'inc_head.php';?>
	</head>
	<body>
		<section class="body">
			<!-- start: header -->
			<header class="header">
                <?php include 'inc_header.php';?>
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
                    <?php include 'inc_slide_left.php';?>   
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>BLANK PAGE</h2>
					
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
					<!-- start: page -->
					<?php
						session_start();
						extract($_POST);
						include '../backend/database.php';
						$sql = "UPDATE staff SET status = 'n'  WHERE staff_id ='" . $_GET["staff_id"] . "'";
					
						if (mysqli_query($conn, $sql)) {
							$_SESSION['delete_success'] = "Record deleted successfully";
							header("Location: lplstaff.php"); 
						} else {
							echo "Error deleting record: " . mysqli_error($conn);
						}

					?>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
                <?php include 'inc_slide_right.php';?>                                                        
			</aside>
		</section>
        <?php include 'inc_footer.php';?>                                                              
	</body>
</html>
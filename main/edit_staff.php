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
                        $sql = " SELECT * FROM staff WHERE staff_id ='". $_GET['staff_id']. "'";
                        $result = mysqli_query($conn,$sql);
                        while ($row = $result->fetch_assoc()) {
                    ?>
                    <form  form action="#" method="post" enctype="multipart/form-data"class="form-horizontal form-bordered">


                    
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="inputDefault">staff_id</label>
                            <div class="col-md-3">
                            <input type="text" class="form-control" id="DOB" name="DOB" value="<?php echo $row['staff_id']; ?>">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success" name="save">save</button>
                    </form>      
                    <?php
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
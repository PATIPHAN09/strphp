<?php
    include('../backend/database.php');
	session_start();
?>
<!doctype html>
<html class="fixed">
	<head>
        <?php include 'inc_head.php';?>
		<style>
				input[search]{
					background-color: yellow;
				}
			
		</style>
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
						<h2>TEST DATATABLE</h2>
					
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

                    <section class="panel">
						<header class="panel-heading panel-heading-transparent">
							<h2 class="panel-title">Basic</h2>
						</header>
						<div class="panel-body">
							<table  class="table table-bordered table-striped mb-none" id="datatable-default"  >  
								<?php
									$query = "SELECT * FROM incpt";
									$result = mysqli_query($conn, $query);
									echo " 
									<thead align='center' bgcolor='#CCCCCC'>
										<tr>
											<th>HN</th>
											<th>INCDATE</th>
											<th>INCTIME</th>
											<th>INCOME</th>
											<th>PRFORDERCODE</th>
											<th>FUNCTION</th>
										</tr>
									</thead>";
									while($row = mysqli_fetch_array($result)) {
										echo "<tr>";
										echo "<td>" .$row["HN"] .  "</td> ";
										echo "<td>" .$row["INCDATE"] .  "</td> ";
										echo "<td>" .$row["INCTIME"] .  "</td> ";
										echo "<td>" .$row["INCOME"] .  "</td> ";
										echo "<td>" .$row["PRFORDERCODE"] .  "</td> ";
										echo "<td class='actions'>   
										<a href='#' class='on-default edit-row'>". "<button type='button' class='btn btn-warning'><i class='fa fa-pencil'></i> </button> "."</a>
										<a href='#' class='on-default edit-row'>". "<button type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i> </button> "."</a>
										</td>";

										echo "</tr>";
									};
								?>			
							</table>	
						</div>
					</section>
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
                <?php include 'inc_slide_right.php';?>                                                        
			</aside>
		</section>
        <?php include 'inc_footer.php';?>                                                              
	</body>
</html>
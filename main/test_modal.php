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
						<h2>TEST MODAL</h2>
					
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
                    
                    <a class="mb-xs mt-xs mr-xs btn btn-default" data-toggle="modal" data-target="#modalBootstrap">Bootstrap</a>

                    <div class="modal fade" id="modalBootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
                <?php include 'inc_slide_right.php';?>                                                        
			</aside>
			
		</section>
        <?php include 'inc_footer.php';?>                                                              
	</body>
</html>
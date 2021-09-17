<?php
    include('../backend/database.php');
	session_start();
?>
<!doctype html>
<html class="fixed">
	<head>
        <?php include 'inc_head.php';?>
		<style>
			.receipt-content .logo a:hover {
			text-decoration: none;
			color: black; 
			}

			.receipt-content .invoice-wrapper {
			background: #FFF;
			border: 1px solid #CDD3E2;
			box-shadow: 0px 0px 1px #CCC;
			padding: 40px 20px 60px;
			margin-top: 40px;
			border-radius: 4px; 
			}

			.receipt-content .invoice-wrapper .payment-details span {
			color: black; 
			display: block; 
			}
			.receipt-content .invoice-wrapper .payment-details a {
			display: inline-block;
			margin-top: 5px; 
			}

			.receipt-content .invoice-wrapper .line-items .print a {
			display: inline-block;
			border: 1px solid #9CB5D6;
			padding: 13px 13px;
			border-radius: 5px;
			color: black; 
			font-size: 13px;
			-webkit-transition: all 0.2s linear;
			-moz-transition: all 0.2s linear;
			-ms-transition: all 0.2s linear;
			-o-transition: all 0.2s linear;
			transition: all 0.2s linear; 
			}

			.receipt-content .invoice-wrapper .line-items .print a:hover {
			text-decoration: none;
			border-color: #333;
			color: black; 
			}

			.receipt-content {
			background: #ECEEF4; 
			}
			@media (min-width: 1200px) {
			.receipt-content .container {width: 900px; } 
			}

			.receipt-content .logo {
			text-align: center;
			margin-top: 50px; 
			}

			.receipt-content .logo a {
			font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
			font-size: 36px;
			letter-spacing: .1px;
			color: black; 
			font-weight: 300;
			-webkit-transition: all 0.2s linear;
			-moz-transition: all 0.2s linear;
			-ms-transition: all 0.2s linear;
			-o-transition: all 0.2s linear;
			transition: all 0.2s linear; 
			}

			.receipt-content .invoice-wrapper .intro {
			line-height: 25px;
			color: black; 
			}

			.receipt-content .invoice-wrapper .payment-info {
			margin-top: 25px;
			padding-top: 15px; 
			}

			.receipt-content .invoice-wrapper .payment-info span {
				color: black; 
			}

			.receipt-content .invoice-wrapper .payment-info strong {
			display: block;
			color: black; 
			margin-top: 3px; 
			}

			@media (max-width: 767px) {
			.receipt-content .invoice-wrapper .payment-info .text-right {
			text-align: left;
			margin-top: 20px; } 
			}
			.receipt-content .invoice-wrapper .payment-details {
			border-top: 2px solid #EBECEE;
			margin-top: 30px;
			padding-top: 20px;
			line-height: 22px; 
			}


			@media (max-width: 767px) {
			.receipt-content .invoice-wrapper .payment-details .text-right {
			text-align: left;
			margin-top: 20px; } 
			}
			.receipt-content .invoice-wrapper .line-items {
			margin-top: 40px; 
			}
			.receipt-content .invoice-wrapper .line-items .headers {
				color: black; 
			font-size: 13px;
			letter-spacing: .3px;
			border-bottom: 2px solid #EBECEE;
			padding-bottom: 4px; 
			}
			.receipt-content .invoice-wrapper .line-items .items {
			margin-top: 8px;
			border-bottom: 2px solid #EBECEE;
			padding-bottom: 8px; 
			}
			.receipt-content .invoice-wrapper .line-items .items .item {
			padding: 10px 0;
			color: black; 
			font-size: 15px; 
			}
			@media (max-width: 767px) {
			.receipt-content .invoice-wrapper .line-items .items .item {
			font-size: 13px; } 
			}
			.receipt-content .invoice-wrapper .line-items .items .item .amount {
			letter-spacing: 0.1px;
			color: black; 
			font-size: 16px;
			}
			@media (max-width: 767px) {
			.receipt-content .invoice-wrapper .line-items .items .item .amount {
			font-size: 13px; } 
			}

			.receipt-content .invoice-wrapper .line-items .total {
			margin-top: 30px; 
			}

			.receipt-content .invoice-wrapper .line-items .total .extra-notes {
			float: left;
			width: 40%;
			text-align: left;
			font-size: 13px;
			color: black; 
			line-height: 20px; 
			}

			@media (max-width: 767px) {
			.receipt-content .invoice-wrapper .line-items .total .extra-notes {
			width: 100%;
			margin-bottom: 30px;
			float: none; } 
			}

			.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
			display: block;
			margin-bottom: 5px;
			color: black;  
			}

			.receipt-content .invoice-wrapper .line-items .total .field {
			margin-bottom: 7px;
			font-size: 14px;
			color: black;  
			}

			.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
			margin-top: 10px;
			font-size: 16px;
			font-weight: 500; 
			}

			.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
			color: black; 
			font-size: 16px; 
			}

			.receipt-content .invoice-wrapper .line-items .total .field span {
			display: inline-block;
			margin-left: 20px;
			min-width: 85px;
			color: black; 
			font-size: 15px; 
			}

			.receipt-content .invoice-wrapper .line-items .print {
			margin-top: 50px;
			text-align: center; 
			}



			.receipt-content .invoice-wrapper .line-items .print a i {
			margin-right: 3px;
			font-size: 14px; 
			}

			.receipt-content .footer {
			margin-top: 40px;
			margin-bottom: 110px;
			text-align: center;
			font-size: 12px;
			color: black; 
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
						<h2>Electronic Receipt</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Electronic Receipt</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<section class="panel">
						<header class="panel-heading panel-heading-transparent">
							<h2 class="panel-title">Basic</h2>
						</header>
						<div class="panel-body">
							<table  class="table table-bordered table-striped mb-none" id="datatable-default"  >  
							
								<?php
									$query = "SELECT DISTINCT HN,INCOME,PRVNO,PTTYPE,DCT,FINREFNO,INCDATE FROM incpt";
									$result = mysqli_query($conn, $query);
									echo " 
									<thead align='center' bgcolor='#CCCCCC'>
										<tr>
											<th style='width:30px'>No.</th>
											<th>HN</th>
											<th>INCOME</th>
											<th>PRVNO</th>
											<th>PTTYPE</th>
											<th>DCT</th>
											<th>FINREFNO</th>
											<th>INCDATE</th>
											<th>ฟังชั่นการทำงาน</th>
										</tr>
									</thead>";

									while($row = mysqli_fetch_array($result)) {
										echo "<tr>";
										echo "<td>". "1" ." </td>";
										echo "<td>" .$row["HN"] .  "</td> ";
										echo "<td>" .$row["INCOME"] .  "</td> ";
										echo "<td>" .$row["PRVNO"] .  "</td> ";
										echo "<td>" .$row["PTTYPE"] .  "</td> ";
										echo "<td>" .$row["DCT"] .  "</td> ";
										echo "<td>" .$row["FINREFNO"] .  "</td> ";
										echo "<td>" .$row["INCDATE"] .  "</td> ";
										echo "<td class='actions'>   
											<a href='#' class='on-default edit-row' data-toggle='modal' data-target='#modalrec'>". "<button type='button' class='btn btn-primary'><i class='fa fa-search'></i> </button> "."</a>
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
<div class="modal fade" id="modalrec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Electronic Receipt</h4>
			</div>
			<div class="modal-body">
				<div class="receipt-content">
					<div class="container bootstrap snippets bootdey">
						<div class="row" style="margin-bottom: 20px;">
							<div class="col-md-12">
								<div class="invoice-wrapper" style="width:540px">
									<div class="intro">
										<strong><i style="color:red">ชื่อนามสกุล</i></strong>
									</div>

									<div class="payment-info">
										<div class="row">
											<div class="col-sm-6">
												<span>Payment No.</span>
												<strong><i style="color:red">เลขที่ใบเสร็จ</i></strong>
											</div>
											<div class="col-sm-6 text-right">
												<span>Payment Date</span>
												<strong><i style="color:red"><?php echo date("d-m-Y") ;?></i></strong>
											</div>
										</div>
									</div>

									

									<div class="line-items">
										<div class="headers clearfix">
											<div class="row">
												<div class="col-xs-4">Description</div>
												<div class="col-xs-3"></div>
												<div class="col-xs-5 text-right">Amount</div>
											</div>
										</div>
										<div class="items">
											<div class="row item">
												<div class="col-xs-4 desc">
													<i style="color:red">รหัสค่าใช้จ่าย</i></strong> 
												</div>
												<div class="col-xs-3 qty">
													
												</div>
												<div class="col-xs-5 amount text-right">
													<i style="color:red">ราคา</i></strong> 
												</div>
											</div>
											<div class="row item">
												<div class="col-xs-4 desc">
													<i style="color:red">รหัสค่าใช้จ่าย</i></strong>
												</div>
												<div class="col-xs-3 qty">
													
												</div>
												<div class="col-xs-5 amount text-right">
													<i style="color:red">ราคา</i></strong>
												</div>
											</div>
											<div class="row item">
												<div class="col-xs-4 desc">
													<i style="color:red">รหัสค่าใช้จ่าย</i></strong>
												</div>
												<div class="col-xs-3 qty">
													
												</div>
												<div class="col-xs-5 amount text-right">
													<i style="color:red">ราคา</i></strong> 
												</div>
											</div>
										</div>
										<div class="total text-right">
											<p class="extra-notes">
											
											</p>
											<div class="field">
												Subtotal <span><i style="color:red">ราคา</i></strong> </span>
											</div>
											<div class="field">
												Discount <span><i style="color:red">ราคา</i></strong> </span>
											</div>
											<div class="field grand-total">
												Total <span><i style="color:red">ราคา</i></strong> </span>
											</div>
										</div>

									
									</div>
								
								</div>

								
							</div>
						</div>
					</div>
				</div>                    
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success"><i class="fa fa-print"></i></button>
				<button type="button"  class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
			</div>
		</div>
	</div>
</div>


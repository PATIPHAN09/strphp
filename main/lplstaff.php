<?php
include('../backend/database.php');
session_start();
?>
<!doctype html>
<html class="fixed">
<head>
    <?php include 'inc_head.php'; ?>
</head>
<body>
    <section class="body">
        <!-- start: header -->
        <header class="header">
            <?php include 'inc_header.php'; ?>
        </header>
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
                <?php include 'inc_slide_left.php'; ?>
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
                
                <section class="panel">
                    <header class="panel-heading">
                    <div class="panel-actions">
                            <a href='#' class='on-default edit-row' data-toggle="modal" data-target="#staff"><button type='button' class='btn btn-primary'><i class='fa fa-plus'> STAFF</i> </button></a>
                        </div>
                        <h2 class="panel-title">STAFF</h2>
                    </header>

              
                  
                      
                    </header>
                    <div class="panel-body">
                        
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <?php
                            $query = "SELECT * FROM staff";
                            $result = mysqli_query($conn, $query);
                            echo " 
									<thead align='center' bgcolor='#CCCCCC'>
										<tr>
											<th>NO</th>
                                            <th>STAFF</th>
                                            <th>NAME</th>
                                            <th>JOB_ST</th>
                                            <th>DOB</th>
                                            <th>NAT</th>
                                            <th>BANK ID</th>
                                            <th>ADDRESS</th>
                                            <th>EDIT</th>

										</tr>
									</thead>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" ." ".  "</td> ";
                   
                                echo "<td>" . $row["STAFF"] .  "</td> ";
                                echo "<td>" . $row["TITLE"] . $row["FNAME"] . $row["LNAME"]. "</td> ";
                                echo "<td>" . $row["JOB_START"] .  "</td> ";
                                echo "<td>" . $row["DOB"] .  "</td> ";
                                echo "<td>" . $row["NAT"] .  "</td> ";
                                echo "<td>" . $row["ID_BANK"] .  "</td> ";
                                echo "<td>" . $row["H_NO"]. $row["ROAD"]. $row["ALLEY"]
                                . $row["COUNTRY"]. $row["DISTRICT"]. $row["PROVINCE"] 
                                . $row["POSTAL_CODE"] . "</td> ";
                                echo "<td class='actions'>   
										<a href='#' class='on-default edit-row' data-toggle='modal' data-target='#staff'>" . "<button type='button' class='btn btn-warning'><i class='fa fa-pencil'></i> </button> " . "</a>
										</td>";
                                echo "</tr>";
                            };
                            ?>
                        </table>
                    </div>
                </section>
            </section>
        </div>
        <div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-block modal-block-lg">
        <div class="modal-content ">

            <div class="modal-header ">
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
        

        <aside id="sidebar-right" class="sidebar-right">
            <?php include 'inc_slide_right.php'; ?>
        </aside>
    </section>
    <?php include 'inc_footer.php'; ?>
    

</body>


</html>
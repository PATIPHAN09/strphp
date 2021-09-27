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
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead align='center' bgcolor='#CCCCCC'>
                                <tr>
                                    <th>NO</th>
                                    <th>STAFF</th>
                                    <th>NAME</th>
                                 
                                    <th>EDIT</th>
                                </tr>
                            </thead>

                           
                            <?php
                                $result = mysqli_query($conn,"SELECT * FROM STAFF");
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr class="<?php if(isset($classname)) echo $classname;?>">
                                <td><?php echo $row["STAFF"]; ?></td>
                                <td><?php echo $row["FNAME"]; ?></td>
                                <td><?php echo $row["LNAME"]; ?></td>
                           
                                <td><a href="delete_staff.php?STAFF=<?php echo $row["STAFF"]; ?>">Delete</a></td>

                                <td class='actions'>   
                                        <a href="delete_staff.php?STAFF=<?php echo $row["STAFF"]; ?>">
										
                                            <button type='button' class='btn btn-warning'>
                                                <i class='fa fa-pencil'></i> 
                                            </button>
                                        </a>
                                        <a href='delete_staff.php?STAFF=<?php echo $_data['D']; ?>"' class='on-default edit-row' >
                                            <button type='submit' name="delete" class='btn btn-danger'>
                                            <i class="fa fa-trash-o"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                }
                            ?>
                        </table>
                    </div>
                </section>
            </section>
        </div>

        <div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-block modal-block-lg">
                <form form action="insert_staff.php" method="post" enctype="multipart/form-data"class="form-horizontal form-bordered" >
                    <div class="modal-content ">
                        <div class="modal-header ">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">ADD STAFF</h4>
                        </div>
                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">TITLE</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="TITLE" name="TITLE">
                                            <option>นาย</option>
                                            <option>นาง</option>
                                            <option>นางสาว</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">FNAME</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="FNAME" name="FNAME">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">LNAME</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="LNAME" name="LNAME">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">RATE</label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="RATE" name="RATE">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">JOB_START</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="JOB_START" name="JOB_START">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="DOB" name="DOB">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">SEX</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="SEX" name="SEX">
                                            <option>ชาย</option>
                                            <option>หญิง</option>    
                                        </select> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">NAT</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="NAT" name="NAT">
                                        </div>
                                    </div>                           
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">ETH</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="ETH" name="ETH">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">CID</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="CID" name="CID">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">BANK</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="BANK" name="BANK">
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">ID_BANK</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="ID_BANK" name="ID_BANK">
                                    </div>
                                </div>    
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="save">save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        
        

        <aside id="sidebar-right" class="sidebar-right">
            <?php include 'inc_slide_right.php'; ?>
        </aside>
    </section>
    <?php include 'inc_footer.php'; ?>
    

</body>


</html>
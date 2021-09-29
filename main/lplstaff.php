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
            <?php
                if(isset($_SESSION['delete_success']))
                    {
                        echo  "<div class='alert alert-success' id='success_box' role='alert'>". $_SESSION['delete_success'] . "'</div>'";
                        unset($_SESSION['delete_success']);
                    } 
                if(isset($_SESSION['insert_success']))
                    {
                        echo  "<div class='alert alert-success' id='success_box' role='alert'>". $_SESSION['insert_success'] . "'</div>'";
                        unset($_SESSION['insert_success']);
                    }   
                if(isset($_SESSION['insert_fail']))
                    {
                        echo  "<div class='alert alert-danger' id='success_box' role='alert'>". $_SESSION['insert_fail'] . "'</div>'";
                        unset($_SESSION['insert_fail']);
                    }                       
            ?>
         
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
                                    <th>No.</th>
                                    <th>STAFF</th>
                                    
                                    <th>Name</th>
                                   
                                    <th>STATUS</th>
                                    <th style="width: 20%;">EDIT</th>
                                </tr>
                            </thead>

                           
                            <?php         
                                $sql = " SELECT * FROM staff WHERE status = 'y'";
                                $result = mysqli_query($conn,$sql);
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr >
                                    <td><?php echo $i+1;?></td>
                                    <td><?php echo $row["staff_id"]; ?></td>
                                    <td>
                                    <?php 
                                       $realtitle = '';
                                       if($row["title"] == '1')
                                       {
                                           $realtitle = 'นาย';
                                       } else if ($row["title"] == '2') 
                                        {
                                           $realtitle = 'นาง';
                                       }else if ($row["title"] == '3') 
                                        {
                                           $realtitle = 'นางสาว';
                                       }
                                        echo  $realtitle ." ". $row["fname"] . "  " .$row["lname"]; 
                                    ?>
                                    </td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td class='actions'>   
                                        <a href="edit_staff.php?staff_id=<?php echo $row["staff_id"]; ?>" >
                                            <button type='button' class='btn btn-warning'>
                                                <i class='fa fa-pencil'></i> 
                                            </button>
                                        </a>

                                        <a href="delete_staff.php?staff_id=<?php echo $row["staff_id"]; ?>" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก')" type="button">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
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
                                            <option value="1">นาย</option>
                                            <option value="2">นาง</option>
                                            <option value="3">นางสาว</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">FNAME</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="FNAME" name="FNAME" max="30">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">LNAME</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="LNAME" name="LNAME" max="30">
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
                                            <option value="1">ชาย</option>
                                            <option value="2">หญิง</option>    
                                        </select> 
                                    </div>
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

        <div class="modal fade" id="edit_staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-block modal-block-lg">
                <form form action="edit_staff.php" method="post" enctype="multipart/form-data"class="form-horizontal form-bordered" >
                    <div class="modal-content ">
                        <div class="modal-header ">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">EDIT STAFF</h4>
                        </div>
                        <div class="modal-body">
                        
                             
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputDefault">TITLE</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="FNAME" name="FNAME" value="">
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
                                            <option value="1">ชาย</option>
                                            <option value="2">หญิง</option>    
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
<script>
    setTimeout(function() {
        $('#success_box').fadeOut('slow');
    }, 3000); 
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>
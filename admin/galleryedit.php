<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header1.php"; ?>
<?php include "menu/amenu1.php"; ?>
<?php 
$mykey2=$_REQUEST['key1'];
$mykey3=$_REQUEST['key2'];
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Album</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
if(isset($_POST['submit']))
{
$aname = $_POST['gimages'];
$adate = date('Y-m-d H:i:s');
$status='progress';


if (empty($aname))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
 }
else
{
include "connect.php";

$query="update tbl_gallery set gimages='$aname' where gid = '$mykey2'";
if(mysql_query($query))
	{
echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <a href='viewsgimages.php'>View albums</a> |<a href='addevent.php'> Add new album</a></div>";
	}
	else
	{
		echo "error";
		print mysql_error();
	}

// echo "<script>location.href='addevent.php </script";
   }
}	
?>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Album (Only upload jpg files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                     
                                        <div class="form-group">
                                        
                                            <label>Event Description</label>
                                             <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                             <textarea class="form-control" rows="3" placeholder="Enter Description" name="gimages" maxlength="1000"></textarea>
                                            
                                               
                                        
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>

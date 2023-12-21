<?php

include('condb.php');
include('h.php');
$sid = $_GET['ID'];

$sql = "SELECT * FROM salesperson WHERE sid = '$sid' ";
$result3 = mysqli_query($con, $sql) or die("Error in query : $sql" . mysqli_error());
$row = mysqli_fetch_array($result3);
extract($row);
?>
<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
  error_reporting(~E_WARNING & ~E_NOTICE);
?>
</head>
<body>
 <div class="container">
    <div class="row">
<div class="container">
    <div class="row">
        <form name="addadmin" action="admin_form_edit_db.php" method="post" enctype="multipart/form-data"
            class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p>ชื่อแอดมิน</p>
                    <input type="text" name="s_fname" class="form-control" required placeholder="ชื่อแอดมิน"
                        value="<?php echo $s_fname; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>นามสกุลแอดมิน</p>
                    <input type="text" name="s_lname" class="form-control" required placeholder="นามสกุลแอดมิน"
                        value="<?php echo $s_lname; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>เบอร์โทรแอดมิน</p>
                    <input type="text" name="s_tel" class="form-control" required placeholder="ชื่อแอดมิน"
                        value="<?php echo $s_tel; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="hidden" name="sid" value="<?php echo $sid; ?>" />
                    <input type="hidden" name="a_id" value="<?php echo $a_id; ?>" />
                    <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
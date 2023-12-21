<?php
include('condb.php');

$cust_id = $_GET['ID'];
$sql = "SELECT * FROM customer where cust_id = '$cust_id' ";
$result2 = mysqli_query($con, $sql) or die("Error in query : $sql" . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

?>

<div class="container">
    <div class="row">
        <form action="member_form_edit_db.php" name="addmember" method="POST" enctype="multipart/form/data"
            class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p>ชื่อลูกค้า</p>
                    <input type="text" name="cust_fname" class="form-control" required placeholder="ชื่อลูกค้า"
                        value="<?php echo $cust_fname; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>นามสกุลลูกค้า</p>
                    <input type="text" name="cust_lname" class="form-control" required placeholder="นามสกุลลูกค้า"
                        value="<?php echo $cust_lname; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>ที่อยู่ลูกค้า</p>
                    <input type="text" name="cust_address" class="form-control" required placeholder="ที่อยู่ลูกค้า"
                        value="<?php echo $cust_address; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>เบอร์โทรลูกค้า</p>
                    <input type="text" name="cust_tel" class="form-control" required placeholder="เบอร์โทรลูกค้า"
                        value="<?php echo $cust_tel; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>เพศลูกค้า</p>
                    <select name="cust_sex" id="cust_sex" class="forn" required>
                        <option value="<?php $cust_sex; ?>" selected disabled><?php echo $cust_sex; ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>อีเมลลูกค้า</p>
                    <input type="email" name="cust_email" class="form-control" required placeholder="อีเมลลูกค้า"
                        value="<?php echo $cust_email; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="hidden" name="cust_id" value="<?php echo $cust_id; ?>">
                    <input type="hidden" name="a_id" value="<?php echo $a_id; ?>">
                    <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
                </div>
            </div>
        </form>
    </div>
</div>
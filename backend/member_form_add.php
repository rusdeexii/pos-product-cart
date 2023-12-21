<?php
include('condb.php');

$query = "SELECT * FROM users ORDER BY a_id ASC" or die("Error : " . mysqli_error());
$result = mysqli_query($con, $query);
?>

<div class="container">
    <div class="row">
        <form action="member_form_add_db.php" method="post" enctype="multipart/form/data" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p>หมายเลขผู้ใช้</p>
                    <input type="text" name="a_id" class="form-control" required placeholder="รหัสผู้ใช้">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>user ผู้ใช้</p>
                    <input type="text" name="a_user" class="form-control" required placeholder="user ผู้ใช้">
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <p>password ผู้ใช้</p>
                        <input type="text" name="a_pass" class="form-control" required placeholder="password ผู้ใช้">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>หมายเลขลูกค้า</p>
                        <input type="text" name="cust_id" class="form-control" required placeholder="รหัสลูกค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>ชื่อลูกค้า</p>
                        <input type="text" name="cust_fname" class="form-control" required placeholder="ชื่อลูกค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>นามสกุลลูกค้า</p>
                        <input type="text" name="cust_lname" class="form-control" required placeholder="นามสกุลลูกค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>ที่อยู่ลูกค้า</p>
                        <input type="text" name="cust_address" class="form-control" required
                            placeholder="ที่อยู่ลูกค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>เบอร์โทรลูกค้า</p>
                        <input type="text" name="cust_tel" class="form-control" required placeholder="เบอร์โทรลูกค้า">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>เพศลูกค้า</p>
                        <select class="form-control" name="cust_sex" required>
                            <option value="" selected disabled>เพศลูกค้า</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <p>อีเมลลูกค้า</p>
                        <input type="email" name="cust_email" class="form-control" required placeholder="อีเมลลูกค้า">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success mb-3 mt-3" name="btnadd">บันทึก</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
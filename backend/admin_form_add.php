<?php
include('condb.php');

$query = "SELECT * FROM users ORDER BY a_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>

<div class="container">
    <div class="row">
        <form name="addproduct" action="admin_form_add_db.php" method="POST" enctype="multipart/form-data"
            class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p> หมายเลขผู้ใช้</p>
                    <input type="text" name="a_id" class="form-control" required placeholder="รหัสแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>User ผู้ใช้</p>
                    <input type="text" name="a_user" class="form-control" required placeholder="ชื่อแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>รหัสผ่าน</p>
                    <input type="text" name="a_pass" class="form-control" required placeholder="นามสกุลแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>หมายเลขแอดมิน</p>
                    <input type="text" name="sid" class="form-control" required placeholder="เบอร์โทรแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>ชื่อแอดมิน</p>
                    <input type="text" name="s_fname" class="form-control" required placeholder="เบอร์โทรแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>นามสกุลแอดมิน</p>
                    <input type="text" name="s_lname" class="form-control" required placeholder="เบอร์โทรแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>เบอร์โทร</p>
                    <input type="text" name="s_tel" class="form-control" required placeholder="เบอร์โทรแอดมิน" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success mb-2 mt-3" name="btnadd">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
</div>
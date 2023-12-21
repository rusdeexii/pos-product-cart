<?php 
include('condb.php');
include('h.php');

$query = "SELECT * FROM product_type" ;
$result = mysqli_query($con , $query);
?>

<div class="container">
    <div class="row">
        <form action="type_form_add_db.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p>รหัสประเภทสินค้า</p>
                    <input type="text" name="p_type_id" class="form-control" required placeholder="รหัสประเภทสินค้า" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <p>ชื่อประเภทสินค้า</p>
                    <input type="text" name="p_type_name" class="form-control" required placeholder="ชื่อประเภทสินค้า" />
                </div>
            </div>

            <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success mt-3" name="btnadd"> บันทึก </button>
            
          </div>
        </div>

        </form>
    </div>
</div>
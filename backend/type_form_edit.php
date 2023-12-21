<?php
include('condb.php');
include('h.php');
$p_type_id = $_GET['ID'];

$sql = "SELECT * FROM product_type WHERE p_type_id = '$p_type_id' ";
$result2 = mysqli_query($con, $sql) or die('Error in query :  $sql ' . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);
?>

<div class="container">
    <div class="row">
        <form action="type_form_edit_db.php" method="post" class="form-control">
            <div class="form-group">
                <div class="col-sm-6">
                    <p>ชื่อประเภทสินค้า</p>
                    <input type="text" name="p_type_name" class="form-control" required placeholder="ชื่อประเภทสินค้า"
                        value="<?php echo $p_type_name ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="hidden" name="p_type_id" value="<?php echo $p_type_id; ?>" />
                    <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
                </div>
        </form>
    </div>
</div>
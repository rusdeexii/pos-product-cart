<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
  error_reporting(~E_WARNING & ~E_NOTICE);
?>
</head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <a href="type_form_add.php?act=add" class="btn-info btn-sm">เพิ่มประเภทสินค้า</a>
        <p></p>
            <?php
                $act = $_GET['act'];
                if($act == 'add'){
                include('type_form_add.php');
                }elseif ($act == 'edit') {
                    include('type_form_edit.php');
                }
                else {
                include('type_list.php');
                }
            ?>
      </div>
    </div>
  </div>
  </body>
</html>
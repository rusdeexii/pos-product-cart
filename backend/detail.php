<?php include "condb.php";
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  
<div class="container">
    <table class="table table-striped">
    <div class= " h5 text-center alert alert-primary mb-2 mt-4" role="alert"> รายละเอียดสินค้า </div> 
  <div class="row">
  <?php
  $ids=$_GET['id'];
    $sql ="SELECT * FROM product WHERE p_type_id= p_type_id AND product.p_id='$ids' ";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
?>
    <div class="col-md-6 ">
      <img src="p_img/<?=$row['p_img']?>" width="250px" class="mt-3 p-2 my-2 border " />
    </div>
    <div class="col-md-4">
        <br><br><br>
    รหัสสินค้า : <?=$row['p_id']?> <br>
       ชื่อสินค้า : <?=$row['p_name']?> <br>
       
        จำนวนในคลัง : <?=$row['qty_onhand']?> <br><br>
         <h6 class="text-success" >Price : <?=$row['p_price']?> $ <br>
         <a class="btn btn-outline-success mt-3" href="order.php?id=<?=$row['p_id']?>">เพิ่มในตะกร้าสินค้า</a>
         <a href="show_product.php"><button type="button" class="btn btn-outline-danger mt-3">ยกเลิก</button></a>
    </div>
    
  </div>
</div>
<?php mysqli_close($con); 
?>

  
</body>
</html>
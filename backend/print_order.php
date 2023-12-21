<?php 
session_start();

include "condb.php";
$sql="select * from tb_order where or_id= '" . $_SESSION["or_id"] . "' ";
$result= mysqli_query($con,$sql);
$rs=mysqli_fetch_array($result);
$total_price=$rs['total_price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>printorder</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
      
    <div class="alert alert-success h4 text-center mt-3" role="alert">
  การสั่งซื้อเสร็จสมบูรณ์
</div>
เลขที่การสั่งซื้อ : <?=$rs['or_id']; ?><br>
ชื่อ-นามสกุล (ลูกค้า): <?=$rs['cus_name']; ?><br>
ที่อยู่จัดส่ง: <?=$rs['address']; ?><br>
เบอร์โทรศัพท์: <?=$rs['telephone']; ?><br>
อีเมล: <?=$rs['email']; ?><br>
<br>
<div class="card mb-4 mt-4">
    <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th>จำนวน</th>
      <th>ราคารวม</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql1="select * from order_detail2 d,product p where d.p_id=p.p_id and d.or_id= '" . $_SESSION["or_id"] . "' ";
$result1= mysqli_query($con,$sql1);
while ($row=mysqli_fetch_array($result1)){




?>
    <tr>
      <th><?=$row['p_id']?></th>
      <td><?=$row['p_name']?></td>
      <td><?=$row['or_price']?></td>
      <td><?=$row['pr_qty']?></td>
      <td><?=$row['total_price']?></td>
    </tr>
  </tbody>
  <?php
}
?>

</table>
<h6 class="text-center"> รวมเป็นเงินทั้งหมด <?=number_format($total_price,2)?> บาท</h6>
</div>
</div>
<div class="text-center">
*** ทางร้านจะทำการจัดส่งสินค้าภายใน 3 วัน กรุณาจ่ายเงินกับพนักงานขนส่งเมื่อสินค้าถึงไปยังปลายทาง ขอบคุณครับ ***
</div>
<div class="text-center mt-3">
<a href="show_product.php" class="btn btn-warning">ย้อนกลับ</a>
<button onclick="window.print()" class="btn btn-success">พิมพ์ใบสั่งซื้อ</button>
  </div>
  <div class="text-center">
  <a href="index.php" class="btn btn-primary mt-3 mb-2">กลับหน้าหลัก</a>
</div>
</div>
</div>
</html>
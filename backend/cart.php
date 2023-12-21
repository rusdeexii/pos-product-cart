<?php
include 'condb.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php include"navbar.php";?>
    <br><br>
<div class="container">
    <form id="form1" method="POST" action="insert_order.php">
    <div class ="row">
<div class ="col-md-10">
    <table class = "table table-hover">
<tr>
    <th> ลำดับ</th>
    <th> สินค้า </th>
    <th> ราคา </th>
    <th> จำนวน </th>
    <th> ราคารวม </th> 
    <th> เพิ่ม    -  ลด </th> 
    <th> ลบ </th> 
</tr>
<?php
$Total = 0;
$sumPrice = 0;
$m = 1;
for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
 if(($_SESSION["strProductID"][$i]) != ""){
    $sql1="select * from product where p_id = '"  . $_SESSION["strProductID"][$i] . "' " ;
    $result1 = mysqli_query($con, $sql1);
    $row_pro = mysqli_fetch_array($result1);
 
    $_SESSION["p_price"] = $row_pro['p_price'];
     $Total = $_SESSION["strQty"][$i];
     $sum = $Total * $row_pro['p_price'];
     $sumPrice =(float) $sumPrice + $sum;
     $_SESSION["sum_price"] = $sumPrice;
     
?>
<tr>
    <td><?=$m?></td>
    <td>
        <img src="p_img/<?=$row_pro['p_img']?>" width="80" hight="100" class="border">
        <?=$row_pro['p_name']?></td>
    <td> <?=$row_pro['p_price']?></td>
    <td><?=$_SESSION["strQty"][$i]?></td>
    <td><?=$sum?></td> 
    <td>
        <a href="order.php?id=<?=$row_pro['p_id']?>" class="btn "><img src="p_img/add.jpg" width="30"></a>
    <?php if($_SESSION["strQty"][$i] > 1){   ?>
        <a href="order_del.php?id=<?=$row_pro['p_id']?>" class="btn"><img src="p_img/minus.jpg" width="30"></a>
 </td>
    <td><a href="delete.php?Line=<?=$i?>" > <img src="p_img/delete.jpg" width="30"></a></td> 
    <?php } ?>
</tr>
<?php
$m=$m+1;
}
}
?>
<tr>
    <td class="text-center" colspan="5">รวมเป็นเงินทั้งหมด</td>
    <td><?=$sumPrice?></td>
    <td>บาท</td>
    
</tr>
</table>

<div class="container">
    <table class="table table-striped">
    <div class= " h5 text-center alert alert-primary mb-2 mt-4" role="alert"> ที่อยู่สำหรับจัดส่งสินค้า </div> 
    <label for="p_name">ชื่อ-นามสกุล:</label>
    <input type="text" name="cus_name" class="form-control " placeholder="..fname.lname." required>
    <label for="p_address">ที่อยู่:</label><br>
    <input type="textarea" name="address" class="form-control " placeholder="..address.." required>
    <label for="p_phone">โทรศัพท์</label><br>
    <input type="text" name="telephone" class="form-control" placeholder="..number phone.." required>
    <label for="p_email">อีเมล</label><br>
    <input type="text" name="email" class="form-control " placeholder="..email.." required>
<div class="text-center">
<button type="submit" class="btn btn-outline-success mt-3">ยืนยันการสั่งซื้อ</button></a>
<a href="show_product.php"> <button type="button" class="btn btn-outline-primary mt-3">เลือกสินค้าต่อ</button></a> 

</div>
</div>


</div>
</div>
</form>
</body>
</html>
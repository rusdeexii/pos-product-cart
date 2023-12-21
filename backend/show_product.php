<?php include"condb.php";
session_start();
?>
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
<style>
  .col-sm-3 img{
 margin-left:auto;
 
  }
</style>
   
    <?php include"navbar.php";?> <br><br>
    
  <div class="row">
    <?php
    $query = "
    SELECT p.p_id, t.p_type_name, p.p_name,p.p_price,p.p_img, p.qty_onhand  FROM product as p 
    INNER JOIN product_type  as t ON p.p_type_id=t.p_type_id 
    ORDER BY p.p_id ASC" or die("Error:" . mysqli_error());
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
?>
    <div class="col-sm-3">
        <div class="text-center">
        <img src="p_img/<?=$row['p_img']?>"  width="200px" heigth="250" class="mt-5 p-2 my-2 border "> <br>
         <?=$row['p_id']?> <br>
        <?=$row['p_name']?> <br>
         <h6 class="text-success" >ราคา: <?=$row['p_price']?> บาท <br>
         <a class="btn btn-success mt-2" href="detail.php?id=<?=$row['p_id']?>" >รายละเอียด</a>
    </div>
    <br>
    </div>
    <?php
    }
    mysqli_close($con);
    ?>
    


  </div>
</div>
    
</body>
</html>
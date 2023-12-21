<?php
session_start();
include"condb.php";
$cusName=$_POST['cus_name'];
$cusAddress=$_POST['address'];
$cusTel=$_POST['telephone'];
$cusEmail=$_POST['email'];


$sql= "insert into tb_order(cus_name,address,telephone,total_price,or_status,email)
values('$cusName','$cusAddress','$cusTel','" .$_SESSION["sum_price"] ."','1','$cusEmail')";
mysqli_query($con,$sql);

$or_id = mysqli_insert_id($con);
$_SESSION["or_id"] = $or_id;

for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
    if(($_SESSION["strProductID"][$i]) != ""){
    //ดึงข้อมูลสินค้า
    $sql="select * from product where p_id = '".$_SESSION["strProductID"][$i]."' ";
    $result=mysqli_query($con,$sql);
    $row1=mysqli_fetch_array($result);
    $price = $row1['p_price'];
    $total = $_SESSION["strQty"][$i] * $price;

    $sql2="insert into order_detail2(or_id,p_id,or_price,pr_qty,total_price)
    values('$or_id','" .$_SESSION["strProductID"][$i]."','$price','" .$_SESSION["strQty"][$i]. "',
    '$total')";
    if (mysqli_query($con,$sql2)){
        //ตัดสต๊อกสินค้า
        $sql3="update product set qty_onhand= qty_onhand - '" .$_SESSION["strQty"][$i]."' 
        where p_id= '" .$_SESSION["strProductID"][$i]."' ";
        mysqli_query($con,$sql3);
        //echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้ว') </script>";
        echo "<script> window.location='print_order.php'</script>";
    }
    

    }


}
mysqli_close($con);
unset($_SESSION["intLine"]);
unset($_SESSION["strProductID"]);
unset($_SESSION["strQty"]);
unset($_SESSION["sum_price"]);


?>
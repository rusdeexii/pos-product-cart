<meta charset="UTF-8">
<?php 
include('condb.php') ;

$p_type_id = $_POST['p_type_id'];
$p_type_name = $_POST['p_type_name'];

$sql = "INSERT INTO product_type (p_type_id , p_type_name) VALUES('$p_type_id' , '$p_type_name')" ;
$result = mysqli_query($con , $sql);
mysqli_close($con) ; 

if($result) {
    echo "<script type='text/javascript'>" ;
    echo "alert('เพิ่มสินค้าสำเร็จ');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
}
else {
    echo "<script type='text/javascript'>" ;
    echo "alert('Error back to upload again');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
}
?>
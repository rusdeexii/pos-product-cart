<meta charset="UTF-8">
<?php
include('condb.php');

$a_id = $_POST['a_id'];
$a_user = $_POST['a_user'];
$a_pass = $_POST['a_pass'];
$a_type = 2 ;
$cust_id = $_POST['cust_id'];
$cust_fname = $_POST['cust_fname'];
$cust_lname = $_POST['cust_lname'];
$cust_address = $_POST['cust_address'];
$cust_tel = $_POST['cust_tel'];
$cust_sex = $_POST['cust_sex'];
$cust_email = $_POST['cust_email'];

$sql = "INSERT INTO users (a_id , a_user , a_pass , a_type , a_name) VALUES ('$a_id' , '$a_user' , '$a_pass' , '$a_type' , '$cust_fname')" ;
$result = mysqli_query($con , $sql) ;
$sql2 = "INSERT INTO customer (cust_id , cust_fname , cust_lname , cust_address , cust_tel , cust_sex , cust_email , a_id) VALUES ('$cust_id' , '$cust_fname' , '$cust_lname' , '$cust_address' , '$cust_tel' , '$cust_sex' , '$cust_email' , '$a_id')" ;
$result2 = mysqli_query($con , $sql2) ;

mysqli_close($con);

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มลูกค้าสำเร็จ');";
    echo "window.location = 'member.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "window.location = 'member.php'; ";
    echo "</script>";
    }
?>
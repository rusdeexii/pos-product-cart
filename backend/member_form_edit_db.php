<meta charset="UTF-8">
<?php
include('condb.php');

$cust_id = $_POST['cust_id'];   
$cust_fname = $_POST['cust_fname'];   
$cust_lname = $_POST['cust_lname'];   
$cust_address = $_POST['cust_address'];   
$cust_tel = $_POST['cust_tel'];   
$cust_sex = $_POST['cust_sex'];   
$cust_email = $_POST['cust_email'];   
$a_id = $_POST['a_id'];   

$sql = "UPDATE customer SET
cust_fname = '$cust_fname' ,
cust_lname = '$cust_lname' ,
cust_address = '$cust_address' ,
cust_tel = '$cust_tel' ,
cust_sex = '$cust_sex' ,
cust_email = '$cust_email' ,
a_id = '$a_id' 
WHERE cust_id = '$cust_id' " ;

$result = mysqli_query($con , $sql) or die("Error in query : $sql" . mysqli_error());

$sql2 = "UPDATE users SET a_name = '$cust_fname' WHERE a_id = '$a_id' " ;
$result2 = mysqli_query($con , $sql) or die("Error in query : $sql2" . mysqli_error());

mysqli_close($con);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>
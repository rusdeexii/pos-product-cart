<meta charset="UTF-8">
<?php 
include('condb.php') ;

$p_type_id = $_POST['p_type_id'];
$p_type_name = $_POST['p_type_name'];

$sql = "UPDATE product_type SET p_type_name ='$p_type_name' WHERE p_type_id ='$p_type_id' " ;
$result = mysqli_query($con , $sql) or die("Error in query : $sql " . mysqli_error());
mysqli_close($con);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'type.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>
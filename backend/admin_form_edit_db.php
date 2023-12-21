<meta charset="UTF-8">

<?php 
include('condb.php') ;

$sid = $_POST['sid'];
$s_fname = $_POST['s_fname'];
$s_lname = $_POST['s_lname'];
$s_tel = $_POST['s_tel'];
$a_id = $_POST['a_id'];

$sql = "UPDATE salesperson SET 
s_fname = '$s_fname' ,
s_lname = '$s_lname' ,
s_tel = '$s_tel' 
WHERE sid = '$sid' " ;

$result = mysqli_query($con , $sql) or die("Error in query : $sql" . mysqli_error());

$sql2 = "UPDATE users SET
a_name = '$s_fname' 
WHERE a_id = '$a_id' " ;
$result2 = mysqli_query($con , $sql2) or die("Error in query : $sql2" . mysqli_error());

mysqli_close($con) ;

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>
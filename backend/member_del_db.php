<meta charset="UTF-8">
<?php
include('condb.php');
$cust_id = $_REQUEST['ID'];

$sql = "SELECT * FROM customer where cust_id = '$cust_id' " ;
$result = mysqli_query($con , $sql) or die("Error in Query : $sql" . mysqli_error());
$row = mysqli_fetch_array($result);

$a_id = $row['a_id'] ;

$sql1 = "DELETE FROM customer WHERE cust_id = '$cust_id' " ;
$result1 = mysqli_query($con , $sql1) or die("Error in Query : $sql1" . mysqli_error());

$sql2 = "DELETE FROM users WHERE a_id = '$a_id' " ;
$result2 = mysqli_query($con , $sql2) or die("Error in Query : $sql2" . mysqli_error());

if ($result1 && $result2) {
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'customer.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}
?>
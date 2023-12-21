<meta charset="UTF-8">
<?php
include('condb.php');
$sid = $_REQUEST['ID'];

$sql = "SELECT * FROM salesperson where sid = '$sid' " ;
$result = mysqli_query($con , $sql) or die("Error in Query : $sql" . mysqli_error());
$row = mysqli_fetch_array($result);

$a_id = $row['a_id'] ;

$sql1 = "DELETE FROM salesperson WHERE sid = '$sid' " ;
$result1 = mysqli_query($con , $sql1) or die("Error in Query : $sql1" . mysqli_error());

$sql2 = "DELETE FROM users WHERE a_id = '$a_id' " ;
$result2 = mysqli_query($con , $sql2) or die("Error in Query : $sql2" . mysqli_error());

if ($result1 && $result2) {
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'admin.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}
?>
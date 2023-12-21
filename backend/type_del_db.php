<meta charset="UTF-8">
<?php
include('condb.php');

$p_type_id = $_REQUEST['ID'];

$sql = "DELETE FROM product_type WHERE p_type_id = '$p_type_id' ";
$result = mysqli_query($con, $sql) or die("Error in query : $sql " . mysqli_error());
if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}
?>

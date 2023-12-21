<meta charset="UTF-8">
<?php 
include('condb.php');


$a_id = $_POST['a_id'] ;
$a_user = $_POST['a_user'] ;
$a_pass = $_POST['a_pass'] ;
$sid = $_POST['sid'];
$s_fname = $_POST['s_fname'];
$s_lname = $_POST['s_lname'];
$s_tel = $_POST['s_tel'];
$a_type = 1 ;

$sql = "INSERT INTO users (a_id , a_user , a_pass , a_type , a_name) VALUES('$a_id' , '$a_user' , '$a_pass' , '$a_type' , '$s_fname')" ;
$result = mysqli_query($con , $sql) ;
$sql2 = "INSERT INTO salesperson (sid , s_fname , s_lname , s_tel , a_id) VALUES('$sid' , '$s_fname' , '$s_lname' , '$s_tel' , '$a_id')" ;
$result2 = mysqli_query($con , $sql2) ;
mysqli_close($con);

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มแอดมินสำเร็จ');";
    echo "window.location = 'admin.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "window.location = 'admin.php'; ";
    echo "</script>";
    }
?>
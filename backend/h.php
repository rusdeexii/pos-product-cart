<?php session_start(); 
include('condb.php');
 
  $user_id = $_SESSION['user_id'];
  $a_name = $_SESSION['a_name'];
  //print_r($_SESSION);
 	if($user_id==''){
    Header("Location: ../logout.php");  
  }  
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ร้านค้าBshop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
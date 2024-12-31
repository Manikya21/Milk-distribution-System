<!--?php
require_once "./connection.php";
	if(!isset($_GET['billno'])){
		
		$billno=$_GET['billno'];
		mysqli_query($con,"UPDATE `tblbill` SET `status`=2 WHERE no=$billno");
		header("location:cart.php");
		
	}
	else {
		echo "Some Thing is wrong";
		header("location:index.php");

	}
?-->
<?php

session_start();
include "connection.php";

//product data fetch

if (!isset($_GET['billno'])) {
	$_SESSION['msg']="Some Thing Went Wrong";
    header("location:cart.php");
} else {
    $id = $_GET['billno'];
    $sql = "UPDATE `tblbill` SET `status`=2 WHERE no=$id";
    $query = mysqli_query($con, $sql);
    $_SESSION['msg']="Delivery Sussefully";
    //echo "<script>alert('Product Remove from cart.');</script>";
    header("location:cart.php");
}
?>
<?php
session_start();
include "connection.php";
$url=$_SESSION['url'];
/**
 * Created by PhpStorm.
 * User: priyanklad
 * Date: 2019-03-26
 * Time: 20:53

$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}*/

if(isset($_SESSION['username'])){

    if(isset($_POST['btnCart'])){
        echo "Welcome";
        $uid=$_SESSION['uid'];
        $pid=$_POST['ddweight'];
        $qty=$_POST['qty'];
        // echo $pid;
        // exit;
        if ($qty==Null){
        	$_SESSION['msg']="Enter Valid Quantity.";
            echo "<script>alert('Thank you!  Product is added in your cart.');</script>";

            header("location:$url");
        }
        $product2="select quntity from tblproduct where id=$pid";
        $query2=mysqli_query($con,$product2);
        while ($row3=mysqli_fetch_array($query2)){
            $quantity3=$row3['quntity'];
        }
        $quantity4=$quantity3-$qty;
       echo $quantity4;
        if($quantity4 >= 0){
        $sql="insert into tblcart (customerid, productid, qty) values ('$uid','$pid','$qty')";
        $query=mysqli_query($con,$sql);
        if ($query){
        	$_SESSION['msg']=1;
            echo "<script>alert('Thank you!  Product is added in your cart.');</script>";

            header("location:$url");
        }
        else{
		    	$_SESSION['msg']="Error!   Please Try Again.";
                echo "<script>alert('Error!!');</script>";
                header("location:$url");
            }
        }
        else{
            $_SESSION['msg']=" Please Enter the Avalable Quantity of Products.";
            echo "<script>alert('Error!! Enter the Avalable Quantity!');</script>";
            header("location:$url");
        }

        }
    else{
            header("location:$url");
        }
    }
    else{
            header("location:login.php");
        }
?>
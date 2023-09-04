<?php
$dbhost="localhost";
$dbuser="root";
$dbname="ipt";
$dbpassword="";
$connect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['number'];
$order_=$_POST['order_'];
$sql="INSERT INTO shedrack (full_name,email,address,phone_number,order_)
 VALUES ('$name','$email','$address','$phone','$order_')";
mysqli_query ($connect,$sql);
}
?>
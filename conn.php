<?php
$dbhost="localhost";
$dbuser="root";
$dbname="project";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){
$reg_no=$_POST['reg_no'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$year_study=$_POST['year_study'];
$couser=$_POST['couser'];


$sql="INSERT INTO student(reg_no,f_name,l_name,gender,email,phone,year_study,couser)
 VALUES('$reg_no','$f_name','$l_name','$gender','$email','$phone','$year_study','$couser')";
mysqli_query($connection,$sql);
header('location:student.php');
}
?>
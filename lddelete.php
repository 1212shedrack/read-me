<?php
$dbhost="localhost";
$dbuser="root";
$dbname="project";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_GET['id'])){
    $user_id= $_GET['id'];

    $sql="DELETE FROM `leader` WHERE `id` ='$user_id'";

    $result= $connection->query($sql);
    header("location:ldread.php");

    if($result == TRUE){
        echo "Record delete correct";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
?>
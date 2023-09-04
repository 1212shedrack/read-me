<?php

$dbhost="localhost";
$dbuser="root";
$dbname="project";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

    if(isset($_POST['update'])){

        $id=$_POST['id'];
        $reg_no=$_POST['reg_no'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $year_study=$_POST['year_study'];
        $couser=$_POST['couser'];
    
    
  
        $sql="UPDATE student SET reg_no='$reg_no',f_name='$f_name',l_name='$l_name',gender='$gender',email='$email',
        phone='$phone',year_study='$year_study' WHERE id='$id'";
        $result=mysqli_query($connection,$sql);
       
}
?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="SELECT * FROM student WHERE id='$id'";
    $result=mysqli_query($connection,$sql);

    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
           
        $reg_no=$rows['reg_no'];
        $f_name=$rows['f_name'];
        $l_name=$rows['l_name'];
        $gender=$rows['gender'];
        $email=$rows['email'];
        $phone=$rows['phone'];
        $year_study=$rows['year_study'];
        $couser=$rows['couser'];
    
      
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>STUDENT</title>
            <style>
                body{
                    text-align: center;
                    background-color: aquamarine;
                } input{
                    border-radius: 6px;
                }
            </style>
        </head>
        <body>
            <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>"> <br> <br>
    <div>
    reg_no <br>
    <input type="number" name="reg_no" value="<?php echo $reg_no; ?>"> <br>
   f_name <br>
   <input type="text" name="f_name" value="<?php echo $f_name;?>"> <br><br>
   <b>l_name</b> <br>
    <input type="text" name="l_name" value="<?php echo $l_name;?>" > <br>
   gender <br>
   <input type="text" name="gender"value="<?php echo $gender;?>"><br> <br>
   email <br>
   <input type="email" name="email"value="<?php echo $email;?>"> <br><br>
   phone <br>
   <input type="number" name="phone"value="<?php echo $phone;?>"> <br><br>
   year_study <br>
   <input type="text" name="year_study" value="<?php echo $year_study;?>"><br> <br>
   couser <br>
   <input type="text" name="couser"value="<?php echo $couser;?>"> <br> <br>
   </div>
   <button>
   <input type="submit" name="update" value="update">
   </button>
   </form>   
        </body>
        </html>
        <?php
    }
}

?>
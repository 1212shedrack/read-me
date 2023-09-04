<?php
$dbhost="localhost";
$dbuser="root";
$dbname="project";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql="SELECT * FROM student";
$result=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
    <style>
        table,th,td{
            background-color: darkgoldenrod;
            padding:1rem;
            margin:1rem;
            border: 1px solid;
            margin: 50px;
            height: 1vh;
            width: 10hr;
        }
        td{
            background:orange;
        }th{
            background:gray;
        }
        body{
            background-color: darkgoldenrod;
        }
         button
         {
            background:red;
            border: 20px;
            border-radius: 10px;
            colour: yellow;
        }
        .ab{
            background-color: red;
        }.cd{
            background-color: green;
        }
    </style>
</head>
<body>
    <a href="./student.php">Add new</a>
   <table>
    <thead>
        <tr>
            <th>id</th>
            <th>reg_no</th>
            <th>f_name</th>
            <th>l_name</th>
            <th>gender</th>
            <th>email</th>
            <th>phone</th>
            <th>year_study</th>
            <th>$couser</th>
            <th>operation</th>
        </tr>

    </thead>
    <tbody>
        <?php
        if($result->num_rows>0){
            $i=1;
            while($rows=$result->fetch_assoc()){

        ?> 
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rows ['reg_no']; ?></td>
            <td><?php echo $rows ['f_name']; ?></td>
            <td><?php echo $rows ['l_name']; ?></td>
            <td><?php echo $rows ['gender']; ?></td>
            <td><?php echo $rows ['email']; ?></td>
            <td><?php echo $rows ['phone']; ?></td>
            <td><?php echo $rows ['year_study']; ?></td>
            <td><?php echo $rows ['couser']; ?></td>
           
            <td>
                <button class="ab"  ><a  href="stdelete.php? id=<?php echo $rows['id']; ?>"  >delete</a></button>
                <button class="cd" > <a href="stupdate.php? id=<?php echo $rows['id']; ?>">update</a></button>
           
        </td>

            <?php $i++; ?>
        </tr>

        <?php
            }

        }
        ?>
    </tbody>
   </table> 
</body>
</html>
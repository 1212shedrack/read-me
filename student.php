<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
    <style>
        body{
            background-color: aquamarine;
            text-align: center;
        }p{
            color: darkred;
        } input{
            border: 12px;
            border-radius: 12px;
            height: 25px;
            width: 300px;
        }b{
            font-size:large;
        }button{
         
            
        }
    </style>
</head>
<body>
    <form action="conn.php" method="post">
    <P><i>STUDENT INFORMATION</i></P>
    <b>reg_no</b> <br>
    <input type="number" name="reg_no" id=""> <br>
    <b>f_name</b> <br>
    <input type="text" name="f_name" id=""> <br>
    <b>l_name</b> <br>
    <input type="text" name="l_name" id=""> <br>
    <b>gender</b> <br>
    <input type="text" name="gender" id=""> <br>
    <b>email</b> <br>
    <input type="email" name="email" id=""> <br>
    <b>phone</b> <br>
    <input type="number" name="phone" id=""> <br>
    <b>year_study</b> <br>
    <input type="text" name="year_study" id=""> <br>
    <b>couser</b> <br> 
    <input type="text" name="couser" id=""> <br> <br>
    <button>
        <input type="submit" name="submit" value="submit" id="">
    </button> <br> <br>
    <a href="./dash.php">back home</a>
    </form>
</body>
</html>
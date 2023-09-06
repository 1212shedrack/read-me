<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup1</title> 
    <link rel="stylesheet" href="./style.css">
</head>
<body>
   <h1>form <em color:red; >signup1</em></h1>
   <form action="connection.php" method="POST">
    <div>
   student_name <br>
   <input type="text" name="student_name" placeholder=" enter your name" autocomplete="on"> <br><br>
   student_id <br>
   <input type="number" name="student_id" placeholder="enter your id" autocomplete="on"> <br><br>
   couser <br>
   <input type="text" name="couser" placeholder="enter your couser name" autocomplete="on"><br> <br>
   phone <br>
   <input type="number" name="phone" placeholder="enter your phone number" autocomplete="on"> <br><br>
   email <br>
   <input type="text" name="email" placeholder="enter your email" autocomplete="on"> <br><br>
   password <br>
   <input type="password" name="password" placeholder="enter your password" autocomplete="on"><br> <br>
   level <br>
   <input type="text" name="level" placeholder="enter you class level" autocomplete="on"> <br> <br>
   </div>
   <button>
   <input type="submit" name="submit"> <br>
   
   </button>
   </form>
</body>
</html>
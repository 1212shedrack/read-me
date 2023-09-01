<?php
session_start();
if(isset($_SESSION['username'])){
    @$is_verified=$_SESSION['is_verified'];
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_Dashbord</title>
  <style>
    .header{
      background-color: #0cdbea;
      height: 10vh;
     
    }
    .num{
      display: flex;
    }
    .num1{
      width: 17vw;
      height: unset;
      background-color: darkgreen;
    }
    .num2{
      width: 100%;
      height: unset;
      background-color: #deded5;
    }
    .line1{
      background-color: #04f7ff;
    }
    .menu,a{
      font-size: xx-large;
      text-decoration: none;
      color: black;
     
    }
    marquee{
      color: darkred;
    }
    .bottom{
      background-color: #0cdbea;
      height: 8vh;
      font-size: 5px;
    }
    img{
      width: 65px;
      height: 10vh;
      border-radius: 12px;
      float: left;
    }
    .ph{
      border-radius: 25px;
      border: 100px;
      height: 8vh;
      width: 10vw;
      float: left;
    }
    strong{
      color: darkred;
    }p{
      font-weight: bolder;
    }
    
  </style>
</head>

<body>
 <div class="line">
  <div class="header">
    <img src="./vote2.jpg" alt="" class="photo">
    <h1>WELLCOME TO  ONLINE VOTING SYSTEM</h1>
  </div>
 
</div>
  <div  class="num">
    <tr>
      <td>
        <div class="num1">
             <h1>MENU</h1>
             <ul class="menu">
           
             <a href="./student.php"><i class="fas fa-home"></i>student</a></li><br>
            <a href="./leader.html"><i class="fas fa-blog"></i>leader</a></li><br>
         <a href="./stread.php"><i class="fas fa-map-pin"></i>stread</a></li> <br>
         <a href="./ldread.php"><i class="fas fa-project-diagram"></i>ldread</a></li><br>
         <a href="#" class="fas fa-project-diagram">result</a> <br> <br>

            
             </ul>
        </div>
      </td>
      <td>
        <div class="num2">
          <p style="text-align: center;" ><i>  Rule of voting online</i></p> <br> <br>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum autem quam, aliquam tempora ad sed voluptatum. Adipisci, voluptate dignissimos molestiae iure incidunt neque laborum excepturi possimus quia tempore iusto?</h3><br>
          <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, amet quaerat quae, enim ullam eveniet animi hic eos laboriosam at veniam natus, ea quidem perferendis! Nesciunt voluptatem sunt facilis illum?</h3><br>
          <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, doloremque blanditiis harum fugit mollitia cupiditate? Consequatur, ipsa perferendis a nesciunt delectus fuga. Eum necessitatibus quam culpa dolore maiores assumenda autem?</h3><br>
          <center>
             <marquee behavior="rotate" direction="up">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum autem quam, aliquam tempora ad sed voluptatum. Adipisci, voluptate dignissimos molestiae iure incidunt neque laborum excepturi possimus quia tempore iusto?</h3><br>
              <center><img src="vote.jpg" alt="photo"></center>
              <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, amet quaerat quae, enim ullam eveniet animi hic eos laboriosam at veniam natus, ea quidem perferendis! Nesciunt voluptatem sunt facilis illum?</h3><br>
              <center><img src="vote.jpg" alt=""></center>
              <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, doloremque blanditiis harum fugit mollitia cupiditate? Consequatur, ipsa perferendis a nesciunt delectus fuga. Eum necessitatibus quam culpa dolore maiores assumenda autem?</h3><br>
             </marquee>
            </center>
        </div>
      </td>
    </tr>
  </div>
  
    <div class="bottom">
      <div>
       <a href="http://shedrackmossesmollel@gmail.com" target="_blank"><strong> Design and Developed by</strong> : SHEDRACK MOSSES  ICT DESIGNER</a>
    </div>
    <div>
         <a
href="#" target="_blank"><strong> &copy; 2023 &nbsp; &nbsp;</strong> ONLINE VOTING SYSTEM</a>
               
    </div>
    </div>
   
</body>
</html>
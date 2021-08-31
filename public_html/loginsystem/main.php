<?php
        include 'session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap.js"></script>
        <title>mainphp</title>
    </head>
    <body>
        <script>
    $(document).ready(function()
  { 
    $("#test").fadeOut(4000);
  }
   );
        </script>
       
       <h2 id="test"> <?php   
                echo "รหัสสมาชิก: ".$_SESSION['login_id'];
                echo "<br>";
                echo "ยินดีต้อนรับคุณ $s_login_username อีเมล์ $s_login_email" ;
        ?> </h2>
<! --
  ส่วนนี้ตือการ logout  
--!>  
        
  <div class="row">
    <div class="col-sm-4" style="background-color: lavender;">
    <form action="logout.php" method="GET">
             <input type="submit" value="your's Logout">
            </form>
    
    </div>
    <div class="col-sm-4"style="background-color: lavenderblush;">แถว2</div>
    <div class="col-sm-4"style="background-color: lavender;">แถว3</div>
  </div> 

  <div class="container">
   <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, </p>
      <p>consectetur adipisicing elit</p>
      <p>Ut enim ad minim veniam, </p>
      <p>quis nostrud exercitation </p>
      <p>   ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, </p>
      <p>consectetur adipisicing elit</p>
      <p>Ut enim ad minim veniam, </p>
      <p>quis nostrud exercitation </p>
      <p>   ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet,</p>
      <p>consectetur adipisicing elit</p>
      <p>Ut enim ad minim veniam, </p>
      <p>quis nostrud exercitation </p>
      <p>ullamco laboris...</p>
    </div>
  </div>
</div>
    </body>
</html>

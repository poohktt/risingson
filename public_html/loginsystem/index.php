<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>indexphp</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.js"></script>
    </head>
    <body>
        <script>//การจาง//
$(document).ready(function()
    { 
    $("#test").fadeOut(2000);
    }
   );
</script>
  <h2 id="test">welcome to www.mindphp111.com</h2>
        <div>
            <form action="login.php" method="POST">
                <label for="username">Username: </label>
                <input type="text" name="username" required autofocus>
                <label for="password">Password: </label>
                <input type="password" name="password" required>
                <br>
                <input type="submit" value="Log In">
            </form>
            <br>
            <a href="frm_register.php">สมัครสมาชิก</a>
            <br>
            <a href="http://localhost/"> skip to first page </a><!__ ให้แก้localhostเป็นหน้าแรก __>
        </div>
    </body>
</html>

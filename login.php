<?php session_start();
if (isset($_SESSION['user'])) {
  header("LOCATION: sender.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <p id="ch"></p>
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <button type="button" name="button" id="Submit">Login</button>
    <script src="jquery-3.3.1.js">

    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#Submit").click(function(){
          var usr=$("#username").val();
          var pass=$("#password").val();
          $.post('check.php',{user : usr, password : pass},function(data){
            if (data=="ACCESS GRANTED") {
              window.location='sender.php';
            } else {
              $("#ch").html(data);
            }
          });
        });
      });
    </script>
  </body>
</html>

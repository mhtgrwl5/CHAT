<?php
session_start();
if (!(isset($_SESSION['user']))) {
  header("LOCATION: login.php");
  exit();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat1</title>
  </head>
  <body>
    <p id="chat1" name="c1" rows="8" cols="80" readonly="readonly"></p><br>
    <input type="text" id="msgc1" name="m_c1" placeholder="Enter message">
    <button id="c1_s" type="button" name="Send">Send</button>
    <center> <button type="button" name="Logout" id="lout">LOGOUT</button>
    <p id="lg"></p> </center>
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        var h=setInterval(function(){
        $.post('fetch.php',{user:"abc"},function(data){
          $("#chat1").html(data);
          });
        },1000);



      $("#c1_s").click(function(){
        var a=$("#msgc1").val();
        $.post('update.php',{msg : a},function(data){
          if (data=="fail") {
            window.alert("Sending Failed");
          }
        });
      });
      $("#lout").click(function(){
        $.post('logout.php',{},function(data){
          if (data=='done') {
            window.location='login.php';
          }else{
            $("#lg").html("Error occured retry");
          }
        });
      });
    });
    </script>
  </body>
</html>

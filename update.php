<?php session_start();
  $usr=$_SESSION["user"];
  $msg=$_REQUEST["msg"];
  $connect=mysqli_connect('127.0.0.1','root','password','chat');
  $query="INSERT INTO chat values ('$usr','$msg')";
  $r=mysqli_query($connect,$query);
  if($r){
    echo "send";
  } else {
    echo "fail";
  }
?>

<?php session_start();
  $user=$_REQUEST['user'];
  $pass=$_REQUEST['password'];
  $connect=mysqli_connect('127.0.0.1','root','password','chat');
  $query="SELECT * FROM login WHERE username='$user' AND password='$pass'";
  $r=mysqli_query($connect,$query);
  if($r){
    $_SESSION['user']=$user;
    echo "ACCESS GRANTED";
  }else {
    echo "USERNAME AND PASSWORD DIDNOT MATCH";
  }
?>

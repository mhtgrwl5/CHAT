<?php session_start();
  $connect=mysqli_connect('127.0.0.1','root','password','chat');
  $query="SELECT * FROM chat";
  $r=mysqli_query($connect,$query);
  $data="";
  while(($a=mysqli_fetch_array($r))){
    $data=$data."<B>".$a['user']."</b><br><i>".$a['msg']."</i><br>";
  }
  echo $data;
?>

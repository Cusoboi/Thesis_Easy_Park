<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  $contactnumber = $_POST["contactnumber"];
  $platenumber = $_POST["platenumber"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $balance = "0";
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$contactnumber','$platenumber','$password','$balance')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
  </head>
  <div class = "register">
  <body>
    <a href = home.php>EASYPARK</a>
    <h1>Sign Up</h1>
    <form class="" action="" method="post" autocomplete="off">
      <input type="text" name="name" id = "name" placeholder="Name"> <br>
      <input type="text" name="username" id = "username" placeholder="Username"> <br>
      <input type="text" name="contactnumber" id = "contactnumber" placeholder="Contact Number"> <br>
      <input type="text" name="platenumber" id = "platenumber" placeholder="Plate Number"> <br>
      <input type="password" name="password" id = "password" placeholder="Password"> <br>
      <input type="password" name="confirmpassword" id = "confirmpassword" placeholder="Confirm Password"> <br><br>
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </body>
  </div>
</html>

<style>
.register{
    margin:auto;
    text-align: center;
}
button{
    width: 10%;
    margin:0.5%;
}
input{
  margin:0.5%;
}
</style>
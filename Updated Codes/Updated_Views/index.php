<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <h1>Your Balance is currently: <?php echo $row["balance"]; ?></h1>
    <button onclick="location.href='parkingslot.php'">View Parking Slots</button><br><br>
    <button onclick="location.href='history.php'">Transaction History</button><br><br>
    <button onclick="location.href='logout.php'">Log Out</button><br>
  </body>
</html>

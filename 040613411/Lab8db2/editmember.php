<?php include "connect.php" ?>

<?php
   $username = $_POST['username'];
   $name = $_POST['name'];
   $address = $_POST['address'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];
   $update = $pdo->prepare("UPDATE member 
   SET name='$name', address='$address'
   WHERE username = '$username'");
   
?>
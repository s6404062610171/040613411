<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $filename = $_FILES['member_photo']['name'];
    $tmp_img_name = $_FILES['member_photo']['tmp_name'];
    $folder='member_photo/';
    move_uploaded_file($tmp_img_name,$folder.$filename);



    $insert = $pdo->query("INSERT INTO member 
    (username, password, name, address, mobile, email, member_photo) 
    VALUES ('$username', '$password', '$name', '$address', '$mobile', '$email','".$filename."')"); 
     ?>
     <?php
    $pid = $pdo->lastInsertId(); 
    header("location: detailmember.php?username=" .$username);
    ?>
    
</body>
</html>
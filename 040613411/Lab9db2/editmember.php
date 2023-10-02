<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $filename = $_FILES['member_photo']['name'];
    $tmp_img_name = $_FILES['member_photo']['tmp_name'];
    $folder='member_photo/';  

    if(move_uploaded_file($tmp_img_name, 'member_photo/'.$filename)){
        unlink($tmp_img_name, 'member_photo/'.$filename); 
        $update = $pdo->prepare("UPDATE member 
        SET (name='$name', address='$address', email='$email', member_photo='$filename')"); 
    }
    echo "แก้ไขข้อมูล " . $_POST["name"] . " สำเร็จ";
      ?>
</body>
</html>
<?php include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop3 / 9</title>
</head>
<body>

        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            ?>
            <?php
            echo"ชื่อสมาชิก:"." ".$row['name']."<br>"; 
            echo"ที่อยู่:"." ".$row['address']."<br>"; 
            echo"อีเมล:"." ".$row['email']."<br>"; 
            ?>
            <img src="member_photo/<?=$row["username"]?>.jpg" width='100'><br>
            <?php echo "<hr>"; ?>
        <?php    
        }
        ?>
     
</body>
</html>
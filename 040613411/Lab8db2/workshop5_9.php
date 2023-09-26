<?php include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
             <a href="detailmember.php?username=<?=$row["username"]?>">
            <img src="member_photo/<?=$row["username"]?>.jpg" width='100'><br>
        </a>
            <?php echo "<hr>"; ?>
        <?php    
        }
        ?>
</body>
</html>
<?php include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function confirmDelete(username) { 
        var ans = confirm("ต้องการลบสมาชิก" + username); 
        if (ans==true) 
        document.location = "delete.php?username=" + username; 
        }
</script>
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
            <?php 
            echo "<a href='editformmember.php?username=" . $row ["username"] . "'>แก้ไข</a> | ";
            ?>
           <a href='#' onclick='confirmDelete(" <?= $row ["username"] ?>")'>ลบ</a>;
            <?php echo "<hr>"; ?>
        <?php    
        }
        ?>
     
</body>
</html>
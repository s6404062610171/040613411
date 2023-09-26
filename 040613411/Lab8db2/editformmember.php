<?php include "connect.php" ?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]); 
    $stmt->execute(); 
    $row = $stmt->fetch(); 
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="editmember.php" method="post">
    <input type="hidden" name="username" value="<?=$row["username"]?>">
    ชื่อผู้ใช้: <input type="varchar" name="name" value="<?=$row["name"]?>"><br>
    ที่อยู่: <textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
    เบอร์โทร: <input type="varchar" name="mobile" value="<?=$row["mobile"]?>"><br>
    อีเมล: <input type="varchar" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขข้อมูล">
</form>
</body>
</html>
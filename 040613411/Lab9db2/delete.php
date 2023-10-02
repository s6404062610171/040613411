<?php include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
        <?php
        $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
        $stmt->bindParam(1, $_GET["username"]); 
        if ($stmt->execute()) 
        header("location: workshop6_9.php"); 

        ?>
</body>
</html>
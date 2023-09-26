<?php include "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop1 / 9</title>
</head>
<body>
    <table border = '1'>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียด</th>
            <th>ราคา</th>
        </tr>
        <tr>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
        while ($row = $stmt->fetch()) { 
       ?>
       <td><?php echo $row['pid'] ?></td>
       <td><?php echo $row['pname'] ?></td>
       <td><?php echo $row['pdetail'] ?></td>
       <td><?php echo $row['price'] ?></td>
        </tr>
       <?php       
    }
    ?>
     </table>
</body>
</html>
<?php
include "connect.php";
session_start();
if (empty($_SESSION["username"])) {
    header("location: login-form.php");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <h1>สวัสดี
        <?= $_SESSION["fullname"] ?>
    </h1>
    หากต้องการออกจากระบบโปรดคลิก
    <a href='logout.php'>ออกจากระบบ</a><br>
</head>

<body>

    <?php
    if ($_SESSION["username"] == 'somsak') {
        $stmt = $pdo->prepare("SELECT member.username,SUM(ord_id/ord_id) FROM orders JOIN member ON member.username = orders.username GROUP BY username");
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            echo "username: " . $row["username"] . "<br>";
            echo "order: " . $row["SUM(ord_id/ord_id)"] . "<br>";
            echo "<hr>\n";
        }
    } else {
        $stmt = $pdo->prepare("SELECT * FROM orders WHERE username = '{$_SESSION["username"]}'");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo "รหัสorder: " . $row["ord_id"] . "<br>";
            echo "ชื่อลูกค้า: " . $row["username"] . "<br>";
            echo "วันที่สั่งซื้อ: " . $row["ord_date"] . "<br>";
            echo "สถานะ: " . $row["status"] . " บาท <br>";
            echo "<hr>\n";
        }
    }
    ?>
</body>

</html>
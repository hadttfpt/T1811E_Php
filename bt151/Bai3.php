<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/13/2019
 * Time: 9:03 PM
 */
if (!empty($_POST)) {
    $luong = $_POST['luong'];

    if (isset($_POST['luong'])) {
        if ($luong == 15) {
            echo "Luong thuc cua nhan vien khi co thue 30% la: " .
                ($luong + $luong * 0.3);
        }
        if ($luong < 15 && $luong > 7) {
            echo "Luong thuc cua nhan vien khi co 20% thue la: " .
                ($luong + $luong * 0.2);
        }
        if ($luong < 7) {
            echo "Luong thuc cua nhan vien khi co 10% thue la: " .
                ($luong + $luong * 0.1);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bai3</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="luong" placeholder="Nhap luong(don vi trieu)">
    <button>Tinh luong</button>
</form>
</body>
</html>

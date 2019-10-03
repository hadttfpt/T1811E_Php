<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/13/2019
 * Time: 8:30 PM
 * Viết chương trình để nhập một số nguyên
 * bất kỳ từ bàn phím và in kết quả ra màn hình
 * để nói cho người dùng biết số đó là lớn hay
 * nhỏ hơn 100.
 */
if(isset($_GET['submit'])&&!empty($_GET)){
    $number = $_GET['number'];
    if($number > 100){
        echo "So vua nhap lon hon 100";
    }else if($number == 100){
        echo "So vua nhap la 100";
    }else{
        echo "So vua nhap nho hon 100";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bai1</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="number" placeholder="Nhap vao so nguyen">
    <input type="submit" name="submit" value="Check">
</form>
</body>
</html>
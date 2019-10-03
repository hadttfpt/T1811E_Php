<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/14/2019
 * Time: 9:52 PM
 */
if (!empty($_POST)) {
    $docao = $_POST['docao'];
    $q = 0;
    while($docao > 0){
        for ($j = 0; $j < $q; $j++)
            echo "*";
                for ($i = 1; $i <= $docao; $i++)
                    echo "";
                echo "<br>";
                $docao--;
                $q++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bai1</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="docao" placeholder="Nhap do cao">
    <button>Xay thap</button>
</form>
</body>
</html>


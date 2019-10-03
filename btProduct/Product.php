<?php
require_once ('database.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Asignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <?php
        $sql = 'select count(id) as number from product';
        $result = executeResult($sql);
        $number = 0;
        if($result !=null && count($result) > 0){
            $number = $result[0]['number'];
        }
        $pages = ceil($number/12);

        $curent_page = 1;
        $index = ($curent_page - 1)*8;

        if(isset($_GET['page'])){
            $curent_page = $_GET['page'];
        }

        $sql = 'select * from product limit '.$index.',12';
        $result = executeResult($sql);
        foreach ($result as $product){
            echo '  <div class="col-md-3">
            <img src="'.$product['thumbnail'].'" alt="">
            <p>'.$product['title'].'</p>
            <p>'.$product['price'].'</p>
            <p>'.$product['description'].'</p>
        </div>';
        }
        ?>
    </div>
    <div class="row">
        <ul class="pagination">
            <?php
            for($i = 1;$i<=$pages;$i++){
                echo '<li><a href="?page='.$i.'">'.$i.'</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>

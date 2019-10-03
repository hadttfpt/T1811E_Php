<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>MySQL tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input product's detail information
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Product Name</label>
                    <input required type="text" name="product" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input required type="text" name="category" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input required type="number" name="price" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input required type="number" name="quantity" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>TotalPrice</label>
                    <textarea required class="form-control" name="total" value=""></textarea>
                </div>
                <div class="form-group">
                    <label>Manufacturer Name</label>
                    <textarea required class="form-control" name="manufacturer"></textarea>
                </div>
                <button class="btn btn-success"><?=(isset($_GET['id'])?'Update Product':'Add Product')?></button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2019
 * Time: 3:43 PM
 */
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'assignment';

function initData()
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    //insert
    for ($i = 0; $i < 50; $i++) {
        $sql = 'insert into product(title,thumbnail,price,description) values
 ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpkme98YrPpIpLYD7D2UgFYTNnfpLmR2VeJZC-v3pK4QExj6dH.jpg",
 "Dienthoai -'.$i.'","'.(20000+20*$i).'","dien thoai Lenovo")';
        mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
}
//initData();
function executeResult($sql){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    $data = [];
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result,1)){
        $data[] = $row;
    }

    mysqli_close($conn);
    return $data;
}
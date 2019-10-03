<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/16/2019
 * Time: 8:25 PM
 */
const Host = 'localhost';
const Username = 'root';
const Password = '';
const Database = 'DienThoai';

function creatDatabase(){
    $conn = new mysqli(Host,Username,Password);
    mysqli_set_charset($conn,'utf8');

    $sql = 'create database if not exists'.Database;
    mysqli_query($conn,$sql);

    mysqli_close($conn);
}

creatDatabase();
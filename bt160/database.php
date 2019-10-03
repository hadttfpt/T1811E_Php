<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/16/2019
 * Time: 8:25 PM
 */
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'BanHang';

function creatDatabase(){
    $conn = new mysqli(HOST,USERNAME,PASSWORD);
    mysqli_set_charset($conn,'utf8');

    $sql = 'create database if not exists'.Database;
    mysqli_query($conn,$sql);

    mysqli_close($conn);
}

function createTables(){
    $conn = new mysqli(HOST,USERNAME,PASSWORD);
    mysqli_set_charset($conn,'utf8');

    $sql = 'create table if not EXISTS sanpham(
id
)';
    mysqli_query($conn,$sql);

    mysqli_close($conn);
}

creatDatabase();
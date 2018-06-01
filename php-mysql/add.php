<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 14:55
 */
if(!isset($_POST['name'])){
    die('user name is not set');
}
if(!isset($_POST['age'])){
    die('user age is not set');
}
$name =$_POST['name'];
if(empty($name)){
    die('user name is empty');
}
$age=$_POST['age'];
if(empty($age))
{
    die("user age is empty");
}

require_once 'functions.php';
mysqli_query(connectDB(),"INSERT INTO users(name,age) VALUES('$name','$age')");
if(mysqli_errno()){
    echo mysqli_error();
}
else{
    header("location:allusers.php");
}


<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 15:55
 */
require_once "functions.php";
if(empty($_POST['id'])){
    die("id is empty");
}
if(empty($_POST['name'])){
    die("name is empty");
}
if(empty($_POST['age'])){
    die("age is empty");
}
$id=intval($_POST['id']);
$name=$_POST['name'];
$age=intval($_POST['age']);
connectDB();
mysqli_query(connectDB(),"UPDATE users SET name='$name' ,age=$age where id=$id");
if(mysqli_errno(connectDB())){
    echo mysqli_error();
}else{
    header("location:allusers.php");
}
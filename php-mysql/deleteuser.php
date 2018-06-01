<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 16:45
 */
if(empty($_GET['id'])){
    die("id is empty");
}
require_once"functions.php";
connectDB();
$id=intval($_GET['id']);
mysqli_query(connectDB(),"DELETE FROM users where id=$id");
if(mysqli_errno()){
    die("fail to delete the user");
}else{
    header("location:allusers.php");
}
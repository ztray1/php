<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 12:50
 */

require_once "config.php";
function connectDB(){
    return mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_FILE);
}
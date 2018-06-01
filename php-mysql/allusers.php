<?php
require_once "functions.php";
?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="adduser.html"> add user</a>
<table style='text-align: left' border='1'><tr><th>id</th><th>name</th><th>age</th><th>modify</th></tr>
<?php

$conn=connectDB();
$result=mysqli_query($conn,"SELECT * FROM users order by id DESC");
$dataCount=mysqli_num_rows($result);
for ($i=0;$i<$dataCount;$i++)
{
    $result_arr=mysqli_fetch_assoc($result);
    print_r($result_arr);
    $id=$result_arr['id'];
    $name=$result_arr['name'];
    $age=$result_arr['age'];
    echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>modify</a>  <a href='deleteuser.php?id=$id'>delete</a></td></tr>";

}
echo"</table>";

?>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 12:46
 */
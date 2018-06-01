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


<?php
/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/1
 * Time: 15:35
 */
require_once "functions.php";
if(!empty($_GET['id']))
{
    connectDB();
    $id=intval($_GET['id']);
    $result=mysqli_query( connectDB(),"SELECT * FROM users WHERE id =$id");
    if(mysqli_errno(connectDB())){
        die("cannot connect database");
    }
    $arr=mysqli_fetch_assoc($result);
    print_r($arr);
}else{
    die('id not define');
}
?>
<form action="edituser_server.php" method="post">
    <div>ID
        <input type="text" name="id" value="<?php echo $arr['id'];?>">
    </div>
    <div>name
        <input type="text" name="name" value="<?php echo $arr['name'];?>">
    </div>
    <div>age
        <input type="text" name="age" value="<?php echo $arr['age'];?>">
    </div>
    <input type="submit" value="submit">
</form>

</body>
</html>
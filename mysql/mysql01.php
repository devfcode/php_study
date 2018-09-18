<?php
$servername = "localhost";
$username = "root";
$password = "william123";

// 创建连接
$conn = new mysqli($servername, $username, $password, "mydb",3306);
//$conn  = mysqli_connect($servername, $username, $password, "mydb",3306);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

//$conn->close(); //关闭连接
//if ($conn->connect_error) {
//    die("连接失败: " . $conn->connect_error);
//}else{
//    echo "连接成功";
//}
?>


<?php

$servername = "localhost";
$username = "root";
$password = "william123";
$dbname = "mydb";

$conn=mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM MyGuests ORDER BY id");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'];
    echo " " . $row['lastname'];
    echo " " . $row['email'];
    echo "<br>";
}

mysqli_close($conn);
?>


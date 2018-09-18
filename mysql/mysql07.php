<?php

$servername = "localhost";
$username = "root";
$password = "william123";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$sql = "SELECT * FROM MyGuests WHERE firstname = 'John';";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname'];
    echo "<br>";
}


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}

?>
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

//while($row = mysqli_fetch_array($result))
//{
//    echo $row['firstname'];
//    echo " " . $row['lastname'];
//    echo " " . $row['email'];
//    echo "<br>";
//}

$arr = array();
while($row = mysqli_fetch_array($result))
{
    $arr1 = array('firstname'=>$row['firstname'], 'lastname'=>$row['lastname'], email=>$row['email']);
//    echo json_encode($arr1);
    array_push($arr,$arr1);
};

$arr2 = array("success"=>true, "content"=>$arr);

echo json_encode($arr2);

mysqli_close($conn);

?>
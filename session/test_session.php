<?php
session_start();
// 存储 session 数据
$_SESSION['views']=1;
?>

<html>
<head>
    <meta charset="utf-8">
    <title>stu_session</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>

</body>
</html>
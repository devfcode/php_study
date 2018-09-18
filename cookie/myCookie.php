<!--发送cookie-->
<?php
if (isset($_COOKIE["user"]) == false){
    setcookie("user", "william", time()+30);
    setcookie("user2", "william2", time()+340);
}
?>

<!--接收cookie-->
<?php
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
?>

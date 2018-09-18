<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>weather</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <script type="text/javascript">
        function showweather(){
            //利用ajax获得天气预报信息
            //利用javascript+dom处理并显示天气信息
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState==4){
                    // alert(xhr.responseText);
                    // console.log(typeof xhr.responseText);//string
                    //要把接收的“字符串”变为“对象”
                    //'{"addr":"\u5317\u4eac","temp":"9-22","wind":"north4-5"}'

                    eval("var info1="+xhr.responseText);
                    console.log(info1);
                    var str = "地址："+info1.weatherinfo.city+";温度:"+info1.weatherinfo.temp+";风向:"+info1.weatherinfo.WD;
                    document.getElementById('result').innerHTML = str;
                }
            };
            xhr.open('get','info.php');
            xhr.send();
        }
        window.onload = function(){
            showweather();
        }

        //        //s字符串变为对象obj
        //         var s = "{name:'tom',height:170}";
        //        //"var obj="+"{name:'tom',height:170}"====>"var obj={name:'tom',height:170}"
        //        //console.log("var obj="+s);
        //        eval("var obj="+s);
        //        console.log(obj);//Object { name="tom", height=170}

    </script>

    <style type="text/css">
    </style>
</head>
<body>
<h2>获得天气预报接口信息</h2>
<div id="result"></div>
</body>
</html>

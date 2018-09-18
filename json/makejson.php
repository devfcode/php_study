<?php

//$color = array('red','blue','green'); //【索引数组】
//echo json_encode($color); //["red","blue","green"]

//【对象生成json信息】
class Person{
   public $addr = "beijing";
   public $height = 170;
   public function study(){
       echo "study php";
   }
}
$tom = new Person();
//只是对象的属性给生成json信息
echo json_encode($tom);//{"addr":"beijing","height":170}

?>
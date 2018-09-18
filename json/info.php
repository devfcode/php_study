<?php

$weather1 = array("city"=>"北京","cityid"=>"101010100","temp"=>"9","WD"=>"南风","WS"=>"2级","SD"=>"26%",
    "WSE"=>"2","time"=>"10:20","isRadar"=>"1","Radar"=>"JC_RADAR_AZ9010_JB","njd"=>"暂无实况","qy"=>"1014");
$weather = array("weatherinfo"=>$weather1);

echo json_encode($weather)

?>
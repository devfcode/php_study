<?php

class Site
{
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$runoob = new Site();
$taobao = new Site;
$google = new Site();

$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");


$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

?>
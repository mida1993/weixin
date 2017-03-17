<?php

require './WeChat.class.php';
define('APPID', '');
define('APPSECRET', '');
define('TOKEN', '');
$wechat = new WeChat(APPID, APPSECRET, TOKEN);
// $result = $wechat->menuDelete();
// var_dump($result);
//
$menu = <<<JSON
{
 "button":[
 {
       "name":"求职",
       "sub_button":[
       {	
           "type":"click",
           "name":"2017专场招聘会",
           "key":"V1001_0001"
        },
        {
           "type":"view",
           "name":"本周急聘",
           "url":"http://v.qq.com/"
        },
        {
           "type":"click",
           "name":"求职渠道",
           "key":"V1001_0003"
        }]
   },
   {
       "name":"招聘",
       "sub_button":[
       {	
           "type":"click",
           "name":"招聘会办理",
           "key":"V1002_0001"
        },
        {	
           "type":"click",
           "name":"成为会员",
           "key":"V1002_0002"
        },
        {
           "type":"click",
           "name":"网络招聘",
           "key":"V1002_0003"
        },
        {
           "type":"click",
           "name":"人才推荐",
           "key":"V1002_0004"
        }]
   },
   {
       "name":"联系我们",
       "sub_button":[
       {	
           "type":"view",
           "name":"官方网站",
           "url":"http://www.soso.com/"
        },
        {
           "type":"click",
           "name":"联系方式",
           "key":"V1003_0002"
        },
        {
           "type":"click",
           "name":"乘车路线",
           "key":"V1003_0003"
        }]
   }]
}
JSON;
$result = $wechat->menuSet($menu);
var_dump($result);

//$result = $wechat->_getAccessToken();
//var_dump($result);
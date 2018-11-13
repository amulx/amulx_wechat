<?php
include 'config.php';
include 'helpers.php';
// 1、获取ACCESS_TOKEN 最好加个缓存时间
// $access_json = get_access_token();
// $access_arr = json_decode($access_json,true);
// $ACCESS_TOKEN = $access_arr['access_token'];


$ACCESS_TOKEN = '15_kESV0HoMvvceYP_cpmHqddCfnZyzahUgU2CdECmBoCrzLAfS1ljaz93cg2_TSJkaqmqZ3DNDUVcCIV9TFEwo9ozszssi4SKEzpWgwYOSliIrx8CV9Nu37sMguonBi8sqmxG1zwcdK77EbRxZDYBdACAWRU';

$url = 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token='.$ACCESS_TOKEN;
// 模板内容 ===》 服务器的硬盘为{{data.DATA}}
$sendData = '{
    "touser":"ok1Q81GkWIEHjcnkPKALbZGbMtPg",
    "template_id":"CRGT_ud_OawzJvaVpu7SXm3SXq2bzJpBIF5YAKFPpIs",        
   	"data":{
        "data": {
           "value":"恭喜你购买成功！",
           "color":"#173177"
        }
    }
}';


curl_post($url,$sendData);
<?php
include 'config.php';
include 'helpers.php';
// 1、获取ACCESS_TOKEN 最好加个缓存时间
// $access_json = get_access_token();
// $access_arr = json_decode($access_json,true);
// $ACCESS_TOKEN = $access_arr['access_token'];

// echo $ACCESS_TOKEN;echo "<br />";
$ACCESS_TOKEN = '15_ii0BRkW0u7r1PQR2ija8ZnoXCb3EDIjLyQR-2m1GnPghkoZNDJT6OOvoVWSUzM-MNSaJZ8hiqrbHpd-_ThIB7dfjS6lYD_WAQ0koNJwrn4gqQZ5LCXmZnrkrwgH5XjBxz3SSAAa3WRnv02etITZiAJAALR';

// 添加客服帐号
$url = 'https://api.weixin.qq.com/customservice/kfaccount/add?access_token='.$ACCESS_TOKEN;

$sendData = '{
     "kf_account" : "test1@test",
     "nickname" : "客服1",
     "password" : "pswmd5",
}';

print_r(curl_post($url,$sendData));
<?php
include 'config.php';
include 'helpers.php';
// 1、获取ACCESS_TOKEN 最好加个缓存时间
// $access_json = get_access_token();
// $access_arr = json_decode($access_json,true);
// $ACCESS_TOKEN = $access_arr['access_token'];

$ACCESS_TOKEN = '15_GdqAOWO8yuuen3S7KQDAaDb1wbrWQMuOaCHsQOs2bTeG1Qxi4Y9AwtmNUZBrttdM-V03PUHPKwE-sCu8jdvc_chilvdM0_GRhuXwpB3EUYyL_eMza8RwmU6m_rYQC9OrYX_K3C06QAnmwd-WBJYhAIAWET';
// print_r($ACCESS_TOKEN);die();
$menuPostData='{
	 "button":[
	 {	
		  "type":"view",
		  "name":"今日歌曲",		  
		  "url":"https://music.163.com/"
	  },
	  {
		   "type":"click",
		   "name":"歌手简介",
		   "key":"V1001_TODAY_SINGER"
	  },
	  {
		   "name":"菜单",
		   "sub_button":[
			{
			   "type":"click",
			   "name":"hello word",
			   "key":"V1001_HELLO_WORLD"
			},
			{
			   "type":"click",
			   "name":"赞一下我们",
			   "key":"V1001_GOOD"
			},
			{
			   "type":"scancode_push",
			   "name":"扫一扫",
			   "key":"V1001_scancode"
			},        
			{
	            "name": "发送位置", 
	            "type": "location_select", 
	            "key": "rselfmenu_2_0"
        	}
			]
	   }]
 }';
         
// create new menu
$url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$ACCESS_TOKEN;
print_r(curl_post($url,$menuPostData));die();

// ==================删除菜单====================
$url="https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=".$ACCESS_TOKEN;
$content = file_get_contents($url);
$ret = json_decode($content,true);
print_r($ret);

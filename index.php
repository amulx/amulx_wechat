<?php
include 'config.php';
include 'autoload.php';

// 1、获取GET参数
$signature = $_GET["signature"]; //微信的参数
$timestamp = $_GET["timestamp"];//微信的参数
$nonce = $_GET["nonce"];//微信的参数

// 2、signature验证	
$tmpArr = array(TOKEN, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode( $tmpArr );
$tmpStr = sha1( $tmpStr );

if($tmpStr==$signature)
{
	// 3、获取请求体数据
	$getWeixin_msg = file_get_contents("php://input");

	if (empty($getWeixin_msg)) {
		echo $_GET["echostr"];
	} else {
		// 4、判断事件类型
		libxml_disable_entity_loader(true);
	    $postObj = simplexml_load_string($getWeixin_msg, 'SimpleXMLElement', LIBXML_NOCDATA);	    

	    if ($postObj->MsgType == 'event') { // 事件推送类
	    	if ($postObj->Event == 'subscribe') { // 关注公众号
	    		# 欢迎
	    		autoload('text');
	    		sendText2($postObj->ToUserName,$postObj->FromUserName,'欢迎光临');
	    	} else if ($postObj->Event == 'unsubscribe') { // 取消关注
	    		# 删除用户相关信息
	    	} else if ($postObj->Event == 'CLICK') {
	    		autoload('text');
	    		sendText2($postObj->ToUserName,$postObj->FromUserName,$postObj->EventKey);
	    	} else if ($postObj->Event == 'VIEW') {
	    		# code...
	    	}
	    } else {  // 普通消息
	    	autoload('voice');
	    	sendVoice($postObj->FromUserName,$postObj->ToUserName,"EkudH1d9P6pieo1iHiVj6jd__aw2pJX_NCc5XB2T-HXomNDfdJ1PU7I1XdXeD7bN");
	    	die();
	    	autoload('video');
	    	sendVideo($postObj->FromUserName,$postObj->ToUserName,'Zb0O21ekxv-3gc3Tyi4f-RoxVv7gwj2biWGwt9Aw0nxMvCnMAMtGau-qP1ioMTOd','视频测试','视频测试');
	    	die();
	    	autoload('news');
	    	$articleNum = 1;
	    	$title = '测试新闻';
	    	$desc = '测试新闻描述';
	    	$picUrl = 'https://www.phpcomposer.com/assets/img/composer-white-background.jpg';
	    	$url = 'https://www.easywechat.com/tutorials';
	    	sendNews($postObj->FromUserName,$postObj->ToUserName,$articleNum,$title,$desc,$picUrl,$url);

	    	die();
	    	autoload('music');
	    	$title = '生而为爱';
	    	$desc = '生而为爱';
	    	$media_id = 'X5WZTbuVgf-4sG2MCp_QL0K2c6dxKvP9dEJmxir8w0P4nE5FgUI-Tt4Yc31raOah';
	    	$music_url = 'http://music.163.com/#/song?id=25906124';
	    	$h_music_url = 'http://music.163.com/#/song?id=25906124';
	    	sendMusic($postObj->FromUserName,$postObj->ToUserName,$title,$desc,$music_url,$h_music_url,$media_id);
	    	die();
	    	autoload('image');
	    	sendImage($postObj->FromUserName,$postObj->ToUserName,'X5WZTbuVgf-4sG2MCp_QL0K2c6dxKvP9dEJmxir8w0P4nE5FgUI-Tt4Yc31raOah');
	    	die();
	    	autoload('text');
	    	$time = date('Y-m-d H:i:s',time());
			sendText2($postObj->ToUserName,$postObj->FromUserName,"发生时间：{$time} \n远程地址：192.168.199.1\n欢迎光临3\n");
	    }
	    
	}	
} else {
	echo "bad gay";
}
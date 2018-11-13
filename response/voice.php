<?php
function sendVoice($toUser,$fromUser,$media_id){
	$str = "<xml><ToUserName><![CDATA[$toUser]]></ToUserName><FromUserName><![CDATA[$fromUser]]></FromUserName><CreateTime>".time()."</CreateTime><MsgType><![CDATA[voice]]></MsgType><Voice><MediaId><![CDATA[$media_id]]></MediaId></Voice></xml>";
	echo $str;
}
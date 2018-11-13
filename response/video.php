<?php
/**
 * [sendVideo 发送视频消息]
 * @param  [type] $toUser      [description]
 * @param  [type] $fromUser    [description]
 * @param  [type] $media_id    [description]
 * @param  [type] $title       [description]
 * @param  [type] $description [description]
 * @return [type]              [description]
 */
function sendVideo($toUser,$fromUser,$media_id,$title,$description){
	$textTpl = "<xml><ToUserName><![CDATA[$toUser]]></ToUserName><FromUserName><![CDATA[$fromUser]]></FromUserName><CreateTime>".time()."</CreateTime><MsgType><![CDATA[video]]></MsgType><Video><MediaId><![CDATA[$media_id]]></MediaId><Title><![CDATA[$title]]></Title><Description><![CDATA[$description]]></Description></Video></xml>";

	echo $textTpl;
}
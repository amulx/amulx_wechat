<?php
/**
 * [sendMusic 被动发送音乐]
 * @param  [type] $toUser      [description]
 * @param  [type] $fromUser    [description]
 * @param  [type] $title       [description]
 * @param  [type] $desc        [description]
 * @param  [type] $music_url   [description]
 * @param  [type] $h_music_url [description]
 * @param  [type] $media_id    [description]
 * @return string              [description]
 */
function sendMusic($toUser,$fromUser,$title,$desc,$music_url,$h_music_url,$media_id){
	$textTpl = '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[music]]></MsgType><Music><Title><![CDATA[%s]]></Title><Description><![CDATA[%s]]></Description><MusicUrl><![CDATA[%s]]></MusicUrl><HQMusicUrl><![CDATA[%s]]></HQMusicUrl><ThumbMediaId><![CDATA[%s]]></ThumbMediaId></Music></xml>';
	$resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $title, $desc,$music_url,$h_music_url,$media_id);
	
	echo $resultStr;
}
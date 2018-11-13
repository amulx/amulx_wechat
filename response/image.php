<?php
/**
 * 被动发送内容
 * @param  [type] $fromUsername [description]
 * @param  [type] $toUsername   [description]
 * @param  [type] $msgType      [description]
 * @param  [type] $content      [description]
 * @return [type]               [description]
 * X5WZTbuVgf-4sG2MCp_QL0K2c6dxKvP9dEJmxir8w0P4nE5FgUI-Tt4Yc31raOah
 */
function sendImage($toUsername,$fromUsername,$mediaId)
{
	$textTpl = "<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[%s]]></MsgType><Image><MediaId><![CDATA[%s]]></MediaId></Image></xml>";  
	$resultStr = sprintf($textTpl, $toUsername, $fromUsername, time(), 'image', $mediaId);
	echo $resultStr;
}

/**
 * [getMaterialList 获取素材列表]
 * @param  [type] $ACCESS_TOKEN [description]
 * @return [type]               [description]
 */
function getMaterialList($ACCESS_TOKEN){
	$url = 'https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token='.$ACCESS_TOKEN;
	$postData = '{
		    "type":TYPE,
		    "offset":OFFSET,
		    "count":COUNT
		}';
	return curl_post($url,$postData);
}
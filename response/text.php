<?php
/**
 * 被动发送内容
 * @param  [type] $fromUsername [description]
 * @param  [type] $toUsername   [description]
 * @param  [type] $msgType      [description]
 * @param  [type] $content      [description]
 * @return [type]               [description]
 */
function sendText($fromUsername,$toUsername,$msgType,$content)
{
	$textTpl = "<xml>
				<ToUserName><![CDATA[%s]]></ToUserName>
				<FromUserName><![CDATA[%s]]></FromUserName>
				<CreateTime>%s</CreateTime>
				<MsgType><![CDATA[%s]]></MsgType>
				<Content><![CDATA[%s]]></Content>
				<FuncFlag>0</FuncFlag>
				</xml>";  
	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, time(), $msgType, $content);
	echo $resultStr;
}

function sendText2($fromuser,$toUser,$msg)
{
	//回复文本小心
	$str="<xml>"
	."<ToUserName><![CDATA[$toUser]]></ToUserName>"
	."<FromUserName><![CDATA[$fromuser]]></FromUserName>"
	."<CreateTime>".time()."</CreateTime>"
	."<MsgType><![CDATA[text]]></MsgType>"
	."<Content><![CDATA[$msg]]></Content>"
	."</xml>";
	echo $str;
}
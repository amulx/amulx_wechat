<?php
function sendNews($toUser,$fromUser,$articleNum,$title,$desc,$picUrl,$url)
{
	$str="<xml>"
	."<ToUserName><![CDATA[$toUser]]></ToUserName>"
	."<FromUserName><![CDATA[$fromUser]]></FromUserName>"
	."<CreateTime>".time()."</CreateTime>"
	."<MsgType><![CDATA[news]]></MsgType>"
	."<ArticleCount>$articleNum</ArticleCount>"
	."<Articles>"
	."<item>"
	."<Title><![CDATA[$title]]></Title> "
	."<Description><![CDATA[$desc]]></Description>"
	."<PicUrl><![CDATA[$picUrl]]></PicUrl>"
	."<Url><![CDATA[$url]]></Url>"
	."</item>"
	."</Articles>"
	."</xml>";
	
	echo $str;
}
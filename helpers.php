<?php
function get_access_token()
{
	return http_get("https://api.weixin.qq.com/cgi-bin/token?"
	."grant_type=client_credential&appid=".APPID."&secret=".APPSECRET);
}

function http_get($url) { 
	$curl = curl_init(); 
	// 启动一个CURL会话 
	curl_setopt($curl, CURLOPT_URL, $url); 
	curl_setopt($curl, CURLOPT_HEADER, 0); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
	// 跳过证书检查 
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
	// 从证书中检查SSL加密算法是否存在 
	$tmpInfo = curl_exec($curl); 
	//返回api的json对象 
	//关闭URL请求 
	curl_close($curl); 
	return $tmpInfo; 
	//返回json对象 
}

function curl_post($url,$data){ 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); 
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); 
    curl_setopt($curl, CURLOPT_POST, 1); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); 
    curl_setopt($curl, CURLOPT_HEADER, 0); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    $tmpInfo = curl_exec($curl); 
    if (curl_errno($curl)) {
       echo 'Errno'.curl_error($curl);
    }
    curl_close($curl); 
    return $tmpInfo; 
}
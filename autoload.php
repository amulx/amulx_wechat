<?php
function autoload($type){
	switch ($type) {
		case 'image':
			include './response/image.php';
			break;
	
		case 'text':
			include './response/text.php';
			break;

		case 'music':
			include './response/music.php';
			break;

		case 'news':
			include './response/news.php';
			break;

		case 'video':
			include './response/video.php';
			break;
	
		case 'voice':
			include './response/voice.php';
			break;

		default:
			# code...
			break;
	}
}
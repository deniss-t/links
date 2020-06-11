<?php
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function createLink($rndStr)
{
	$host = $_SERVER['HTTP_HOST'];
	return $host . "/" . $rndStr;
}

function saveLink($link, $rndStr)
{
	$filename = 'links.txt';
	$text = $rndStr . "=" . $link . "|";
	file_put_contents($filename, $text, FILE_APPEND);
}

function findPath($rndStr)
{
	$filename = 'links.txt';
	$str = file_get_contents($filename);
	$firstArr = explode('|',  $str);
	foreach($firstArr as $string){
		$pos = strpos($string, $rndStr);
		if($pos !== false){
			return substr($string, strlen($rndStr)+ 1);
		}
	}
	return false;
}
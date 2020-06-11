<?php
require "lib.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$link = $_POST['corazon'];
	$rndStr = generateRandomString();
	$shortLink = createLink($rndStr);
	echo $shortLink;
	saveLink($link, $rndStr);
}

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$uri = $_SERVER['REQUEST_URI'];
	if($uri != '/'){
		$clearName = substr($uri, 1);
		$origLink = findPath($clearName);

		if($origLink){
			$location = "Location: " . $origLink;
			header($location);
			die();
		} else {
			echo 'link does not exist';
		}
	}
}

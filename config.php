<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '336359083672319',
	'app_secret' => '69914f0663567fec22568bcd8023f44e',
	'default_graph_version' => 'v3.1'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>
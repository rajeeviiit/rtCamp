<?php

require_once __DIR__ . '/lib/facebook/vendor/autoload.php';
require_once 'lib/google/vendor/autoload.php';

//FB
$app_id = '1621910441200674';
$app_secret = '977ba39d3bf2b2da2bd570533aadf3f7';

$fb = new Facebook\Facebook([
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.10',
    'persistent_data_handler'=>'session'
]);

$redirect = "http://localhost/rtcamp/home.php";

//GOOGLE
$client = new Google_Client();
$client->setAuthConfigFile('api.json');
$client->setRedirectUri('http://localhost/rtcamp/google.php');
$client->addScope(Google_Service_Drive::DRIVE);
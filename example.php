<?php

require('CropioAPI/Api.php');

$config = require('config.php');
$api = new Api($config);
$api->auth();
var_dump($api->logout());
#print_r($api);

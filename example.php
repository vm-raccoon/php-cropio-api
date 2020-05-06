<?php

require('CropioAPI/Api.php');

$config = require('config.php');
$api = new Api($config);
$api->auth();
print_r($api);

<?php

require('CropioAPI/Api.php');

$config = require('config.php');
$api = new Api($config);
$api->auth();
$field = $api->single('fields', 1);
print_r($field);
#print_r($api->edit('fields', 1, $field));
#print_r($api);

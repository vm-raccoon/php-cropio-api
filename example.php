<?php

require('CropioAPI/Api.php');

$config = require('config.php');
$api = new Api($config);
print_r($api);

<?php

require('CropioAPI/Api.php');

# credentials
$config = require('config.php');

# create Api object
$api = new Api($config);

# check authentication
if(!$api->auth()){
    echo 'Authentication error!';
    exit(0);
}

/*

# get resource object by ID
$field = $api->single('fields', 1);

# get resource object collection (searching, filtering)
$fields = $api->collection('fields', [
    'field_group_id' => 1,
    'limit' => 15,
]);

# get all resource object IDs
$field_ids = $api->ids('fields');

# get last changed objects (searching, filtering)
$changes = $api->changes('fields', [
    'field_group_id' => 1,
    'limit' => 15,
]);

# get last changed object IDs (searching, filtering)
$changes_ids = $api->changes_ids('fields', [
    'field_group_id' => 1,
    'limit' => 15,
]);

# get multiple resource objects by IDs
$fields = $api->mass_request('fields', [1, 2, 3]);

# get all resource objects (mass_request + ids)
$fields = $api->all('fields');

# create new resource object
$new_field = $api->create('fields', $field);

# multiple create resource objects
$fields = $api->multiple_create('fields', [
    $field,
    $new_field,
]);

# update resource object
$field = $api->update('fields', 1, $field);

# multiple update resource objects by IDs
$fields = $api->multiple_update('fields', [
    1 => $field,
    2 => $new_field,
]);

# delete resource object by ID
$api->delete('fields', 1);

# multiple delete resource objects by IDs
$api->multiple_delete('fields', [1, 2]);

//*/

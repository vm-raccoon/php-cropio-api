<?php

namespace CropioAPI;

class AuthUser {

    private $user_api_token = null;
    private $user_id = null;
    private $email = null;
    private $username = null;
    private $company = null;
    private $time_zone = null;
    private $language = null;
    private $tenant = null;
    private $accessible_fields = null;

    public function __construct($options){
        $options = is_array($options) ? $options : [];

        foreach($options as $key => $value){
            $this->{$key} = $value;
        }
    }

    public function getUserID(){
        return $this->user_id;
    }

    public function getToken(){
        return $this->user_api_token;
    }

}
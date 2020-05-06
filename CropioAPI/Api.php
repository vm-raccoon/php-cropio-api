<?php

require('AuthUser.php');
require('Routes.php');
require('Request.php');
require('Resources.php');

class Api {

    private $email = null;
    private $password = null;

    private $routes = null;
    private $request = null;
    private $authuser = null;
    private $resources = null;

    private function _request($method, $uri, $params = [], $headers = []){
        $response = null;
        $default_headers = [
            'Content-Type: application/json',
        ];

        if(!is_null($this->authuser)){
            $default_headers[] = sprintf('X-User-Api-Token: %s', $this->authuser->getToken());
        }

        $options = [
            'uri' => $uri,
            'params' => $params,
            'headers' => array_merge($default_headers, $headers),
        ];

        if(method_exists($this->request, $method)){
            $response = $this->request->{$method}($options);
        }

        return $response;
    }

    public function __construct($credentials){
        $this->email = $credentials['email'] ?? null;
        $this->password = $credentials['password'] ?? null;
        $this->routes = new Routes();
        $this->request = new Request(Request::AS_ARRAY);
        $this->resources = new Resources();
    }

    public function auth(){
        $this->authuser = null;

        $response = $this->_request('post', $this->routes->auth(), [
            'user_login' => [
                'email' => $this->email,
                'password' => $this->password,
            ],
        ]);


        if(!is_null($response) && $response['success'] == true){
            unset($response['success']);
            $this->authuser = new AuthUser($response);
        }

        return !is_null($this->authuser);
    }

    public function logout(){
        return $this->_request('post', $this->routes->logout([
            'user_id' => $this->authuser->getUserID(),
        ]));
    }

}


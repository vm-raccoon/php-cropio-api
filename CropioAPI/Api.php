<?php

require('Routes.php');
require('Request.php');

class Api {

    private $email = null;
    private $password = null;

    private $routes = null;
    private $request = null;

    public function __construct($credentials){
        $this->email = $credentials['email'] ?? null;
        $this->password = $credentials['password'] ?? null;
        $this->routes = new Routes();
        $this->request = new Request();
    }

    public function auth(){
        return $this->routes->auth();
    }

}


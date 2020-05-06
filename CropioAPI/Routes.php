<?php

class Routes {

    private $domain = 'https://cropio.com';
    private $urn = '/api/v3';

    private $route = [
        'auth' => '/sign_in',
        'single' => '/[RESOURCE]/[ID]',
        'collection' => '/[RESOURCE]',
        'ids' => '/[RESOURCE]/ids',
        'changes' => '/[RESOURCE]/changes',
        'changes_ids' => '/[RESOURCE]/changes_ids',
        'mass_request' => '/[RESOURCE]/mass_request',
    ];

    public function __call($name, $arguments){
        $result = null;

        if(isset($this->route[$name])){
            $result = sprintf('%s%s%s',
                $this->domain,
                $this->urn,
                $this->route[$name]
            );
        }

        return $result;
    }

    //

}

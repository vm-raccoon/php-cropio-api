<?php

class Request {

    public function get($options = [];){
        $options = array_merge([
            'uri' => null,
            'params' => null,
            'headers' => null,
        ], $options);
        extract($options);

        $uri = sprintf('%s?%s', $uri, http_build_query($params));

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

    public function post(){
        //
    }

    public function put(){
        //
    }

    public function delete(){
        //
    }

}

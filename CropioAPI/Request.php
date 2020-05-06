<?php

class Request {

    const AS_ARRAY = true;
    const AS_OBJECT = false;

    private $converting = null;


    private function merge_options($options){
        return array_merge([
            'uri' => null,
            'params' => null,
            'headers' => null,
        ], $options);
    }

    private function get_curl($uri, $headers = []){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        return $curl;
    }

    private function decode($data){
        return json_decode($data, $this->converting);
    }

    public function __construct($converting = null){
        $this->converting = boolval($converting ?? false);
    }

    public function get($options = []){
        extract($this->merge_options($options));

        $params = http_build_query($params);
        $uri = sprintf('%s?%s', $uri, $params);
        $curl = $this->get_curl($uri, $headers);
        $response = curl_exec($curl);
        curl_close($curl);

        return $this->decode($response);
    }

    public function post($options){
        extract($this->merge_options($options));

        $curl = $this->get_curl($uri, $headers);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        $response = curl_exec($curl);
        curl_close($curl);

        return $this->decode($response);
    }

    public function put($options){
        extract($this->merge_options($options));

        $curl = $this->get_curl($uri, $headers);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        $response = curl_exec($curl);
        curl_close($curl);

        return $this->decode($response);
    }

    public function delete($options){
        extract($this->merge_options($options));

        $curl = $this->get_curl($uri, $headers);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        $response = curl_exec($curl);
        curl_close($curl);

        return $this->decode($response);
    }

}

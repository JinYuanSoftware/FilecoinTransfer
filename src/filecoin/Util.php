<?php

namespace src\filecoin;

class Util
{
    public static function post($url, $data = [], $header = [], $auth)
    {
        $data_string = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        $add_header = [
            'Content-Type: application/json',
            $auth
        ];
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array_merge($header, $add_header)
        );
        $result = curl_exec($ch);
        var_dump(curl_getinfo($ch,CURLINFO_HTTP_CODE));
        curl_close($ch);
        var_dump($result);die;
        return json_decode($result, 1);
    }
    public static function createDate($method, $params)
    {
        return [
            "jsonrpc" => "2.0",
            "method" => $method,
            "params" => $params,
            "id" => intval(time() . rand(1000, 9999))
        ];
    }
}

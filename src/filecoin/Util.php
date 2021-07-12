<?php

namespace src\filecoin;


class Util
{
    public static function post($url, $data = [], $header = [], $projectId, $projectKey)
    {
        $ch = curl_init();
        $data = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length:' . strlen($data), 'Authorization: Basic ' . base64_encode($projectId . ':' . $projectKey)]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result,1);
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

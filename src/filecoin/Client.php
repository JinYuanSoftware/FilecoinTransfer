<?php

namespace src\filecoin;


/**
 *  入口 
 */

class Client
{
    use Address;

    private static $nodeUrl;
    private static $projectId;
    private static $projectKey;

    private function __construct()
    {

    }
    
    public static function Conn($url, $projectId, $projectKey)
    {
        $client = new self();
        $client::$nodeUrl = $url;
        $client::$projectId = $projectId;
        $client::$projectKey = $projectKey;
        return $client;
    }

    public function getAuth()
    {
        return "Authorization: Basic " . base64_encode(self::$projectId . ':' . self::$projectKey);
    }

    public function SetPrivateKey($privateKey)
    {

    }
}

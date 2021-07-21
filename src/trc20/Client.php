<?php

namespace src\trc20;

class Client
{
    private static $nodeUrl;
    private function __construct()
    {
    }
    public static function Conn($url, $token)
    {
        $client = new self();
        $client::$nodeUrl = $url;
        return $client;
    }
}

<?php

namespace src\filecoin;


/**
 *  入口 
 */

class Client
{
    use Address;
    use Wallet;
    private static $nodeUrl;

    private function __construct()
    {

    }
    
    public static function Conn($url,$token)
    {
        $client = new self();
        $client::$nodeUrl = $url.'?token='.$token;
        return $client;
    }

    public function SetPrivateKey($privateKey)
    {

    }
}

<?php

namespace src\filecoin;

/**
 * 创建地址
 */

trait  Address
{
    public  function newAddress()
    {
        $data = Util::createDate("Filecoin.WalletBalance", ["f01234"]);
        return Util::post($this::$nodeUrl, $data, [], $this::$projectId, $this::$projectKey);
    }
}

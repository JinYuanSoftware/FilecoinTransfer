<?php

namespace src\filecoin;

/**
 * 创建地址
 */

trait  Address
{
    public  function newAddress()
    {
        $data = Util::createDate("Filecoin.WalletNew", ["bls"]);
        return Util::post($this::$nodeUrl, $data, [],$this->getAuth());
    }
}

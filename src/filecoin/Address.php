<?php

namespace src\filecoin;

/**
 * 创建地址
 */

trait  Address
{
    // 创建钱包
    public  function newAddress()
    {
        $data = Util::createDate("Filecoin.WalletNew", ["bls"]);
        $result = Util::post($this::$nodeUrl, $data);
        if(!empty($result["result"])){
            return $result["result"];
        }
        throw new \Exception("创建钱包地址错误");
    }

    // 导出钱包
    public function exportAddress($address){
        $data = Util::createDate("Filecoin.WalletExport", [$address]);
        $result = Util::post($this::$nodeUrl, $data);
        if(!empty($result["result"]["PrivateKey"])){
            return $result["result"]["PrivateKey"];
        }
        throw new \Exception("地址不存在");
    }

}

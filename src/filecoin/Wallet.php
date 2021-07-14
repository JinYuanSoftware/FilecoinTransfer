<?php
namespace src\filecoin;
trait Wallet{

    public function Balance($address){
        $data = Util::createDate("Filecoin.WalletBalance", [$address]);
        $result = Util::post($this::$nodeUrl, $data);
        var_dump($result);
        if(isset($result["result"])){
            return $result["result"];
        }else{
            throw new \Exception(json_encode($result["error"]));
        }
        throw new \Exception("创建钱包地址错误");
    }
}
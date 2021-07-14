<?php
namespace src\demo;
use src\filecoin\Client;
class filecoin{
    public function address(){
        $fileConn = Client::Conn('47.90.241.207:1234/rpc/v0','eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJBbGxvdyI6WyJyZWFkIiwid3JpdGUiLCJzaWduIiwiYWRtaW4iXX0.mIjk8QNaaHxUQlpHC0Cb0AQ1axDyt6IOzEOAHw8WqnY');
        // 新建钱包地址
        // $address = $fileConn->NewAddress();
        // var_dump($address);

        // 导出钱包私钥
        // $key = $fileConn->exportAddress($address);
        // var_dump($key);

        // 获取钱包余额
        // $balance = $fileConn->Balance("f0395680");
        // var_dump($balance);

        
    }
}
(new filecoin())->address();
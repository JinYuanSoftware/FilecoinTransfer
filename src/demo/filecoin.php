<?php
namespace src\demo;
use src\filecoin\Client;
class filecoin{
    public function address(){
        $fileConn = Client::Conn('https://filecoin.infura.io','1vCh3bTMGYkYuiK4ST17s3OqhVy','aff0b058f445361d8ee565105ccf1b9e');
        $address = $fileConn->NewAddress();
        var_dump($address);
    }
}
(new filecoin())->address();
<?php

use src\trc20\Client;

class trc20 {
    public function newAddress(){
        $key = '6f24772b-d0f5-4aa7-99cd-4fadd617b80a';
        $client = Client::Conn('https://api.shasta.trongrid.io',$key);
    }
}
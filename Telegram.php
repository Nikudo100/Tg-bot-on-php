<?php

class Telegram 
{
    private $url = 'https://api.telegram.org/bot';
    private $token = "6213674319:AAGDoShgj7fKICIRml9wDdwmxw0vJ5jyFso";

    public function request($data, $method)
    {
        
        $ch = curl_init("{$this->url}{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);
          
        $res = json_encode($res, JSON_UNESCAPED_UNICODE);
        print_r($res);
    }

}
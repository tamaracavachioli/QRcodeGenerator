<?php

namespace App\Factories;

require_once('app/Factories/AbstractFactoryMethod.php');
require_once('app/Qrcode/AbstractQrCode.php');
require_once('app/Qrcode/CieloQrCode.php');
require_once('app/Qrcode/RedeQrCode.php');
require_once('app/Qrcode/GetnetQrCode.php');
require_once ('app/AppConts.php');
use App\Qrcode\CieloQrCode;
use App\Qrcode\RedeQrCode;
use App\Qrcode\GetnetQrCode;

class RedeFactoryMethod extends AbstractFactoryMethod {
    function makeQrCode($context, $param) {
        $qrCode = NULL;   
        switch ($context) {
            case $this->CIELO:
                $qrCode = new CieloQrcode;
                break;
            case $this->REDE:
                $qrCode = new RedeQrCode;
                break;
            case $this->GETNET:
                $qrCode = new GetnetQrCode;
                break;
            default:
                $qrCode = new RedeQrCode;
                break;        
          }     
        return $qrCode;
    }
}
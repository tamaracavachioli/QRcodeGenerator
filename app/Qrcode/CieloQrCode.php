<?php

namespace App\Qrcode;

class CieloQrCode extends AbstractQrCode {
    private $qrCodeString;
    function __construct() {
            $this->qrCodeString = "UM TESTE DE QR CODE";
    }
    function getQrCodeString() {
      return $this->qrCodeString;
    }
}
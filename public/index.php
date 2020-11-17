<?php
require_once __DIR__.'/../vendor/autoload.php';
require('app/Factories/CieloFactoryMethod.php');
require('app/Factories/RedeFactoryMethod.php');
require('app/Factories/GetnetFactoryMethod.php');
require ('app/AppConts.php');

use chillerlan\QRCode\{QRCode, QROptions};
use App\Factories\CieloFactoryMethod;
use App\Factories\GetnetFactoryMethod;
use App\Factories\RedeFactoryMethod;

$cielo = new CieloFactoryMethod;
$getnet = new GetnetFactoryMethod;
$rede = new RedeFactoryMethod;


$qrCielo = $cielo->makeQrCode(CIELO, []);
$qrRede = $rede->makeQrCode(REDE, []);
$qrGetnet = $getnet->makeQrCode(GETNET, []);

echo '<img src="'.(new QRCode)->render($qrCielo->getQrCodeString()).'" alt="QR Code cielo" />';
echo '<img src="'.(new QRCode)->render($qrRede->getQrCodeString()).'" alt="QR  rede" />';
echo '<img src="'.(new QRCode)->render($qrGetnet->getQrCodeString()).'" alt="QR Code getnet" />';
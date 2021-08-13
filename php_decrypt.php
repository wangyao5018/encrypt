<?php

use Dotenv\Dotenv;

require_once './vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// js_encrypt.html 加密得到的字符串
$encrypted = 'DrSTAnB7Ce0o226KXY71SYhuLsJwt1Znsetq88otILjrF2y08GUB0feqtSmLCBmgd70PuLXYkARPUDyRcNEjcY11xepCG0rxL+vgtCgEVALnJpBuJKzNzlnVEePRz2i8wXDzH+aZ+xFGfY/rt+9tyIXIiuZJcByas9yOXr5PXuM=';


$privateKey = file_get_contents(__DIR__ . '/rsa_private_key.pem');

# 私钥解密
$decrypted = '';
openssl_private_decrypt(base64_decode($encrypted), $decrypted, $privateKey);
var_dump($decrypted);
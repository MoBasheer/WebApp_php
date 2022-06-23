<?php

//Create csrf token using "uniqid_func" to generate a unique & random token
// $token = bin2hex(uniqid(openssl_random_pseudo_bytes(16), true));
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;

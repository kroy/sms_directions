<?php

require_once 'GmapsRequest.php';

$req = new GmapsRequest();
$result = $req->send();
$result = json_decode($result, true);
var_dump($result);
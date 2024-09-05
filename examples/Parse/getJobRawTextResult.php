<?php

use Partitech\LlamaCloud\Client;
use Partitech\LlamaCloud\LlamaCloudException;
use Partitech\LlamaCloud\Parse;

require_once __DIR__ . '/../../vendor/autoload.php';

// export LLAMACLOUD_API_KEY=*****
$apiKey = getenv('LLAMACLOUD_API_KEY');
$client = new Client($apiKey);
$parse  = new Parse($client);

try {
    $usage = $parse->getJobRawTextResult('5f1badf2-75b0-420e-977c-bff0136b377a');
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

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
    $usage = $parse->getUsage();
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

/**
 * array(2) {
 * ["usage_pdf_pages"]=>
 * int(10)
 * ["max_pdf_pages"]=>
 * int(1000)
 * }
 */
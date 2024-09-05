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
    $usage = $parse->generatePresignedUrl(jobId: '5f1badf2-75b0-420e-977c-bff0136b377a', filename: 'test');
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

/**
 * array(3) {
 * ["url"]=>
 * string(262) "https://llama-platform-file-parsing.s3.amazonaws.com/fb_123456/5f1badf2-75b0-420e-977c-bff0136b377a/test?response-content-type=application%2Fpdf&AWSAccessKeyId=AWSAccessKeyId&Signature=Signature%3D&Expires=1725547001"
 * ["expires_at"]=>
 * string(32) "2024-09-05T14:36:41.846286+00:00"
 * ["form_fields"]=>
 * NULL
 * }
 */
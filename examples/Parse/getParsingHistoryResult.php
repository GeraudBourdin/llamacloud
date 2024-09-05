<?php


use Partitech\LlamaCloud\Client;
use Partitech\LlamaCloud\LlamaCloudException;
use Partitech\LlamaCloud\Parse;

require_once __DIR__ . '/../../vendor/autoload.php';

// export LLAMACLOUD_API_KEY=*****
$apiKey = getenv('LLAMACLOUD_API_KEY');
$client = new Client($apiKey);
$parse = new Parse($client);

try {
    $usage = $parse->getParsingHistoryResult();
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

/**
 * array(69) {
 * [0]=>
 * array(9) {
 * ["user_id"]=>
 * string(31) "fb:7VK8o9l032bhU7ghuo9kRfrzKTk1"
 * ["day"]=>
 * string(10) "2024-09-05"
 * ["job_id"]=>
 * string(36) "5f1badf2-75b0-420e-977c-bff0136b377a"
 * ["file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["original_file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["expired"]=>
 * bool(false)
 * ["pages"]=>
 * float(0)
 * ["images"]=>
 * float(0)
 * ["time"]=>
 * float(0)
 * }
 * [1]=>
 * array(9) {
 * ["user_id"]=>
 * string(31) "fb:7VK8o9l032bhU7ghuo9kRfrzKTk1"
 * ["day"]=>
 * string(10) "2024-09-05"
 * ["job_id"]=>
 * string(36) "789833ba-6828-4f7a-bbed-322b669673d3"
 * ["file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["original_file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["expired"]=>
 * bool(false)
 * ["pages"]=>
 * float(0)
 * ["images"]=>
 * float(0)
 * ["time"]=>
 * float(0)
 * }
 * [2]=>
 * array(9) {
 * ["user_id"]=>
 * string(31) "fb:7VK8o9l032bhU7ghuo9kRfrzKTk1"
 * ["day"]=>
 * string(10) "2024-09-05"
 * ["job_id"]=>
 * string(36) "93fdacfc-487e-4592-ae80-1c27a5f9ef8c"
 * ["file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["original_file_name"]=>
 * string(11) "LICENSE.pdf"
 * ["expired"]=>
 * bool(false)
 * ["pages"]=>
 * float(10)
 * ["images"]=>
 * float(0)
 * ["time"]=>
 * float(16112)
 * }
 * }
 */
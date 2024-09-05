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
    $supportedExtensions = $parse->getSupportedFileExtensions();
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($supportedExtensions);


/**
 * array(75) {
 * [0]=>
 * string(4) ".pdf"
 * [1]=>
 * string(4) ".doc"
 * [2]=>
 * string(5) ".docx"
 * [3]=>
 * string(5) ".docm"
 * [4]=>
 * string(4) ".dot"
 * [5]=>
 * string(5) ".dotx"
 * [6]=>
 * string(5) ".dotm"
 * [7]=>
 * string(4) ".rtf"
 * [8]=>
 * string(4) ".wps"
 * [9]=>
 * string(4) ".wpd"
 * [10]=>
 * string(4) ".sxw"
 * [11]=>
 * string(4) ".stw"
 * [12]=>
 * string(4) ".sxg"
 * [13]=>
 * string(6) ".pages"
 * [14]=>
 * string(3) ".mw"
 * [15]=>
 * string(4) ".mcw"
 * [16]=>
 * string(4) ".uot"
 * [17]=>
 * string(4) ".uof"
 * [18]=>
 * string(4) ".uos"
 * [19]=>
 * string(4) ".uop"
 * [20]=>
 * string(4) ".ppt"
 * [21]=>
 * string(5) ".pptx"
 * [22]=>
 * string(4) ".pot"
 * [23]=>
 * string(5) ".pptm"
 * [24]=>
 * string(5) ".potx"
 * [25]=>
 * string(5) ".potm"
 * [26]=>
 * string(4) ".key"
 * [27]=>
 * string(4) ".odp"
 * [28]=>
 * string(4) ".odg"
 * [29]=>
 * string(4) ".otp"
 * [30]=>
 * string(5) ".fopd"
 * [31]=>
 * string(4) ".sxi"
 * [32]=>
 * string(4) ".sti"
 * [33]=>
 * string(5) ".epub"
 * [34]=>
 * string(4) ".jpg"
 * [35]=>
 * string(5) ".jpeg"
 * [36]=>
 * string(4) ".png"
 * [37]=>
 * string(4) ".gif"
 * [38]=>
 * string(4) ".bmp"
 * [39]=>
 * string(4) ".svg"
 * [40]=>
 * string(5) ".tiff"
 * [41]=>
 * string(5) ".webp"
 * [42]=>
 * string(5) ".html"
 * [43]=>
 * string(4) ".htm"
 * [44]=>
 * string(4) ".xls"
 * [45]=>
 * string(5) ".xlsx"
 * [46]=>
 * string(5) ".xlsm"
 * [47]=>
 * string(5) ".xlsb"
 * [48]=>
 * string(4) ".xlw"
 * [49]=>
 * string(4) ".csv"
 * [50]=>
 * string(4) ".dif"
 * [51]=>
 * string(5) ".sylk"
 * [52]=>
 * string(4) ".slk"
 * [53]=>
 * string(4) ".prn"
 * [54]=>
 * string(8) ".numbers"
 * [55]=>
 * string(3) ".et"
 * [56]=>
 * string(4) ".ods"
 * [57]=>
 * string(5) ".fods"
 * [58]=>
 * string(5) ".uos1"
 * [59]=>
 * string(5) ".uos2"
 * [60]=>
 * string(4) ".dbf"
 * [61]=>
 * string(4) ".wk1"
 * [62]=>
 * string(4) ".wk2"
 * [63]=>
 * string(4) ".wk3"
 * [64]=>
 * string(4) ".wk4"
 * [65]=>
 * string(4) ".wks"
 * [66]=>
 * string(4) ".wq1"
 * [67]=>
 * string(4) ".wq2"
 * [68]=>
 * string(4) ".wb1"
 * [69]=>
 * string(4) ".wb2"
 * [70]=>
 * string(4) ".wb3"
 * [71]=>
 * string(4) ".qpw"
 * [72]=>
 * string(4) ".xlr"
 * [73]=>
 * string(4) ".eth"
 * [74]=>
 * string(4) ".tsv"
 * }
 */
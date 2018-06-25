<?php

$barcode = 'EU251727742TH';
echo "<pre>";
print_r(getEmsApi($barcode));
echo "</pre>";
function getEmsApi($barcode) {
//    $authenEMS = $this->transportprocess_model->get_ems_api();
    $authen_encode = base64_encode('five2277' . ':' . '12345');
//    }
    $context = stream_context_create(array(
        'http' => array(
            'method' => 'GET',
            'header' => "Authorization: Basic $authen_encode=",
            'ignore_errors' => true
        )
    ));
    $response = file_get_contents("http://r_dservice.thailandpost.com:8080/webservice/getOrderByBarcode?barcode=$barcode", false, $context);
    $object = json_decode($response);
    return $object;
}

?>



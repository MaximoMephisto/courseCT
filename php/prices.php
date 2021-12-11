<?php

$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '5',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: 6bce5cdd-8097-4146-8931-2a9d320f1636'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));



$response = curl_exec($curl); // Send the request, save the response
$response = json_decode($response, true);

$aData = $response['data'][0];
$aDataTwo = $response['data'][1];
$aDataThree = $response['data'][2];
$aDataFour = $response['data'][3];
$aDataFive = $response['data'][4];

echo 
  ' <b>Symbol:</b> ' . $aData['symbol'] . ' <b>Name:</b> ' . $aData['name'] . ' <b>USD price:</b> ' . '$' . $aData['quote']['USD']['price'] . ' <b>Volume:</b> ' . $aData['quote']['USD']['volume_24h'] . ' <a style="padding-left: 10px; padding-right: 10px;"></a> ' .
  ' <b>Symbol:</b> ' . $aDataTwo['symbol'] . ' <b>Name:</b> ' . $aDataTwo['name'] . ' <b>USD price:</b> ' . '$' . $aDataTwo['quote']['USD']['price']. ' <b>Volume:</b> ' . $aDataTwo['quote']['USD']['volume_24h'] . ' <a style="padding-left: 10px; padding-right: 10px;"></a> ' .
  ' <b>Symbol:</b> ' . $aDataThree['symbol'] . ' <b>Name:</b> ' . $aDataThree['name'] . ' <b>USD price:</b> ' . '$' . $aDataThree['quote']['USD']['price']. ' <b>Volume:</b> ' . $aDataThree['quote']['USD']['volume_24h'] . ' <a style="padding-left: 10px; padding-right: 10px;"></a> ' .
  ' <b>Symbol:</b> ' . $aDataFour['symbol'] . ' <b>Name:</b> ' . $aDataFour['name'] . ' <b>USD price:</b> ' . '$' . $aDataFour['quote']['USD']['price']. ' <b>Volume:</b> ' . $aDataFour['quote']['USD']['volume_24h'] . ' <a style="padding-left: 10px; padding-right: 10px;"></a> ' .
  ' <b>Symbol:</b> ' . $aDataFive['symbol'] . ' <b>Name:</b> ' . $aDataFive['name'] . ' <b>USD price:</b> ' . '$' . $aDataFive['quote']['USD']['price']. ' <b>Volume:</b> ' . $aDataFive['quote']['USD']['volume_24h'] . ' <a style="padding-left: 10px; padding-right: 10px;"></a> ' 
;

curl_close($curl); // Close request

?> 
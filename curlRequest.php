<?php
$ch = curl_init("http://www.dneonline.com/calculator.asmx");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml', 'SOAPAction: "http://tempuri.org/Add"'));
curl_setopt($ch, CURLOPT_POST, 1);

$string = '<?xml version="1.0" encoding="utf-8"?>';
$string .= '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">';
$string .= '<soap:Body>;';
$string .= '<Add xmlns="http://tempuri.org/">';
$string .= '<intA>8</intA>';
$string .= '<intB>8</intB>';
$string .= '</Add>';
$string .= '</soap:Body>';
$string .= '</soap:Envelope>';

curl_setopt($ch, CURLOPT_POSTFIELDS, $string); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

print($response);

curl_close($ch);
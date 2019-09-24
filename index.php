<?php
$sh_params = [
    '22', '50'
];
try{
    $soapClient = new SoapClient("dneonline.com/calculator.asmx?WSDL");
    
    // $headers[] = new SoapHeader('http://tempuri.org', 'Content-Type', 'text/xml');
    // $headers[] = new SoapHeader('http://tempuri.org', 'SOAPAction', '"http://tempuri.org/Add"');
    // $headers[] = new SoapHeader('http://tempuri.org', 'Content-Length', '5');
    
    // $soapClient->__setSoapHeaders($headers);
    // $soapClient->So

    // $headers = [
    //     'Content-Type: text/xml',
    //     'SOAPAction: "http://tempuri.org/Add"',
    //     'Conent-Length: 10'
    // ];
    
    // $client->__soapCall("Add", $sh_params);
} catch (Exception $e) {
    echo '<pre>';
    print_r($e->getMessage());
    echo '</pre>';
}

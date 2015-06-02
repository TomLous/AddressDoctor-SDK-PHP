<?php
/**
 * @author      Tom Lous <tomlous@gmail.com>
 * @copyright   2015 Tom Lous
 * @package     package
 * Datetime:     02/06/15 11:09
 */
require_once(__DIR__.'/../vendor/autoload.php');
use AddressDoctor\AddressDoctorCloudAddressValidationRequest;
//use Wsdl2PhpGenerator\Generator;
//use Wsdl2PhpGenerator\Config;

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => AddressDoctorCloudAddressValidationRequest::WSDL_URL,
        'outputDir' => 'wsdl_output',
        'namespaceName' => 'AddressDoctor'
    ))
);
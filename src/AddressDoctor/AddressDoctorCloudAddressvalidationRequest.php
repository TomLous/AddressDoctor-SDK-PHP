<?php
/**
 * @author      Tom Lous <tomlous@gmail.com>
 * @copyright   2015 Tom Lous
 * @package     package
 * Datetime:     02/06/15 10:19
 */

namespace AddressDoctor;


class AddressDoctorCloudAddressvalidationRequest
{

    const VERSION = '2';

    const BASE_WEBSERVICE_URL = 'http://validator5.AddressDoctor.com/Webservice5/v2/addressvalidation.asmx';

    const WDSL_URL = 'http://validator5.addressdoctor.com/webservice5/v2/addressvalidation.asmx?WSDL';


    public function __construct()
    {

        $client = new SoapClient("some.wsdl", array('soap_version' => SOAP_1_2));

    }


} 
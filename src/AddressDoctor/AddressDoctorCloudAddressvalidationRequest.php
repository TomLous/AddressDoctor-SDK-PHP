<?php
/**
 * @author      Tom Lous <tomlous@gmail.com>
 * @copyright   2015 Tom Lous
 * @package     package
 * Datetime:     02/06/15 10:19
 */

namespace AddressDoctor;


class AddressDoctorCloudAddressValidationRequest
{

    const VERSION = '2';

    const WEBSERVICE_URL = 'http://validator5.AddressDoctor.com/Webservice5/v2/addressvalidation.asmx';

    const WSDL_URL = 'http://validator5.addressdoctor.com/webservice5/v2/addressvalidation.asmx?WSDL';

    private $soapClient;

    private $login;
    private $password;

    const PROCESS_MODE_INTERACTIVE = 'INTERACTIVE';
    const PROCESS_MODE_FASTCOMPLETION = 'FASTCOMPLETION';
    const PROCESS_MODE_BATCH = 'BATCH';
    const PROCESS_MODE_CERTIFIED = 'CERTIFIED';
    const PROCESS_MODE_ADDRESSCODELOOKUP = 'ADDRESSCODELOOKUP';



    public function __construct($login, $password)
    {

        $this->soapClient = new SoapClient(self::WSDL_URL, array('soap_version' => SOAP_1_2));

        $this->login = $login;
        $this->password = $password;



    }


    public function test(){
        $this->process(self::PROCESS_MODE_INTERACTIVE);
    }


    public function process($processMode, $jobToken=null, $campaignId=null, $reservedXml=null, $useTransactionPool=null){

        $serviceParameters = new ServiceParameters($jobToken, $campaignId, $reservedXml, $useTransactionPool);
        $validationParameters = new ValidationParameters();

        $parameters = new Parameters($processMode, $serviceParameters, $validationParameters);
        $parameters->setProcessMode($processMode);


        $addresses = new ArrayOfAddress();
        $enrichments =  new ArrayOfEnrichment();

        $process = new Process($this->login, $this->password, $parameters, $addresses, $enrichments);


    }


}


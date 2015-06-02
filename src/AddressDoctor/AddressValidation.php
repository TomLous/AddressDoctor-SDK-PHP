<?php

namespace AddressDoctor;

class AddressValidation extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Process' => 'AddressDoctor\\Process',
      'Parameters' => 'AddressDoctor\\Parameters',
      'ServiceParameters' => 'AddressDoctor\\ServiceParameters',
      'ValidationParameters' => 'AddressDoctor\\ValidationParameters',
      'Standardize' => 'AddressDoctor\\Standardize',
      'AdditionalInformation' => 'AddressDoctor\\AdditionalInformation',
      'AddressOptions' => 'AddressDoctor\\AddressOptions',
      'ArrayOfAddress' => 'AddressDoctor\\ArrayOfAddress',
      'Address' => 'AddressDoctor\\Address',
      'ArrayOfString' => 'AddressDoctor\\ArrayOfString',
      'AddressCode' => 'AddressDoctor\\AddressCode',
      'AddressDetailed' => 'AddressDoctor\\AddressDetailed',
      'ArrayOfStreetDetailed' => 'AddressDoctor\\ArrayOfStreetDetailed',
      'StreetDetailed' => 'AddressDoctor\\StreetDetailed',
      'ArrayOfSubBuildingDetailed' => 'AddressDoctor\\ArrayOfSubBuildingDetailed',
      'SubBuildingDetailed' => 'AddressDoctor\\SubBuildingDetailed',
      'ArrayOfResidueDetailed' => 'AddressDoctor\\ArrayOfResidueDetailed',
      'ResidueDetailed' => 'AddressDoctor\\ResidueDetailed',
      'ArrayOfEnrichment' => 'AddressDoctor\\ArrayOfEnrichment',
      'Enrichment' => 'AddressDoctor\\Enrichment',
      'ProcessResponse' => 'AddressDoctor\\ProcessResponse',
      'Response' => 'AddressDoctor\\Response',
      'ArrayOfAdditionalInformation' => 'AddressDoctor\\ArrayOfAdditionalInformation',
      'ArrayOfResult' => 'AddressDoctor\\ArrayOfResult',
      'Result' => 'AddressDoctor\\Result',
      'ArrayOfResultData' => 'AddressDoctor\\ArrayOfResultData',
      'ResultData' => 'AddressDoctor\\ResultData',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://validator5.addressdoctor.com/webservice5/v2/addressvalidation.asmx?WSDL')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param Process $parameters
     * @return ProcessResponse
     */
    public function Process(Process $parameters)
    {
      return $this->__soapCall('Process', array($parameters));
    }

}

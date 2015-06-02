<?php

namespace AddressDoctor;

class Enrichment
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $PayloadXml
     */
    protected $PayloadXml = null;

    /**
     * @param string $Type
     * @param string $PayloadXml
     */
    public function __construct($Type, $PayloadXml)
    {
      $this->Type = $Type;
      $this->PayloadXml = $PayloadXml;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \AddressDoctor\Enrichment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayloadXml()
    {
      return $this->PayloadXml;
    }

    /**
     * @param string $PayloadXml
     * @return \AddressDoctor\Enrichment
     */
    public function setPayloadXml($PayloadXml)
    {
      $this->PayloadXml = $PayloadXml;
      return $this;
    }

}

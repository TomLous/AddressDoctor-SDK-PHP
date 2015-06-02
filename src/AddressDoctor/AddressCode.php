<?php

namespace AddressDoctor;

class AddressCode
{

    /**
     * @var string $CodeType
     */
    protected $CodeType = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $CodeType
     * @param string $Value
     */
    public function __construct($CodeType, $Value)
    {
      $this->CodeType = $CodeType;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getCodeType()
    {
      return $this->CodeType;
    }

    /**
     * @param string $CodeType
     * @return \AddressDoctor\AddressCode
     */
    public function setCodeType($CodeType)
    {
      $this->CodeType = $CodeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \AddressDoctor\AddressCode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

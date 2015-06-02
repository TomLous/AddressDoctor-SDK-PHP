<?php

namespace AddressDoctor;

class Parameters
{

    /**
     * @var string $ProcessMode
     */
    protected $ProcessMode = null;

    /**
     * @var ServiceParameters $ServiceParameters
     */
    protected $ServiceParameters = null;

    /**
     * @var ValidationParameters $ValidationParameters
     */
    protected $ValidationParameters = null;

    /**
     * @param string $ProcessMode
     * @param ServiceParameters $ServiceParameters
     * @param ValidationParameters $ValidationParameters
     */
    public function __construct($ProcessMode, $ServiceParameters, $ValidationParameters)
    {
      $this->ProcessMode = $ProcessMode;
      $this->ServiceParameters = $ServiceParameters;
      $this->ValidationParameters = $ValidationParameters;
    }

    /**
     * @return string
     */
    public function getProcessMode()
    {
      return $this->ProcessMode;
    }

    /**
     * @param string $ProcessMode
     * @return \AddressDoctor\Parameters
     */
    public function setProcessMode($ProcessMode)
    {
      $this->ProcessMode = $ProcessMode;
      return $this;
    }

    /**
     * @return ServiceParameters
     */
    public function getServiceParameters()
    {
      return $this->ServiceParameters;
    }

    /**
     * @param ServiceParameters $ServiceParameters
     * @return \AddressDoctor\Parameters
     */
    public function setServiceParameters($ServiceParameters)
    {
      $this->ServiceParameters = $ServiceParameters;
      return $this;
    }

    /**
     * @return ValidationParameters
     */
    public function getValidationParameters()
    {
      return $this->ValidationParameters;
    }

    /**
     * @param ValidationParameters $ValidationParameters
     * @return \AddressDoctor\Parameters
     */
    public function setValidationParameters($ValidationParameters)
    {
      $this->ValidationParameters = $ValidationParameters;
      return $this;
    }

}

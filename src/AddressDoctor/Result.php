<?php

namespace AddressDoctor;

class Result
{

    /**
     * @var string $ProcessStatus
     */
    protected $ProcessStatus = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $CountryISO3
     */
    protected $CountryISO3 = null;

    /**
     * @var ArrayOfResultData $ResultDataSet
     */
    protected $ResultDataSet = null;

    /**
     * @var ArrayOfEnrichment $Enrichments
     */
    protected $Enrichments = null;

    /**
     * @param string $ProcessStatus
     * @param string $ErrorMessage
     * @param string $CountryISO3
     * @param ArrayOfResultData $ResultDataSet
     * @param ArrayOfEnrichment $Enrichments
     */
    public function __construct($ProcessStatus, $ErrorMessage, $CountryISO3, $ResultDataSet, $Enrichments)
    {
      $this->ProcessStatus = $ProcessStatus;
      $this->ErrorMessage = $ErrorMessage;
      $this->CountryISO3 = $CountryISO3;
      $this->ResultDataSet = $ResultDataSet;
      $this->Enrichments = $Enrichments;
    }

    /**
     * @return string
     */
    public function getProcessStatus()
    {
      return $this->ProcessStatus;
    }

    /**
     * @param string $ProcessStatus
     * @return \AddressDoctor\Result
     */
    public function setProcessStatus($ProcessStatus)
    {
      $this->ProcessStatus = $ProcessStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \AddressDoctor\Result
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryISO3()
    {
      return $this->CountryISO3;
    }

    /**
     * @param string $CountryISO3
     * @return \AddressDoctor\Result
     */
    public function setCountryISO3($CountryISO3)
    {
      $this->CountryISO3 = $CountryISO3;
      return $this;
    }

    /**
     * @return ArrayOfResultData
     */
    public function getResultDataSet()
    {
      return $this->ResultDataSet;
    }

    /**
     * @param ArrayOfResultData $ResultDataSet
     * @return \AddressDoctor\Result
     */
    public function setResultDataSet($ResultDataSet)
    {
      $this->ResultDataSet = $ResultDataSet;
      return $this;
    }

    /**
     * @return ArrayOfEnrichment
     */
    public function getEnrichments()
    {
      return $this->Enrichments;
    }

    /**
     * @param ArrayOfEnrichment $Enrichments
     * @return \AddressDoctor\Result
     */
    public function setEnrichments($Enrichments)
    {
      $this->Enrichments = $Enrichments;
      return $this;
    }

}

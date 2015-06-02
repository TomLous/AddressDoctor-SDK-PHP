<?php

namespace AddressDoctor;

class Response
{

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var string $JobToken
     */
    protected $JobToken = null;

    /**
     * @var string $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var string $ReservedXml
     */
    protected $ReservedXml = null;

    /**
     * @var ArrayOfAdditionalInformation $AdditionalInformationSet
     */
    protected $AdditionalInformationSet = null;

    /**
     * @var ArrayOfResult $Results
     */
    protected $Results = null;

    /**
     * @param int $StatusCode
     * @param string $StatusMessage
     * @param string $JobToken
     * @param string $CampaignId
     * @param string $ReservedXml
     * @param ArrayOfAdditionalInformation $AdditionalInformationSet
     * @param ArrayOfResult $Results
     */
    public function __construct($StatusCode, $StatusMessage, $JobToken, $CampaignId, $ReservedXml, $AdditionalInformationSet, $Results)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
      $this->JobToken = $JobToken;
      $this->CampaignId = $CampaignId;
      $this->ReservedXml = $ReservedXml;
      $this->AdditionalInformationSet = $AdditionalInformationSet;
      $this->Results = $Results;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \AddressDoctor\Response
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \AddressDoctor\Response
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobToken()
    {
      return $this->JobToken;
    }

    /**
     * @param string $JobToken
     * @return \AddressDoctor\Response
     */
    public function setJobToken($JobToken)
    {
      $this->JobToken = $JobToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param string $CampaignId
     * @return \AddressDoctor\Response
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservedXml()
    {
      return $this->ReservedXml;
    }

    /**
     * @param string $ReservedXml
     * @return \AddressDoctor\Response
     */
    public function setReservedXml($ReservedXml)
    {
      $this->ReservedXml = $ReservedXml;
      return $this;
    }

    /**
     * @return ArrayOfAdditionalInformation
     */
    public function getAdditionalInformationSet()
    {
      return $this->AdditionalInformationSet;
    }

    /**
     * @param ArrayOfAdditionalInformation $AdditionalInformationSet
     * @return \AddressDoctor\Response
     */
    public function setAdditionalInformationSet($AdditionalInformationSet)
    {
      $this->AdditionalInformationSet = $AdditionalInformationSet;
      return $this;
    }

    /**
     * @return ArrayOfResult
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfResult $Results
     * @return \AddressDoctor\Response
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

}

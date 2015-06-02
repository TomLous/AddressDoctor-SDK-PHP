<?php

namespace AddressDoctor;

class ResultData
{

    /**
     * @var string $ResultNumber
     */
    protected $ResultNumber = null;

    /**
     * @var string $MailabilityScore
     */
    protected $MailabilityScore = null;

    /**
     * @var string $ResultPercentage
     */
    protected $ResultPercentage = null;

    /**
     * @var string $ElementInputStatus
     */
    protected $ElementInputStatus = null;

    /**
     * @var string $ElementResultStatus
     */
    protected $ElementResultStatus = null;

    /**
     * @var string $ElementRelevance
     */
    protected $ElementRelevance = null;

    /**
     * @var string $ExtElementStatus
     */
    protected $ExtElementStatus = null;

    /**
     * @var string $AddressResolutionCode
     */
    protected $AddressResolutionCode = null;

    /**
     * @var string $AddressType
     */
    protected $AddressType = null;

    /**
     * @var string $LanguageISO3
     */
    protected $LanguageISO3 = null;

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @param string $ResultNumber
     * @param string $MailabilityScore
     * @param string $ResultPercentage
     * @param string $ElementInputStatus
     * @param string $ElementResultStatus
     * @param string $ElementRelevance
     * @param string $ExtElementStatus
     * @param string $AddressResolutionCode
     * @param string $AddressType
     * @param string $LanguageISO3
     * @param Address $Address
     */
    public function __construct($ResultNumber, $MailabilityScore, $ResultPercentage, $ElementInputStatus, $ElementResultStatus, $ElementRelevance, $ExtElementStatus, $AddressResolutionCode, $AddressType, $LanguageISO3, $Address)
    {
      $this->ResultNumber = $ResultNumber;
      $this->MailabilityScore = $MailabilityScore;
      $this->ResultPercentage = $ResultPercentage;
      $this->ElementInputStatus = $ElementInputStatus;
      $this->ElementResultStatus = $ElementResultStatus;
      $this->ElementRelevance = $ElementRelevance;
      $this->ExtElementStatus = $ExtElementStatus;
      $this->AddressResolutionCode = $AddressResolutionCode;
      $this->AddressType = $AddressType;
      $this->LanguageISO3 = $LanguageISO3;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getResultNumber()
    {
      return $this->ResultNumber;
    }

    /**
     * @param string $ResultNumber
     * @return \AddressDoctor\ResultData
     */
    public function setResultNumber($ResultNumber)
    {
      $this->ResultNumber = $ResultNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailabilityScore()
    {
      return $this->MailabilityScore;
    }

    /**
     * @param string $MailabilityScore
     * @return \AddressDoctor\ResultData
     */
    public function setMailabilityScore($MailabilityScore)
    {
      $this->MailabilityScore = $MailabilityScore;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultPercentage()
    {
      return $this->ResultPercentage;
    }

    /**
     * @param string $ResultPercentage
     * @return \AddressDoctor\ResultData
     */
    public function setResultPercentage($ResultPercentage)
    {
      $this->ResultPercentage = $ResultPercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementInputStatus()
    {
      return $this->ElementInputStatus;
    }

    /**
     * @param string $ElementInputStatus
     * @return \AddressDoctor\ResultData
     */
    public function setElementInputStatus($ElementInputStatus)
    {
      $this->ElementInputStatus = $ElementInputStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementResultStatus()
    {
      return $this->ElementResultStatus;
    }

    /**
     * @param string $ElementResultStatus
     * @return \AddressDoctor\ResultData
     */
    public function setElementResultStatus($ElementResultStatus)
    {
      $this->ElementResultStatus = $ElementResultStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementRelevance()
    {
      return $this->ElementRelevance;
    }

    /**
     * @param string $ElementRelevance
     * @return \AddressDoctor\ResultData
     */
    public function setElementRelevance($ElementRelevance)
    {
      $this->ElementRelevance = $ElementRelevance;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtElementStatus()
    {
      return $this->ExtElementStatus;
    }

    /**
     * @param string $ExtElementStatus
     * @return \AddressDoctor\ResultData
     */
    public function setExtElementStatus($ExtElementStatus)
    {
      $this->ExtElementStatus = $ExtElementStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressResolutionCode()
    {
      return $this->AddressResolutionCode;
    }

    /**
     * @param string $AddressResolutionCode
     * @return \AddressDoctor\ResultData
     */
    public function setAddressResolutionCode($AddressResolutionCode)
    {
      $this->AddressResolutionCode = $AddressResolutionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
      return $this->AddressType;
    }

    /**
     * @param string $AddressType
     * @return \AddressDoctor\ResultData
     */
    public function setAddressType($AddressType)
    {
      $this->AddressType = $AddressType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageISO3()
    {
      return $this->LanguageISO3;
    }

    /**
     * @param string $LanguageISO3
     * @return \AddressDoctor\ResultData
     */
    public function setLanguageISO3($LanguageISO3)
    {
      $this->LanguageISO3 = $LanguageISO3;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \AddressDoctor\ResultData
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}

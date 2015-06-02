<?php

namespace AddressDoctor;

class ServiceParameters
{

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
     * @var string $UseTransactionPool
     */
    protected $UseTransactionPool = null;

    /**
     * @param string $JobToken
     * @param string $CampaignId
     * @param string $ReservedXml
     * @param string $UseTransactionPool
     */
    public function __construct($JobToken, $CampaignId, $ReservedXml, $UseTransactionPool)
    {
      $this->JobToken = $JobToken;
      $this->CampaignId = $CampaignId;
      $this->ReservedXml = $ReservedXml;
      $this->UseTransactionPool = $UseTransactionPool;
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
     * @return \AddressDoctor\ServiceParameters
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
     * @return \AddressDoctor\ServiceParameters
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
     * @return \AddressDoctor\ServiceParameters
     */
    public function setReservedXml($ReservedXml)
    {
      $this->ReservedXml = $ReservedXml;
      return $this;
    }

    /**
     * @return string
     */
    public function getUseTransactionPool()
    {
      return $this->UseTransactionPool;
    }

    /**
     * @param string $UseTransactionPool
     * @return \AddressDoctor\ServiceParameters
     */
    public function setUseTransactionPool($UseTransactionPool)
    {
      $this->UseTransactionPool = $UseTransactionPool;
      return $this;
    }

}

<?php

namespace AddressDoctor;

class ArrayOfAdditionalInformation
{

    /**
     * @var AdditionalInformation[] $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalInformation[]
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param AdditionalInformation[] $AdditionalInformation
     * @return \AddressDoctor\ArrayOfAdditionalInformation
     */
    public function setAdditionalInformation(array $AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

}

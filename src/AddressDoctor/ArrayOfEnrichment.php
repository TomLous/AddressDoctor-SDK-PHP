<?php

namespace AddressDoctor;

class ArrayOfEnrichment
{

    /**
     * @var Enrichment[] $Enrichment
     */
    protected $Enrichment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Enrichment[]
     */
    public function getEnrichment()
    {
      return $this->Enrichment;
    }

    /**
     * @param Enrichment[] $Enrichment
     * @return \AddressDoctor\ArrayOfEnrichment
     */
    public function setEnrichment(array $Enrichment)
    {
      $this->Enrichment = $Enrichment;
      return $this;
    }

}

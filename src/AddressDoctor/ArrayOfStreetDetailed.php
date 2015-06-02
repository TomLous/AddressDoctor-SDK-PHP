<?php

namespace AddressDoctor;

class ArrayOfStreetDetailed
{

    /**
     * @var StreetDetailed[] $StreetDetailed
     */
    protected $StreetDetailed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StreetDetailed[]
     */
    public function getStreetDetailed()
    {
      return $this->StreetDetailed;
    }

    /**
     * @param StreetDetailed[] $StreetDetailed
     * @return \AddressDoctor\ArrayOfStreetDetailed
     */
    public function setStreetDetailed(array $StreetDetailed)
    {
      $this->StreetDetailed = $StreetDetailed;
      return $this;
    }

}

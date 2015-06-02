<?php

namespace AddressDoctor;

class ArrayOfSubBuildingDetailed
{

    /**
     * @var SubBuildingDetailed[] $SubBuildingDetailed
     */
    protected $SubBuildingDetailed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubBuildingDetailed[]
     */
    public function getSubBuildingDetailed()
    {
      return $this->SubBuildingDetailed;
    }

    /**
     * @param SubBuildingDetailed[] $SubBuildingDetailed
     * @return \AddressDoctor\ArrayOfSubBuildingDetailed
     */
    public function setSubBuildingDetailed(array $SubBuildingDetailed)
    {
      $this->SubBuildingDetailed = $SubBuildingDetailed;
      return $this;
    }

}

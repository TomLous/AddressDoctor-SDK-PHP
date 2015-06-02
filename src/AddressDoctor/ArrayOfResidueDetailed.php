<?php

namespace AddressDoctor;

class ArrayOfResidueDetailed
{

    /**
     * @var ResidueDetailed[] $ResidueDetailed
     */
    protected $ResidueDetailed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResidueDetailed[]
     */
    public function getResidueDetailed()
    {
      return $this->ResidueDetailed;
    }

    /**
     * @param ResidueDetailed[] $ResidueDetailed
     * @return \AddressDoctor\ArrayOfResidueDetailed
     */
    public function setResidueDetailed(array $ResidueDetailed)
    {
      $this->ResidueDetailed = $ResidueDetailed;
      return $this;
    }

}

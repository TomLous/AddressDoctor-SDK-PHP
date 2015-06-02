<?php

namespace AddressDoctor;

class AddressDetailed
{

    /**
     * @var ArrayOfStreetDetailed $Street
     */
    protected $Street = null;

    /**
     * @var ArrayOfSubBuildingDetailed $SubBuilding
     */
    protected $SubBuilding = null;

    /**
     * @var ArrayOfResidueDetailed $Residue
     */
    protected $Residue = null;

    /**
     * @param ArrayOfStreetDetailed $Street
     * @param ArrayOfSubBuildingDetailed $SubBuilding
     * @param ArrayOfResidueDetailed $Residue
     */
    public function __construct($Street, $SubBuilding, $Residue)
    {
      $this->Street = $Street;
      $this->SubBuilding = $SubBuilding;
      $this->Residue = $Residue;
    }

    /**
     * @return ArrayOfStreetDetailed
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param ArrayOfStreetDetailed $Street
     * @return \AddressDoctor\AddressDetailed
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return ArrayOfSubBuildingDetailed
     */
    public function getSubBuilding()
    {
      return $this->SubBuilding;
    }

    /**
     * @param ArrayOfSubBuildingDetailed $SubBuilding
     * @return \AddressDoctor\AddressDetailed
     */
    public function setSubBuilding($SubBuilding)
    {
      $this->SubBuilding = $SubBuilding;
      return $this;
    }

    /**
     * @return ArrayOfResidueDetailed
     */
    public function getResidue()
    {
      return $this->Residue;
    }

    /**
     * @param ArrayOfResidueDetailed $Residue
     * @return \AddressDoctor\AddressDetailed
     */
    public function setResidue($Residue)
    {
      $this->Residue = $Residue;
      return $this;
    }

}

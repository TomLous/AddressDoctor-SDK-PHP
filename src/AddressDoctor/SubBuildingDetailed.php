<?php

namespace AddressDoctor;

class SubBuildingDetailed
{

    /**
     * @var int $Item
     */
    protected $Item = null;

    /**
     * @var string $COMPLETE
     */
    protected $COMPLETE = null;

    /**
     * @var string $NAME
     */
    protected $NAME = null;

    /**
     * @var string $NUMBER
     */
    protected $NUMBER = null;

    /**
     * @var string $DESCRIPTOR
     */
    protected $DESCRIPTOR = null;

    /**
     * @param int $Item
     * @param string $COMPLETE
     * @param string $NAME
     * @param string $NUMBER
     * @param string $DESCRIPTOR
     */
    public function __construct($Item, $COMPLETE, $NAME, $NUMBER, $DESCRIPTOR)
    {
      $this->Item = $Item;
      $this->COMPLETE = $COMPLETE;
      $this->NAME = $NAME;
      $this->NUMBER = $NUMBER;
      $this->DESCRIPTOR = $DESCRIPTOR;
    }

    /**
     * @return int
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param int $Item
     * @return \AddressDoctor\SubBuildingDetailed
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOMPLETE()
    {
      return $this->COMPLETE;
    }

    /**
     * @param string $COMPLETE
     * @return \AddressDoctor\SubBuildingDetailed
     */
    public function setCOMPLETE($COMPLETE)
    {
      $this->COMPLETE = $COMPLETE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNAME()
    {
      return $this->NAME;
    }

    /**
     * @param string $NAME
     * @return \AddressDoctor\SubBuildingDetailed
     */
    public function setNAME($NAME)
    {
      $this->NAME = $NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getNUMBER()
    {
      return $this->NUMBER;
    }

    /**
     * @param string $NUMBER
     * @return \AddressDoctor\SubBuildingDetailed
     */
    public function setNUMBER($NUMBER)
    {
      $this->NUMBER = $NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getDESCRIPTOR()
    {
      return $this->DESCRIPTOR;
    }

    /**
     * @param string $DESCRIPTOR
     * @return \AddressDoctor\SubBuildingDetailed
     */
    public function setDESCRIPTOR($DESCRIPTOR)
    {
      $this->DESCRIPTOR = $DESCRIPTOR;
      return $this;
    }

}

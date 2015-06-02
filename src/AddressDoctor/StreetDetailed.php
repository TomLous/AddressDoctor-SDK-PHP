<?php

namespace AddressDoctor;

class StreetDetailed
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
     * @var string $COMPLETE_WITH_NUMBER
     */
    protected $COMPLETE_WITH_NUMBER = null;

    /**
     * @var string $NAME
     */
    protected $NAME = null;

    /**
     * @var string $PRE_DESCRIPTOR
     */
    protected $PRE_DESCRIPTOR = null;

    /**
     * @var string $POST_DESCRIPTOR
     */
    protected $POST_DESCRIPTOR = null;

    /**
     * @var string $PRE_DIRECTIONAL
     */
    protected $PRE_DIRECTIONAL = null;

    /**
     * @var string $POST_DIRECTIONAL
     */
    protected $POST_DIRECTIONAL = null;

    /**
     * @var string $ADD_INFO
     */
    protected $ADD_INFO = null;

    /**
     * @param int $Item
     * @param string $COMPLETE
     * @param string $COMPLETE_WITH_NUMBER
     * @param string $NAME
     * @param string $PRE_DESCRIPTOR
     * @param string $POST_DESCRIPTOR
     * @param string $PRE_DIRECTIONAL
     * @param string $POST_DIRECTIONAL
     * @param string $ADD_INFO
     */
    public function __construct($Item, $COMPLETE, $COMPLETE_WITH_NUMBER, $NAME, $PRE_DESCRIPTOR, $POST_DESCRIPTOR, $PRE_DIRECTIONAL, $POST_DIRECTIONAL, $ADD_INFO)
    {
      $this->Item = $Item;
      $this->COMPLETE = $COMPLETE;
      $this->COMPLETE_WITH_NUMBER = $COMPLETE_WITH_NUMBER;
      $this->NAME = $NAME;
      $this->PRE_DESCRIPTOR = $PRE_DESCRIPTOR;
      $this->POST_DESCRIPTOR = $POST_DESCRIPTOR;
      $this->PRE_DIRECTIONAL = $PRE_DIRECTIONAL;
      $this->POST_DIRECTIONAL = $POST_DIRECTIONAL;
      $this->ADD_INFO = $ADD_INFO;
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
     * @return \AddressDoctor\StreetDetailed
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
     * @return \AddressDoctor\StreetDetailed
     */
    public function setCOMPLETE($COMPLETE)
    {
      $this->COMPLETE = $COMPLETE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOMPLETE_WITH_NUMBER()
    {
      return $this->COMPLETE_WITH_NUMBER;
    }

    /**
     * @param string $COMPLETE_WITH_NUMBER
     * @return \AddressDoctor\StreetDetailed
     */
    public function setCOMPLETE_WITH_NUMBER($COMPLETE_WITH_NUMBER)
    {
      $this->COMPLETE_WITH_NUMBER = $COMPLETE_WITH_NUMBER;
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
     * @return \AddressDoctor\StreetDetailed
     */
    public function setNAME($NAME)
    {
      $this->NAME = $NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRE_DESCRIPTOR()
    {
      return $this->PRE_DESCRIPTOR;
    }

    /**
     * @param string $PRE_DESCRIPTOR
     * @return \AddressDoctor\StreetDetailed
     */
    public function setPRE_DESCRIPTOR($PRE_DESCRIPTOR)
    {
      $this->PRE_DESCRIPTOR = $PRE_DESCRIPTOR;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOST_DESCRIPTOR()
    {
      return $this->POST_DESCRIPTOR;
    }

    /**
     * @param string $POST_DESCRIPTOR
     * @return \AddressDoctor\StreetDetailed
     */
    public function setPOST_DESCRIPTOR($POST_DESCRIPTOR)
    {
      $this->POST_DESCRIPTOR = $POST_DESCRIPTOR;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRE_DIRECTIONAL()
    {
      return $this->PRE_DIRECTIONAL;
    }

    /**
     * @param string $PRE_DIRECTIONAL
     * @return \AddressDoctor\StreetDetailed
     */
    public function setPRE_DIRECTIONAL($PRE_DIRECTIONAL)
    {
      $this->PRE_DIRECTIONAL = $PRE_DIRECTIONAL;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOST_DIRECTIONAL()
    {
      return $this->POST_DIRECTIONAL;
    }

    /**
     * @param string $POST_DIRECTIONAL
     * @return \AddressDoctor\StreetDetailed
     */
    public function setPOST_DIRECTIONAL($POST_DIRECTIONAL)
    {
      $this->POST_DIRECTIONAL = $POST_DIRECTIONAL;
      return $this;
    }

    /**
     * @return string
     */
    public function getADD_INFO()
    {
      return $this->ADD_INFO;
    }

    /**
     * @param string $ADD_INFO
     * @return \AddressDoctor\StreetDetailed
     */
    public function setADD_INFO($ADD_INFO)
    {
      $this->ADD_INFO = $ADD_INFO;
      return $this;
    }

}

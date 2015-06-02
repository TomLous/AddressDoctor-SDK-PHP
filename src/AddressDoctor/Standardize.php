<?php

namespace AddressDoctor;

class Standardize
{

    /**
     * @var string $Element
     */
    protected $Element = null;

    /**
     * @var string $Casing
     */
    protected $Casing = null;

    /**
     * @var int $MaxLength
     */
    protected $MaxLength = null;

    /**
     * @var int $MaxItemCount
     */
    protected $MaxItemCount = null;

    /**
     * @param string $Element
     * @param string $Casing
     * @param int $MaxLength
     * @param int $MaxItemCount
     */
    public function __construct($Element, $Casing, $MaxLength, $MaxItemCount)
    {
      $this->Element = $Element;
      $this->Casing = $Casing;
      $this->MaxLength = $MaxLength;
      $this->MaxItemCount = $MaxItemCount;
    }

    /**
     * @return string
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param string $Element
     * @return \AddressDoctor\Standardize
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
      return $this;
    }

    /**
     * @return string
     */
    public function getCasing()
    {
      return $this->Casing;
    }

    /**
     * @param string $Casing
     * @return \AddressDoctor\Standardize
     */
    public function setCasing($Casing)
    {
      $this->Casing = $Casing;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
      return $this->MaxLength;
    }

    /**
     * @param int $MaxLength
     * @return \AddressDoctor\Standardize
     */
    public function setMaxLength($MaxLength)
    {
      $this->MaxLength = $MaxLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxItemCount()
    {
      return $this->MaxItemCount;
    }

    /**
     * @param int $MaxItemCount
     * @return \AddressDoctor\Standardize
     */
    public function setMaxItemCount($MaxItemCount)
    {
      $this->MaxItemCount = $MaxItemCount;
      return $this;
    }

}

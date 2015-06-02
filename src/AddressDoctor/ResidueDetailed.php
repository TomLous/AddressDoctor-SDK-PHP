<?php

namespace AddressDoctor;

class ResidueDetailed
{

    /**
     * @var int $Item
     */
    protected $Item = null;

    /**
     * @var string $NECESSARY
     */
    protected $NECESSARY = null;

    /**
     * @var string $SUPERFLUOUS
     */
    protected $SUPERFLUOUS = null;

    /**
     * @var string $UNRECOGNIZED
     */
    protected $UNRECOGNIZED = null;

    /**
     * @param int $Item
     * @param string $NECESSARY
     * @param string $SUPERFLUOUS
     * @param string $UNRECOGNIZED
     */
    public function __construct($Item, $NECESSARY, $SUPERFLUOUS, $UNRECOGNIZED)
    {
      $this->Item = $Item;
      $this->NECESSARY = $NECESSARY;
      $this->SUPERFLUOUS = $SUPERFLUOUS;
      $this->UNRECOGNIZED = $UNRECOGNIZED;
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
     * @return \AddressDoctor\ResidueDetailed
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return string
     */
    public function getNECESSARY()
    {
      return $this->NECESSARY;
    }

    /**
     * @param string $NECESSARY
     * @return \AddressDoctor\ResidueDetailed
     */
    public function setNECESSARY($NECESSARY)
    {
      $this->NECESSARY = $NECESSARY;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUPERFLUOUS()
    {
      return $this->SUPERFLUOUS;
    }

    /**
     * @param string $SUPERFLUOUS
     * @return \AddressDoctor\ResidueDetailed
     */
    public function setSUPERFLUOUS($SUPERFLUOUS)
    {
      $this->SUPERFLUOUS = $SUPERFLUOUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getUNRECOGNIZED()
    {
      return $this->UNRECOGNIZED;
    }

    /**
     * @param string $UNRECOGNIZED
     * @return \AddressDoctor\ResidueDetailed
     */
    public function setUNRECOGNIZED($UNRECOGNIZED)
    {
      $this->UNRECOGNIZED = $UNRECOGNIZED;
      return $this;
    }

}

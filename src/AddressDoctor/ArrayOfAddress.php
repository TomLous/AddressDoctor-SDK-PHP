<?php

namespace AddressDoctor;

class ArrayOfAddress
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return \AddressDoctor\ArrayOfAddress
     */
    public function setAddress(array $Address)
    {
      $this->Address = $Address;
      return $this;
    }

}

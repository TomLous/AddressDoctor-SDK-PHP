<?php

namespace AddressDoctor;

class ArrayOfString
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \AddressDoctor\ArrayOfString
     */
    public function setString(array $string)
    {
      $this->string = $string;
      return $this;
    }

}

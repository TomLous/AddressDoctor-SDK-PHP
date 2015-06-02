<?php

namespace AddressDoctor;

class ArrayOfResult
{

    /**
     * @var Result[] $Result
     */
    protected $Result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Result[]
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param Result[] $Result
     * @return \AddressDoctor\ArrayOfResult
     */
    public function setResult(array $Result)
    {
      $this->Result = $Result;
      return $this;
    }

}

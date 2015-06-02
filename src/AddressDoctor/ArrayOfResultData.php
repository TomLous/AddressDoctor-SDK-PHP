<?php

namespace AddressDoctor;

class ArrayOfResultData
{

    /**
     * @var ResultData[] $ResultData
     */
    protected $ResultData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResultData[]
     */
    public function getResultData()
    {
      return $this->ResultData;
    }

    /**
     * @param ResultData[] $ResultData
     * @return \AddressDoctor\ArrayOfResultData
     */
    public function setResultData(array $ResultData)
    {
      $this->ResultData = $ResultData;
      return $this;
    }

}

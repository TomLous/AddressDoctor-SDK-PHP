<?php

namespace AddressDoctor;

class ProcessResponse
{

    /**
     * @var Response $ProcessResult
     */
    protected $ProcessResult = null;

    /**
     * @param Response $ProcessResult
     */
    public function __construct($ProcessResult)
    {
      $this->ProcessResult = $ProcessResult;
    }

    /**
     * @return Response
     */
    public function getProcessResult()
    {
      return $this->ProcessResult;
    }

    /**
     * @param Response $ProcessResult
     * @return \AddressDoctor\ProcessResponse
     */
    public function setProcessResult($ProcessResult)
    {
      $this->ProcessResult = $ProcessResult;
      return $this;
    }

}

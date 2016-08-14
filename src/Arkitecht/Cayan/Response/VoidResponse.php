<?php

namespace Arkitecht\Cayan\Response;

class VoidResponse
{

    /**
     * @var CreditResponse4 $VoidResult
     */
    protected $VoidResult = null;

    /**
     * @param CreditResponse4 $VoidResult
     */
    public function __construct($VoidResult = null)
    {
      $this->VoidResult = $VoidResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getVoidResult()
    {
      return $this->VoidResult;
    }

    /**
     * @param CreditResponse4 $VoidResult
     * @return \Arkitecht\Cayan\VoidResponse
     */
    public function setVoidResult($VoidResult)
    {
      $this->VoidResult = $VoidResult;
      return $this;
    }

}

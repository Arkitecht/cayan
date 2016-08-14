<?php

namespace Arkitecht\Cayan\Response;

class ForceSaleResponse
{

    /**
     * @var CreditResponse4 $ForceSaleResult
     */
    protected $ForceSaleResult = null;

    /**
     * @param CreditResponse4 $ForceSaleResult
     */
    public function __construct($ForceSaleResult = null)
    {
      $this->ForceSaleResult = $ForceSaleResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getForceSaleResult()
    {
      return $this->ForceSaleResult;
    }

    /**
     * @param CreditResponse4 $ForceSaleResult
     * @return \Arkitecht\Cayan\ForceSaleResponse
     */
    public function setForceSaleResult($ForceSaleResult)
    {
      $this->ForceSaleResult = $ForceSaleResult;
      return $this;
    }

}

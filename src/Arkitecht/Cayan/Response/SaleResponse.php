<?php

namespace Arkitecht\Cayan\Response;

class SaleResponse
{

    /**
     * @var CreditResponse4 $SaleResult
     */
    protected $SaleResult = null;

    /**
     * @param CreditResponse4 $SaleResult
     */
    public function __construct($SaleResult = null)
    {
      $this->SaleResult = $SaleResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getSaleResult()
    {
      return $this->SaleResult;
    }

    /**
     * @param CreditResponse4 $SaleResult
     * @return \Arkitecht\Cayan\SaleResponse
     */
    public function setSaleResult($SaleResult)
    {
      $this->SaleResult = $SaleResult;
      return $this;
    }

}

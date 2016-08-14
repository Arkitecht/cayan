<?php

namespace Arkitecht\Cayan\Response;

class SaleKeyedResponse
{

    /**
     * @var CreditResponse4 $SaleKeyedResult
     */
    protected $SaleKeyedResult = null;

    /**
     * @param CreditResponse4 $SaleKeyedResult
     */
    public function __construct($SaleKeyedResult = null)
    {
      $this->SaleKeyedResult = $SaleKeyedResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getSaleKeyedResult()
    {
      return $this->SaleKeyedResult;
    }

    /**
     * @param CreditResponse4 $SaleKeyedResult
     * @return \Arkitecht\Cayan\SaleKeyedResponse
     */
    public function setSaleKeyedResult($SaleKeyedResult)
    {
      $this->SaleKeyedResult = $SaleKeyedResult;
      return $this;
    }

}

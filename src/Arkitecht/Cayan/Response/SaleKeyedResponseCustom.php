<?php

namespace Arkitecht\Cayan\Response;

class SaleKeyedResponseCustom
{

    /**
     * @var GiftResponse4 $SaleKeyedResult
     */
    protected $SaleKeyedResult = null;

    /**
     * @param GiftResponse4 $SaleKeyedResult
     */
    public function __construct($SaleKeyedResult = null)
    {
      $this->SaleKeyedResult = $SaleKeyedResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getSaleKeyedResult()
    {
      return $this->SaleKeyedResult;
    }

    /**
     * @param GiftResponse4 $SaleKeyedResult
     * @return \Arkitecht\Cayan\SaleKeyedResponse
     */
    public function setSaleKeyedResult($SaleKeyedResult)
    {
      $this->SaleKeyedResult = $SaleKeyedResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class SaleResponseCustom
{

    /**
     * @var GiftResponse4 $SaleResult
     */
    protected $SaleResult = null;

    /**
     * @param GiftResponse4 $SaleResult
     */
    public function __construct($SaleResult = null)
    {
      $this->SaleResult = $SaleResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getSaleResult()
    {
      return $this->SaleResult;
    }

    /**
     * @param GiftResponse4 $SaleResult
     * @return \Arkitecht\Cayan\SaleResponse
     */
    public function setSaleResult($SaleResult)
    {
      $this->SaleResult = $SaleResult;
      return $this;
    }

}

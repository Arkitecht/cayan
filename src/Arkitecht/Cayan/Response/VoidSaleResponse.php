<?php

namespace Arkitecht\Cayan\Response;

class VoidSaleResponse
{

    /**
     * @var GiftResponse4 $VoidSaleResult
     */
    protected $VoidSaleResult = null;

    /**
     * @param GiftResponse4 $VoidSaleResult
     */
    public function __construct($VoidSaleResult = null)
    {
      $this->VoidSaleResult = $VoidSaleResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getVoidSaleResult()
    {
      return $this->VoidSaleResult;
    }

    /**
     * @param GiftResponse4 $VoidSaleResult
     * @return \Arkitecht\Cayan\VoidSaleResponse
     */
    public function setVoidSaleResult($VoidSaleResult)
    {
      $this->VoidSaleResult = $VoidSaleResult;
      return $this;
    }

}

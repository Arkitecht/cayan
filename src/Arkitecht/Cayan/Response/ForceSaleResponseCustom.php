<?php

namespace Arkitecht\Cayan\Response;

class ForceSaleResponseCustom
{

    /**
     * @var GiftResponse4 $ForceSaleResult
     */
    protected $ForceSaleResult = null;

    /**
     * @param GiftResponse4 $ForceSaleResult
     */
    public function __construct($ForceSaleResult = null)
    {
      $this->ForceSaleResult = $ForceSaleResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getForceSaleResult()
    {
      return $this->ForceSaleResult;
    }

    /**
     * @param GiftResponse4 $ForceSaleResult
     * @return \Arkitecht\Cayan\ForceSaleResponse
     */
    public function setForceSaleResult($ForceSaleResult)
    {
      $this->ForceSaleResult = $ForceSaleResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class ForceSaleKeyedResponse
{

    /**
     * @var GiftResponse4 $ForceSaleKeyedResult
     */
    protected $ForceSaleKeyedResult = null;

    /**
     * @param GiftResponse4 $ForceSaleKeyedResult
     */
    public function __construct($ForceSaleKeyedResult = null)
    {
      $this->ForceSaleKeyedResult = $ForceSaleKeyedResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getForceSaleKeyedResult()
    {
      return $this->ForceSaleKeyedResult;
    }

    /**
     * @param GiftResponse4 $ForceSaleKeyedResult
     * @return \Arkitecht\Cayan\ForceSaleKeyedResponse
     */
    public function setForceSaleKeyedResult($ForceSaleKeyedResult)
    {
      $this->ForceSaleKeyedResult = $ForceSaleKeyedResult;
      return $this;
    }

}

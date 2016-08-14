<?php

namespace Arkitecht\Cayan\Response;

class ActivateCardKeyedResponse
{

    /**
     * @var GiftResponse4 $ActivateCardKeyedResult
     */
    protected $ActivateCardKeyedResult = null;

    /**
     * @param GiftResponse4 $ActivateCardKeyedResult
     */
    public function __construct($ActivateCardKeyedResult = null)
    {
      $this->ActivateCardKeyedResult = $ActivateCardKeyedResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getActivateCardKeyedResult()
    {
      return $this->ActivateCardKeyedResult;
    }

    /**
     * @param GiftResponse4 $ActivateCardKeyedResult
     * @return \Arkitecht\Cayan\ActivateCardKeyedResponse
     */
    public function setActivateCardKeyedResult($ActivateCardKeyedResult)
    {
      $this->ActivateCardKeyedResult = $ActivateCardKeyedResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class ActivateCardResponse
{

    /**
     * @var GiftResponse4 $ActivateCardResult
     */
    protected $ActivateCardResult = null;

    /**
     * @param GiftResponse4 $ActivateCardResult
     */
    public function __construct($ActivateCardResult = null)
    {
      $this->ActivateCardResult = $ActivateCardResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getActivateCardResult()
    {
      return $this->ActivateCardResult;
    }

    /**
     * @param GiftResponse4 $ActivateCardResult
     * @return \Arkitecht\Cayan\ActivateCardResponse
     */
    public function setActivateCardResult($ActivateCardResult)
    {
      $this->ActivateCardResult = $ActivateCardResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class ApplyTipResponseCustom
{

    /**
     * @var GiftResponse4 $ApplyTipResult
     */
    protected $ApplyTipResult = null;

    /**
     * @param GiftResponse4 $ApplyTipResult
     */
    public function __construct($ApplyTipResult = null)
    {
      $this->ApplyTipResult = $ApplyTipResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getApplyTipResult()
    {
      return $this->ApplyTipResult;
    }

    /**
     * @param GiftResponse4 $ApplyTipResult
     * @return \Arkitecht\Cayan\ApplyTipResponse
     */
    public function setApplyTipResult($ApplyTipResult)
    {
      $this->ApplyTipResult = $ApplyTipResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class ApplyTipResponse
{

    /**
     * @var CreditResponse4 $ApplyTipResult
     */
    protected $ApplyTipResult = null;

    /**
     * @param CreditResponse4 $ApplyTipResult
     */
    public function __construct($ApplyTipResult = null)
    {
      $this->ApplyTipResult = $ApplyTipResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getApplyTipResult()
    {
      return $this->ApplyTipResult;
    }

    /**
     * @param CreditResponse4 $ApplyTipResult
     * @return \Arkitecht\Cayan\ApplyTipResponse
     */
    public function setApplyTipResult($ApplyTipResult)
    {
      $this->ApplyTipResult = $ApplyTipResult;
      return $this;
    }

}

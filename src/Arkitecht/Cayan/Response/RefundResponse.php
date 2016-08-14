<?php

namespace Arkitecht\Cayan\Response;

class RefundResponse
{

    /**
     * @var CreditResponse4 $RefundResult
     */
    protected $RefundResult = null;

    /**
     * @param CreditResponse4 $RefundResult
     */
    public function __construct($RefundResult = null)
    {
      $this->RefundResult = $RefundResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getRefundResult()
    {
      return $this->RefundResult;
    }

    /**
     * @param CreditResponse4 $RefundResult
     * @return \Arkitecht\Cayan\RefundResponse
     */
    public function setRefundResult($RefundResult)
    {
      $this->RefundResult = $RefundResult;
      return $this;
    }

}

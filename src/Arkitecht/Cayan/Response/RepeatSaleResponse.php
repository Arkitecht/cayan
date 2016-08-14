<?php

namespace Arkitecht\Cayan\Response;

class RepeatSaleResponse
{

    /**
     * @var CreditResponse4 $RepeatSaleResult
     */
    protected $RepeatSaleResult = null;

    /**
     * @param CreditResponse4 $RepeatSaleResult
     */
    public function __construct($RepeatSaleResult = null)
    {
      $this->RepeatSaleResult = $RepeatSaleResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getRepeatSaleResult()
    {
      return $this->RepeatSaleResult;
    }

    /**
     * @param CreditResponse4 $RepeatSaleResult
     * @return \Arkitecht\Cayan\RepeatSaleResponse
     */
    public function setRepeatSaleResult($RepeatSaleResult)
    {
      $this->RepeatSaleResult = $RepeatSaleResult;
      return $this;
    }

}

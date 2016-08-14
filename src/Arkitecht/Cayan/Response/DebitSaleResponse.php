<?php

namespace Arkitecht\Cayan\Response;

class DebitSaleResponse
{

    /**
     * @var CreditResponse4 $DebitSaleResult
     */
    protected $DebitSaleResult = null;

    /**
     * @param CreditResponse4 $DebitSaleResult
     */
    public function __construct($DebitSaleResult = null)
    {
      $this->DebitSaleResult = $DebitSaleResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getDebitSaleResult()
    {
      return $this->DebitSaleResult;
    }

    /**
     * @param CreditResponse4 $DebitSaleResult
     * @return \Arkitecht\Cayan\DebitSaleResponse
     */
    public function setDebitSaleResult($DebitSaleResult)
    {
      $this->DebitSaleResult = $DebitSaleResult;
      return $this;
    }

}

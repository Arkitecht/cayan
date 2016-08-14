<?php

namespace Arkitecht\Cayan\Response;

class Level2SaleResponse
{

    /**
     * @var CreditLevel2Response4 $Level2SaleResult
     */
    protected $Level2SaleResult = null;

    /**
     * @param CreditLevel2Response4 $Level2SaleResult
     */
    public function __construct($Level2SaleResult = null)
    {
      $this->Level2SaleResult = $Level2SaleResult;
    }

    /**
     * @return CreditLevel2Response4
     */
    public function getLevel2SaleResult()
    {
      return $this->Level2SaleResult;
    }

    /**
     * @param CreditLevel2Response4 $Level2SaleResult
     * @return \Arkitecht\Cayan\Level2SaleResponse
     */
    public function setLevel2SaleResult($Level2SaleResult)
    {
      $this->Level2SaleResult = $Level2SaleResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class Level2SaleKeyedResponse
{

    /**
     * @var CreditLevel2Response4 $Level2SaleKeyedResult
     */
    protected $Level2SaleKeyedResult = null;

    /**
     * @param CreditLevel2Response4 $Level2SaleKeyedResult
     */
    public function __construct($Level2SaleKeyedResult = null)
    {
      $this->Level2SaleKeyedResult = $Level2SaleKeyedResult;
    }

    /**
     * @return CreditLevel2Response4
     */
    public function getLevel2SaleKeyedResult()
    {
      return $this->Level2SaleKeyedResult;
    }

    /**
     * @param CreditLevel2Response4 $Level2SaleKeyedResult
     * @return \Arkitecht\Cayan\Level2SaleKeyedResponse
     */
    public function setLevel2SaleKeyedResult($Level2SaleKeyedResult)
    {
      $this->Level2SaleKeyedResult = $Level2SaleKeyedResult;
      return $this;
    }

}

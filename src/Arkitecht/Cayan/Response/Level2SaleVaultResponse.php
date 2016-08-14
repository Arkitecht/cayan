<?php

namespace Arkitecht\Cayan\Response;

class Level2SaleVaultResponse
{

    /**
     * @var CreditLevel2Response4 $Level2SaleVaultResult
     */
    protected $Level2SaleVaultResult = null;

    /**
     * @param CreditLevel2Response4 $Level2SaleVaultResult
     */
    public function __construct($Level2SaleVaultResult = null)
    {
      $this->Level2SaleVaultResult = $Level2SaleVaultResult;
    }

    /**
     * @return CreditLevel2Response4
     */
    public function getLevel2SaleVaultResult()
    {
      return $this->Level2SaleVaultResult;
    }

    /**
     * @param CreditLevel2Response4 $Level2SaleVaultResult
     * @return \Arkitecht\Cayan\Level2SaleVaultResponse
     */
    public function setLevel2SaleVaultResult($Level2SaleVaultResult)
    {
      $this->Level2SaleVaultResult = $Level2SaleVaultResult;
      return $this;
    }

}

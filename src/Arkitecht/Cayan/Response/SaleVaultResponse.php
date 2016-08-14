<?php

namespace Arkitecht\Cayan\Response;

class SaleVaultResponse
{

    /**
     * @var CreditResponse4 $SaleVaultResult
     */
    protected $SaleVaultResult = null;

    /**
     * @param CreditResponse4 $SaleVaultResult
     */
    public function __construct($SaleVaultResult = null)
    {
      $this->SaleVaultResult = $SaleVaultResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getSaleVaultResult()
    {
      return $this->SaleVaultResult;
    }

    /**
     * @param CreditResponse4 $SaleVaultResult
     * @return \Arkitecht\Cayan\SaleVaultResponse
     */
    public function setSaleVaultResult($SaleVaultResult)
    {
      $this->SaleVaultResult = $SaleVaultResult;
      return $this;
    }

}

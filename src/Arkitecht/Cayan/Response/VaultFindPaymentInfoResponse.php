<?php

namespace Arkitecht\Cayan\Response;

class VaultFindPaymentInfoResponse
{

    /**
     * @var VaultPaymentInfoResponse $VaultFindPaymentInfoResult
     */
    protected $VaultFindPaymentInfoResult = null;

    /**
     * @param VaultPaymentInfoResponse $VaultFindPaymentInfoResult
     */
    public function __construct($VaultFindPaymentInfoResult = null)
    {
      $this->VaultFindPaymentInfoResult = $VaultFindPaymentInfoResult;
    }

    /**
     * @return VaultPaymentInfoResponse
     */
    public function getVaultFindPaymentInfoResult()
    {
      return $this->VaultFindPaymentInfoResult;
    }

    /**
     * @param VaultPaymentInfoResponse $VaultFindPaymentInfoResult
     * @return \Arkitecht\Cayan\VaultFindPaymentInfoResponse
     */
    public function setVaultFindPaymentInfoResult($VaultFindPaymentInfoResult)
    {
      $this->VaultFindPaymentInfoResult = $VaultFindPaymentInfoResult;
      return $this;
    }

}

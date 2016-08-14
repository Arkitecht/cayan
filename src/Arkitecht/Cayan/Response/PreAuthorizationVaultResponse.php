<?php

namespace Arkitecht\Cayan\Response;

class PreAuthorizationVaultResponse
{

    /**
     * @var CreditResponse4 $PreAuthorizationVaultResult
     */
    protected $PreAuthorizationVaultResult = null;

    /**
     * @param CreditResponse4 $PreAuthorizationVaultResult
     */
    public function __construct($PreAuthorizationVaultResult = null)
    {
      $this->PreAuthorizationVaultResult = $PreAuthorizationVaultResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getPreAuthorizationVaultResult()
    {
      return $this->PreAuthorizationVaultResult;
    }

    /**
     * @param CreditResponse4 $PreAuthorizationVaultResult
     * @return \Arkitecht\Cayan\PreAuthorizationVaultResponse
     */
    public function setPreAuthorizationVaultResult($PreAuthorizationVaultResult)
    {
      $this->PreAuthorizationVaultResult = $PreAuthorizationVaultResult;
      return $this;
    }

}

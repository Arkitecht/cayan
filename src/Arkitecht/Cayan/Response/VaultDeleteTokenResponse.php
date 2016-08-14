<?php

namespace Arkitecht\Cayan\Response;

class VaultDeleteTokenResponse
{

    /**
     * @var VaultBoardingResponse $VaultDeleteTokenResult
     */
    protected $VaultDeleteTokenResult = null;

    /**
     * @param VaultBoardingResponse $VaultDeleteTokenResult
     */
    public function __construct($VaultDeleteTokenResult = null)
    {
      $this->VaultDeleteTokenResult = $VaultDeleteTokenResult;
    }

    /**
     * @return VaultBoardingResponse
     */
    public function getVaultDeleteTokenResult()
    {
      return $this->VaultDeleteTokenResult;
    }

    /**
     * @param VaultBoardingResponse $VaultDeleteTokenResult
     * @return \Arkitecht\Cayan\VaultDeleteTokenResponse
     */
    public function setVaultDeleteTokenResult($VaultDeleteTokenResult)
    {
      $this->VaultDeleteTokenResult = $VaultDeleteTokenResult;
      return $this;
    }

}

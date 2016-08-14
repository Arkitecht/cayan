<?php

namespace Arkitecht\Cayan\Response;

class VaultBoardCreditResponse
{

    /**
     * @var VaultBoardingResponse $VaultBoardCreditResult
     */
    protected $VaultBoardCreditResult = null;

    /**
     * @param VaultBoardingResponse $VaultBoardCreditResult
     */
    public function __construct($VaultBoardCreditResult = null)
    {
      $this->VaultBoardCreditResult = $VaultBoardCreditResult;
    }

    /**
     * @return VaultBoardingResponse
     */
    public function getVaultBoardCreditResult()
    {
      return $this->VaultBoardCreditResult;
    }

    /**
     * @param VaultBoardingResponse $VaultBoardCreditResult
     * @return \Arkitecht\Cayan\VaultBoardCreditResponse
     */
    public function setVaultBoardCreditResult($VaultBoardCreditResult)
    {
      $this->VaultBoardCreditResult = $VaultBoardCreditResult;
      return $this;
    }

}

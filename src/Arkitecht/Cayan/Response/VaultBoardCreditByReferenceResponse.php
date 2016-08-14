<?php

namespace Arkitecht\Cayan\Response;

class VaultBoardCreditByReferenceResponse
{

    /**
     * @var VaultBoardingResponse $VaultBoardCreditByReferenceResult
     */
    protected $VaultBoardCreditByReferenceResult = null;

    /**
     * @param VaultBoardingResponse $VaultBoardCreditByReferenceResult
     */
    public function __construct($VaultBoardCreditByReferenceResult = null)
    {
      $this->VaultBoardCreditByReferenceResult = $VaultBoardCreditByReferenceResult;
    }

    /**
     * @return VaultBoardingResponse
     */
    public function getVaultBoardCreditByReferenceResult()
    {
      return $this->VaultBoardCreditByReferenceResult;
    }

    /**
     * @param VaultBoardingResponse $VaultBoardCreditByReferenceResult
     * @return \Arkitecht\Cayan\VaultBoardCreditByReferenceResponse
     */
    public function setVaultBoardCreditByReferenceResult($VaultBoardCreditByReferenceResult)
    {
      $this->VaultBoardCreditByReferenceResult = $VaultBoardCreditByReferenceResult;
      return $this;
    }

}

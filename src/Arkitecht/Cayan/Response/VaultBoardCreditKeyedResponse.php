<?php

namespace Arkitecht\Cayan\Response;

class VaultBoardCreditKeyedResponse
{

    /**
     * @var VaultBoardingResponse $VaultBoardCreditKeyedResult
     */
    protected $VaultBoardCreditKeyedResult = null;

    /**
     * @param VaultBoardingResponse $VaultBoardCreditKeyedResult
     */
    public function __construct($VaultBoardCreditKeyedResult = null)
    {
      $this->VaultBoardCreditKeyedResult = $VaultBoardCreditKeyedResult;
    }

    /**
     * @return VaultBoardingResponse
     */
    public function getVaultBoardCreditKeyedResult()
    {
      return $this->VaultBoardCreditKeyedResult;
    }

    /**
     * @param VaultBoardingResponse $VaultBoardCreditKeyedResult
     * @return \Arkitecht\Cayan\VaultBoardCreditKeyedResponse
     */
    public function setVaultBoardCreditKeyedResult($VaultBoardCreditKeyedResult)
    {
      $this->VaultBoardCreditKeyedResult = $VaultBoardCreditKeyedResult;
      return $this;
    }

}

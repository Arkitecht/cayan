<?php

namespace Arkitecht\Cayan\Response;

class VaultBoardingResponse
{

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $VaultToken
     */
    protected $VaultToken = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \Arkitecht\Cayan\VaultBoardingResponse
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Arkitecht\Cayan\VaultBoardingResponse
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getVaultToken()
    {
      return $this->VaultToken;
    }

    /**
     * @param string $VaultToken
     * @return \Arkitecht\Cayan\VaultBoardingResponse
     */
    public function setVaultToken($VaultToken)
    {
      $this->VaultToken = $VaultToken;
      return $this;
    }

}

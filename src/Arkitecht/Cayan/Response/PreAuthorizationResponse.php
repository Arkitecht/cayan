<?php

namespace Arkitecht\Cayan\Response;

class PreAuthorizationResponse
{

    /**
     * @var CreditResponse4 $PreAuthorizationResult
     */
    protected $PreAuthorizationResult = null;

    /**
     * @param CreditResponse4 $PreAuthorizationResult
     */
    public function __construct($PreAuthorizationResult = null)
    {
      $this->PreAuthorizationResult = $PreAuthorizationResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getPreAuthorizationResult()
    {
      return $this->PreAuthorizationResult;
    }

    /**
     * @param CreditResponse4 $PreAuthorizationResult
     * @return \Arkitecht\Cayan\PreAuthorizationResponse
     */
    public function setPreAuthorizationResult($PreAuthorizationResult)
    {
      $this->PreAuthorizationResult = $PreAuthorizationResult;
      return $this;
    }

}

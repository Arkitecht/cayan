<?php

namespace Arkitecht\Cayan\Response;

class PreAuthorizationKeyedResponse
{

    /**
     * @var CreditResponse4 $PreAuthorizationKeyedResult
     */
    protected $PreAuthorizationKeyedResult = null;

    /**
     * @param CreditResponse4 $PreAuthorizationKeyedResult
     */
    public function __construct($PreAuthorizationKeyedResult = null)
    {
      $this->PreAuthorizationKeyedResult = $PreAuthorizationKeyedResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getPreAuthorizationKeyedResult()
    {
      return $this->PreAuthorizationKeyedResult;
    }

    /**
     * @param CreditResponse4 $PreAuthorizationKeyedResult
     * @return \Arkitecht\Cayan\PreAuthorizationKeyedResponse
     */
    public function setPreAuthorizationKeyedResult($PreAuthorizationKeyedResult)
    {
      $this->PreAuthorizationKeyedResult = $PreAuthorizationKeyedResult;
      return $this;
    }

}

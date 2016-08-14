<?php

namespace Arkitecht\Cayan\Response;

class VoidPreAuthorizationResponse
{

    /**
     * @var CreditResponse4 $VoidPreAuthorizationResult
     */
    protected $VoidPreAuthorizationResult = null;

    /**
     * @param CreditResponse4 $VoidPreAuthorizationResult
     */
    public function __construct($VoidPreAuthorizationResult = null)
    {
      $this->VoidPreAuthorizationResult = $VoidPreAuthorizationResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getVoidPreAuthorizationResult()
    {
      return $this->VoidPreAuthorizationResult;
    }

    /**
     * @param CreditResponse4 $VoidPreAuthorizationResult
     * @return \Arkitecht\Cayan\VoidPreAuthorizationResponse
     */
    public function setVoidPreAuthorizationResult($VoidPreAuthorizationResult)
    {
      $this->VoidPreAuthorizationResult = $VoidPreAuthorizationResult;
      return $this;
    }

}

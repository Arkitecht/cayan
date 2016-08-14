<?php

namespace Arkitecht\Cayan\Response;

class PostAuthorizationResponse
{

    /**
     * @var CreditResponse4 $PostAuthorizationResult
     */
    protected $PostAuthorizationResult = null;

    /**
     * @param CreditResponse4 $PostAuthorizationResult
     */
    public function __construct($PostAuthorizationResult = null)
    {
      $this->PostAuthorizationResult = $PostAuthorizationResult;
    }

    /**
     * @return CreditResponse4
     */
    public function getPostAuthorizationResult()
    {
      return $this->PostAuthorizationResult;
    }

    /**
     * @param CreditResponse4 $PostAuthorizationResult
     * @return \Arkitecht\Cayan\PostAuthorizationResponse
     */
    public function setPostAuthorizationResult($PostAuthorizationResult)
    {
      $this->PostAuthorizationResult = $PostAuthorizationResult;
      return $this;
    }

}

<?php

namespace Arkitecht\Cayan\Response;

class EmvAuthorizeResponse
{

    /**
     * @var EmvAuthorizeResponse4 $EmvAuthorizeResult
     */
    protected $EmvAuthorizeResult = null;

    /**
     * @param EmvAuthorizeResponse4 $EmvAuthorizeResult
     */
    public function __construct($EmvAuthorizeResult = null)
    {
      $this->EmvAuthorizeResult = $EmvAuthorizeResult;
    }

    /**
     * @return EmvAuthorizeResponse4
     */
    public function getEmvAuthorizeResult()
    {
      return $this->EmvAuthorizeResult;
    }

    /**
     * @param EmvAuthorizeResponse4 $EmvAuthorizeResult
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse
     */
    public function setEmvAuthorizeResult($EmvAuthorizeResult)
    {
      $this->EmvAuthorizeResult = $EmvAuthorizeResult;
      return $this;
    }

}

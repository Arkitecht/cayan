<?php

namespace Arkitecht\Cayan\Response;

class EmvCompleteResponse
{

    /**
     * @var EmvCompleteResponse4 $EmvCompleteResult
     */
    protected $EmvCompleteResult = null;

    /**
     * @param EmvCompleteResponse4 $EmvCompleteResult
     */
    public function __construct($EmvCompleteResult = null)
    {
      $this->EmvCompleteResult = $EmvCompleteResult;
    }

    /**
     * @return EmvCompleteResponse4
     */
    public function getEmvCompleteResult()
    {
      return $this->EmvCompleteResult;
    }

    /**
     * @param EmvCompleteResponse4 $EmvCompleteResult
     * @return \Arkitecht\Cayan\EmvCompleteResponse
     */
    public function setEmvCompleteResult($EmvCompleteResult)
    {
      $this->EmvCompleteResult = $EmvCompleteResult;
      return $this;
    }

}

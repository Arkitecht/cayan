<?php

namespace Arkitecht\Cayan\Response;

class SettleBatchResponse
{

    /**
     * @var BatchResponse4 $SettleBatchResult
     */
    protected $SettleBatchResult = null;

    /**
     * @param BatchResponse4 $SettleBatchResult
     */
    public function __construct($SettleBatchResult = null)
    {
      $this->SettleBatchResult = $SettleBatchResult;
    }

    /**
     * @return BatchResponse4
     */
    public function getSettleBatchResult()
    {
      return $this->SettleBatchResult;
    }

    /**
     * @param BatchResponse4 $SettleBatchResult
     * @return \Arkitecht\Cayan\SettleBatchResponse
     */
    public function setSettleBatchResult($SettleBatchResult)
    {
      $this->SettleBatchResult = $SettleBatchResult;
      return $this;
    }

}

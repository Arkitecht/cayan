<?php

namespace Arkitecht\Cayan;

class CreateTransactionResponse
{

    /**
     * @var TransportResponse $CreateTransactionResult
     */
    protected $CreateTransactionResult = null;

    /**
     * @param TransportResponse $CreateTransactionResult
     */
    public function __construct($CreateTransactionResult)
    {
      $this->CreateTransactionResult = $CreateTransactionResult;
    }

    /**
     * @return TransportResponse
     */
    public function getCreateTransactionResult()
    {
      return $this->CreateTransactionResult;
    }

    /**
     * @param TransportResponse $CreateTransactionResult
     * @return \Arkitecht\Cayan\CreateTransactionResponse
     */
    public function setCreateTransactionResult($CreateTransactionResult)
    {
      $this->CreateTransactionResult = $CreateTransactionResult;
      return $this;
    }

}

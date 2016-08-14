<?php

namespace Arkitecht\Cayan\Response;

class TransferBalanceResponse
{

    /**
     * @var GiftResponse4 $TransferBalanceResult
     */
    protected $TransferBalanceResult = null;

    /**
     * @param GiftResponse4 $TransferBalanceResult
     */
    public function __construct($TransferBalanceResult = null)
    {
      $this->TransferBalanceResult = $TransferBalanceResult;
    }

    /**
     * @return GiftResponse4
     */
    public function getTransferBalanceResult()
    {
      return $this->TransferBalanceResult;
    }

    /**
     * @param GiftResponse4 $TransferBalanceResult
     * @return \Arkitecht\Cayan\TransferBalanceResponse
     */
    public function setTransferBalanceResult($TransferBalanceResult)
    {
      $this->TransferBalanceResult = $TransferBalanceResult;
      return $this;
    }

}

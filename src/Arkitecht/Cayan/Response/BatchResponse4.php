<?php

namespace Arkitecht\Cayan\Response;

class BatchResponse4
{

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var string $BatchAmount
     */
    protected $BatchAmount = null;

    /**
     * @var string $BatchStatus
     */
    protected $BatchStatus = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $ExtraData
     */
    protected $ExtraData = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var int $TransactionCount
     */
    protected $TransactionCount = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @param int $TransactionCount
     */
    public function __construct($TransactionCount = null)
    {
      $this->TransactionCount = $TransactionCount;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
      return $this->AuthorizationCode;
    }

    /**
     * @param string $AuthorizationCode
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
      $this->AuthorizationCode = $AuthorizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatchAmount()
    {
      return $this->BatchAmount;
    }

    /**
     * @param string $BatchAmount
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setBatchAmount($BatchAmount)
    {
      $this->BatchAmount = $BatchAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatchStatus()
    {
      return $this->BatchStatus;
    }

    /**
     * @param string $BatchStatus
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setBatchStatus($BatchStatus)
    {
      $this->BatchStatus = $BatchStatus;
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
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraData()
    {
      return $this->ExtraData;
    }

    /**
     * @param string $ExtraData
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setExtraData($ExtraData)
    {
      $this->ExtraData = $ExtraData;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionCount()
    {
      return $this->TransactionCount;
    }

    /**
     * @param int $TransactionCount
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setTransactionCount($TransactionCount)
    {
      $this->TransactionCount = $TransactionCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
      return $this->TransactionDate;
    }

    /**
     * @param string $TransactionDate
     * @return \Arkitecht\Cayan\BatchResponse4
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

}

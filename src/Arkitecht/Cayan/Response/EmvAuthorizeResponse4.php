<?php

namespace Arkitecht\Cayan\Response;

class EmvAuthorizeResponse4
{

    /**
     * @var string $ApprovalStatus
     */
    protected $ApprovalStatus = null;

    /**
     * @var string $AmountApproved
     */
    protected $AmountApproved = null;

    /**
     * @var string $AuthorizationCode
     */
    protected $AuthorizationCode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var string $TlvData
     */
    protected $TlvData = null;

    /**
     * @var string $CashbackAmount
     */
    protected $CashbackAmount = null;

    /**
     * @var string $DonationAmount
     */
    protected $DonationAmount = null;

    /**
     * @var string $UserTipAmount
     */
    protected $UserTipAmount = null;

    /**
     * @var string $SurchargeAmount
     */
    protected $SurchargeAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->ApprovalStatus;
    }

    /**
     * @param string $ApprovalStatus
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setApprovalStatus($ApprovalStatus)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmountApproved()
    {
      return $this->AmountApproved;
    }

    /**
     * @param string $AmountApproved
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setAmountApproved($AmountApproved)
    {
      $this->AmountApproved = $AmountApproved;
      return $this;
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
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setAuthorizationCode($AuthorizationCode)
    {
      $this->AuthorizationCode = $AuthorizationCode;
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
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
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
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
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
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTlvData()
    {
      return $this->TlvData;
    }

    /**
     * @param string $TlvData
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setTlvData($TlvData)
    {
      $this->TlvData = $TlvData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashbackAmount()
    {
      return $this->CashbackAmount;
    }

    /**
     * @param string $CashbackAmount
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setCashbackAmount($CashbackAmount)
    {
      $this->CashbackAmount = $CashbackAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDonationAmount()
    {
      return $this->DonationAmount;
    }

    /**
     * @param string $DonationAmount
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setDonationAmount($DonationAmount)
    {
      $this->DonationAmount = $DonationAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserTipAmount()
    {
      return $this->UserTipAmount;
    }

    /**
     * @param string $UserTipAmount
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setUserTipAmount($UserTipAmount)
    {
      $this->UserTipAmount = $UserTipAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeAmount()
    {
      return $this->SurchargeAmount;
    }

    /**
     * @param string $SurchargeAmount
     * @return \Arkitecht\Cayan\EmvAuthorizeResponse4
     */
    public function setSurchargeAmount($SurchargeAmount)
    {
      $this->SurchargeAmount = $SurchargeAmount;
      return $this;
    }

}

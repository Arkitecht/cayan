<?php

namespace Arkitecht\Cayan\Response;

class GiftLoyaltyResponse4
{

    /**
     * @var string $ApprovalStatus
     */
    protected $ApprovalStatus = null;

    /**
     * @var string $CardBalance
     */
    protected $CardBalance = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var int $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $ExtraData
     */
    protected $ExtraData = null;

    /**
     * @var string $LifePointsBalance
     */
    protected $LifePointsBalance = null;

    /**
     * @var string $MerchantTransactionId
     */
    protected $MerchantTransactionId = null;

    /**
     * @var string $MiscMessage
     */
    protected $MiscMessage = null;

    /**
     * @var string $PointsBalance
     */
    protected $PointsBalance = null;

    /**
     * @var string $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var int $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @param int $EntryMode
     * @param int $TransactionType
     */
    public function __construct($EntryMode = null, $TransactionType = null)
    {
      $this->EntryMode = $EntryMode;
      $this->TransactionType = $TransactionType;
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
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setApprovalStatus($ApprovalStatus)
    {
      $this->ApprovalStatus = $ApprovalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardBalance()
    {
      return $this->CardBalance;
    }

    /**
     * @param string $CardBalance
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setCardBalance($CardBalance)
    {
      $this->CardBalance = $CardBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntryMode()
    {
      return $this->EntryMode;
    }

    /**
     * @param int $EntryMode
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setEntryMode($EntryMode)
    {
      $this->EntryMode = $EntryMode;
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
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
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
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setExtraData($ExtraData)
    {
      $this->ExtraData = $ExtraData;
      return $this;
    }

    /**
     * @return string
     */
    public function getLifePointsBalance()
    {
      return $this->LifePointsBalance;
    }

    /**
     * @param string $LifePointsBalance
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setLifePointsBalance($LifePointsBalance)
    {
      $this->LifePointsBalance = $LifePointsBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionId()
    {
      return $this->MerchantTransactionId;
    }

    /**
     * @param string $MerchantTransactionId
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setMerchantTransactionId($MerchantTransactionId)
    {
      $this->MerchantTransactionId = $MerchantTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscMessage()
    {
      return $this->MiscMessage;
    }

    /**
     * @param string $MiscMessage
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setMiscMessage($MiscMessage)
    {
      $this->MiscMessage = $MiscMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointsBalance()
    {
      return $this->PointsBalance;
    }

    /**
     * @param string $PointsBalance
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setPointsBalance($PointsBalance)
    {
      $this->PointsBalance = $PointsBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
      return $this->ResponseMessage;
    }

    /**
     * @param string $ResponseMessage
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setResponseMessage($ResponseMessage)
    {
      $this->ResponseMessage = $ResponseMessage;
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
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
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
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param int $TransactionType
     * @return \Arkitecht\Cayan\GiftLoyaltyResponse4
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

}

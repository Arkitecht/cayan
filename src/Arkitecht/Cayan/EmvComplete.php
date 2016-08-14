<?php

namespace Arkitecht\Cayan;

class EmvComplete
{

    /**
     * @var string $merchantName
     */
    protected $merchantName = null;

    /**
     * @var string $merchantSiteId
     */
    protected $merchantSiteId = null;

    /**
     * @var string $merchantKey
     */
    protected $merchantKey = null;

    /**
     * @var string $invoiceNumber
     */
    protected $invoiceNumber = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var string $customerCode
     */
    protected $customerCode = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $registerNumber
     */
    protected $registerNumber = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $merchantTransactionId
     */
    protected $merchantTransactionId = null;

    /**
     * @var string $entryMode
     */
    protected $entryMode = null;

    /**
     * @var string $messageCorrelationID
     */
    protected $messageCorrelationID = null;

    /**
     * @var string $cardAcceptorTerminalID
     */
    protected $cardAcceptorTerminalID = null;

    /**
     * @var string $pinBlock
     */
    protected $pinBlock = null;

    /**
     * @var string $pinKsn
     */
    protected $pinKsn = null;

    /**
     * @var string $cashbackAmount
     */
    protected $cashbackAmount = null;

    /**
     * @var string $donationAmount
     */
    protected $donationAmount = null;

    /**
     * @var string $userTipAmount
     */
    protected $userTipAmount = null;

    /**
     * @var string $surchargeAmount
     */
    protected $surchargeAmount = null;

    /**
     * @var string $kernelSoftwareVersion
     */
    protected $kernelSoftwareVersion = null;

    /**
     * @var string $tlvData
     */
    protected $tlvData = null;

    /**
     * @var string $transactionType
     */
    protected $transactionType = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $invoiceNumber
     * @param string $amount
     * @param string $customerCode
     * @param string $poNumber
     * @param string $taxAmount
     * @param string $registerNumber
     * @param string $token
     * @param string $merchantTransactionId
     * @param string $entryMode
     * @param string $messageCorrelationID
     * @param string $cardAcceptorTerminalID
     * @param string $pinBlock
     * @param string $pinKsn
     * @param string $cashbackAmount
     * @param string $donationAmount
     * @param string $userTipAmount
     * @param string $surchargeAmount
     * @param string $kernelSoftwareVersion
     * @param string $tlvData
     * @param string $transactionType
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $amount = null, $customerCode = null, $poNumber = null, $taxAmount = null, $registerNumber = null, $token = null, $merchantTransactionId = null, $entryMode = null, $messageCorrelationID = null, $cardAcceptorTerminalID = null, $pinBlock = null, $pinKsn = null, $cashbackAmount = null, $donationAmount = null, $userTipAmount = null, $surchargeAmount = null, $kernelSoftwareVersion = null, $tlvData = null, $transactionType = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->amount = $amount;
      $this->customerCode = $customerCode;
      $this->poNumber = $poNumber;
      $this->taxAmount = $taxAmount;
      $this->registerNumber = $registerNumber;
      $this->token = $token;
      $this->merchantTransactionId = $merchantTransactionId;
      $this->entryMode = $entryMode;
      $this->messageCorrelationID = $messageCorrelationID;
      $this->cardAcceptorTerminalID = $cardAcceptorTerminalID;
      $this->pinBlock = $pinBlock;
      $this->pinKsn = $pinKsn;
      $this->cashbackAmount = $cashbackAmount;
      $this->donationAmount = $donationAmount;
      $this->userTipAmount = $userTipAmount;
      $this->surchargeAmount = $surchargeAmount;
      $this->kernelSoftwareVersion = $kernelSoftwareVersion;
      $this->tlvData = $tlvData;
      $this->transactionType = $transactionType;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
      return $this->merchantName;
    }

    /**
     * @param string $merchantName
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setMerchantName($merchantName)
    {
      $this->merchantName = $merchantName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantSiteId()
    {
      return $this->merchantSiteId;
    }

    /**
     * @param string $merchantSiteId
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setMerchantSiteId($merchantSiteId)
    {
      $this->merchantSiteId = $merchantSiteId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantKey()
    {
      return $this->merchantKey;
    }

    /**
     * @param string $merchantKey
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setMerchantKey($merchantKey)
    {
      $this->merchantKey = $merchantKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->customerCode;
    }

    /**
     * @param string $customerCode
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setCustomerCode($customerCode)
    {
      $this->customerCode = $customerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegisterNumber()
    {
      return $this->registerNumber;
    }

    /**
     * @param string $registerNumber
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setRegisterNumber($registerNumber)
    {
      $this->registerNumber = $registerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionId()
    {
      return $this->merchantTransactionId;
    }

    /**
     * @param string $merchantTransactionId
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
      $this->merchantTransactionId = $merchantTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryMode()
    {
      return $this->entryMode;
    }

    /**
     * @param string $entryMode
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setEntryMode($entryMode)
    {
      $this->entryMode = $entryMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageCorrelationID()
    {
      return $this->messageCorrelationID;
    }

    /**
     * @param string $messageCorrelationID
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setMessageCorrelationID($messageCorrelationID)
    {
      $this->messageCorrelationID = $messageCorrelationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardAcceptorTerminalID()
    {
      return $this->cardAcceptorTerminalID;
    }

    /**
     * @param string $cardAcceptorTerminalID
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setCardAcceptorTerminalID($cardAcceptorTerminalID)
    {
      $this->cardAcceptorTerminalID = $cardAcceptorTerminalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinBlock()
    {
      return $this->pinBlock;
    }

    /**
     * @param string $pinBlock
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setPinBlock($pinBlock)
    {
      $this->pinBlock = $pinBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinKsn()
    {
      return $this->pinKsn;
    }

    /**
     * @param string $pinKsn
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setPinKsn($pinKsn)
    {
      $this->pinKsn = $pinKsn;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashbackAmount()
    {
      return $this->cashbackAmount;
    }

    /**
     * @param string $cashbackAmount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setCashbackAmount($cashbackAmount)
    {
      $this->cashbackAmount = $cashbackAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDonationAmount()
    {
      return $this->donationAmount;
    }

    /**
     * @param string $donationAmount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setDonationAmount($donationAmount)
    {
      $this->donationAmount = $donationAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserTipAmount()
    {
      return $this->userTipAmount;
    }

    /**
     * @param string $userTipAmount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setUserTipAmount($userTipAmount)
    {
      $this->userTipAmount = $userTipAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeAmount()
    {
      return $this->surchargeAmount;
    }

    /**
     * @param string $surchargeAmount
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setSurchargeAmount($surchargeAmount)
    {
      $this->surchargeAmount = $surchargeAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getKernelSoftwareVersion()
    {
      return $this->kernelSoftwareVersion;
    }

    /**
     * @param string $kernelSoftwareVersion
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setKernelSoftwareVersion($kernelSoftwareVersion)
    {
      $this->kernelSoftwareVersion = $kernelSoftwareVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getTlvData()
    {
      return $this->tlvData;
    }

    /**
     * @param string $tlvData
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setTlvData($tlvData)
    {
      $this->tlvData = $tlvData;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
      return $this->transactionType;
    }

    /**
     * @param string $transactionType
     * @return \Arkitecht\Cayan\EmvComplete
     */
    public function setTransactionType($transactionType)
    {
      $this->transactionType = $transactionType;
      return $this;
    }

}

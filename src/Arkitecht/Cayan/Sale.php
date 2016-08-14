<?php

namespace Arkitecht\Cayan;

class Sale
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
     * @var string $trackData
     */
    protected $trackData = null;

    /**
     * @var string $forceDuplicate
     */
    protected $forceDuplicate = null;

    /**
     * @var string $registerNumber
     */
    protected $registerNumber = null;

    /**
     * @var string $merchantTransactionId
     */
    protected $merchantTransactionId = null;

    /**
     * @var string $entryMode
     */
    protected $entryMode = null;

    /**
     * @param string $merchantName
     * @param string $merchantSiteId
     * @param string $merchantKey
     * @param string $invoiceNumber
     * @param string $amount
     * @param string $trackData
     * @param string $forceDuplicate
     * @param string $registerNumber
     * @param string $merchantTransactionId
     * @param string $entryMode
     */
    public function __construct($merchantName = null, $merchantSiteId = null, $merchantKey = null, $invoiceNumber = null, $amount = null, $trackData = null, $forceDuplicate = null, $registerNumber = null, $merchantTransactionId = null, $entryMode = null)
    {
      $this->merchantName = $merchantName;
      $this->merchantSiteId = $merchantSiteId;
      $this->merchantKey = $merchantKey;
      $this->invoiceNumber = $invoiceNumber;
      $this->amount = $amount;
      $this->trackData = $trackData;
      $this->forceDuplicate = $forceDuplicate;
      $this->registerNumber = $registerNumber;
      $this->merchantTransactionId = $merchantTransactionId;
      $this->entryMode = $entryMode;
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
     * @return \Arkitecht\Cayan\Sale
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
     * @return \Arkitecht\Cayan\Sale
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
     * @return \Arkitecht\Cayan\Sale
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
     * @return \Arkitecht\Cayan\Sale
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
     * @return \Arkitecht\Cayan\Sale
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackData()
    {
      return $this->trackData;
    }

    /**
     * @param string $trackData
     * @return \Arkitecht\Cayan\Sale
     */
    public function setTrackData($trackData)
    {
      $this->trackData = $trackData;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceDuplicate()
    {
      return $this->forceDuplicate;
    }

    /**
     * @param string $forceDuplicate
     * @return \Arkitecht\Cayan\Sale
     */
    public function setForceDuplicate($forceDuplicate)
    {
      $this->forceDuplicate = $forceDuplicate;
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
     * @return \Arkitecht\Cayan\Sale
     */
    public function setRegisterNumber($registerNumber)
    {
      $this->registerNumber = $registerNumber;
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
     * @return \Arkitecht\Cayan\Sale
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
     * @return \Arkitecht\Cayan\Sale
     */
    public function setEntryMode($entryMode)
    {
      $this->entryMode = $entryMode;
      return $this;
    }

}
